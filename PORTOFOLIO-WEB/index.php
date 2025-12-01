<?php
// config.php - Konfigurasi Website
$site_config = [
    'title' => 'Portfolio - Web Developer',
    'base_url' => 'http://localhost:8000/index.php',
    'author' => 'Muhammad sanwanto'
];

// data.php - Data Portfolio
$profile = [
    'nama' => 'Muhammad Sanwanto',
    'profesi' => 'Web Developer',
    'tagline' => 'Building Digital Solutions with Code',
    'bio' => 'Fresh Graduate Computer Science | Web Developer | Passionate about Building Innovative Solutions

Recent Computer Science graduate from Mercu Buana University (GPA 3.74) with a strong passion for software development and information technology. Possessing hands-on experience in building web applications and managing databases, supported by international certifications in cloud computing and software engineering.',
    'email' => 'sanwanto23@gmail.com',
    'phone' => '0812 - 1386 - 3224',
    'lokasi' => 'Jakarta, Indonesia',
    'github' => 'https://github.com/Sanwanto',
    'linkedin' => 'https://www.linkedin.com/in/muhammad-sanwanto-a898ba2a5/',
    'instagram' => 'https://www.instagram.com/snwto_/',
    'foto' => 'assets/images/profile.jpg'
];

$skills = [
    'Frontend' => [
        ['nama' => 'HTML5', 'level' ],
        ['nama' => 'CSS', 'level' ],
        ['nama' => 'JavaScript', 'level' ],
        ['nama' => 'React.js', 'level'],
        ['nama' => 'Laravel', 'level' ],
       
        
    ],
    'Backend' => [
        ['nama' => 'PHP', 'level' ],
        ['nama' => 'Node.js', 'level' ],
        ['nama' => 'MySQL', 'level' ],
        ['nama' => 'C++', 'level' ],
        ['nama' => 'Phyton', 'level' ],
        ['nama' => 'Oracle', 'level' ]
    ],
    'Tools & Others' => [
        ['nama' => 'Git/GitHub', 'level' ],
        ['nama' => 'VS Code', 'level' ],
        ['nama' => 'Figma', 'level' ],
        ['nama' => 'Debian', 'level' ]
        
    ]
];

$soft_skills = [
    'Problem Solving',
    'Critical Thinking',
    'Team Collaboration',
    'Time Management',
    'Communication',
    'Adaptability'
];

$projects = [
    [
        'id' => 1,
        'judul' => 'Flight Booking Platform',
        'kategori' => 'Full Stack',
        'deskripsi_singkat' => 'Flight ticket booking platform for domestic and international travel.',
        'deskripsi_lengkap' => 'A comprehensive flight booking website that enables users to easily search and book domestic and international flight tickets with integrated payment system.',
        'teknologi' => ['Laravel', 'MySQL', 'Bootstrap', 'JavaScript', 'Midtrans API'],
        'fitur' => [
            'Multi-vendor support',
            'Real-time order tracking',
            'Payment gateway integration',
            'Admin dashboard',
            'Tiket review system',
            'Email notifications'
        ],
        'tantangan' => 'Integrating various payment gateways and ensuring transaction security.',
        'solusi' => 'Implementation of Laravel middleware for validation and encryption of sensitive data, as well as using webhooks for payment confirmation.',
        'gambar' => 'assets/project1.jpg',
        'demo' => 'https://demo-ecommerce.com',
        'github' => 'https://github.com/username/ecommerce'
    ],
    [
        'id' => 2,
        'judul' => 'Hospital Patient Queue System',
        'kategori' => 'Web App',
        'deskripsi_singkat' => 'Patient queue management system for hospitals.',
        'deskripsi_lengkap' => 'A queue management system designed to help patients easily obtain and manage their appointment queue numbers at hospitals.',
        'teknologi' => ['Vue.js', 'Node.js', 'MongoDB', 'Socket.io', 'Tailwind CSS'],
        'fitur' => [
            'Real-time collaboration',
            'Drag & drop interface',
            'Kanban board view',
            'Time tracking',
            'File attachments',
            'Team chat integration'
        ],
        'tantangan' => 'Real-time synchronization across multiple users without lag.',
        'solusi' => 'Using Socket.io for WebSocket connection and database query optimization with indexing.',
        'gambar' => 'assets/project2.jpg',
        'demo' => 'https://demo-Hospital Patient Queue System.com',
        'github' => 'https://github.com/username/Hospital Patient Queue System'
    ],
    

];

