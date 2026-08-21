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
        }
        .neo-card {
            border: 3.5px solid #000000;
            box-shadow: 5px 5px 0px 0px #000000;
        }
        .neo-card-sm {
            border: 2.5px solid #000000;
            box-shadow: 3px 3px 0px 0px #000000;
        }
        .neo-btn {
            border: 3px solid #000000;
            box-shadow: 4px 4px 0px 0px #000000;
            transition: all 0.15s ease-in-out;
        }
        .neo-btn:hover {
            transform: translate(-2px, -2px);
            box-shadow: 6px 6px 0px 0px #000000;
        }
        .neo-btn:active {
            transform: translate(2px, 2px);
            box-shadow: 2px 2px 0px 0px #000000;
        }
        .neo-badge {
            border: 2px solid #000000;
            box-shadow: 2px 2px 0px 0px #000000;
        }
    </style>
</head>
<body class="p-4 sm:p-6 md:p-12 text-black selection:bg-black selection:text-yellow-300">

    <main class="max-w-4xl mx-auto space-y-8">

        <!-- Top Header Tags -->
        <div class="flex justify-between items-center">
            <span class="neo-badge bg-[#FF70A6] text-black font-black px-4 py-1 text-xs sm:text-sm uppercase rotate-[-1deg]">
                ⚡ Igfirli's Dev Lab
            </span>
            <span class="neo-badge bg-[#70D6FF] text-black font-extrabold px-3 py-1 text-xs uppercase">
                Portfolio 2026
            </span>
        </div>

        <!-- HERO SECTION -->
        <section class="neo-card bg-[#FFD670] p-6 sm:p-10 relative overflow-hidden">
            <div class="space-y-4">
                <div class="inline-block neo-badge bg-black text-white text-xs font-black px-3 py-1 uppercase tracking-wider">
                    👋 Software Engineer & AI Dev
                </div>
                
                <h1 class="text-4xl sm:text-6xl font-black uppercase tracking-tight leading-none">
                    <?= htmlspecialchars($data['name']); ?>
                </h1>

                <div class="inline-block neo-badge bg-[#FF9770] font-black text-sm sm:text-base px-3 py-1 uppercase">
                    <?= htmlspecialchars($data['role']); ?>
                </div>

                <p class="font-medium text-base sm:text-lg leading-relaxed pt-3 border-t-2 border-black border-dashed font-['Plus_Jakarta_Sans']">
                    <?= htmlspecialchars($data['about']); ?>
                </p>

                <div class="pt-4 flex flex-wrap gap-4">
                    <a href="<?= htmlspecialchars($data['cv_link']); ?>" target="_blank" class="neo-btn bg-[#E9FF70] font-black px-6 py-3 text-sm uppercase flex items-center gap-2">
                        <i class="fa-solid fa-file-pdf"></i> Unduh CV
                    </a>
                    <a href="https://github.com/igfirli06" target="_blank" class="neo-btn bg-white font-black px-6 py-3 text-sm uppercase flex items-center gap-2">
                        <i class="fa-brands fa-github text-base"></i> GitHub Profile
                    </a>
                </div>
            </div>
        </section>

        <!-- SKILLS SECTION -->
        <section class="neo-card bg-white p-6 sm:p-8 space-y-6">
            <div class="flex items-center gap-3 border-b-4 border-black pb-3">
                <span class="neo-badge bg-[#FF70A6] p-2 text-xl font-black">🛠️</span>
                <h2 class="text-2xl sm:text-3xl font-black uppercase">Technical Skills</h2>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                <?php 
                $colors = ['bg-[#70D6FF]', 'bg-[#E9FF70]', 'bg-[#FF9770]'];
                $i = 0;
                foreach ($data['skills'] as $category => $items): 
                    $cardColor = $colors[$i % count($colors)];
                    $i++;
                ?>
                    <div class="neo-card-sm <?= $cardColor; ?> p-5 space-y-3">
                        <h3 class="font-black text-base uppercase border-b-2 border-black pb-1">
                            <?= htmlspecialchars($category); ?>
                        </h3>
                        <ul class="space-y-2 font-['Plus_Jakarta_Sans'] text-sm font-bold">
                            <?php foreach ($items as $skill): ?>
                                <li class="flex items-center gap-2">
                                    <span class="w-2.5 h-2.5 bg-black inline-block border border-black"></span>
                                    <?= htmlspecialchars($skill); ?>
                                </li>
                            <?php endforeach; ?>
                        </ul>
                    </div>
                <?php endforeach; ?>
            </div>
        </section>

        <!-- PROJECTS SECTION -->
        <section class="neo-card bg-[#E9FF70] p-6 sm:p-8 space-y-6">
            <div class="flex items-center gap-3 border-b-4 border-black pb-3">
                <span class="neo-badge bg-black text-white p-2 text-xl font-black">🚀</span>
                <h2 class="text-2xl sm:text-3xl font-black uppercase">Featured Projects</h2>
            </div>

            <div class="space-y-6">
                <?php foreach ($data['projects'] as $project): ?>
                    <div class="neo-card bg-white p-6 space-y-4">
                        <div class="flex flex-col sm:flex-row sm:items-center justify-between gap-2 border-b-2 border-black pb-3">
                            <h3 class="text-xl font-black uppercase tracking-tight"><?= htmlspecialchars($project['title']); ?></h3>
                            <?php if (!empty($project['github'])): ?>
                                <a href="<?= htmlspecialchars($project['github']); ?>" target="_blank" class="neo-btn bg-[#70D6FF] text-xs font-black px-3 py-1.5 uppercase inline-flex items-center gap-1.5 self-start sm:self-auto">
                                    <i class="fa-brands fa-github"></i> Repository
                                </a>
                            <?php endif; ?>
                        </div>

                        <p class="font-medium text-sm leading-relaxed font-['Plus_Jakarta_Sans']">
                            <?= htmlspecialchars($project['desc']); ?>
                        </p>

                        <div class="flex flex-wrap gap-2 pt-1">
                            <?php foreach (explode(',', $project['tech']) as $tech): ?>
                                <span class="neo-badge bg-[#FFD670] text-xs font-extrabold px-2.5 py-1 uppercase">
                                    <?= htmlspecialchars(trim($tech)); ?>
                                </span>
                            <?php endforeach; ?>
                        </div>

                        <?php if (isset($project['pipeline'])): ?>
                            <div class="pt-4 border-t-2 border-black border-dashed">
                                <span class="neo-badge bg-black text-white text-[10px] font-black px-2 py-0.5 uppercase tracking-wider mb-3 inline-block">
                                    Pipeline Execution
                                </span>
                                <div class="grid grid-cols-2 sm:grid-cols-3 md:grid-cols-5 gap-2">
                                    <?php foreach ($project['pipeline'] as $pipe): ?>
                                        <div class="neo-card-sm bg-[#FAF8F5] p-2 text-center space-y-1">
                                            <span class="bg-[#FF70A6] text-black font-black text-[10px] px-1.5 py-0.5 border border-black inline-block">
                                                <?= $pipe['step']; ?>
                                            </span>
                                            <p class="font-extrabold text-xs uppercase leading-tight"><?= htmlspecialchars($pipe['label']); ?></p>
                                            <p class="text-[10px] font-semibold text-gray-700 font-['Plus_Jakarta_Sans']"><?= htmlspecialchars($pipe['sub']); ?></p>
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
        <footer class="text-center pt-2">
            <span class="neo-badge bg-black text-white text-xs font-black px-4 py-2 uppercase inline-block">
                © Igfirlii Nuur Aziiza • Neo-Brutalist Edition
            </span>
        </footer>

    </main>

</body>
</html>
