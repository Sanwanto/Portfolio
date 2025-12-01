<!-- Hero Section -->
<section class="hero">
    <div class="container">
        <div class="hero-content">
            <p class="hero-subtitle">👋 Hello, I'm</p>
            <h1 class="hero-title"><?php echo $profile['nama']; ?></h1>
            <p class="hero-text"><?php echo $profile['tagline']; ?></p>
            <div class="hero-buttons">
                <a href="?page=projects" class="btn btn-primary">
                    <i class="fas fa-briefcase"></i> View My Work
                </a>
                <a href="?page=contact" class="btn btn-outline">
                    <i class="fas fa-envelope"></i> Contact Me
                </a>
            </div>
        </div>
    </div>
</section>

<!-- Featured Projects -->
<section style="background: white;">
    <div class="container">
        <div class="section-header">
            <h2 class="section-title">Featured Projects</h2>
            <p class="section-subtitle">Berikut beberapa project terbaik yang pernah saya kerjakan</p>
        </div>
        <div class="projects-grid">
            <?php 
            $featured = array_slice($projects, 0, 3);
            foreach($featured as $project): 
            ?>
                <div class="project-card" onclick="window.location.href='?page=project-detail&id=<?php echo $project['id']; ?>'">
                    <div class="project-image">
                        <?php 
                        $icons = ['💻', '🚀', '⚡', '🎨', '📱', '🔧'];
                        echo $icons[array_rand($icons)];
                        ?>
                    </div>
                    <div class="project-body">
                        <span class="project-category"><?php echo $project['kategori']; ?></span>
                        <h3><?php echo $project['judul']; ?></h3>
                        <p><?php echo $project['deskripsi_singkat']; ?></p>
                        <div class="tech-tags">
                            <?php foreach(array_slice($project['teknologi'], 0, 3) as $tech): ?>
                                <span class="tech-tag"><?php echo $tech; ?></span>
                            <?php endforeach; ?>
                        </div>
                        <a href="?page=project-detail&id=<?php echo $project['id']; ?>" class="btn btn-primary" style="width: 100%; justify-content: center;">
                            View Details <i class="fas fa-arrow-right"></i>
                        </a>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
        <div style="text-align: center; margin-top: 3rem;">
            <a href="?page=projects" class="btn btn-primary">
                View All Projects <i class="fas fa-arrow-right"></i>
            </a>
        </div>
    </div>
</section>

<!-- Quick Skills -->
<section>
    <div class="container">
        <div class="section-header">
            <h2 class="section-title">Tech Stack</h2>
            <p class="section-subtitle">Teknologi yang saya kuasai</p>
        </div>
        <div class="soft-skills">
            <?php 
            $top_skills = array_merge(
                array_slice($skills['Frontend'], 0, 3),
                array_slice($skills['Backend'], 0, 3)
            );
            foreach($top_skills as $skill): 
            ?>
                <div class="soft-skill-item">
                    <i class="fas fa-check-circle" style="color: var(--success); margin-right: 0.5rem;"></i>
                    <?php echo $skill['nama']; ?>
                </div>
            <?php endforeach; ?>
        </div>
        <div style="text-align: center; margin-top: 3rem;">
            <a href="?page=skills" class="btn btn-primary">
                View All Skills <i class="fas fa-arrow-right"></i>
            </a>
        </div>
    </div>
</section>

<!-- CTA Section -->
<section style="background: var(--dark); color: white;">
    <div class="container" style="text-align: center;">
        <h2 style="font-size: 2.5rem; margin-bottom: 1rem;">Let's Work Together</h2>
        <p style="font-size: 1.2rem; color: var(--text-light); margin-bottom: 2rem; max-width: 600px; margin-left: auto; margin-right: auto;">
            Punya project menarik? Mari diskusikan bagaimana saya bisa membantu mewujudkannya!
        </p>
        <a href="?page=contact" class="btn btn-primary" style="font-size: 1.1rem;">
            <i class="fas fa-paper-plane"></i> Get In Touch
        </a>
    </div>
</section>