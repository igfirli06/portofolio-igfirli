<?php
require_once __DIR__ . '/../data.php';
$data = getPortfolioData();
$projects = $data['projects'];

$id = isset($_GET['id']) ? (int) $_GET['id'] : -1;

if ($id < 0 || $id >= count($projects)) {
    http_response_code(404);
    echo '<h1 style="font-family: sans-serif; text-align:center; margin-top:4rem;">404 - Project tidak ditemukan</h1>';
    exit;
}

$project = $projects[$id];
$project['index'] = $id + 1;
$techList = array_map('trim', explode(',', $project['tech']));
?>
<!DOCTYPE html>
<html lang="id" class="scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= htmlspecialchars($project['title']) ?> | Architecture — <?= htmlspecialchars($data['name']) ?></title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Space+Grotesk:wght@500;700&family=Syne:wght@700;800&display=swap" rel="stylesheet">

    <style>
        body {
            font-family: 'Space Grotesk', sans-serif;
            background-color: #fff3b0;
        }
        h1, h2, h3 { font-family: 'Syne', sans-serif; }
        .brutal-shadow { box-shadow: 8px 8px 0px 0px #000000; }
        .brutal-shadow-sm { box-shadow: 4px 4px 0px 0px #000000; }
        .brutal-shadow-lg { box-shadow: 12px 12px 0px 0px #000000; }
        .arrow-brutal { font-family: 'Syne', sans-serif; font-weight: 800; }
    </style>
</head>
<body class="text-[#540b0e] antialiased selection:bg-[#9e2a2b] selection:text-white p-4 md:p-8">

    <!-- NAV -->
    <div class="max-w-5xl mx-auto flex flex-wrap items-center justify-between gap-3 mb-10">
        <a href="index.php" class="inline-block bg-white text-black text-sm font-bold uppercase px-4 py-2 border-4 border-black brutal-shadow-sm hover:translate-x-1 hover:translate-y-1 hover:shadow-none transition-all">
            ← Kembali ke Portofolio
        </a>
        <span class="inline-block bg-[#e09f3e] text-black text-sm font-bold uppercase px-4 py-2 border-4 border-black brutal-shadow-sm rotate-1">
            Project_<?= $project['index'] ?> // Architecture
        </span>
    </div>

    <!-- HERO -->
    <header class="max-w-5xl mx-auto mb-16">
        <span class="inline-block bg-[#9e2a2b] text-[#fff3b0] text-sm font-bold uppercase tracking-wider px-4 py-2 border-2 border-black brutal-shadow-sm -rotate-2 mb-6">
            Tech Stack &amp; System Design
        </span>

        <h1 class="text-4xl md:text-6xl font-black text-[#fff3b0] uppercase tracking-tighter leading-none mb-6 border-4 border-black bg-[#335c67] p-6 brutal-shadow rotate-1">
            <?= htmlspecialchars($project['title']) ?>
        </h1>

        <div class="bg-white border-4 border-black p-6 brutal-shadow -rotate-1 max-w-2xl">
            <p class="text-lg font-medium"><?= htmlspecialchars($project['desc']) ?></p>
        </div>
    </header>

    <main class="max-w-5xl mx-auto space-y-20 pb-20">

        <!-- TECH STACK -->
        <section class="space-y-8">
            <div class="inline-block bg-[#540b0e] border-4 border-black p-4 brutal-shadow -rotate-1">
                <h2 class="text-3xl font-black text-[#fff3b0] uppercase tracking-tight">Tech Stack</h2>
            </div>

            <div class="grid grid-cols-2 md:grid-cols-4 gap-4">
                <?php foreach ($techList as $i => $tech): ?>
                <div class="border-4 border-black brutal-shadow-sm p-4 text-center font-black uppercase text-sm
                    <?php
                        if ($i % 3 == 0) echo 'bg-[#335c67] text-white';
                        elseif ($i % 3 == 1) echo 'bg-white text-black';
                        else echo 'bg-[#9e2a2b] text-[#fff3b0]';
                    ?>">
                    <?= htmlspecialchars($tech) ?>
                </div>
                <?php endforeach; ?>
            </div>
        </section>

        <?php if (!empty($project['pipeline'])): ?>
        <!-- PIPELINE -->
        <section class="space-y-8">
            <div class="inline-block bg-[#e09f3e] border-4 border-black p-4 brutal-shadow rotate-1">
                <h2 class="text-3xl font-black text-black uppercase tracking-tight">System Pipeline</h2>
            </div>

            <div class="bg-white border-4 border-black brutal-shadow p-6 md:p-10">
                <div class="flex flex-wrap items-center gap-4">
                    <?php $lastIndex = count($project['pipeline']) - 1; ?>
                    <?php foreach ($project['pipeline'] as $i => $step): ?>
                    <div class="border-4 border-black brutal-shadow-sm p-4 min-w-[160px]
                        <?= $i % 2 == 0 ? 'bg-[#fff3b0] text-black' : 'bg-[#335c67] text-white' ?>">
                        <span class="block text-xs font-bold uppercase opacity-70 mb-1">Step <?= htmlspecialchars($step['step']) ?></span>
                        <span class="block text-base font-black uppercase leading-tight"><?= htmlspecialchars($step['label']) ?></span>
                        <?php if (!empty($step['sub'])): ?>
                        <span class="block text-xs font-bold mt-2 opacity-80"><?= htmlspecialchars($step['sub']) ?></span>
                        <?php endif; ?>
                    </div>
                    <?php if ($i !== $lastIndex): ?>
                    <span class="arrow-brutal text-3xl">→</span>
                    <?php endif; ?>
                    <?php endforeach; ?>

                    <?php if (!empty($project['decision'])): ?>
                    <span class="arrow-brutal text-3xl">→</span>
                    <div class="border-4 border-black brutal-shadow-sm p-5 min-w-[180px] bg-[#9e2a2b] text-[#fff3b0] text-center">
                        <span class="block text-base font-black uppercase"><?= htmlspecialchars($project['decision']['label']) ?></span>
                        <?php if (!empty($project['decision']['formula'])): ?>
                        <span class="block text-[11px] font-bold mt-2 break-words"><?= htmlspecialchars($project['decision']['formula']) ?></span>
                        <?php endif; ?>
                    </div>
                    <?php endif; ?>
                </div>

                <?php if (!empty($project['branches'])): ?>
                <div class="flex flex-wrap gap-4 mt-8">
                    <?php foreach ($project['branches'] as $b): ?>
                    <div class="border-4 border-black brutal-shadow-sm px-5 py-3 font-black uppercase text-sm
                        <?= $b['type'] === 'yes' ? 'bg-[#335c67] text-white' : 'bg-[#540b0e] text-[#fff3b0]' ?>">
                        <?= htmlspecialchars($b['cond']) ?> → <?= htmlspecialchars($b['result']) ?>
                    </div>
                    <?php endforeach; ?>
                </div>
                <?php endif; ?>
            </div>
        </section>
        <?php endif; ?>

        <!-- CTA -->
        <section class="bg-[#335c67] border-4 border-black brutal-shadow p-8 md:p-10 flex flex-wrap items-center justify-between gap-6">
            <div>
                <h3 class="text-2xl font-black text-[#fff3b0] uppercase mb-1">Cek langsung sistemnya</h3>
                <p class="text-[#e09f3e] font-bold text-sm uppercase">Live demo &amp; source code tersedia di bawah</p>
            </div>
            <div class="flex flex-wrap gap-4">
                <?php if (!empty($project['github']) && $project['github'] !== '#'): ?>
                <a href="<?= htmlspecialchars($project['github']) ?>" target="_blank" class="inline-block bg-white text-black text-base font-bold uppercase px-6 py-3 border-4 border-black brutal-shadow-sm hover:translate-x-1 hover:translate-y-1 hover:shadow-none transition-all">
                    GitHub ↗
                </a>
                <?php endif; ?>
                <?php if (!empty($project['url']) && $project['url'] !== '#'): ?>
                <a href="<?= htmlspecialchars($project['url']) ?>" target="_blank" class="inline-block bg-[#e09f3e] text-black text-base font-bold uppercase px-6 py-3 border-4 border-black brutal-shadow-sm hover:translate-x-1 hover:translate-y-1 hover:shadow-none transition-all">
                    Buka Website ↗
                </a>
                <?php endif; ?>
            </div>
        </section>

    </main>

    <footer class="max-w-5xl mx-auto bg-[#540b0e] text-[#fff3b0] border-4 border-black brutal-shadow p-6 text-center uppercase font-bold tracking-wider text-sm">
        &copy; 2026 <?= htmlspecialchars($data['name']) ?>. All rights secured.
    </footer>

</body>
</html>