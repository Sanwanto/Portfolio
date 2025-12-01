<?php
// Cek status dari URL parameter (hasil dari EmailJS)
$pesan_status = '';
$status_type = '';

if (isset($_GET['status'])) {
    if ($_GET['status'] === 'success') {
        $pesan_status = "Terima kasih! Pesan Anda telah berhasil terkirim. Saya akan segera menghubungi Anda.";
        $status_type = 'success';
    } elseif ($_GET['status'] === 'error') {
        $pesan_status = "Gagal mengirim pesan. Silakan coba lagi atau hubungi saya langsung via email.";
        $status_type = 'error';
    }
}
?>

<section style="margin-top: 100px;">
    <div class="container">
        <div class="section-header">
            <h2 class="section-title">Get In Touch</h2>
            <p class="section-subtitle">Mari diskusikan project Anda selanjutnya</p>
        </div>

        <div class="contact-grid">
            <!-- Contact Info -->
            <div class="contact-info">
                <h3 style="margin-bottom: 1.5rem;">Contact Information</h3>
                <p style="color: var(--text-light); margin-bottom: 2rem;">
                    Jangan ragu untuk menghubungi saya. Saya akan merespon secepat mungkin!
                </p>

                <div class="info-item">
                    <div class="info-icon">
                        <i class="fas fa-envelope"></i>
                    </div>
                    <div>
                        <strong>Email</strong>
                        <p style="color: var(--text-light); margin-top: 0.3rem;">
                            <a href="mailto:<?php echo $profile['email']; ?>" style="color: var(--primary); text-decoration: none;">
                                <?php echo $profile['email']; ?>
                            </a>
                        </p>
                    </div>
                </div>

                <div class="info-item">
                    <div class="info-icon">
                        <i class="fas fa-phone"></i>
                    </div>
                    <div>
                        <strong>Phone</strong>
                        <p style="color: var(--text-light); margin-top: 0.3rem;">
                            <a href="tel:<?php echo $profile['phone']; ?>" style="color: var(--primary); text-decoration: none;">
                                <?php echo $profile['phone']; ?>
                            </a>
                        </p>
                    </div>
                </div>

                <div class="info-item">
                    <div class="info-icon">
                        <i class="fas fa-map-marker-alt"></i>
                    </div>
                    <div>
                        <strong>Location</strong>
                        <p style="color: var(--text-light); margin-top: 0.3rem;">
                            <?php echo $profile['lokasi']; ?>
                        </p>
                    </div>
                </div>

                <div style="border-top: 1px solid #e2e8f0; padding-top: 1.5rem; margin-top: 1.5rem;">
                    <strong style="display: block; margin-bottom: 1rem;">Follow Me</strong>
                    <div class="social-links" style="margin-top: 0;">
                        <a href="<?php echo $profile['github']; ?>" class="social-link" target="_blank">
                            <i class="fab fa-github"></i>
                        </a>
                        <a href="<?php echo $profile['linkedin']; ?>" class="social-link" target="_blank">
                            <i class="fab fa-linkedin"></i>
                        </a>
                        <a href="<?php echo $profile['instagram']; ?>" class="social-link" target="_blank">
                            <i class="fab fa-instagram"></i>
                        </a>
                        <a href="mailto:<?php echo $profile['email']; ?>" class="social-link">
                            <i class="fas fa-envelope"></i>
                        </a>
                    </div>
                </div>

                <!-- Availability Status -->
                <div style="margin-top: 2rem; padding: 1rem; background: #d1fae5; border-radius: 10px; border-left: 4px solid #10b981;">
                    <div style="display: flex; align-items: center; gap: 0.5rem; color: #065f46; font-weight: 600;">
                        <i class="fas fa-circle" style="font-size: 0.5rem; color: #10b981; animation: pulse 2s infinite;"></i>
                        Available for Freelance
                    </div>
                    <p style="color: #047857; font-size: 0.9rem; margin-top: 0.5rem;">
                        Currently accepting new projects
                    </p>
                </div>
            </div>

            <!-- Contact Form -->
            <div class="contact-form">
                <h3 style="font-size: 1.8rem; margin-bottom: 1rem;">Send Me a Message</h3>
                <p style="color: var(--text-light); margin-bottom: 2rem;">
                    Isi form di bawah untuk mengirim pesan langsung kepada saya.
                </p>

                <?php if ($pesan_status): ?>
                    <div class="alert alert-<?php echo $status_type; ?>">
                        <i class="fas fa-<?php echo $status_type === 'success' ? 'check-circle' : 'exclamation-circle'; ?>"></i>
                        <?php echo $pesan_status; ?>
                    </div>
                <?php endif; ?>
                
                <form id="contact-form">
                    <div class="form-group">
                        <label>
                            <i class="fas fa-user" style="color: var(--primary);"></i> Nama Lengkap *
                        </label>
                        <input 
                            type="text" 
                            name="from_name" 
                            class="form-control" 
                            placeholder="Masukkan nama Anda"
                            required
                        >
                    </div>

                    <div class="form-group">
                        <label>
                            <i class="fas fa-envelope" style="color: var(--primary);"></i> Email *
                        </label>
                        <input 
                            type="email" 
                            name="from_email" 
                            class="form-control" 
                            placeholder="nama@example.com"
                            required
                        >
                    </div>

                    <div class="form-group">
                        <label>
                            <i class="fas fa-tag" style="color: var(--primary);"></i> Subjek *
                        </label>
                        <input 
                            type="text" 
                            name="subject" 
                            class="form-control" 
                            placeholder="Subjek pesan"
                            required
                        >
                    </div>

                    <div class="form-group">
                        <label>
                            <i class="fas fa-comment" style="color: var(--primary);"></i> Pesan *
                        </label>
                        <textarea 
                            name="message" 
                            class="form-control" 
                            rows="5"
                            placeholder="Tulis pesan Anda di sini..."
                            required
                        ></textarea>
                    </div>

                    <button type="submit" class="btn-submit">
                        <i class="fas fa-paper-plane"></i> Kirim Pesan
                    </button>
                </form>

                <p style="text-align: center; color: var(--text-light); font-size: 0.9rem; margin-top: 1.5rem;">
                    <i class="fas fa-lock"></i> Informasi Anda aman dan tidak akan dibagikan ke pihak ketiga
                </p>
            </div>
        </div>

        <!-- FAQ Section -->
        <div style="margin-top: 5rem;">
            <div class="section-header">
                <h2 class="section-title">Frequently Asked Questions</h2>
                <p class="section-subtitle">Pertanyaan yang sering diajukan</p>
            </div>

            <div style="max-width: 900px; margin: 0 auto;">
                <div style="background: white; border-radius: 20px; padding: 2.5rem; box-shadow: 0 10px 40px rgba(0,0,0,0.1); margin-bottom: 1.5rem;">
                    <h4 style="font-size: 1.2rem; margin-bottom: 0.8rem; color: var(--primary);">
                        <i class="fas fa-question-circle"></i> Berapa lama waktu pengerjaan project?
                    </h4>
                    <p style="color: var(--text-light); line-height: 1.8;">
                        Tergantung kompleksitas project, biasanya 2-4 minggu untuk website sederhana dan 1-3 bulan untuk aplikasi web yang lebih kompleks.
                    </p>
                </div>

                <div style="background: white; border-radius: 20px; padding: 2.5rem; box-shadow: 0 10px 40px rgba(0,0,0,0.1); margin-bottom: 1.5rem;">
                    <h4 style="font-size: 1.2rem; margin-bottom: 0.8rem; color: var(--primary);">
                        <i class="fas fa-question-circle"></i> Apakah menerima project freelance?
                    </h4>
                    <p style="color: var(--text-light); line-height: 1.8;">
                        Ya, saya terbuka untuk project freelance baik jangka pendek maupun panjang. Silakan hubungi saya untuk diskusi lebih lanjut.
                    </p>
                </div>

                <div style="background: white; border-radius: 20px; padding: 2.5rem; box-shadow: 0 10px 40px rgba(0,0,0,0.1); margin-bottom: 1.5rem;">
                    <h4 style="font-size: 1.2rem; margin-bottom: 0.8rem; color: var(--primary);">
                        <i class="fas fa-question-circle"></i> Teknologi apa yang paling sering digunakan?
                    </h4>
                    <p style="color: var(--text-light); line-height: 1.8;">
                        Saya paling sering menggunakan PHP (Laravel), JavaScript (React/Vue), dan MySQL untuk backend, serta HTML, CSS, dan Tailwind untuk frontend.
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- EmailJS SDK -->
<script src="https://cdn.jsdelivr.net/npm/@emailjs/browser@3/dist/email.min.js"></script>
<script>
    // Initialize EmailJS
    (function() {
        emailjs.init("xp6TI9Rhof80tjqFy"); // ✅ Public Key sudah benar
    })();

    // Handle form submission
    document.getElementById('contact-form').addEventListener('submit', function(event) {
        event.preventDefault();

        const submitBtn = event.target.querySelector('button[type="submit"]');
        const originalText = submitBtn.innerHTML;

        submitBtn.disabled = true;
        submitBtn.innerHTML = '<i class="fas fa-spinner fa-spin"></i> Mengirim...';

        // Send email using EmailJS
        emailjs.sendForm(
            'service_r7v6cds',      // ⚠️ GANTI dengan Service ID Anda
            'template_mha2nk8',     // ⚠️ GANTI dengan Template ID Anda
            this
        ).then(function(response) {
            console.log('SUCCESS!', response.status, response.text);
            window.location.href = '?page=contact&status=success#contact-form';
        }, function(error) {
            console.log('FAILED...', error);
            window.location.href = '?page=contact&status=error#contact-form';
            submitBtn.disabled = false;
            submitBtn.innerHTML = originalText;
        });
    });
</script>

<style>
@keyframes pulse {
    0%, 100% { opacity: 1; }
    50% { opacity: 0.5; }
}
</style>