$pengalaman = [
    [
        'posisi' => 'IT Infrastructure',
        'perusahaan' => 'PT.Galvindo',
        'periode' => '2024 - 2025',
        'deskripsi' => 'Mengawasi lalu lintas internet yang digunakan oleh karyawan lain dan melakukan perawatan hardware maupun software.'
    ],
    [
        'posisi' => 'IT Infrastructure',
        'perusahaan' => 'PT.Pama Persada Nusantara',
        'periode' => '2019 - 2020',
        'deskripsi' => 'Perawatan CCTV, perkabelan, dan perawatan Hardware dan Software.'
    ],

];

// Routing sederhana
$page = $_GET['page'] ?? 'home';
$project_id = $_GET['id'] ?? null;

// Fungsi Helper
function isActive($current_page, $page) {
    return $current_page === $page ? 'active' : '';
}

function getProjectById($id, $projects) {
    foreach ($projects as $project) {
        if ($project['id'] == $id) {
            return $project;
        }
    }
    return null;
}
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $site_config['title']; ?></title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        :root {
            --primary: #6366f1;
            --secondary: #8b5cf6;
            --dark: #0f172a;
            --light: #f1f5f9;
            --text: #1e293b;
            --text-light: #64748b;
            --success: #10b981;
            --gradient: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            --cyber-gradient: linear-gradient(135deg, #6366f1 0%, #8b5cf6 50%, #ec4899 100%);
        }

        body {
            font-family: 'Inter', -apple-system, BlinkMacSystemFont, 'Segoe UI', sans-serif;
            line-height: 1.6;
            color: var(--text);
            background: var(--light);
        }

        /* Navbar */
        .navbar {
            background: rgba(15, 23, 42, 0.95);
            backdrop-filter: blur(10px);
            padding: 1rem 0;
            position: fixed;
            width: 100%;
            top: 0;
            z-index: 1000;
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.1);
        }

        .nav-container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 2rem;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .logo {
            font-size: 1.5rem;
            font-weight: 700;
            background: var(--cyber-gradient);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
        }

        .nav-menu {
            display: flex;
            list-style: none;
            gap: 2rem;
        }

        .nav-menu a {
            color: white;
            text-decoration: none;
            font-weight: 500;
            transition: all 0.3s;
            position: relative;
        }

        .nav-menu a::after {
            content: '';
            position: absolute;
            bottom: -5px;
            left: 0;
            width: 0;
            height: 2px;
            background: var(--cyber-gradient);
            transition: width 0.3s;
        }

        .nav-menu a:hover::after,
        .nav-menu a.active::after {
            width: 100%;
        }

        .burger {
            display: none;
            flex-direction: column;
            gap: 4px;
            cursor: pointer;
        }

        .burger span {
            width: 25px;
            height: 3px;
            background: white;
            transition: 0.3s;
        }

        /* Container */
        .container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 2rem;
        }

        /* Hero Section */
        .hero {
            min-height: 100vh;
            display: flex;
            align-items: center;
            background: var(--dark);
            position: relative;
            overflow: hidden;
            margin-top: 0;
        }

        .hero::before {
            content: '';
            position: absolute;
            width: 500px;
            height: 500px;
            background: var(--cyber-gradient);
            border-radius: 50%;
            filter: blur(100px);
            opacity: 0.2;
            top: -250px;
            right: -250px;
            animation: float 20s infinite;
        }

        @keyframes float {
            0%, 100% { transform: translate(0, 0); }
            50% { transform: translate(-50px, 50px); }
        }

        .hero-content {
            position: relative;
            z-index: 1;
            color: white;
        }

        .hero-subtitle {
            font-size: 1.2rem;
            color: var(--primary);
            margin-bottom: 0.5rem;
            font-weight: 600;
        }

        .hero-title {
            font-size: 4rem;
            font-weight: 800;
            margin-bottom: 1rem;
            background: var(--cyber-gradient);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
        }

        .hero-text {
            font-size: 1.3rem;
            color: var(--text-light);
            margin-bottom: 2rem;
            max-width: 600px;
        }

        .hero-buttons {
            display: flex;
            gap: 1rem;
            flex-wrap: wrap;
        }

        .btn {
            padding: 1rem 2rem;
            border-radius: 8px;
            text-decoration: none;
            font-weight: 600;
            transition: all 0.3s;
            display: inline-flex;
            align-items: center;
            gap: 0.5rem;
        }

        .btn-primary {
            background: var(--cyber-gradient);
            color: white;
        }

        .btn-primary:hover {
            transform: translateY(-3px);
            box-shadow: 0 10px 30px rgba(99, 102, 241, 0.4);
        }

        .btn-outline {
            border: 2px solid white;
            color: white;
        }

        .btn-outline:hover {
            background: white;
            color: var(--dark);
        }

        /* Section */
        section {
            padding: 5rem 0;
        }

        .section-header {
            text-align: center;
            margin-bottom: 3rem;
        }

        .section-title {
            font-size: 2.5rem;
            font-weight: 700;
            margin-bottom: 1rem;
            position: relative;
            display: inline-block;
        }

        .section-title::after {
            content: '';
            position: absolute;
            bottom: -10px;
            left: 50%;
            transform: translateX(-50%);
            width: 60px;
            height: 4px;
            background: var(--cyber-gradient);
            border-radius: 2px;
        }

        .section-subtitle {
            color: var(--text-light);
            font-size: 1.1rem;
        }

        /* About Page */
        .about-grid {
            display: grid;
            grid-template-columns: 1fr 2fr;
            gap: 3rem;
            align-items: start;
        }

        .profile-card {
            background: white;
            border-radius: 20px;
            padding: 2rem;
            box-shadow: 0 10px 40px rgba(0, 0, 0, 0.1);
            text-align: center;
            position: sticky;
            top: 100px;
        }

        .profile-img {
            width: 200px;
            height: 200px;
            border-radius: 50%;
            object-fit: cover; /* ⚠️ PENTING! */
            border: 5px solid #fff;
            box-shadow: 0 10px 30px rgba(0,0,0,0.2);
            display: block;
            margin: 0 auto;
        }

        .profile-name {
            font-size: 1.8rem;
            font-weight: 700;
            margin-bottom: 0.5rem;
        }

        .profile-title {
            color: var(--primary);
            font-weight: 600;
            margin-bottom: 1rem;
        }

        .profile-contact {
            margin-top: 1.5rem;
            padding-top: 1.5rem;
            border-top: 1px solid #e2e8f0;
        }

        .contact-item {
            display: flex;
            align-items: center;
            gap: 0.8rem;
            margin-bottom: 1rem;
            color: var(--text-light);
            text-decoration: none;
        }

        .contact-item i {
            color: var(--primary);
            width: 20px;
        }

        .about-content {
            background: white;
            border-radius: 20px;
            padding: 2.5rem;
            box-shadow: 0 10px 40px rgba(0, 0, 0, 0.1);
        }

        .about-section {
            margin-bottom: 2.5rem;
        }

        .about-section h3 {
            font-size: 1.5rem;
            margin-bottom: 1rem;
            color: var(--dark);
        }

        .experience-item {
            padding: 1.5rem;
            background: var(--light);
            border-radius: 12px;
            margin-bottom: 1rem;
            border-left: 4px solid var(--primary);
        }

        .experience-item h4 {
            font-size: 1.2rem;
            margin-bottom: 0.3rem;
        }

        .experience-company {
            color: var(--primary);
            font-weight: 600;
            margin-bottom: 0.3rem;
        }

        .experience-period {
            color: var(--text-light);
            font-size: 0.9rem;
            margin-bottom: 0.8rem;
        }

        /* Projects Grid */
        .projects-grid {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(350px, 1fr));
            gap: 2rem;
        }

        .project-card {
            background: white;
            border-radius: 20px;
            overflow: hidden;
            box-shadow: 0 10px 40px rgba(0, 0, 0, 0.1);
            transition: all 0.3s;
            cursor: pointer;
        }

        .project-card:hover {
            transform: translateY(-10px);
            box-shadow: 0 20px 60px rgba(99, 102, 241, 0.2);
        }

        .project-image {
            width: 100%;
            height: 220px;
            background: var(--cyber-gradient);
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 4rem;
            color: white;
            position: relative;
            overflow: hidden;
        }

        .project-image::after {
            content: '';
            position: absolute;
            inset: 0;
            background: linear-gradient(180deg, transparent 0%, rgba(0,0,0,0.5) 100%);
        }

        .project-body {
            padding: 1.5rem;
        }

        .project-category {
            display: inline-block;
            padding: 0.3rem 0.8rem;
            background: rgba(99, 102, 241, 0.1);
            color: var(--primary);
            border-radius: 20px;
            font-size: 0.85rem;
            font-weight: 600;
            margin-bottom: 1rem;
        }

        .project-body h3 {
            font-size: 1.4rem;
            margin-bottom: 0.8rem;
            color: var(--dark);
        }

        .project-body p {
            color: var(--text-light);
            margin-bottom: 1rem;
        }

        .tech-tags {
            display: flex;
            flex-wrap: wrap;
            gap: 0.5rem;
            margin-bottom: 1rem;
        }

        .tech-tag {
            padding: 0.3rem 0.8rem;
            background: var(--light);
            color: var(--text);
            border-radius: 6px;
            font-size: 0.85rem;
        }

        /* Project Detail */
        .project-detail {
            background: white;
            border-radius: 20px;
            overflow: hidden;
            box-shadow: 0 10px 40px rgba(0, 0, 0, 0.1);
        }

        .project-hero {
            height: 400px;
            background: var(--cyber-gradient);
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 6rem;
            color: white;
        }

        .project-detail-body {
            padding: 3rem;
        }

        .project-meta {
            display: flex;
            gap: 2rem;
            margin-bottom: 2rem;
            flex-wrap: wrap;
        }

        .meta-item {
            display: flex;
            align-items: center;
            gap: 0.5rem;
            color: var(--text-light);
        }

        .meta-item i {
            color: var(--primary);
        }

        .project-links {
            display: flex;
            gap: 1rem;
            margin: 2rem 0;
        }

        .feature-list {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 1rem;
            margin: 1.5rem 0;
        }

        .feature-item {
            display: flex;
            align-items: center;
            gap: 0.8rem;
            padding: 1rem;
            background: var(--light);
            border-radius: 10px;
        }

        .feature-item i {
            color: var(--success);
        }

        /* Skills Page */
        .skills-section {
            margin-bottom: 3rem;
        }

        .skills-category {
            background: white;
            border-radius: 20px;
            padding: 2rem;
            box-shadow: 0 10px 40px rgba(0, 0, 0, 0.1);
            margin-bottom: 2rem;
        }

        .skills-category h3 {
            font-size: 1.8rem;
            margin-bottom: 1.5rem;
            color: var(--dark);
        }

        .skill-item {
            margin-bottom: 1.5rem;
        }

        .skill-header {
            display: flex;
            justify-content: space-between;
            margin-bottom: 0.5rem;
        }

        .skill-name {
            font-weight: 600;
        }

        .skill-level {
            color: var(--primary);
            font-weight: 600;
        }

        .skill-bar {
            height: 10px;
            background: var(--light);
            border-radius: 10px;
            overflow: hidden;
        }

        .skill-progress {
            height: 100%;
            background: var(--cyber-gradient);
            border-radius: 10px;
            transition: width 1s ease;
        }

        .soft-skills {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 1rem;
            margin-top: 1.5rem;
        }

        .soft-skill-item {
            padding: 1rem 1.5rem;
            background: white;
            border-radius: 10px;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.05);
            display: flex;
            align-items: center;
            font-size: 1rem;
            font-weight: 500;
            color: var(--dark);
            transition: all 0.3s ease;
        }

        .soft-skill-item:hover {
            transform: translateY(-3px);
            box-shadow: 0 5px 20px rgba(0, 0, 0, 0.1);
        }

        /* Contact Page */
        .contact-grid {
            display: grid;
            grid-template-columns: 1fr 2fr;
            gap: 3rem;
        }

        .contact-info {
            background: white;
            border-radius: 20px;
            padding: 2rem;
            box-shadow: 0 10px 40px rgba(0, 0, 0, 0.1);
            height: fit-content;
        }

        .contact-info h3 {
            font-size: 1.5rem;
            margin-bottom: 1.5rem;
        }

        .info-item {
            display: flex;
            align-items: start;
            gap: 1rem;
            margin-bottom: 1.5rem;
        }

        .info-icon {
            width: 40px;
            height: 40px;
            background: rgba(99, 102, 241, 0.1);
            border-radius: 10px;
            display: flex;
            align-items: center;
            justify-content: center;
            color: var(--primary);
            flex-shrink: 0;
        }

        .social-links {
            display: flex;
            gap: 1rem;
            margin-top: 2rem;
        }

        .social-link {
            width: 50px;
            height: 50px;
            background: var(--light);
            border-radius: 10px;
            display: flex;
            align-items: center;
            justify-content: center;
            color: var(--primary);
            text-decoration: none;
            transition: all 0.3s;
        }

        .social-link:hover {
            background: var(--cyber-gradient);
            color: white;
            transform: translateY(-5px);
        }

        .contact-form {
            background: white;
            border-radius: 20px;
            padding: 2.5rem;
            box-shadow: 0 10px 40px rgba(0, 0, 0, 0.1);
        }

        .form-group {
            margin-bottom: 1.5rem;
        }

        .form-group label {
            display: block;
            margin-bottom: 0.5rem;
            font-weight: 600;
            color: var(--dark);
        }

        .form-control {
            width: 100%;
            padding: 1rem;
            border: 2px solid #e2e8f0;
            border-radius: 10px;
            font-size: 1rem;
            transition: all 0.3s;
        }

        .form-control:focus {
            outline: none;
            border-color: var(--primary);
            box-shadow: 0 0 0 3px rgba(99, 102, 241, 0.1);
        }

        textarea.form-control {
            resize: vertical;
            min-height: 150px;
        }

        .btn-submit {
            width: 100%;
            padding: 1rem 2rem;
            background: var(--cyber-gradient);
            color: white;
            border: none;
            border-radius: 10px;
            font-size: 1rem;
            font-weight: 600;
            cursor: pointer;
            transition: all 0.3s;
        }

        .btn-submit:hover {
            transform: translateY(-3px);
            box-shadow: 0 10px 30px rgba(99, 102, 241, 0.4);
        }

        .alert {
            padding: 1rem;
            border-radius: 10px;
            margin-bottom: 1.5rem;
        }

        .alert-success {
            background: #d1fae5;
            color: #065f46;
            border: 1px solid #6ee7b7;
        }

        .alert-error {
            background: #fee2e2;
            color: #991b1b;
            border: 1px solid #fca5a5;
        }

        /* Footer */
        footer {
            background: var(--dark);
            color: white;
            padding: 3rem 0 1rem;
            margin-top: 5rem;
        }

        .footer-content {
            display: grid;
            grid-template-columns: 2fr 1fr 1fr;
            gap: 3rem;
            margin-bottom: 2rem;
        }

        .footer-about h3 {
            margin-bottom: 1rem;
        }

        .footer-links h4 {
            margin-bottom: 1rem;
        }

        .footer-links ul {
            list-style: none;
        }

        .footer-links a {
            color: var(--text-light);
            text-decoration: none;
            display: block;
            margin-bottom: 0.5rem;
            transition: color 0.3s;
        }

        .footer-links a:hover {
            color: var(--primary);
        }

        .footer-bottom {
            border-top: 1px solid rgba(255, 255, 255, 0.1);
            padding-top: 1.5rem;
            text-align: center;
            color: var(--text-light);
        }

        /* Responsive */
        @media (max-width: 768px) {
    .soft-skills {
        grid-template-columns: 1fr;
        gap: 0.75rem;
    }
    
    .soft-skill-item {
        padding: 0.875rem 1.25rem;
        font-size: 0.95rem;
    }
}
        @media (max-width: 768px) {
            .burger {
                display: flex;
            }

            .nav-menu {
                position: fixed;
                left: -100%;
                top: 70px;
                flex-direction: column;
                background: var(--dark);
                width: 100%;
                text-align: center;
                transition: 0.3s;
                padding: 2rem;
            }

            .nav-menu.active {
                left: 0;
            }

            .hero-title {
                font-size: 2.5rem;
            }

            .hero-text {
                font-size: 1.1rem;
            }

            .about-grid,
            .contact-grid {
                grid-template-columns: 1fr;
            }

            .projects-grid {
                grid-template-columns: 1fr;
            }

            .footer-content {
                grid-template-columns: 1fr;
            }

            .profile-card {
                position: static;
            }
        }

        @media (max-width: 480px) {
            .hero-title {
                font-size: 2rem;
            }

            .section-title {
                font-size: 2rem;
            }
        }

    </style>
