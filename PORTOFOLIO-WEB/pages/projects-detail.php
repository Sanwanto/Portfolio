<?php
$project = getProjectById($project_id, $projects);

if (!$project): ?>
    <section style="margin-top: 100px; min-height: 60vh; display: flex; align-items: center; justify-content: center;">
        <div style="text-align: center;">
            <i class="fas fa-exclamation-triangle" style="font-size: 5rem; color: var(--text-light); margin-bottom: 1rem;"></i>
            <h2>Project Tidak Ditemukan</h2>
            <p style="color: var(--text-light); margin: 1rem 0;">Project yang Anda cari tidak tersedia.</p>
            <a href="?page=projects" class="btn btn-primary">
                <i class="fas fa-arrow-left"></i> Kembali ke Projects
            </a>
        </div>
    </section>
<?php else: ?>
    <section style="margin-top: 100px;">
        <div class="container">
            <!-- Back Button -->
            <a href="?page=projects" class="btn btn-outline" style="margin-bottom: 2rem; background: white; color: var(--primary); border: 2px solid var(--primary);">
                <i class="fas fa-arrow-left"></i> Back to Projects
            </a>

            <div class="project-detail">
                <!-- Project Hero -->
                <div class="project-hero">
                    <?php 
                    $icons = ['💻', '🚀', '⚡', '🎨', '📱', '🔧', '🛠️', '💼'];
                    echo $icons[$project['id'] % count($icons)];
                    ?>
                </div>

                <!-- Project Body -->
                <div class="project-detail-body">
                    <div style="display: flex; justify-content: space-between; align-items: start; flex-wrap: wrap; gap: 1rem; margin-bottom: 2rem;">
                        <div>
                            <span class="project-category"><?php echo $project['kategori']; ?></span>
                            <h1 style="font-size: 2.5rem; margin: 0.5rem 0;"><?php echo $project['judul']; ?></h1>
                        </div>
                        <div class="project-links">
                            <?php if($project['demo'] !== '#'): ?>
                                <a href="<?php echo $project['demo']; ?>" class="btn btn-primary" target="_blank">
                                    <i class="fas fa-external-link-alt"></i> Live Demo
                                </a>
                            <?php endif; ?>
                            <a href="<?php echo $project['github']; ?>" class="btn btn-outline" style="background: white; color: var(--primary); border: 2px solid var(--primary);" target="_blank">
                                <i class="fab fa-github"></i> View Code
                            </a>
                        </div>
                    </div>

                    <!-- Meta Info -->
                    <div class="project-meta">
                        <div class="meta-item">
                            <i class="fas fa-calendar"></i>
                            <span>2024</span>
                        </div>
                        <div class="meta-item">
                            <i class="fas fa-tag"></i>
                            <span><?php echo $project['kategori']; ?></span>
                        </div>
                        <div class="meta-item">
                            <i class="fas fa-clock"></i>
                            <span>3-4 Months</span>
                        </div>
                    </div>

                    <!-- Description -->
                    <div style="margin-bottom: 3rem;">
                        <h3 style="font-size: 1.8rem; margin-bottom: 1rem;">
                            <i class="fas fa-info-circle" style="color: var(--primary);"></i> Tentang Project
                        </h3>
                        <p style="line-height: 1.8; color: var(--text-light); font-size: 1.1rem;">
                            <?php echo $project['deskripsi_lengkap']; ?>
                        </p>
                    </div>

                    <!-- Technologies -->
                    <div style="margin-bottom: 3rem;">
                        <h3 style="font-size: 1.8rem; margin-bottom: 1rem;">
                            <i class="fas fa-code" style="color: var(--primary);"></i> Teknologi yang Digunakan
                        </h3>
                        <div class="tech-tags" style="gap: 1rem;">
                            <?php foreach($project['teknologi'] as $tech): ?>
                                <span class="tech-tag" style="padding: 0.8rem 1.5rem; font-size: 1rem; background: var(--light); border: 2px solid var(--primary);">
                                    <?php echo $tech; ?>
                                </span>
                            <?php endforeach; ?>
                        </div>
                    </div>

                    <!-- Features -->
                    <div style="margin-bottom: 3rem;">
                        <h3 style="font-size: 1.8rem; margin-bottom: 1rem;">
                            <i class="fas fa-check-circle" style="color: var(--success);"></i> Key Features
                        </h3>
                        <div class="feature-list">
                            <?php foreach($project['fitur'] as $fitur): ?>
                                <div class="feature-item">
                                    <i class="fas fa-check" style="color: var(--success);"></i>
                                    <span><?php echo $fitur; ?></span>
                                </div>
                            <?php endforeach; ?>
                        </div>
                    </div>

                    <!-- Challenge & Solution -->
                    <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 2rem; margin-bottom: 3rem;">
                        <div style="padding: 2rem; background: #fef3c7; border-radius: 12px; border-left: 4px solid #f59e0b;">
                            <h4 style="font-size: 1.3rem; margin-bottom: 1rem; color: #92400e;">
                                <i class="fas fa-exclamation-triangle"></i> Tantangan
                            </h4>
                            <p style="color: #78350f; line-height: 1.8;">
                                <?php echo $project['tantangan']; ?>
                            </p>
                        </div>
                        <div style="padding: 2rem; background: #d1fae5; border-radius: 12px; border-left: 4px solid #10b981;">
                            <h4 style="font-size: 1.3rem; margin-bottom: 1rem; color: #065f46;">
                                <i class="fas fa-lightbulb"></i> Solusi
                            </h4>
                            <p style="color: #047857; line-height: 1.8;">
                                <?php echo $project['solusi']; ?>
                            </p>
                        </div>
                    </div>

                    <!-- Other Projects -->
                    <div>
                        <h3 style="font-size: 1.8rem; margin-bottom: 1.5rem;">
                            <i class="fas fa-briefcase" style="color: var(--primary);"></i> Project Lainnya
                        </h3>
                        <div class="projects-grid">
                            <?php 
                            $other_projects = array_filter($projects, function($p) use ($project) {
                                return $p['id'] != $project['id'];
                            });
                            $other_projects = array_slice($other_projects, 0, 2);
                            foreach($other_projects as $other): 
                            ?>
                                <div class="project-card" onclick="window.location.href='?page=project-detail&id=<?php echo $other['id']; ?>'">
                                    <div class="project-image">
                                        <?php 
                                        $icons = ['💻', '🚀', '⚡', '🎨', '📱', '🔧'];
                                        echo $icons[$other['id'] % count($icons)];
                                        ?>
                                    </div>
                                    <div class="project-body">
                                        <span class="project-category"><?php echo $other['kategori']; ?></span>
                                        <h3><?php echo $other['judul']; ?></h3>
                                        <p><?php echo $other['deskripsi_singkat']; ?></p>
                                        <div class="tech-tags">
                                            <?php foreach(array_slice($other['teknologi'], 0, 3) as $tech): ?>
                                                <span class="tech-tag"><?php echo $tech; ?></span>
                                            <?php endforeach; ?>
                                        </div>
                                    </div>
                                </div>
                            <?php endforeach; ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
<?php endif; ?>