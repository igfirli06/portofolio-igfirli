<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

require_once __DIR__ . '/data.php';
$data = getPortfolioData();
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= htmlspecialchars($data['name']); ?> — Neo-Brutalist Portfolio</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Space+Grotesk:wght@500;700;900&family=Plus+Jakarta+Sans:wght@600;800&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Space Grotesk', sans-serif;
            background-color: #FAF8F5;
            /* Tambahan: Background pattern titik-titik khas Neo-Brutalism */
            background-image: radial-gradient(#000000 1.5px, transparent 1.5px);
            background-size: 25px 25px;
        }
        
        .neo-card {
            border: 4px solid #000000;
            box-shadow: 8px 8px 0px 0px #000000;
            transition: transform 0.2s ease, box-shadow 0.2s ease;
        }
        /* Efek hover pada kartu utama agar lebih dinamis */
        .neo-card-hover:hover {
            transform: translate(-4px, -4px);
            box-shadow: 12px 12px 0px 0px #000000;
        }

        .neo-card-sm {
            border: 3px solid #000000;
            box-shadow: 5px 5px 0px 0px #000000;
            transition: all 0.2s ease;
        }
        .neo-card-sm:hover {
            transform: translate(-2px, -2px) rotate(1deg);
            box-shadow: 7px 7px 0px 0px #000000;
        }

        .neo-btn {
            border: 3px solid #000000;
            box-shadow: 5px 5px 0px 0px #000000;
            transition: all 0.15s ease-in-out;
            cursor: pointer;
        }
        .neo-btn:hover {
            transform: translate(-3px, -3px);
            box-shadow: 8px 8px 0px 0px #000000;
        }
        .neo-btn:active {
            transform: translate(4px, 4px);
            box-shadow: 0px 0px 0px 0px #000000; /* Terlihat seperti tombol ditekan rata */
        }

        .neo-badge {
            border: 2px solid #000000;
            box-shadow: 3px 3px 0px 0px #000000;
        }

        /* Animasi Bintang Berputar */
        @keyframes spin {
            100% { transform: rotate(360deg); }
        }
        .spin-slow {
            animation: spin 8s linear infinite;
        }
    </style>