</head>
<body>
    <!-- Navbar -->
    <nav class="navbar">
        <div class="nav-container">
            <div class="logo">
                <i class="fas fa-code"></i> Portfolio
            </div>
            <ul class="nav-menu" id="navMenu">
                <li><a href="?page=home" class="<?php echo isActive($page, 'home'); ?>">Home</a></li>
                <li><a href="?page=about" class="<?php echo isActive($page, 'about'); ?>">About</a></li>
                <li><a href="?page=projects" class="<?php echo isActive($page, 'projects'); ?>">Projects</a></li>
                <li><a href="?page=skills" class="<?php echo isActive($page, 'skills'); ?>">Skills</a></li>
                <li><a href="?page=contact" class="<?php echo isActive($page, 'contact'); ?>">Contact</a></li>
            </ul>
            <div class="burger" id="burger">
                <span></span>
                <span></span>
                <span></span>
            </div>
        </div>
    </nav>

    <?php
    // Routing
    switch($page) {
        case 'home':
            include 'pages/home.php';
            break;
        case 'about':
            include 'pages/about.php';
            break;
        case 'projects':
            include 'pages/projects.php';
            break;
        case 'project-detail':
            include 'pages/project-detail.php';
            break;
        case 'skills':
            include 'pages/skills.php';
            break;
        case 'contact':
            include 'pages/contact.php';
            break;
        default:
            include 'pages/home.php';
    }
    ?>

    <!-- Footer -->
    <footer>
        <div class="container">
            <div class="footer-content">
                <div class="footer-about">
                    <h3><?php echo $profile['nama']; ?></h3>
                    <p><?php echo $profile['tagline']; ?></p>
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
                </div>
                <div class="footer-links">
                    <h4>Quick Links</h4>
                    <ul>
                        <li><a href="?page=home">Home</a></li>
                        <li><a href="?page=about">About</a></li>
                        <li><a href="?page=projects">Projects</a></li>
                        <li><a href="?page=skills">Skills</a></li>
                    </ul>
                </div>
                <div class="footer-links">
                    <h4>Contact</h4>
                    <ul>
                        <li><a href="mailto:<?php echo $profile['email']; ?>"><?php echo $profile['email']; ?></a></li>
                        <li><a href="tel:<?php echo $profile['phone']; ?>"><?php echo $profile['phone']; ?></a></li>
                        <li><?php echo $profile['lokasi']; ?></li>
                    </ul>
                </div>
            </div>
            <div class="footer-bottom">
                <p>&copy; <?php echo date('Y'); ?> <?php echo $profile['nama']; ?>. All rights reserved.</p>
            </div>
        </div>
    </footer>

    <script>
        // Mobile menu toggle
        const burger = document.getElementById('burger');
        const navMenu = document.getElementById('navMenu');

        burger.addEventListener('click', () => {
            navMenu.classList.toggle('active');
        });

        // Close menu when clicking outside
        document.addEventListener('click', (e) => {
            if (!burger.contains(e.target) && !navMenu.contains(e.target)) {
                navMenu.classList.remove('active');
            }
        });

        // Skill bar animation
        const observerOptions = {
            threshold: 0.5
        };

        const observer = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    const progressBars = entry.target.querySelectorAll('.skill-progress');
                    progressBars.forEach(bar => {
                        const width = bar.getAttribute('data-width');
                        bar.style.width = width + '%';
                    });
                }
            });
        }, observerOptions);

        document.querySelectorAll('.skills-category').forEach(section => {
            observer.observe(section);
        });

        // Smooth scroll
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function (e) {
                e.preventDefault();
                const target = document.querySelector(this.getAttribute('href'));
                if (target) {
                    target.scrollIntoView({
                        behavior: 'smooth',
                        block: 'start'
                    });
                }
            });
        });
    </script>
</body>
</html>