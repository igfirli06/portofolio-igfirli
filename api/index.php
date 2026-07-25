<?php
require_once __DIR__ . '/../data.php'; 
$data = getPortfolioData();
?>
<!DOCTYPE html>
<html lang="id" class="scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portofolio | <?= htmlspecialchars($data['name']) ?></title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Space+Grotesk:wght@500;700&family=Syne:wght@700;800&display=swap" rel="stylesheet">

    <style>
        body {
            font-family: 'Space Grotesk', sans-serif;
            background-color: #fff3b0;
        }
        h1, h2, h3 {
            font-family: 'Syne', sans-serif;
        }

        .hero-bg {
            background-image: url("static/fullstcak.png");
            background-blend-mode: multiply;
        }

        .brutal-shadow {
            box-shadow: 8px 8px 0px 0px #000000;
        }
        .brutal-shadow-sm {
            box-shadow: 4px 4px 0px 0px #000000;
        }
        .brutal-shadow-lg {
            box-shadow: 12px 12px 0px 0px #000000;
        }
    </style>
</head>
<body class="text-[#540b0e] antialiased selection:bg-[#9e2a2b] selection:text-white p-4 md:p-8">

    <header class="relative w-full min-h-[95vh] bg-[#335c67] border-4 border-black brutal-shadow-lg flex items-center justify-center p-6 md:p-12 mb-16 overflow-hidden">
        <div class="absolute inset-0 hero-bg bg-cover bg-center opacity-20 filter grayscale"></div>

        <div class="relative z-10 text-center max-w-3xl">
            <span class="inline-block bg-[#e09f3e] text-black text-sm font-bold uppercase tracking-wider px-4 py-2 border-2 border-black brutal-shadow-sm -rotate-2 mb-6">
                Available for Hire // 2026
            </span>

            <h1 class="text-5xl md:text-8xl font-black text-[#fff3b0] uppercase tracking-tighter leading-none mb-6 border-4 border-black bg-[#540b0e] p-6 brutal-shadow rotate-1">
                <?= htmlspecialchars($data['name']) ?>
            </h1>

            <div class="bg-white border-4 border-black p-4 brutal-shadow -rotate-1 inline-block mb-8">
                <p class="text-xl md:text-2xl font-bold text-black uppercase">
                    [ Python Developer ]
                </p>
            </div>

            <br>

            <a href="#about" class="inline-block bg-[#9e2a2b] text-[#fff3b0] text-xl font-bold uppercase px-8 py-4 border-4 border-black brutal-shadow hover:translate-x-1 hover:translate-y-1 hover:shadow-[4px_4px_0px_0px_rgba(0,0,0,1)] transition-all mb-8">
                Let's Build.exe →
            </a>

            <div class="flex justify-center gap-4 mt-2">
                <a href="https://github.com/igfirli06" target="_blank" class="p-3 bg-white border-4 border-black brutal-shadow-sm text-black hover:translate-x-1 hover:translate-y-1 hover:shadow-none transition-all" title="GitHub">
                    <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" clip-rule="evenodd" d="M12 2C6.477 2 2 6.484 2 12.017c0 4.425 2.865 8.18 6.839 9.504.5.092.682-.217.682-.483 0-.237-.008-.868-.013-1.703-2.782.605-3.369-1.343-3.369-1.343-.454-1.158-1.11-1.466-1.11-1.466-.908-.62.069-.608.069-.608 1.003.07 1.531 1.032 1.531 1.032.892 1.53 2.341 1.088 2.91.832.092-.647.35-1.088.636-1.338-2.22-.253-4.555-1.113-4.555-4.951 0-1.093.39-1.988 1.029-2.688-.103-.253-.446-1.272.098-2.65 0 0 .84-.27 2.75 1.026A9.564 9.564 0 0112 6.844c.85.004 1.705.115 2.504.337 1.909-1.296 2.747-1.027 2.747-1.027.546 1.379.202 2.398.1 2.651.64.7 1.028 1.595 1.028 2.688 0 3.848-2.339 4.695-4.566 4.943.359.309.678.92.678 1.855 0 1.338-.012 2.419-.012 2.747 0 .268.18.58.688.482A10.019 10.019 0 0022 12.017C22 6.484 17.522 2 12 2z"/>
                    </svg>
                </a>
                <a href="https://www.linkedin.com/in/igfirlii-nuur-aziiza-774551229/" target="_blank" class="p-3 bg-[#e09f3e] border-4 border-black brutal-shadow-sm text-black hover:translate-x-1 hover:translate-y-1 hover:shadow-none transition-all" title="LinkedIn">
                    <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path d="M19 0h-14c-2.761 0-5 2.239-5 5v14c0 2.761 2.239 5 5 5h14c2.762 0 5-2.239 5-5v-14c0-2.761-2.238-5-5-5zm-11 19h-3v-11h3v11zm-1.5-12.268c-.966 0-1.75-.79-1.75-1.764s.784-1.764 1.75-1.764 1.75.79 1.75 1.764-.783 1.764-1.75 1.764zm13.5 12.268h-3v-5.604c0-3.368-4-3.113-4 0v5.604h-3v-11h3v1.765c1.396-2.586 7-2.777 7 2.476v6.759z"/>
                    </svg>
                </a>
                <a href="https://instagram.com/belajar_bersamal1l1" target="_blank" class="p-3 bg-[#9e2a2b] border-4 border-black brutal-shadow-sm text-[#fff3b0] hover:translate-x-1 hover:translate-y-1 hover:shadow-none transition-all" title="Instagram">
                    <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204 0.013-3.583 0.07-4.849 0.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zm0-2c-3.259 0-3.667.014-4.947.072-4.358.2-6.78 2.618-6.98 6.98-.059 1.281-.073 1.689-.073 4.948 0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98 1.281.058 1.689.072 4.948.072 3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98-1.281-.059-1.69-.073-4.949-.073zm0 5.838c-3.403 0-6.162 2.759-6.162 6.162s2.759 6.163 6.162 6.163 6.162-2.759 6.162-6.163c0-3.403-2.759-6.162-6.162-6.162zm0 10.162c-2.209 0-4-1.79-4-4 0-2.209 1.791-4 4-4s4 1.791 4 4c0 2.21-1.791 4-4 4zm6.406-11.845c-.796 0-1.441.645-1.441 1.44s.645 1.44 1.441 1.44c.795 0 1.439-.645 1.439-1.44s-.644-1.44-1.439-1.44z"/>
                    </svg>
                </a>
            </div>
        </div>
    </header>

    <main class="max-w-5xl mx-auto space-y-24 pb-20">

        <section id="about" class="grid grid-cols-1 md:grid-cols-3 gap-8 items-start">
            <div class="bg-[#9e2a2b] border-4 border-black p-6 brutal-shadow md:rotate-[-3deg]">
                <h2 class="text-3xl font-black text-[#fff3b0] uppercase tracking-tight">
                    ABOUT ME
                </h2>
            </div>

            <div class="md:col-span-2 bg-white border-4 border-black p-8 brutal-shadow text-lg font-medium leading-relaxed">
                <p><?= htmlspecialchars($data['about']) ?></p>
            </div>
        </section>

        <section class="space-y-8">
            <div class="inline-block bg-[#e09f3e] border-4 border-black p-4 brutal-shadow rotate-1">
                <h2 class="text-3xl font-black text-black uppercase tracking-tight">
                    EXPERTISE MATRIX
                </h2>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <?php $i = 0; foreach ($data['skills'] as $category => $skills): $i++; ?>
                <div class="border-4 border-black brutal-shadow p-6 <?php
                    if ($i == 1) echo 'bg-[#335c67] text-white';
                    elseif ($i == 2) echo 'bg-white text-black';
                    else echo 'bg-[#9e2a2b] text-[#fff3b0]';
                ?> flex flex-col h-full">
                    <h3 class="text-2xl font-black uppercase mb-4 border-b-2 border-black pb-2 tracking-tight">
                        <?= htmlspecialchars($category) ?>
                    </h3>
                    <ul class="space-y-2 font-bold">
                        <?php foreach ($skills as $skill): ?>
                        <li class="flex items-center">
                            <span class="inline-block w-4 h-4 bg-[#e09f3e] border-2 border-black mr-3 shadow-[2px_2px_0px_0px_rgba(0,0,0,1)]"></span>
                            <?= htmlspecialchars($skill) ?>
                        </li>
                        <?php endforeach; ?>
                    </ul>
                </div>
                <?php endforeach; ?>
            </div>
        </section>

        <section class="space-y-8">
            <div class="inline-block bg-[#540b0e] border-4 border-black p-4 brutal-shadow -rotate-1">
                <h2 class="text-3xl font-black text-[#fff3b0] uppercase tracking-tight">
                    PRODUCTION CODE
                </h2>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 gap-8 items-stretch">
                <?php foreach ($data['projects'] as $project): ?>
                <div class="border-4 border-black brutal-shadow p-6 bg-white text-black flex flex-col h-full">
                    
                    <!-- Bagian Header Kartu (Tag <hr> dihapus agar tidak double line dan gap raksasa) -->
                    <div>
                        <h3 class="text-2xl font-black uppercase mb-2 leading-tight"><?= htmlspecialchars($project['title']) ?></h3>
                        <p class="text-sm font-bold text-[#e09f3e] mb-4 uppercase tracking-widest"><?= htmlspecialchars($project['tech']) ?></p>
                        <p class="font-medium mb-6"><?= htmlspecialchars($project['desc']) ?></p>
                    </div>

                    <!-- Bagian Pipeline AI (mt-auto dihapus) -->
                    <?php if (!empty($project['pipeline'])): ?>
                        <div class="border-t-4 border-black pt-6">
                            <div class="inline-block bg-black text-white px-3 py-1 font-bold uppercase tracking-widest text-sm mb-6">
                                AI Processing Pipeline
                            </div>
                            
                            <div class="flex flex-col space-y-0">
                                <!-- Looping Steps -->
                                <?php foreach ($project['pipeline'] as $index => $step): ?>
                                    <div class="flex items-stretch">
                                        <div class="w-12 bg-[#335c67] border-4 border-black border-b-0 flex items-center justify-center font-black text-white text-xl">
                                            <?= $step['step'] ?>
                                        </div>
                                        <div class="flex-1 bg-white border-4 border-black border-l-0 border-b-0 p-3 flex flex-col justify-center">
                                            <span class="font-black uppercase text-lg leading-none"><?= htmlspecialchars($step['label']) ?></span>
                                            <span class="text-sm font-bold text-gray-500 mt-1"><?= htmlspecialchars($step['sub']) ?></span>
                                        </div>
                                    </div>
                                <?php endforeach; ?>

                                <!-- Decision Block (Klasifikasi) -->
                                <?php if (!empty($project['decision'])): ?>
                                    <div class="flex items-stretch">
                                        <div class="w-12 bg-[#9e2a2b] border-4 border-black flex items-center justify-center text-white">
                                            <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-8.707l-3-3a1 1 0 00-1.414 0l-3 3a1 1 0 001.414 1.414L9 9.414V13a1 1 0 102 0V9.414l1.293 1.293a1 1 0 001.414-1.414z" clip-rule="evenodd"></path></svg>
                                        </div>
                                        <div class="flex-1 bg-[#fff3b0] border-4 border-black border-l-0 p-3 text-center">
                                            <span class="font-black uppercase text-lg block"><?= htmlspecialchars($project['decision']['label']) ?></span>
                                            <span class="font-mono text-sm font-bold text-[#9e2a2b] bg-white border-2 border-black px-2 py-1 mt-2 inline-block">
                                                <?= htmlspecialchars($project['decision']['formula']) ?>
                                            </span>
                                        </div>
                                    </div>
                                <?php endif; ?>

                                <!-- Branches (Hasil Lolos/Reject) -->
                                <?php if (!empty($project['branches'])): ?>
                                    <div class="flex border-4 border-black border-t-0 bg-white">
                                        <?php foreach ($project['branches'] as $idx => $branch): ?>
                                            <div class="flex-1 p-3 text-center <?= $idx === 0 ? 'border-r-4 border-black' : '' ?>">
                                                <div class="font-bold text-xs mb-1"><?= htmlspecialchars($branch['cond']) ?></div>
                                                <div class="font-black text-xl <?= $branch['type'] == 'yes' ? 'text-green-600' : 'text-red-600' ?>">
                                                    <?= htmlspecialchars($branch['result']) ?>
                                                </div>
                                            </div>
                                        <?php endforeach; ?>
                                    </div>
                                <?php endif; ?>
                            </div>
                        </div>
                    <?php endif; ?>
                </div>
                <?php endforeach; ?>
            </div>
        </section>

    </main>

    <footer class="bg-[#540b0e] text-[#fff3b0] border-4 border-black brutal-shadow p-8 flex flex-col md:flex-row justify-between items-center gap-6 uppercase font-bold tracking-wider">
        <div class="text-center md:text-left">
            <p class="text-lg">Design System: Neo-Brutalist / Palet v1.1</p>
            <p class="text-sm text-[#e09f3e] mt-1">&copy; 2026 <?= htmlspecialchars($data['name']) ?>. All rights secured.</p>
        </div>

        <div class="flex gap-3">
            <a href="https://github.com/igfirli06" target="_blank" class="p-2 bg-white border-2 border-black brutal-shadow-sm text-black hover:translate-x-0.5 hover:translate-y-0.5 hover:shadow-none transition-all">
                <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24"><path fill-rule="evenodd" clip-rule="evenodd" d="M12 2C6.477 2 2 6.484 2 12.017c0 4.425 2.865 8.18 6.839 9.504.5.092.682-.217.682-.483 0-.237-.008-.868-.013-1.703-2.782.605-3.369-1.343-3.369-1.343-.454-1.158-1.11-1.466-1.11-1.466-.908-.62.069-.608.069-.608 1.003.07 1.531 1.032 1.531 1.032.892 1.53 2.341 1.088 2.91.832.092-.647.35-1.088.636-1.338-2.22-.253-4.555-1.113-4.555-4.951 0-1.093.39-1.988 1.029-2.688-.103-.253-.446-1.272.098-2.65 0 0 .84-.27 2.75 1.026A9.564 9.564 0 0112 6.844c.85.004 1.705.115 2.504.337 1.909-1.296 2.747-1.027 2.747-1.027.546 1.379.202 2.398.1 2.651.64.7 1.028 1.595 1.028 2.688 0 3.848-2.339 4.695-4.566 4.943.359.309.678.92.678 1.855 0 1.338-.012 2.419-.012 2.747 0 .268.18.58.688.482A10.019 10.019 0 0022 12.017C22 6.484 17.522 2 12 2z"/></svg>
            </a>
            <a href="https://www.linkedin.com/in/igfirlii-nuur-aziiza-774551229/" target="_blank" class="p-2 bg-[#e09f3e] border-2 border-black brutal-shadow-sm text-black hover:translate-x-0.5 hover:translate-y-0.5 hover:shadow-none transition-all">
                <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24"><path d="M19 0h-14c-2.761 0-5 2.239-5 5v14c0 2.761 2.239 5 5 5h14c2.762 0 5-2.239 5-5v-14c0-2.761-2.238-5-5-5zm-11 19h-3v-11h3v11zm-1.5-12.268c-.966 0-1.75-.79-1.75-1.764s.784-1.764 1.75-1.764 1.75.79 1.75 1.764-.783 1.764-1.75 1.764zm13.5 12.268h-3v-5.604c0-3.368-4-3.113-4 0v5.604h-3v-11h3v1.765c1.396-2.586 7-2.777 7 2.476v6.759z"/></svg>
            </a>
            <a href="https://instagram.com/belajar_bersamal1l1" target="_blank" class="p-2 bg-[#9e2a2b] border-2 border-black brutal-shadow-sm text-[#fff3b0] hover:translate-x-0.5 hover:translate-y-0.5 hover:shadow-none transition-all">
                <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24"><path d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204 0.013-3.583 0.07-4.849 0.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zm0-2c-3.259 0-3.667.014-4.947.072-4.358.2-6.78 2.618-6.98 6.98-.059 1.281-.073 1.689-.073 4.948 0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98 1.281.058 1.689.072 4.948.072 3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98-1.281-.059-1.69-.073-4.949-.073zm0 5.838c-3.403 0-6.162 2.759-6.162 6.162s2.759 6.163 6.162 6.163 6.162-2.759 6.162-6.163c0-3.403-2.759-6.162-6.162-6.162zm0 10.162c-2.209 0-4-1.79-4-4 0-2.209 1.791-4 4-4s4 1.791 4 4c0 2.21-1.791 4-4 4zm6.406-11.845c-.796 0-1.441.645-1.441 1.44s.645 1.44 1.441 1.44c.795 0 1.439-.645 1.439-1.44s-.644-1.44-1.439-1.44z"/>
                </svg>
            </a>
        </div>
    </footer>

</body>
</html>
