<section style="margin-top: 100px;">
    <div class="container">
        <div class="section-header">
            <h2 class="section-title">My Skills</h2>
            <p class="section-subtitle">Technologies I work with</p>
        </div>

        <?php foreach($skills as $kategori => $skill_list): ?>
            <div style="margin-top: 3rem;">
                <h3 style="font-size: 1.5rem; color: var(--dark); margin-bottom: 1.5rem; display: flex; align-items: center; gap: 0.5rem;">
                    <i class="fas fa-<?php 
                        echo $kategori == 'Frontend' ? 'laptop-code' : 
                            ($kategori == 'Backend' ? 'server' : 'tools'); 
                    ?>" style="color: var(--primary);"></i>
                    <?php echo $kategori; ?>
                </h3>
                
                <div class="soft-skills">
                    <?php foreach($skill_list as $skill): ?>
                        <div class="soft-skill-item">
                            <i class="fas fa-check-circle" style="color: var(--success); margin-right: 0.5rem; font-size: 1.2rem;"></i>
                            <?php echo $skill['nama']; ?>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>
        <?php endforeach; ?>
    </div>


        <!-- Soft Skills -->
        <div style="margin-top: 4rem;">
            <div class="section-header">
                <h2 class="section-title">Soft Skills</h2>
                <p class="section-subtitle">Kemampuan non-teknis yang saya miliki</p>
            </div>
            
            <div class="soft-skills">
                <?php foreach($soft_skills as $soft_skill): ?>
                    <div class="soft-skill-item">
                        <i class="fas fa-check-circle" style="color: var(--success); margin-right: 0.5rem; font-size: 1.2rem;"></i>
                        <?php echo $soft_skill; ?>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>

        <!-- Skills Stats -->
        <div style="margin-top: 4rem;">
            <div class="section-header">
                <h2 class="section-title">Statistics</h2>
                <p class="section-subtitle">Pencapaian dan pengalaman</p>
            </div>

            <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(250px, 1fr)); gap: 2rem;">
                <div style="background: white; padding: 2.5rem; border-radius: 20px; box-shadow: 0 10px 40px rgba(0,0,0,0.1); text-align: center;">
                    <div style="font-size: 3rem; font-weight: 800; background: var(--cyber-gradient); -webkit-background-clip: text; -webkit-text-fill-color: transparent; margin-bottom: 0.5rem;">
                        3+
                    </div>
                    <p style="color: var(--text-light); font-weight: 600;">Years Experience</p>
                </div>

                <div style="background: white; padding: 2.5rem; border-radius: 20px; box-shadow: 0 10px 40px rgba(0,0,0,0.1); text-align: center;">
                    <div style="font-size: 3rem; font-weight: 800; background: var(--cyber-gradient); -webkit-background-clip: text; -webkit-text-fill-color: transparent; margin-bottom: 0.5rem;">
                        <?php echo count($projects); ?>+
                    </div>
                    <p style="color: var(--text-light); font-weight: 600;">Projects Completed</p>
                </div>

                <div style="background: white; padding: 2.5rem; border-radius: 20px; box-shadow: 0 10px 40px rgba(0,0,0,0.1); text-align: center;">
                    <div style="font-size: 3rem; font-weight: 800; background: var(--cyber-gradient); -webkit-background-clip: text; -webkit-text-fill-color: transparent; margin-bottom: 0.5rem;">
                        <?php 
                        $total_skills = 0;
                        foreach($skills as $cat => $list) {
                            $total_skills += count($list);
                        }
                        echo $total_skills;
                        ?>+
                    </div>
                    <p style="color: var(--text-light); font-weight: 600;">Technologies Mastered</p>
                </div>

                <div style="background: white; padding: 2.5rem; border-radius: 20px; box-shadow: 0 10px 40px rgba(0,0,0,0.1); text-align: center;">
                    <div style="font-size: 3rem; font-weight: 800; background: var(--cyber-gradient); -webkit-background-clip: text; -webkit-text-fill-color: transparent; margin-bottom: 0.5rem;">
                        2
                    </div>
                    <p style="color: var(--text-light); font-weight: 600;">Happy Clients</p>
                </div>
            </div>
        </div>

        <!-- Call to Action -->
        <div style="margin-top: 4rem; text-align: center; background: white; padding: 3rem; border-radius: 20px; box-shadow: 0 10px 40px rgba(0,0,0,0.1);">
            <h3 style="font-size: 2rem; margin-bottom: 1rem;">Tertarik Bekerja Sama?</h3>
            <p style="color: var(--text-light); margin-bottom: 2rem; max-width: 600px; margin-left: auto; margin-right: auto;">
                Saya siap membantu mewujudkan project impian Anda dengan skills dan pengalaman yang saya miliki.
            </p>
            <div style="display: flex; gap: 1rem; justify-content: center; flex-wrap: wrap;">
                <a href="?page=contact" class="btn btn-primary">
                    <i class="fas fa-paper-plane"></i> Contact Me
                </a>
                <a href="?page=projects" class="btn btn-outline" style="background: white; color: var(--primary); border: 2px solid var(--primary);">
                    <i class="fas fa-briefcase"></i> View Projects
                </a>
            </div>
        </div>
    </div>
</section>