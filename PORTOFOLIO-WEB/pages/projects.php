<section style="margin-top: 100px;">
    <div class="container">
        <div class="section-header">
            <h2 class="section-title">My Projects</h2>
            <p class="section-subtitle">Portfolio project yang telah saya kerjakan</p>
        </div>

        <!-- Filter -->
        <div style="text-align: center; margin-bottom: 3rem;">
            <button class="btn btn-primary" style="margin: 0.5rem;" onclick="filterProjects('all')">
                All Projects
            </button>
            <button class="btn btn-outline" style="margin: 0.5rem; background: white; color: var(--primary); border: 2px solid var(--primary);" onclick="filterProjects('Full Stack')">
                Full Stack
            </button>
            <button class="btn btn-outline" style="margin: 0.5rem; background: white; color: var(--primary); border: 2px solid var(--primary);" onclick="filterProjects('Web App')">
                Web App
            </button>
            <button class="btn btn-outline" style="margin: 0.5rem; background: white; color: var(--primary); border: 2px solid var(--primary);" onclick="filterProjects('CMS')">
                CMS
            </button>
        </div>

        <!-- Projects Grid -->
        <div class="projects-grid">
            <?php foreach($projects as $project): ?>
                <div class="project-card" data-category="<?php echo $project['kategori']; ?>" onclick="window.location.href='?page=project-detail&id=<?php echo $project['id']; ?>'">
                    <div class="project-image">
                        <?php 
                        $icons = ['💻', '🚀', '⚡', '🎨', '📱', '🔧', '🛠️', '💼'];
                        echo $icons[$project['id'] % count($icons)];
                        ?>
                    </div>
                    <div class="project-body">
                        <span class="project-category"><?php echo $project['kategori']; ?></span>
                        <h3><?php echo $project['judul']; ?></h3>
                        <p><?php echo $project['deskripsi_singkat']; ?></p>
                        <div class="tech-tags">
                            <?php foreach($project['teknologi'] as $tech): ?>
                                <span class="tech-tag"><?php echo $tech; ?></span>
                            <?php endforeach; ?>
                        </div>
                        <div class="project-links" style="margin-top: 1rem;">
                            <?php if($project['demo'] !== '#'): ?>
                                <a href="<?php echo $project['demo']; ?>" class="btn btn-primary" style="flex: 1; justify-content: center; padding: 0.6rem;" target="_blank" onclick="event.stopPropagation();">
                                    <i class="fas fa-external-link-alt"></i> Demo
                                </a>
                            <?php endif; ?>
                            <a href="<?php echo $project['github']; ?>" class="btn btn-outline" style="flex: 1; justify-content: center; padding: 0.6rem; background: white; color: var(--primary); border: 2px solid var(--primary);" target="_blank" onclick="event.stopPropagation();">
                                <i class="fab fa-github"></i> Code
                            </a>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>

        <!-- Empty State -->
        <div id="emptyState" style="display: none; text-align: center; padding: 3rem; color: var(--text-light);">
            <i class="fas fa-folder-open" style="font-size: 4rem; margin-bottom: 1rem; opacity: 0.3;"></i>
            <p>Tidak ada project dalam kategori ini</p>
        </div>
    </div>
</section>

<script>
function filterProjects(category) {
    const cards = document.querySelectorAll('.project-card');
    const emptyState = document.getElementById('emptyState');
    let visibleCount = 0;
    
    cards.forEach(card => {
        if (category === 'all' || card.dataset.category === category) {
            card.style.display = 'block';
            visibleCount++;
        } else {
            card.style.display = 'none';
        }
    });

    if (visibleCount === 0) {
        emptyState.style.display = 'block';
    } else {
        emptyState.style.display = 'none';
    }

    // Update button styles
    const buttons = document.querySelectorAll('button');
    buttons.forEach(btn => {
        btn.classList.remove('btn-primary');
        btn.classList.add('btn-outline');
        btn.style.background = 'white';
        btn.style.color = 'var(--primary)';
        btn.style.border = '2px solid var(--primary)';
    });
    event.target.classList.remove('btn-outline');
    event.target.classList.add('btn-primary');
    event.target.style.background = '';
    event.target.style.color = 'white';
    event.target.style.border = '';
}
</script>