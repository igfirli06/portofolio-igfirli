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
    <title><?= htmlspecialchars($data['name']); ?> - Portofolio</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        body { background-color: #f4f4f0; color: #121212; font-family: monospace; }
        .neo-box { border: 3px solid #121212; box-shadow: 5px 5px 0px #121212; }
        .neo-btn { border: 2px solid #121212; box-shadow: 3px 3px 0px #121212; transition: all 0.1s; }
        .neo-btn:hover { transform: translate(-2px, -2px); box-shadow: 5px 5px 0px #121212; }
    </style>
</head>
<body class="p-6 md:p-12 max-w-5xl mx-auto">

    <!-- Header / Hero Section -->
    <header class="neo-box bg-yellow-300 p-8 mb-8">
        <h1 class="text-4xl md:text-6xl font-black uppercase mb-2"><?= htmlspecialchars($data['name']); ?></h1>
        <p class="text-xl font-bold bg-black text-white inline-block px-3 py-1 mb-4"><?= htmlspecialchars($data['role']); ?></p>
        <p class="text-base leading-relaxed mb-6 font-sans"><?= htmlspecialchars($data['about']); ?></p>
        <a href="<?= htmlspecialchars($data['cv_link']); ?>" target="_blank" class="neo-btn bg-white font-bold px-6 py-3 inline-block uppercase">
            📄 Unduh CV
        </a>
    </header>

    <!-- Skills Section -->
    <section class="neo-box bg-white p-8 mb-8">
        <h2 class="text-2xl font-black uppercase mb-6 border-b-4 border-black pb-2">Technical Skills</h2>
        <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
            <?php foreach ($data['skills'] as $category => $items): ?>
                <div class="neo-box bg-blue-100 p-4">
                    <h3 class="font-bold border-b-2 border-black pb-1 mb-3 uppercase"><?= htmlspecialchars($category); ?></h3>
                    <ul class="space-y-1 text-sm font-sans">
                        <?php foreach ($items as $skill): ?>
                            <li>• <?= htmlspecialchars($skill); ?></li>
                        <?php endforeach; ?>
                    </ul>
                </div>
            <?php endforeach; ?>
        </div>
    </section>

    <!-- Projects Section -->
    <section class="neo-box bg-green-200 p-8">
        <h2 class="text-2xl font-black uppercase mb-6 border-b-4 border-black pb-2">Featured Projects</h2>
        <div class="space-y-8">
            <?php foreach ($data['projects'] as $project): ?>
                <div class="neo-box bg-white p-6">
                    <h3 class="text-xl font-black mb-2"><?= htmlspecialchars($project['title']); ?></h3>
                    <p class="text-sm font-sans mb-4"><?= htmlspecialchars($project['desc']); ?></p>
                    <p class="text-xs font-bold bg-yellow-200 inline-block p-1 border border-black mb-4">Tech: <?= htmlspecialchars($project['tech']); ?></p>
                    
                    <?php if (isset($project['pipeline'])): ?>
                        <div class="grid grid-cols-2 md:grid-cols-5 gap-2 mt-4 pt-4 border-t-2 border-dashed border-black">
                            <?php foreach ($project['pipeline'] as $pipe): ?>
                                <div class="bg-gray-100 p-2 border border-black text-center text-xs">
                                    <span class="font-black block text-gray-500"><?= $pipe['step']; ?></span>
                                    <span class="font-bold block"><?= $pipe['label']; ?></span>
                                    <span class="text-[10px] text-gray-600 font-sans"><?= $pipe['sub']; ?></span>
                                </div>
                            <?php endforeach; ?>
                        </div>
                    <?php endif; ?>
                </div>
            <?php endforeach; ?>
        </div>
    </section>

</body>
</html>
