<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tentang Kami - About Us</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            line-height: 1.6;
            color: #333;
            overflow-x: hidden;
        }

        /* Hero Section */
        .hero {
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            text-align: center;
            color: white;
            position: relative;
            overflow: hidden;
        }

        .hero::before {
            content: '';
            position: absolute;
            width: 200%;
            height: 200%;
            background: url('data:image/svg+xml,<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 100 100"><circle cx="50" cy="50" r="2" fill="rgba(255,255,255,0.1)"/></svg>') repeat;
            animation: float 20s infinite linear;
        }

        @keyframes float {
            0% { transform: translate(-50%, -50%) rotate(0deg); }
            100% { transform: translate(-50%, -50%) rotate(360deg); }
        }

        .hero-content {
            z-index: 2;
            max-width: 800px;
            padding: 0 20px;
        }

        .hero h1 {
            font-size: 4rem;
            margin-bottom: 20px;
            font-weight: 700;
            text-shadow: 2px 2px 4px rgba(0,0,0,0.3);
            animation: fadeInUp 1s ease-out;
        }

        .hero p {
            font-size: 1.4rem;
            opacity: 0.9;
            animation: fadeInUp 1s ease-out 0.3s both;
        }

        @keyframes fadeInUp {
            from {
                opacity: 0;
                transform: translateY(30px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        /* Content Sections */
        .section {
            padding: 100px 0;
            overflow: hidden;
        }

        .container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 20px;
        }

        .section-title {
            text-align: center;
            font-size: 3rem;
            margin-bottom: 20px;
            color: #2c3e50;
            font-weight: 700;
        }

        .section-subtitle {
            text-align: center;
            font-size: 1.2rem;
            color: #666;
            margin-bottom: 60px;
            max-width: 600px;
            margin-left: auto;
            margin-right: auto;
        }

        /* Story Section */
        .story-section {
            background: #f8f9fa;
        }

        .story-content {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 60px;
            align-items: center;
        }

        .story-text {
            font-size: 1.1rem;
            line-height: 1.8;
        }

        .story-text h3 {
            font-size: 1.8rem;
            color: #2c3e50;
            margin-bottom: 20px;
        }

        .story-image {
            position: relative;
        }

        .story-image-placeholder {
            width: 100%;
            height: 400px;
            background: linear-gradient(135deg, #667eea, #764ba2);
            border-radius: 20px;
            display: flex;
            align-items: center;
            justify-content: center;
            color: white;
            font-size: 4rem;
            box-shadow: 0 20px 40px rgba(0,0,0,0.1);
            transform: rotate(-2deg);
            transition: all 0.3s ease;
        }

        .story-image-placeholder:hover {
            transform: rotate(0deg) scale(1.05);
        }

        /* Vision Mission Values */
        .vmv-grid {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 40px;
            margin-top: 60px;
        }

        .vmv-card {
            background: white;
            padding: 40px;
            border-radius: 20px;
            text-align: center;
            box-shadow: 0 15px 35px rgba(0,0,0,0.1);
            transition: all 0.3s ease;
            position: relative;
            overflow: hidden;
        }

        .vmv-card::before {
            content: '';
            position: absolute;
            top: 0;
            left: -100%;
            width: 100%;
            height: 100%;
            background: linear-gradient(90deg, transparent, rgba(255,255,255,0.2), transparent);
            transition: left 0.5s;
        }

        .vmv-card:hover::before {
            left: 100%;
        }

        .vmv-card:hover {
            transform: translateY(-10px);
            box-shadow: 0 25px 50px rgba(0,0,0,0.15);
        }

        .vmv-icon {
            width: 80px;
            height: 80px;
            background: linear-gradient(135deg, #667eea, #764ba2);
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            margin: 0 auto 25px;
            font-size: 2rem;
            color: white;
        }

        .vmv-card h3 {
            font-size: 1.5rem;
            color: #2c3e50;
            margin-bottom: 15px;
        }

        .vmv-card p {
            color: #666;
            line-height: 1.6;
        }

        /* Team Section */
        .team-section {
            background: linear-gradient(135deg, #f5f7fa 0%, #c3cfe2 100%);
        }

        .team-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
            gap: 40px;
            margin-top: 60px;
        }

        .team-member {
            background: white;
            border-radius: 20px;
            padding: 30px;
            text-align: center;
            box-shadow: 0 15px 35px rgba(0,0,0,0.1);
            transition: all 0.3s ease;
            position: relative;
            overflow: hidden;
        }

        .team-member:hover {
            transform: translateY(-10px) scale(1.02);
            box-shadow: 0 25px 50px rgba(0,0,0,0.15);
        }

        .member-photo {
            width: 120px;
            height: 120px;
            background: linear-gradient(135deg, #667eea, #764ba2);
            border-radius: 50%;
            margin: 0 auto 20px;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 3rem;
            color: white;
            position: relative;
            overflow: hidden;
        }

        .member-photo::after {
            content: '';
            position: absolute;
            top: -50%;
            right: -50%;
            width: 100%;
            height: 100%;
            background: linear-gradient(45deg, transparent, rgba(255,255,255,0.3), transparent);
            transform: rotate(45deg);
            transition: all 0.3s ease;
        }

        .team-member:hover .member-photo::after {
            right: 150%;
        }

        .member-name {
            font-size: 1.3rem;
            color: #2c3e50;
            margin-bottom: 5px;
            font-weight: 600;
        }

        .member-role {
            color: #667eea;
            font-weight: 500;
            margin-bottom: 15px;
        }

        .member-bio {
            color: #666;
            font-size: 0.9rem;
            line-height: 1.5;
        }

        /* Stats Section */
        .stats-section {
            background: #2c3e50;
            color: white;
        }

        .stats-grid {
            display: grid;
            grid-template-columns: repeat(4, 1fr);
            gap: 40px;
        }

        .stat-item {
            text-align: center;
            padding: 30px;
        }

        .stat-number {
            font-size: 3rem;
            font-weight: 700;
            color: #667eea;
            margin-bottom: 10px;
            display: block;
        }

        .stat-label {
            font-size: 1.1rem;
            opacity: 0.8;
        }

        /* Timeline */
        .timeline-section {
            background: white;
        }

        .timeline {
            position: relative;
            max-width: 800px;
            margin: 0 auto;
        }

        .timeline::after {
            content: '';
            position: absolute;
            width: 4px;
            background: linear-gradient(135deg, #667eea, #764ba2);
            top: 0;
            bottom: 0;
            left: 50%;
            margin-left: -2px;
            border-radius: 2px;
        }

        .timeline-item {
            padding: 20px 40px;
            position: relative;
            background: inherit;
            width: 50%;
        }

        .timeline-item::after {
            content: '';
            position: absolute;
            width: 20px;
            height: 20px;
            right: -10px;
            background: #667eea;
            border: 4px solid white;
            top: 30px;
            border-radius: 50%;
            z-index: 1;
        }

        .timeline-item:nth-child(even) {
            left: 50%;
        }

        .timeline-item:nth-child(even)::after {
            left: -10px;
        }

        .timeline-content {
            padding: 20px 30px;
            background: #f8f9fa;
            border-radius: 15px;
            box-shadow: 0 10px 25px rgba(0,0,0,0.1);
            transition: all 0.3s ease;
        }

        .timeline-content:hover {
            transform: translateY(-5px);
            box-shadow: 0 15px 35px rgba(0,0,0,0.15);
        }

        .timeline-year {
            color: #667eea;
            font-weight: 600;
            font-size: 1.1rem;
        }

        .timeline-title {
            margin: 10px 0;
            color: #2c3e50;
            font-weight: 600;
        }

        /* Responsive */
        @media (max-width: 768px) {
            .hero h1 {
                font-size: 2.5rem;
            }
            
            .hero p {
                font-size: 1.1rem;
            }

            .section-title {
                font-size: 2rem;
            }

            .story-content {
                grid-template-columns: 1fr;
                gap: 40px;
            }

            .vmv-grid {
                grid-template-columns: 1fr;
            }

            .stats-grid {
                grid-template-columns: repeat(2, 1fr);
                gap: 20px;
            }

            .timeline::after {
                left: 31px;
            }

            .timeline-item {
                width: 100%;
                padding-left: 70px;
                padding-right: 25px;
            }

            .timeline-item::after {
                left: 22px;
            }

            .timeline-item:nth-child(even) {
                left: 0%;
            }

            .timeline-item:nth-child(even)::after {
                left: 22px;
            }
        }

        .scroll-indicator {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 4px;
            background: rgba(102, 126, 234, 0.3);
            z-index: 1000;
        }

        .scroll-progress {
            height: 100%;
            background: linear-gradient(90deg, #667eea, #764ba2);
            width: 0%;
            transition: width 0.1s ease;
        }

        .mybutton {
            background: #000000; /* hitam */
            color: white;        /* supaya teks terlihat */
            padding: 10px 20px;
            border-radius: 8px;
            text-decoration: none;
            display: inline-block;
            margin-top: 10px; 
        }

        .mybutton:hover {
            background: #333333; /* sedikit abu-abu saat hover */
        }

    </style>
</head>
<body>

    <div class="scroll-indicator">
        <div class="scroll-progress" id="scrollProgress"></div>
    </div>

    <!-- Hero Section -->
    <section class="hero">
        <div class="hero-content">
            <h1>Tentang Kami</h1>
            <p>Membangun masa depan digital dengan inovasi, dedikasi, dan semangat yang tak terbatas</p>
            <a class="mybutton" href="{{ route(name: 'welcome.page') }}">HOME</a>
        </div>
    </section>

    <!-- Story Section -->
    <section class="section story-section">
        <div class="container">
            <div class="story-content">
                <div class="story-text">
                    <h3>Cerita Kami Dimulai</h3>
                    <p>Pada tahun 2015, kami memulai perjalanan dengan visi sederhana namun ambisius: menciptakan solusi digital yang tidak hanya inovatif, tetapi juga memberikan dampak nyata bagi masyarakat dan dunia bisnis.</p>
                    <p>Berawal dari sebuah tim kecil yang terdiri dari para pemimpi dan inovator, kini kami telah berkembang menjadi perusahaan teknologi terdepan yang melayani klien di seluruh Indonesia dan Asia Tenggara.</p>
                    <p>Setiap proyek yang kami kerjakan adalah manifestasi dari komitmen kami untuk terus belajar, berinovasi, dan memberikan yang terbaik bagi setiap klien yang mempercayai kami.</p>
                </div>
                <div class="story-image">
                    <div class="story-image-placeholder">🏢</div>
                </div>
            </div>
        </div>
    </section>

    <!-- Vision Mission Values -->
    <section class="section">
        <div class="container">
            <h2 class="section-title">Visi, Misi & Nilai</h2>
            <p class="section-subtitle">Fondasi yang mengarahkan setiap langkah kami menuju masa depan yang lebih baik</p>
            
            <div class="vmv-grid">
                <div class="vmv-card">
                    <div class="vmv-icon">🎯</div>
                    <h3>Visi</h3>
                    <p>Menjadi perusahaan teknologi terdepan yang menghadirkan transformasi digital berkelanjutan untuk kemajuan bangsa dan dunia.</p>
                </div>
                
                <div class="vmv-card">
                    <div class="vmv-icon">🚀</div>
                    <h3>Misi</h3>
                    <p>Mengembangkan solusi inovatif yang memberdayakan bisnis dan masyarakat melalui teknologi canggih yang mudah diakses dan berkelanjutan.</p>
                </div>
                
                <div class="vmv-card">
                    <div class="vmv-icon">💎</div>
                    <h3>Nilai</h3>
                    <p>Integritas, inovasi, kolaborasi, dan keunggulan dalam setiap aspek pekerjaan yang kami lakukan untuk menciptakan dampak positif.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Team Section -->
    <section class="section team-section">
        <div class="container">
            <h2 class="section-title">Tim Kami</h2>
            <p class="section-subtitle">Berkenalan dengan para ahli yang berdedikasi untuk kesuksesan Anda</p>
            
            <div class="team-grid">
                <div class="team-member">
                    <div class="member-photo">👨‍💼</div>
                    <div class="member-name">Ahmad Rizki</div>
                    <div class="member-role">Chief Executive Officer</div>
                    <p class="member-bio">Pemimpin visioner dengan pengalaman 15 tahun dalam industri teknologi. Memimpin perusahaan dengan fokus pada inovasi dan pertumbuhan berkelanjutan.</p>
                </div>
                
                <div class="team-member">
                    <div class="member-photo">👩‍💻</div>
                    <div class="member-name">Sari Indah</div>
                    <div class="member-role">Chief Technology Officer</div>
                    <p class="member-bio">Arsitek teknologi handal yang mengembangkan solusi cutting-edge. Ahli dalam AI, cloud computing, dan arsitektur sistem skala enterprise.</p>
                </div>
                
                <div class="team-member">
                    <div class="member-photo">👨‍🎨</div>
                    <div class="member-name">Budi Santoso</div>
                    <div class="member-role">Creative Director</div>
                    <p class="member-bio">Kreator visual yang menghadirkan pengalaman pengguna yang menakjubkan. Menggabungkan seni dan teknologi untuk menciptakan desain yang memukau.</p>
                </div>
                
                <div class="team-member">
                    <div class="member-photo">👩‍💼</div>
                    <div class="member-name">Maya Putri</div>
                    <div class="member-role">Head of Operations</div>
                    <p class="member-bio">Ahli operasional yang memastikan setiap proyek berjalan dengan sempurna. Fokus pada efisiensi, kualitas, dan kepuasan klien.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Stats Section -->
    <section class="section stats-section">
        <div class="container">
            <h2 class="section-title" style="color: white;">Pencapaian Kami</h2>
            <div class="stats-grid">
                <div class="stat-item">
                    <span class="stat-number" data-count="500">0</span>
                    <span class="stat-label">Proyek Selesai</span>
                </div>
                <div class="stat-item">
                    <span class="stat-number" data-count="150">0</span>
                    <span class="stat-label">Klien Puas</span>
                </div>
                <div class="stat-item">
                    <span class="stat-number" data-count="50">0</span>
                    <span class="stat-label">Tim Ahli</span>
                </div>
                <div class="stat-item">
                    <span class="stat-number" data-count="8">0</span>
                    <span class="stat-label">Tahun Pengalaman</span>
                </div>
            </div>
        </div>
    </section>

    <!-- Timeline Section -->
    <section class="section timeline-section">
        <div class="container">
            <h2 class="section-title">Perjalanan Kami</h2>
            <p class="section-subtitle">Milestone penting dalam pertumbuhan dan perkembangan perusahaan</p>
            
            <div class="timeline">
                <div class="timeline-item">
                    <div class="timeline-content">
                        <div class="timeline-year">2015</div>
                        <h3 class="timeline-title">Pendirian Perusahaan</h3>
                        <p>Memulai perjalanan dengan tim kecil beranggotakan 5 orang dan visi besar untuk mengubah lanskap digital Indonesia.</p>
                    </div>
                </div>
                
                <div class="timeline-item">
                    <div class="timeline-content">
                        <div class="timeline-year">2017</div>
                        <h3 class="timeline-title">Ekspansi Pertama</h3>
                        <p>Membuka kantor kedua dan menambah tim menjadi 25 orang. Meluncurkan produk pertama yang mendapat sambutan luar biasa.</p>
                    </div>
                </div>
                
                <div class="timeline-item">
                    <div class="timeline-content">
                        <div class="timeline-year">2019</div>
                        <h3 class="timeline-title">Penghargaan Industri</h3>
                        <p>Meraih penghargaan "Best Tech Startup" dan menjadi mitra resmi beberapa perusahaan multinasional.</p>
                    </div>
                </div>
                
                <div class="timeline-item">
                    <div class="timeline-content">
                        <div class="timeline-year">2021</div>
                        <h3 class="timeline-title">Transformasi Digital</h3>
                        <p>Meluncurkan platform AI dan cloud services yang revolusioner, melayani lebih dari 100 perusahaan besar.</p>
                    </div>
                </div>
                
                <div class="timeline-item">
                    <div class="timeline-content">
                        <div class="timeline-year">2023</div>
                        <h3 class="timeline-title">Ekspansi Regional</h3>
                        <p>Membuka kantor di Singapura dan Malaysia, memperluas jangkauan ke pasar Asia Tenggara.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <script>
        // Scroll progress indicator
        window.addEventListener('scroll', () => {
            const scrolled = (window.pageYOffset / (document.documentElement.scrollHeight - window.innerHeight)) * 100;
            document.getElementById('scrollProgress').style.width = scrolled + '%';
        });

        // Animated counter for stats
        function animateCounter(element) {
            const target = parseInt(element.getAttribute('data-count'));
            const duration = 2000;
            const steps = 50;
            const stepValue = target / steps;
            let current = 0;
            
            const timer = setInterval(() => {
                current += stepValue;
                if (current >= target) {
                    current = target;
                    clearInterval(timer);
                }
                element.textContent = Math.floor(current);
            }, duration / steps);
        }

        // Intersection Observer for animations
        const observerOptions = {
            threshold: 0.5,
            rootMargin: '0px 0px -100px 0px'
        };

        const observer = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    const counters = entry.target.querySelectorAll('.stat-number');
                    counters.forEach(counter => {
                        if (counter.textContent === '0') {
                            animateCounter(counter);
                        }
                    });
                }
            });
        }, observerOptions);

        // Observe stats section
        const statsSection = document.querySelector('.stats-section');
        if (statsSection) {
            observer.observe(statsSection);
        }

        // Smooth reveal animation for timeline items
        const timelineItems = document.querySelectorAll('.timeline-item');
        const timelineObserver = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.style.opacity = '1';
                    entry.target.style.transform = 'translateY(0)';
                }
            });
        }, { threshold: 0.3 });

        timelineItems.forEach(item => {
            item.style.opacity = '0';
            item.style.transform = 'translateY(20px)';
            item.style.transition = 'all 0.6s ease';
            timelineObserver.observe(item);
        });

        // Parallax effect for hero section
        window.addEventListener('scroll', () => {
            const scrolled = window.pageYOffset;
            const hero = document.querySelector('.hero');
            if (hero) {
                hero.style.transform = `translateY(${scrolled * 0.5}px)`;
            }
        });
    </script>
</body>
</html>