</head>
<body class="p-4 sm:p-6 md:p-12 text-black selection:bg-[#FF70A6] selection:text-black">

    <main class="max-w-4xl mx-auto space-y-10">

        <!-- Top Header Tags -->
        <div class="flex justify-between items-center bg-white p-2 border-4 border-black box-shadow neo-badge transform rotate-1 mb-8">
            <span class="bg-[#FF70A6] text-black font-black px-4 py-1 text-xs sm:text-sm uppercase border-2 border-black -rotate-2 inline-block">
                ⚡ Igfirli's Dev Lab
            </span>
            <span class="bg-[#70D6FF] text-black font-extrabold px-3 py-1 text-xs uppercase border-2 border-black rotate-1 inline-block">
                Portfolio 2026
            </span>
        </div>

        <!-- HERO SECTION -->
        <section class="neo-card neo-card-hover bg-[#FFD670] p-6 sm:p-10 relative overflow-hidden transform -rotate-1">
            <!-- Dekorasi Bintang Brutalist -->
            <div class="absolute top-4 right-4 text-4xl sm:text-6xl opacity-80 spin-slow">
                <i class="fa-solid fa-asterisk"></i>
            </div>

            <div class="space-y-5 relative z-10">
                <div class="inline-block neo-badge bg-black text-white text-xs font-black px-3 py-1.5 uppercase tracking-wider transform rotate-1">
                    👋 Software Engineer & AI Dev
                </div>
                
                <h1 class="text-5xl sm:text-7xl font-black uppercase tracking-tighter leading-none" style="-webkit-text-stroke: 1px black;">
                    <?= htmlspecialchars($data['name']); ?>
                </h1>

                <div class="inline-block neo-badge bg-[#FF9770] font-black text-sm sm:text-base px-4 py-2 uppercase -rotate-1">
                    <?= htmlspecialchars($data['role']); ?>
                </div>

                <p class="font-bold text-base sm:text-xl leading-relaxed pt-4 border-t-4 border-black border-dashed font-['Plus_Jakarta_Sans'] bg-white p-4 mt-4 border-2 neo-badge">
                    <?= htmlspecialchars($data['about']); ?>
                </p>

                <div class="pt-6 flex flex-wrap gap-4">
                    <a href="<?= htmlspecialchars($data['cv_link']); ?>" target="_blank" class="neo-btn bg-[#E9FF70] font-black px-8 py-3 text-base uppercase flex items-center gap-2">
                        <i class="fa-solid fa-file-pdf text-xl"></i> Unduh CV
                    </a>
                    <a href="https://github.com/igfirli06" target="_blank" class="neo-btn bg-white font-black px-8 py-3 text-base uppercase flex items-center gap-2">
                        <i class="fa-brands fa-github text-xl"></i> GitHub Profile
                    </a>
                </div>
            </div>
        </section>

        <!-- SKILLS SECTION -->
        <section class="neo-card bg-white p-6 sm:p-8 space-y-8 transform rotate-1">
            <div class="flex items-center justify-between border-b-4 border-black pb-4">
                <div class="flex items-center gap-3">
                    <span class="neo-badge bg-[#FF70A6] p-2 text-2xl font-black transform -rotate-6">🛠️</span>
                    <h2 class="text-3xl sm:text-4xl font-black uppercase tracking-tight">Technical Skills</h2>
                </div>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                <?php 
                $colors = ['bg-[#70D6FF]', 'bg-[#E9FF70]', 'bg-[#FF9770]'];
                $i = 0;
                foreach ($data['skills'] as $category => $items): 
                    $cardColor = $colors[$i % count($colors)];
                    $i++;
                ?>
                    <div class="neo-card-sm <?= $cardColor; ?> p-5 space-y-4 relative overflow-hidden hover:-translate-y-2 transition-transform">
                        <h3 class="font-black text-lg uppercase border-b-4 border-black pb-2 bg-white px-2 neo-badge inline-block mb-2">
                            <?= htmlspecialchars($category); ?>
                        </h3>
                        <ul class="space-y-3 font-['Plus_Jakarta_Sans'] text-sm font-extrabold">
                            <?php foreach ($items as $skill): ?>
                                <li class="flex items-center gap-3 bg-white/50 p-1.5 border-2 border-black rounded-sm">
                                    <span class="w-3 h-3 bg-black inline-block border-2 border-white rounded-full"></span>
                                    <?= htmlspecialchars($skill); ?>
                                </li>
                            <?php endforeach; ?>
                        </ul>
                    </div>
                <?php endforeach; ?>
            </div>
        </section>

        <!-- PROJECTS SECTION -->
        <section class="neo-card bg-[#E9FF70] p-6 sm:p-8 space-y-8 transform -rotate-1">
            <div class="flex items-center gap-3 border-b-4 border-black pb-4">
                <span class="neo-badge bg-black text-white p-2 text-2xl font-black transform rotate-6">🚀</span>
                <h2 class="text-3xl sm:text-4xl font-black uppercase tracking-tight">Featured Projects</h2>
            </div>

            <div class="space-y-8">
                <?php foreach ($data['projects'] as $project): ?>
                    <div class="neo-card neo-card-hover bg-white p-6 space-y-5 transition-all">
                        <div class="flex flex-col sm:flex-row sm:items-center justify-between gap-4 border-b-4 border-black pb-4">
                            <h3 class="text-2xl font-black uppercase tracking-tight bg-[#FF70A6] px-2 py-1 neo-badge inline-block">
                                <?= htmlspecialchars($project['title']); ?>
                            </h3>
                            <?php if (!empty($project['github'])): ?>
                                <a href="<?= htmlspecialchars($project['github']); ?>" target="_blank" class="neo-btn bg-[#70D6FF] text-sm font-black px-4 py-2 uppercase inline-flex items-center gap-2 self-start sm:self-auto">
                                    <i class="fa-brands fa-github text-lg"></i> Repository
                                </a>
                            <?php endif; ?>
                        </div>

                        <p class="font-bold text-base leading-relaxed font-['Plus_Jakarta_Sans'] border-l-4 border-black pl-4">
                            <?= htmlspecialchars($project['desc']); ?>
                        </p>

                        <div class="flex flex-wrap gap-2 pt-2">
                            <?php foreach (explode(',', $project['tech']) as $tech): ?>
                                <span class="neo-badge bg-[#FFD670] text-xs font-black px-3 py-1.5 uppercase hover:bg-black hover:text-white transition-colors cursor-default">
                                    <?= htmlspecialchars(trim($tech)); ?>
                                </span>
                            <?php endforeach; ?>
                        </div>

                        <?php if (isset($project['pipeline'])): ?>
                            <div class="pt-6 border-t-4 border-black border-dashed mt-4">
                                <span class="neo-badge bg-black text-white text-[11px] font-black px-3 py-1 uppercase tracking-widest mb-4 inline-block transform -rotate-1">
                                    ⚙️ Pipeline Execution
                                </span>
                                <div class="grid grid-cols-2 sm:grid-cols-3 md:grid-cols-5 gap-3">
                                    <?php foreach ($project['pipeline'] as $pipe): ?>
                                        <div class="neo-card-sm bg-[#FAF8F5] p-3 text-center space-y-2 hover:bg-[#70D6FF] transition-colors">
                                            <span class="bg-[#FF70A6] text-black font-black text-xs px-2 py-1 border-2 border-black inline-block mb-1 shadow-[2px_2px_0px_0px_rgba(0,0,0,1)]">
                                                <?= $pipe['step']; ?>
                                            </span>
                                            <p class="font-black text-sm uppercase leading-tight"><?= htmlspecialchars($pipe['label']); ?></p>
                                            <p class="text-xs font-bold text-gray-800 font-['Plus_Jakarta_Sans'] border-t-2 border-black pt-1"><?= htmlspecialchars($pipe['sub']); ?></p>
                                        </div>
                                    <?php endforeach; ?>
                                </div>
                            </div>
                        <?php endif; ?>
                    </div>
                <?php endforeach; ?>
            </div>
        </section>

        <!-- FOOTER -->
        <footer class="text-center pt-8 pb-4">
            <span class="neo-badge bg-black text-[#E9FF70] text-sm font-black px-6 py-3 uppercase inline-block transform hover:scale-105 transition-transform cursor-pointer">
                © Igfirlii Nuur Aziiza • Neo-Brutalist Edition
            </span>
        </footer>

    </main>

</body>
</html>
