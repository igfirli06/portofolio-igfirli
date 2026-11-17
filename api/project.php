<?php
// Halaman detail project (gaya halaman berita): project.php?id=0, project.php?id=1, dst.
// id = urutan project di data.php (mulai dari 0)
ini_set('display_errors', 1);
error_reporting(E_ALL);

if (file_exists(__DIR__ . '/data.php')) {
    require_once __DIR__ . '/data.php';
} elseif (file_exists(__DIR__ . '/../data.php')) {
    require_once __DIR__ . '/../data.php';
}

$data     = function_exists('getPortfolioData') ? getPortfolioData() : [];
$projects = $data['projects'] ?? [];
$total    = count($projects);

// Alamat: /project/0 (diarahkan vercel.json ke api/project.php?id=0)
$rawId = $_GET['id'] ?? null;
if ($rawId === null && preg_match('~/project/(\d+)~', $_SERVER['REQUEST_URI'] ?? '', $mUri)) {
    $rawId = $mUri[1]; // cadangan jika query string tidak terbawa
}
$id      = filter_var($rawId, FILTER_VALIDATE_INT);
if ($id === false) { $id = null; }
$project = ($id !== null && $id !== false && isset($projects[$id])) ? $projects[$id] : null;

if ($project === null) {
    http_response_code(404);
}

$prevId = ($project !== null && $id > 0) ? $id - 1 : null;
$nextId = ($project !== null && $id < $total - 1) ? $id + 1 : null;

// ===== VIDEO (opsional) =====
// Di data.php isi key 'video' dengan:
//  - link YouTube  (watch?v=..., youtu.be/..., embed/..., shorts/...)
//  - atau file video, contoh: 'static/video-udang.mp4'
$videoSrc  = trim($project['video'] ?? '');
$videoType = null; // 'youtube' | 'file'
$youtubeId = null;

if ($videoSrc !== '') {
    if (preg_match('~(?:youtu\.be/|youtube\.com/(?:watch\?v=|embed/|shorts/))([A-Za-z0-9_-]{11})~', $videoSrc, $m)) {
        $videoType = 'youtube';
        $youtubeId = $m[1];
    } else {
        $videoType = 'file';
        // Halaman ini ada di /project/N, jadi path relatif harus diawali "/"
        if (!preg_match('~^(https?:)?//~', $videoSrc) && $videoSrc[0] !== '/') {
            $videoSrc = '/' . $videoSrc;
        }
    }
}

