<section style="margin-top: 100px;">
    <div class="container">
        <div class="section-header">
            <h2 class="section-title">About Me</h2>
            <p class="section-subtitle">Get to know me better</p>
        </div>

        <div class="about-grid">
 
   <!-- Profile Card -->
   <div class="profile-card">
    <?php
    // Simple & langsung ke tujuan
    $foto_path = '/PORTOFOLIO-WEB/assets/images/profile.jpg';
    ?>
    
    <!-- Tampilkan foto -->
    <img src="<?php echo $foto_path; ?>" 
         alt="<?php echo htmlspecialchars($profile['nama']); ?>" 
         class="profile-img"
         onerror="this.src='https://via.placeholder.com/200/6366f1/ffffff?text=No+Photo'">
    
    <h2 class="profile-name"><?php echo $profile['nama']; ?></h2>
    <p class="profile-title"><?php echo $profile['profesi']; ?></p>
    
    <div class="profile-contact">
        <a href="mailto:<?php echo $profile['email']; ?>" class="contact-item">
            <i class="fas fa-envelope"></i>
            <span><?php echo $profile['email']; ?></span>
        </a>
        <a href="tel:<?php echo $profile['phone']; ?>" class="contact-item">
            <i class="fas fa-phone"></i>
            <span><?php echo $profile['phone']; ?></span>
        </a>
        <div class="contact-item">
            <i class="fas fa-map-marker-alt"></i>
            <span><?php echo $profile['lokasi']; ?></span>
        </div>
    </div>

    <div class="social-links">
        <a href="<?php echo $profile['github']; ?>" class="social-link" target="_blank">
            <i class="fab fa-github"></i>
        </a>
        <a href="<?php echo $profile['linkedin']; ?>" class="social-link" target="_blank">
            <i class="fab fa-linkedin"></i>
        </a>
        <a href="<?php echo $profile['instagram']; ?>" class="social-link" target="_blank">
            <i class="fab fa-instagram"></i>
        </a>
    </div>

    <a href="?page=contact" class="btn btn-primary" style="width: 100%; margin-top: 1.5rem; justify-content: center;">
        <i class="fas fa-paper-plane"></i> Hire Me
    </a>
</div>

            <!-- About Content -->
            <div class="about-content">
                <div class="about-section">
                    <h3><i class="fas fa-user" style="color: var(--primary); margin-right: 0.5rem;"></i> Bio</h3>
                    <p style="line-height: 1.8; color: var(--text-light);">
                        <?php echo $profile['bio']; ?>
                    </p>
                    <p style="line-height: 1.8; color: var(--text-light); margin-top: 1rem;">
                        Saya percaya bahwa kode yang baik bukan hanya tentang menyelesaikan masalah, tetapi juga tentang menciptakan solusi yang elegant, maintainable, dan scalable. Setiap project adalah kesempatan untuk belajar dan berkembang.
                    </p>
                </div>

                <div class="about-section">
                    <h3><i class="fas fa-briefcase" style="color: var(--primary); margin-right: 0.5rem;"></i> INTERNSHIP</h3>
                    <?php foreach($pengalaman as $exp): ?>
                        <div class="experience-item">
                            <h4><?php echo $exp['posisi']; ?></h4>
                            <p class="experience-company">
                                <i class="fas fa-building"></i> <?php echo $exp['perusahaan']; ?>
                            </p>
                            <p class="experience-period">
                                <i class="fas fa-calendar"></i> <?php echo $exp['periode']; ?>
                            </p>
                            <p style="color: var(--text-light);"><?php echo $exp['deskripsi']; ?></p>
                        </div>
                    <?php endforeach; ?>
                </div>

                <div class="about-section">
                    <h3><i class="fas fa-graduation-cap" style="color: var(--primary); margin-right: 0.5rem;"></i> Education</h3>
                    <div class="experience-item">
                        <h4>Bachelor of Computer Science</h4>
                        <p class="experience-company">
                            <i class="fas fa-university"></i> Universitas Mercu Buana
                        </p>
                        <p class="experience-period">
                            <i class="fas fa-calendar"></i> 2021 - 2025
                        </p>
                        <p style="color: var(--text-light);">
                            Fokus pada Software Engineering dan Web Development. IPK: 3.74/4.00
                        </p>
                    </div>
                </div>

                <div class="about-section">
                    <h3><i class="fas fa-certificate" style="color: var(--primary); margin-right: 0.5rem;"></i> Certifications</h3>
                    <div style="display: grid; gap: 1rem;">
                        <div style="padding: 1rem; background: var(--light); border-radius: 10px;">
                            <strong>Oracle Cloud Infrastructur</strong> - Oracle University
                        </div>
                        <div style="padding: 1rem; background: var(--light); border-radius: 10px;">
                            <strong>Sofware Engineering</strong> - Badan Nasional Sertifikasi Profesi
                        </div>
                        <div style="padding: 1rem; background: var(--light); border-radius: 10px;">
                            <strong>Microsoft Azure</strong> - Microsoft
                        </div>
                    </div>
                </div>

                <div class="about-section">
                    <h3><i class="fas fa-heart" style="color: var(--primary); margin-right: 0.5rem;"></i> Interests</h3>
                    <div class="soft-skills">
                        <div class="soft-skill-item">
                            <i class="fas fa-code"></i> Coding
                        </div>
                        <div class="soft-skill-item">
                            <i class="fas fa-book"></i> Reading
                        </div>
                        <div class="soft-skill-item">
                            <i class="fas fa-gamepad"></i> Gaming
                        </div>
                        <div class="soft-skill-item">
                            <i class="fas fa-camera"></i> Photography
                        </div>
                        <div class="soft-skill-item">
                            <i class="fas fa-music"></i> Music
                        </div>
                        <div class="soft-skill-item">
                            <i class="fas fa-hiking"></i> Traveling
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>