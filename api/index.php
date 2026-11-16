                            <span class="inline-block bg-[#e09f3e] text-black text-xs font-bold uppercase px-2 py-0.5 border border-black mb-2">
                                <?= htmlspecialchars($cert['date']) ?>
                            </span>
                            <h3 class="text-xl font-black uppercase text-black leading-tight">
                                <?= htmlspecialchars($cert['title']) ?>
                            </h3>
                            <p class="text-sm font-bold text-gray-600 mt-1">
                                <?= htmlspecialchars($cert['issuer']) ?>
                            </p>
                        </div>

                        <?php if (!empty($cert['credential_url']) && $cert['credential_url'] !== '#'): ?>
                        <a href="<?= htmlspecialchars($cert['credential_url']) ?>" 
                           target="_blank" 
                           class="inline-block text-center bg-[#335c67] text-white font-bold uppercase text-sm px-4 py-2 border-2 border-black brutal-shadow-sm hover:bg-[#540b0e] transition-colors">
                            Verify Credential ↗
                        </a>
                        <?php endif; ?>
                    </div>
                </div>
                <?php endforeach; ?>
            </div>
        </section>
        <!-- PROJECTS SECTION -->
<section id="projects"  class="scroll-mt-24 space-y-8">
    <div class="inline-block bg-[#540b0e] text-[#fff3b0] px-4 py-1 border-2 border-black font-bold uppercase text-sm brutal-shadow-sm">
        03 Selected Projects
    </div>
    <h2 class="text-3xl md:text-4xl font-black uppercase text-black">Production Code</h2>
    
    <div class="space-y-12">
        <?php foreach (($data['projects'] ?? []) as $index => $project): ?>
        <article class="bg-white border-4 border-black p-6 md:p-8 brutal-shadow space-y-6">
            
            <!-- HEADER PROJECT -->
            <div class="flex flex-col md:flex-row justify-between items-start md:items-center gap-4 border-b-4 border-black pb-4">
                <div class="space-y-1">
                    <span class="text-xs font-bold uppercase tracking-widest text-[#335c67]">Project #0<?= $index + 1 ?></span>
                    <!-- Font size disesuaikan agar tidak melar/sesak -->
                    <h3 class="text-xl md:text-2xl font-black uppercase text-black leading-tight">
                        <?= htmlspecialchars($project['title'] ?? 'Unknown Project') ?>
                    </h3>
                </div>
                
                <div class="flex flex-wrap gap-2 flex-shrink-0">
                    <?php if (!empty($project['url'])): ?>
                    <a href="<?= htmlspecialchars($project['url']) ?>" target="_blank" class="bg-[#e09f3e] text-black font-bold text-xs md:text-sm uppercase px-4 py-2 border-2 border-black brutal-shadow-sm hover:translate-x-0.5 hover:translate-y-0.5 transition-all flex items-center gap-1">
                        🌐 Live App
                    </a>
                    <?php endif; ?>
                    <?php if (!empty($project['github'])): ?>
                    <a href="<?= htmlspecialchars($project['github']) ?>" target="_blank" class="bg-black text-white font-bold text-xs md:text-sm uppercase px-4 py-2 border-2 border-black brutal-shadow-sm hover:translate-x-0.5 hover:translate-y-0.5 transition-all flex items-center gap-1">
                        💻 GitHub
                    </a>
                    <?php endif; ?>
                </div>
            </div>

            <!-- DESKRIPSI -->
            <p class="text-base md:text-lg leading-relaxed text-gray-800 font-medium">
                <?= htmlspecialchars($project['desc'] ?? '') ?>
            </p>

            <!-- TECH STACK BADGE -->
            <div class="bg-[#fff3b0] border-2 border-black p-3 font-mono text-xs md:text-sm font-bold text-[#540b0e]">
                ⚡ TECH: <?= htmlspecialchars($project['tech'] ?? '') ?>
            </div>

            <!-- PIPELINE EXECUTION (REDESIGN) -->
            <?php if (!empty($project['pipeline'])): ?>
            <div class="space-y-3 pt-2">
                <h4 class="font-black uppercase text-xs tracking-wider text-gray-500">// Pipeline Execution Flow</h4>
                
                <!-- Layout responsif: 1 kolom di HP, Flex/Grid leluasa di layar sedang/besar -->
                <div class="flex flex-col md:flex-row flex-wrap items-stretch justify-between gap-2">
                    <?php foreach ($project['pipeline'] as $pipeIdx => $pipe): ?>
                    <div class="flex-1 min-w-[140px] bg-gray-50 border-2 border-black p-3 text-center flex flex-col justify-center relative">
                        <span class="text-xs font-black text-[#9e2a2b] mb-1"><?= htmlspecialchars($pipe['step'] ?? '') ?></span>
                        <span class="font-black text-xs uppercase text-black leading-snug mb-1"><?= htmlspecialchars($pipe['label'] ?? '') ?></span>
                        <span class="text-[10px] text-gray-600 font-medium"><?= htmlspecialchars($pipe['sub'] ?? '') ?></span>
                    </div>
                    <?php endforeach; ?>
                </div>
            </div>
            <?php endif; ?>

        </article>
        <?php endforeach; ?>
    </div>
</section>
    </main>

    <!-- FOOTER WITH WALKING CAT ANIMATION -->
    <footer class="relative text-center py-8 border-t-4 border-black text-black font-bold uppercase text-sm bg-[#fff3b0]">
        
        <!-- Kucing Berjalan di Atas Garis Border -->
        <div class="absolute bottom-full left-0 animate-walk-right pointer-events-none z-10 -mb-[2px]">
            <img src="/static/thedailysnark-cat-8915.gif" 
                 alt="Kucing Pixel Walk" 
                 class="h-12 md:h-16 w-auto pixelated">
        </div>

        <div class="relative z-10 bg-[#fff3b0] inline-block px-4">
            © <?= date('Y') ?> <?= htmlspecialchars($data['name'] ?? 'Igfirlii') ?> — All Rights Reserved.
        </div>
        
    </footer>

</body>
</html>
