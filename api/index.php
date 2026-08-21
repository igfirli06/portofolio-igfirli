<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

require_once __DIR__ . '/data.php';
$data = getPortfolioData();
?>
<!DOCTYPE html>
<html lang="id" class="scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= htmlspecialchars($data['name']); ?> — Portfolio</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;500;600;700;800&display=swap" rel="stylesheet">
    <style>
        body { font-family: 'Plus Jakarta Sans', sans-serif; }
    </style>
</head>
<body class="bg-slate-950 text-slate-100 min-h-screen selection:bg-indigo-500 selection:text-white antialiased">

    <!-- Ambient Glow Effect -->
    <div class="fixed top-0 left-1/2 -translate-x-1/2 w-full max-w-7xl h-96 bg-indigo-600/10 blur-[120px] pointer-events-none rounded-full"></div>

    <main class="max-w-5xl mx-auto px-4 py-12 md:py-20 relative z-10 space-y-12">
        
        <!-- Hero Section -->
        <section class="bg-slate-900/80 border border-slate-800 rounded-2xl p-8 md:p-12 backdrop-blur-md shadow-2xl relative overflow-hidden">
            <div class="absolute top-0 right-0 w-64 h-64 bg-indigo-500/10 rounded-full blur-3xl pointer-events-none"></div>
            
            <div class="space-y-5 max-w-3xl">
                <div class="inline-flex items-center gap-2 px-3 py-1 rounded-full bg-indigo-500/10 border border-indigo-500/20 text-indigo-400 text-xs font-semibold uppercase tracking-wider">
                    <span class="w-2 h-2 rounded-full bg-indigo-400 animate-pulse"></span>
                    Portfolio Overview
                </div>
                
                <h1 class="text-4xl md:text-5xl font-extrabold tracking-tight text-white">
                    <?= htmlspecialchars($data['name']); ?>
                </h1>
                
                <p class="text-lg font-semibold text-indigo-400">
                    <?= htmlspecialchars($data['role']); ?>
                </p>
                
                <p class="text-slate-300 leading-relaxed text-sm md:text-base font-normal">
                    <?= htmlspecialchars($data['about']); ?>
                </p>
                
                <div class="pt-2 flex flex-wrap gap-4 items-center">
                    <a href="<?= htmlspecialchars($data['cv_link']); ?>" target="_blank" class="inline-flex items-center gap-2 bg-indigo-600 hover:bg-indigo-500 text-white font-semibold px-6 py-3 rounded-xl transition duration-200 shadow-lg shadow-indigo-600/25 text-sm">
                        <i class="fa-solid fa-file-arrow-down"></i> Unduh CV
                    </a>
                    <a href="https://github.com/igfirli06" target="_blank" class="inline-flex items-center gap-2 bg-slate-800 hover:bg-slate-700 text-slate-200 font-semibold px-6 py-3 rounded-xl border border-slate-700 transition duration-200 text-sm">
                        <i class="fa-brands fa-github"></i> GitHub
                    </a>
                </div>
            </div>
        </section>

        <!-- Technical Skills Section -->
        <section class="space-y-6">
            <div class="flex items-center gap-3">
                <div class="p-2 bg-indigo-500/10 border border-indigo-500/20 rounded-lg text-indigo-400">
                    <i class="fa-solid fa-code"></i>
                </div>
                <h2 class="text-2xl font-bold text-white">Technical Skills</h2>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                <?php foreach ($data['skills'] as $category => $items): ?>
                    <div class="bg-slate-900/60 border border-slate-800/80 rounded-xl p-6 hover:border-slate-700 transition duration-200">
                        <h3 class="text-xs font-bold text-indigo-400 uppercase tracking-wider mb-4 border-b border-slate-800/80 pb-2">
                            <?= htmlspecialchars($category); ?>
                        </h3>
                        <div class="flex flex-wrap gap-2">
                            <?php foreach ($items as $skill): ?>
                                <span class="px-3 py-1.5 bg-slate-800/80 border border-slate-700/60 rounded-lg text-xs font-medium text-slate-200">
                                    <?= htmlspecialchars($skill); ?>
                                </span>
                            <?php endforeach; ?>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        </section>

        <!-- Projects Section -->
        <section class="space-y-6">
            <div class="flex items-center gap-3">
                <div class="p-2 bg-indigo-500/10 border border-indigo-500/20 rounded-lg text-indigo-400">
                    <i class="fa-solid fa-diagram-project"></i>
                </div>
                <h2 class="text-2xl font-bold text-white">Featured Projects</h2>
            </div>

            <div class="space-y-6">
                <?php foreach ($data['projects'] as $project): ?>
                    <div class="bg-slate-900/60 border border-slate-800/80 rounded-2xl p-6 md:p-8 hover:border-slate-700 transition duration-200 space-y-6">
                        <div class="flex flex-col md:flex-row md:items-center justify-between gap-3">
                            <h3 class="text-xl font-bold text-white"><?= htmlspecialchars($project['title']); ?></h3>
                            <?php if (!empty($project['github'])): ?>
                                <a href="<?= htmlspecialchars($project['github']); ?>" target="_blank" class="inline-flex items-center gap-2 text-xs font-semibold text-slate-400 hover:text-white transition">
                                    <i class="fa-brands fa-github text-base"></i> View Repository
                                </a>
                            <?php endif; ?>
                        </div>

                        <p class="text-slate-300 text-sm leading-relaxed"><?= htmlspecialchars($project['desc']); ?></p>

                        <div class="flex flex-wrap gap-2">
                            <?php foreach (explode(',', $project['tech']) as $techItem): ?>
                                <span class="px-2.5 py-1 bg-indigo-950/60 border border-indigo-800/40 text-indigo-300 rounded-md text-xs font-medium">
                                    <?= htmlspecialchars(trim($techItem)); ?>
                                </span>
                            <?php endforeach; ?>
                        </div>

                        <?php if (isset($project['pipeline'])): ?>
                            <div class="pt-4 border-t border-slate-800/80">
                                <p class="text-[11px] font-bold text-slate-400 uppercase tracking-wider mb-4">Pipeline Execution</p>
                                <div class="grid grid-cols-2 sm:grid-cols-3 md:grid-cols-5 gap-3">
                                    <?php foreach ($project['pipeline'] as $pipe): ?>
                                        <div class="bg-slate-950/80 border border-slate-800/80 p-3 rounded-xl text-center space-y-1">
                                            <span class="text-[10px] font-bold text-indigo-400 bg-indigo-500/10 px-2 py-0.5 rounded-full inline-block">
                                                <?= $pipe['step']; ?>
                                            </span>
                                            <p class="text-xs font-semibold text-slate-200"><?= htmlspecialchars($pipe['label']); ?></p>
                                            <p class="text-[10px] text-slate-400"><?= htmlspecialchars($pipe['sub']); ?></p>
                                        </div>
                                    <?php endforeach; ?>
                                </div>
                            </div>
                        <?php endif; ?>
                    </div>
                <?php endforeach; ?>
            </div>
        </section>

    </main>
</body>
</html>