// Paragraf tambahan (opsional): 'article' => ['paragraf 1', 'paragraf 2']
$articleParagraphs = $project['article'] ?? [];
?>
<!DOCTYPE html>
<html lang="id" class="scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $project ? htmlspecialchars($project['title']) . ' | ' : 'Tidak ditemukan | ' ?><?= htmlspecialchars($data['name'] ?? 'Igfirlii') ?></title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Space+Grotesk:wght@500;700&family=Syne:wght@700;800&display=swap" rel="stylesheet">

    <style>
        body { font-family: 'Space Grotesk', sans-serif; background-color: #fff3b0; }
        h1, h2, h3 { font-family: 'Syne', sans-serif; }
        .brutal-shadow { box-shadow: 8px 8px 0px 0px #000000; }
        .brutal-shadow-sm { box-shadow: 4px 4px 0px 0px #000000; }
        .brutal-shadow-lg { box-shadow: 12px 12px 0px 0px #000000; }
        @media (max-width: 640px) {
            .brutal-shadow { box-shadow: 5px 5px 0px 0px #000000; }
            .brutal-shadow-sm { box-shadow: 3px 3px 0px 0px #000000; }
            .brutal-shadow-lg { box-shadow: 7px 7px 0px 0px #000000; }
        }
    </style>
</head>
<body class="text-[#540b0e] antialiased selection:bg-[#9e2a2b] selection:text-white p-4 md:p-8 overflow-x-hidden">

    <!-- NAV -->
    <nav class="sticky top-0 z-50 bg-[#1e2749] border-4 border-black brutal-shadow-sm mb-8 px-4 py-3 sm:px-6 sm:py-4">
        <div class="max-w-5xl mx-auto flex flex-wrap items-center justify-between gap-x-4 gap-y-2 text-white font-bold text-xs sm:text-sm tracking-wider uppercase">
            <a href="/#projects" class="hover:text-[#e09f3e] transition-colors">← Kembali ke Projects</a>
            <a href="/" class="hover:text-[#e09f3e] transition-colors">Home</a>
        </div>
    </nav>

    <main class="max-w-3xl mx-auto pb-16 md:pb-20">

    <?php if ($project === null): ?>
        <!-- 404 -->
        <section class="bg-white border-4 border-black p-6 md:p-10 brutal-shadow text-center space-y-4">
            <h1 class="text-3xl md:text-5xl font-black uppercase text-black">Project tidak ditemukan</h1>
            <p class="text-base md:text-lg text-gray-800 font-medium">Halaman project yang kamu cari tidak ada.</p>
            <a href="/#projects" class="inline-block bg-[#e09f3e] text-black font-bold uppercase px-6 py-3 border-4 border-black brutal-shadow-sm hover:translate-x-1 hover:translate-y-1 hover:shadow-none transition-all">
                ← Kembali ke Projects
            </a>
        </section>

    <?php else: ?>

        <article class="space-y-6 md:space-y-8">

            <!-- JUDUL (gaya berita) -->
            <header class="space-y-4">
                <span class="inline-block bg-[#9e2a2b] text-[#fff3b0] px-3 py-1 border-2 border-black font-bold uppercase text-xs brutal-shadow-sm">
                    Project #0<?= $id + 1 ?>
                </span>
                <h1 class="text-3xl sm:text-4xl md:text-5xl font-black uppercase text-black leading-tight break-words">
                    <?= htmlspecialchars($project['title'] ?? 'Unknown Project') ?>
                </h1>
                <p class="font-mono text-xs md:text-sm font-bold text-[#335c67] break-words">
                    ⚡ <?= htmlspecialchars($project['tech'] ?? '') ?>
                </p>
            </header>

            <!-- VIDEO PROSES PROJECT -->
            <figure class="space-y-2">
                <div class="bg-black border-4 border-black brutal-shadow aspect-video w-full overflow-hidden">
                    <?php if ($videoType === 'youtube'): ?>
                        <iframe class="w-full h-full"
                                src="https://www.youtube.com/embed/<?= htmlspecialchars($youtubeId) ?>"
                                title="Video proses <?= htmlspecialchars($project['title'] ?? '') ?>"
                                frameborder="0"
                                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                                allowfullscreen></iframe>
                    <?php elseif ($videoType === 'file'): ?>
                        <video class="w-full h-full" controls preload="metadata" playsinline>
                            <source src="<?= htmlspecialchars($videoSrc) ?>">
                            Browser kamu tidak mendukung pemutar video.
                        </video>
                    <?php else: ?>
                        <div class="w-full h-full flex items-center justify-center text-center p-6 bg-[#fff3b0]">
                            <p class="font-bold text-gray-700 text-sm md:text-lg">Video proses project ini akan segera ditambahkan.</p>
                        </div>
                    <?php endif; ?>
                </div>
                <figcaption class="text-xs md:text-sm font-bold text-gray-600">
                    Video proses pembuatan: <?= htmlspecialchars($project['title'] ?? '') ?>
                </figcaption>
            </figure>

            <!-- ISI (deskripsi) -->
            <div class="space-y-4 text-base md:text-lg leading-relaxed text-gray-800 font-medium">
                <p class="text-lg md:text-xl font-bold text-black">
                    <?= htmlspecialchars($project['desc'] ?? '') ?>
                </p>
                <?php foreach ($articleParagraphs as $para): ?>
                <p><?= htmlspecialchars($para) ?></p>
                <?php endforeach; ?>
            </div>

            <!-- TOMBOL -->
            <?php if (!empty($project['url']) || !empty($project['github'])): ?>
            <div class="flex flex-wrap gap-3 pt-2">
                <?php if (!empty($project['url'])): ?>
                <a href="<?= htmlspecialchars($project['url']) ?>" target="_blank" class="bg-[#e09f3e] text-black font-bold text-xs md:text-sm uppercase px-4 py-3 border-4 border-black brutal-shadow-sm hover:translate-x-1 hover:translate-y-1 hover:shadow-none transition-all">
                    🌐 Live App
                </a>
                <?php endif; ?>
                <?php if (!empty($project['github'])): ?>
                <a href="<?= htmlspecialchars($project['github']) ?>" target="_blank" class="bg-black text-white font-bold text-xs md:text-sm uppercase px-4 py-3 border-4 border-black brutal-shadow-sm hover:translate-x-1 hover:translate-y-1 hover:shadow-none transition-all">
                    💻 GitHub
                </a>
                <?php endif; ?>
            </div>
            <?php endif; ?>

        </article>

        <!-- PREV / NEXT -->
        <nav class="flex flex-col sm:flex-row justify-between gap-4 mt-12 pt-8 border-t-4 border-black">
            <?php if ($prevId !== null): ?>
            <a href="/project/<?= $prevId ?>" class="bg-white text-black font-bold uppercase text-xs md:text-sm px-4 py-3 border-4 border-black brutal-shadow-sm hover:translate-x-1 hover:translate-y-1 hover:shadow-none transition-all">
                ← <?= htmlspecialchars($projects[$prevId]['title'] ?? 'Sebelumnya') ?>
            </a>
            <?php else: ?><span></span><?php endif; ?>

            <?php if ($nextId !== null): ?>
            <a href="/project/<?= $nextId ?>" class="bg-[#e09f3e] text-black font-bold uppercase text-xs md:text-sm px-4 py-3 border-4 border-black brutal-shadow-sm hover:translate-x-1 hover:translate-y-1 hover:shadow-none transition-all sm:text-right">
                <?= htmlspecialchars($projects[$nextId]['title'] ?? 'Berikutnya') ?> →
            </a>
            <?php endif; ?>
        </nav>

    <?php endif; ?>
    </main>

    <footer class="text-center py-6 md:py-8 border-t-4 border-black text-black font-bold uppercase text-xs md:text-sm bg-[#fff3b0]">
        © <?= date('Y') ?> <?= htmlspecialchars($data['name'] ?? 'Igfirlii') ?> — All Rights Reserved.
    </footer>

</body>
</html>
