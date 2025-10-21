<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lokasi Kami - TechStore Premium</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            min-height: 100vh;
        }

        .hero-section {
            text-align: center;
            color: white;
            padding: 80px 20px 60px;
            position: relative;
            overflow: hidden;
        }

        .hero-bg {
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: url('data:image/svg+xml,<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 100 100"><defs><pattern id="grid" width="10" height="10" patternUnits="userSpaceOnUse"><path d="M 10 0 L 0 0 0 10" fill="none" stroke="rgba(255,255,255,0.1)" stroke-width="0.5"/></pattern></defs><rect width="100" height="100" fill="url(%23grid)"/></svg>');
            opacity: 0.3;
        }

        .hero-content {
            position: relative;
            z-index: 2;
            animation: fadeInUp 0.8s ease-out;
        }

        .hero-title {
            font-size: 3.5rem;
            font-weight: 700;
            margin-bottom: 20px;
            text-shadow: 0 4px 8px rgba(0, 0, 0, 0.3);
        }

        .hero-subtitle {
            font-size: 1.3rem;
            opacity: 0.9;
            max-width: 600px;
            margin: 0 auto;
            line-height: 1.6;
        }

        .main-container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 20px 40px;
            position: relative;
            z-index: 10;
        }

        .locations-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(350px, 1fr));
            gap: 30px;
            margin-bottom: 50px;
        }

        .location-card {
            background: rgba(255, 255, 255, 0.95);
            border-radius: 20px;
            padding: 30px;
            box-shadow: 0 15px 35px rgba(0, 0, 0, 0.1);
            backdrop-filter: blur(20px);
            transition: all 0.4s cubic-bezier(0.4, 0, 0.2, 1);
            animation: slideInUp 0.6s ease-out;
            position: relative;
            overflow: hidden;
        }

        .location-card:hover {
            transform: translateY(-10px);
            box-shadow: 0 25px 50px rgba(0, 0, 0, 0.15);
        }

        .location-card::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            height: 5px;
            background: linear-gradient(90deg, #667eea, #764ba2);
        }

        .location-header {
            display: flex;
            align-items: center;
            gap: 15px;
            margin-bottom: 25px;
        }

        .location-icon {
            width: 60px;
            height: 60px;
            background: linear-gradient(135deg, #667eea, #764ba2);
            border-radius: 15px;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 1.8rem;
            color: white;
            box-shadow: 0 5px 15px rgba(102, 126, 234, 0.3);
        }

        .location-title {
            font-size: 1.8rem;
            font-weight: 700;
            color: #2d3748;
            margin-bottom: 5px;
        }

        .location-type {
            color: #667eea;
            font-weight: 500;
            text-transform: uppercase;
            letter-spacing: 0.5px;
            font-size: 0.9rem;
        }

        .location-details {
            display: grid;
            gap: 20px;
        }

        .detail-item {
            display: flex;
            align-items: flex-start;
            gap: 15px;
            padding: 15px;
            background: rgba(102, 126, 234, 0.05);
            border-radius: 12px;
            transition: all 0.3s ease;
        }

        .detail-item:hover {
            background: rgba(102, 126, 234, 0.1);
            transform: translateX(5px);
        }

        .detail-icon {
            width: 20px;
            height: 20px;
            background: linear-gradient(135deg, #667eea, #764ba2);
            border-radius: 6px;
            display: flex;
            align-items: center;
            justify-content: center;
            color: white;
            font-size: 0.8rem;
            margin-top: 2px;
            flex-shrink: 0;
        }

        .detail-content {
            flex: 1;
        }

        .detail-label {
            font-weight: 600;
            color: #2d3748;
            margin-bottom: 3px;
            font-size: 0.95rem;
        }

        .detail-value {
            color: #718096;
            line-height: 1.5;
            font-size: 0.9rem;
        }

        .hours-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(120px, 1fr));
            gap: 8px;
            margin-top: 10px;
        }

        .hour-item {
            display: flex;
            justify-content: space-between;
            padding: 6px 10px;
            background: rgba(255, 255, 255, 0.7);
            border-radius: 6px;
            font-size: 0.85rem;
        }

        .day {
            font-weight: 500;
            color: #4a5568;
        }

        .time {
            color: #718096;
        }

        .action-buttons {
            display: flex;
            gap: 12px;
            margin-top: 25px;
        }

        .btn {
            flex: 1;
            padding: 12px 20px;
            border: none;
            border-radius: 10px;
            font-weight: 600;
            cursor: pointer;
            transition: all 0.3s ease;
            text-decoration: none;
            text-align: center;
            font-size: 0.9rem;
        }

        .btn-primary {
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            color: white;
            box-shadow: 0 5px 15px rgba(102, 126, 234, 0.3);
        }

        .btn-primary:hover {
            transform: translateY(-2px);
            box-shadow: 0 8px 25px rgba(102, 126, 234, 0.4);
        }

        .btn-secondary {
            background: transparent;
            color: #667eea;
            border: 2px solid #667eea;
        }

        .btn-secondary:hover {
            background: #667eea;
            color: white;
        }

        .map-section {
            background: rgba(255, 255, 255, 0.95);
            border-radius: 20px;
            overflow: hidden;
            box-shadow: 0 15px 35px rgba(0, 0, 0, 0.1);
            backdrop-filter: blur(20px);
            margin-bottom: 40px;
            animation: slideInUp 0.8s ease-out;
        }

        .map-header {
            padding: 30px 30px 0;
            text-align: center;
        }

        .map-title {
            font-size: 2rem;
            font-weight: 700;
            color: #2d3748;
            margin-bottom: 10px;
        }

        .map-subtitle {
            color: #718096;
            margin-bottom: 30px;
        }

        .map-container {
            height: 400px;
            background: linear-gradient(45deg, #f093fb 0%, #f5576c 100%);
            position: relative;
            display: flex;
            align-items: center;
            justify-content: center;
            color: white;
            font-size: 1.2rem;
            overflow: hidden;
        }

        .map-placeholder {
            text-align: center;
            z-index: 2;
        }

        .map-bg {
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: url('data:image/svg+xml,<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 100 100"><defs><pattern id="mapgrid" width="5" height="5" patternUnits="userSpaceOnUse"><path d="M 5 0 L 0 0 0 5" fill="none" stroke="rgba(255,255,255,0.2)" stroke-width="0.5"/></pattern></defs><rect width="100" height="100" fill="url(%23mapgrid)"/></svg>');
            opacity: 0.3;
        }

        .contact-section {
            background: rgba(255, 255, 255, 0.95);
            border-radius: 20px;
            padding: 40px;
            box-shadow: 0 15px 35px rgba(0, 0, 0, 0.1);
            backdrop-filter: blur(20px);
            text-align: center;
            animation: slideInUp 1s ease-out;
        }

        .contact-title {
            font-size: 2rem;
            font-weight: 700;
            color: #2d3748;
            margin-bottom: 20px;
        }

        .contact-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 30px;
            margin-top: 30px;
        }

        .contact-item {
            padding: 25px;
            background: rgba(102, 126, 234, 0.05);
            border-radius: 15px;
            transition: all 0.3s ease;
        }

        .contact-item:hover {
            background: rgba(102, 126, 234, 0.1);
            transform: translateY(-5px);
        }

        .contact-icon {
            width: 50px;
            height: 50px;
            background: linear-gradient(135deg, #667eea, #764ba2);
            border-radius: 12px;
            display: flex;
            align-items: center;
            justify-content: center;
            margin: 0 auto 15px;
            font-size: 1.5rem;
            color: white;
        }

        .contact-label {
            font-weight: 600;
            color: #2d3748;
            margin-bottom: 8px;
        }

        .contact-value {
            color: #667eea;
            font-weight: 500;
        }

        .floating-elements {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            pointer-events: none;
            z-index: -1;
        }

        .floating-element {
            position: absolute;
            background: rgba(255, 255, 255, 0.05);
            border-radius: 50%;
            animation: float 20s linear infinite;
        }

        .floating-element:nth-child(1) {
            width: 80px;
            height: 80px;
            top: 20%;
            left: 10%;
            animation-delay: 0s;
        }

        .floating-element:nth-child(2) {
            width: 60px;
            height: 60px;
            top: 60%;
            right: 15%;
            animation-delay: -7s;
        }

        .floating-element:nth-child(3) {
            width: 100px;
            height: 100px;
            bottom: 20%;
            left: 20%;
            animation-delay: -14s;
        }

        .mybutton {
            background: #000000; /* hitam */
            color: white;        /* supaya teks terlihat */
            padding: 10px 20px;
            border-radius: 8px;
            text-decoration: none;
            display: inline-block;
        }
        .mybutton:hover {
            background: #333333; /* sedikit abu-abu saat hover */
        }

        @keyframes float {
            0%, 100% { transform: translateY(0px) rotate(0deg); }
            25% { transform: translateY(-30px) rotate(90deg); }
            50% { transform: translateY(0px) rotate(180deg); }
            75% { transform: translateY(-15px) rotate(270deg); }
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

        @keyframes slideInUp {
            from {
                opacity: 0;
                transform: translateY(50px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        @media (max-width: 768px) {
            .hero-title {
                font-size: 2.5rem;
            }
            
            .hero-subtitle {
                font-size: 1.1rem;
            }
            
            .locations-grid {
                grid-template-columns: 1fr;
                gap: 25px;
            }
            
            .location-card {
                padding: 25px;
            }
            
            .action-buttons {
                flex-direction: column;
            }
            
            .contact-grid {
                grid-template-columns: 1fr;
                gap: 20px;
            }
            
            .hours-grid {
                grid-template-columns: 1fr;
            }
        }

        .pulse {
            animation: pulse 2s infinite;
        }

        @keyframes pulse {
            0% { transform: scale(1); }
            50% { transform: scale(1.05); }
            100% { transform: scale(1); }
        }
    </style>
</head>
<body>
    <div class="floating-elements">
        <div class="floating-element"></div>
        <div class="floating-element"></div>
        <div class="floating-element"></div>
    </div>

    <section class="hero-section">
        <div class="hero-bg"></div>
        <div class="hero-content">
            <h1 class="hero-title">Lokasi Kami</h1>
            <p class="hero-subtitle">Kunjungi toko fisik kami untuk pengalaman berbelanja yang lebih personal dan layanan konsultasi langsung dari tim ahli kami</p>
            <a class="mybutton" href="{{ route(name: 'welcome.page') }}">HOME</a>
        </div>
    </section>

    <div class="main-container">
        <div class="locations-grid">
            <!-- Jakarta Store -->
            <div class="location-card">
                <div class="location-header">
                    <div class="location-icon">🏢</div>
                    <div>
                        <h2 class="location-title">TechStore Jakarta</h2>
                        <div class="location-type">Flagship Store</div>
                    </div>
                </div>
                
                <div class="location-details">
                    <div class="detail-item">
                        <div class="detail-icon">📍</div>
                        <div class="detail-content">
                            <div class="detail-label">Alamat</div>
                            <div class="detail-value">Jl. Sudirman No. 123, Blok M<br>Jakarta Selatan 12190</div>
                        </div>
                    </div>
                    
                    <div class="detail-item">
                        <div class="detail-icon">📞</div>
                        <div class="detail-content">
                            <div class="detail-label">Telepon</div>
                            <div class="detail-value">(021) 5555-1234</div>
                        </div>
                    </div>
                    
                    <div class="detail-item">
                        <div class="detail-icon">🕒</div>
                        <div class="detail-content">
                            <div class="detail-label">Jam Operasional</div>
                            <div class="hours-grid">
                                <div class="hour-item">
                                    <span class="day">Senin</span>
                                    <span class="time">09:00-21:00</span>
                                </div>
                                <div class="hour-item">
                                    <span class="day">Selasa</span>
                                    <span class="time">09:00-21:00</span>
                                </div>
                                <div class="hour-item">
                                    <span class="day">Rabu</span>
                                    <span class="time">09:00-21:00</span>
                                </div>
                                <div class="hour-item">
                                    <span class="day">Kamis</span>
                                    <span class="time">09:00-21:00</span>
                                </div>
                                <div class="hour-item">
                                    <span class="day">Jumat</span>
                                    <span class="time">09:00-22:00</span>
                                </div>
                                <div class="hour-item">
                                    <span class="day">Sabtu</span>
                                    <span class="time">10:00-22:00</span>
                                </div>
                                <div class="hour-item">
                                    <span class="day">Minggu</span>
                                    <span class="time">10:00-20:00</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="action-buttons">
                    <a href="tel:+622155551234" class="btn btn-primary">📞 Hubungi</a>
                    <a href="#" class="btn btn-secondary" onclick="openDirections('Jakarta')">🗺️ Petunjuk Arah</a>
                </div>
            </div>

            <!-- Surabaya Store -->
            <div class="location-card">
                <div class="location-header">
                    <div class="location-icon">🏪</div>
                    <div>
                        <h2 class="location-title">TechStore Surabaya</h2>
                        <div class="location-type">Main Store</div>
                    </div>
                </div>
                
                <div class="location-details">
                    <div class="detail-item">
                        <div class="detail-icon">📍</div>
                        <div class="detail-content">
                            <div class="detail-label">Alamat</div>
                            <div class="detail-value">Jl. Pemuda No. 45, Gubeng<br>Surabaya 60271</div>
                        </div>
                    </div>
                    
                    <div class="detail-item">
                        <div class="detail-icon">📞</div>
                        <div class="detail-content">
                            <div class="detail-label">Telepon</div>
                            <div class="detail-value">(031) 5555-5678</div>
                        </div>
                    </div>
                    
                    <div class="detail-item">
                        <div class="detail-icon">🕒</div>
                        <div class="detail-content">
                            <div class="detail-label">Jam Operasional</div>
                            <div class="hours-grid">
                                <div class="hour-item">
                                    <span class="day">Senin</span>
                                    <span class="time">09:00-20:00</span>
                                </div>
                                <div class="hour-item">
                                    <span class="day">Selasa</span>
                                    <span class="time">09:00-20:00</span>
                                </div>
                                <div class="hour-item">
                                    <span class="day">Rabu</span>
                                    <span class="time">09:00-20:00</span>
                                </div>
                                <div class="hour-item">
                                    <span class="day">Kamis</span>
                                    <span class="time">09:00-20:00</span>
                                </div>
                                <div class="hour-item">
                                    <span class="day">Jumat</span>
                                    <span class="time">09:00-21:00</span>
                                </div>
                                <div class="hour-item">
                                    <span class="day">Sabtu</span>
                                    <span class="time">10:00-21:00</span>
                                </div>
                                <div class="hour-item">
                                    <span class="day">Minggu</span>
                                    <span class="time">10:00-19:00</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="action-buttons">
                    <a href="tel:+6231555556778" class="btn btn-primary">📞 Hubungi</a>
                    <a href="#" class="btn btn-secondary" onclick="openDirections('Surabaya')">🗺️ Petunjuk Arah</a>
                </div>
            </div>

            <!-- Bandung Store -->
            <div class="location-card">
                <div class="location-header">
                    <div class="location-icon">🏬</div>
                    <div>
                        <h2 class="location-title">TechStore Bandung</h2>
                        <div class="location-type">Branch Store</div>
                    </div>
                </div>
                
                <div class="location-details">
                    <div class="detail-item">
                        <div class="detail-icon">📍</div>
                        <div class="detail-content">
                            <div class="detail-label">Alamat</div>
                            <div class="detail-value">Jl. Braga No. 78, Sumur Bandung<br>Bandung 40111</div>
                        </div>
                    </div>
                    
                    <div class="detail-item">
                        <div class="detail-icon">📞</div>
                        <div class="detail-content">
                            <div class="detail-label">Telepon</div>
                            <div class="detail-value">(022) 5555-9012</div>
                        </div>
                    </div>
                    
                    <div class="detail-item">
                        <div class="detail-icon">🕒</div>
                        <div class="detail-content">
                            <div class="detail-label">Jam Operasional</div>
                            <div class="hours-grid">
                                <div class="hour-item">
                                    <span class="day">Senin</span>
                                    <span class="time">10:00-20:00</span>
                                </div>
                                <div class="hour-item">
                                    <span class="day">Selasa</span>
                                    <span class="time">10:00-20:00</span>
                                </div>
                                <div class="hour-item">
                                    <span class="day">Rabu</span>
                                    <span class="time">10:00-20:00</span>
                                </div>
                                <div class="hour-item">
                                    <span class="day">Kamis</span>
                                    <span class="time">10:00-20:00</span>
                                </div>
                                <div class="hour-item">
                                    <span class="day">Jumat</span>
                                    <span class="time">10:00-21:00</span>
                                </div>
                                <div class="hour-item">
                                    <span class="day">Sabtu</span>
                                    <span class="time">10:00-21:00</span>
                                </div>
                                <div class="hour-item">
                                    <span class="day">Minggu</span>
                                    <span class="time">11:00-19:00</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="action-buttons">
                    <a href="tel:+622255559012" class="btn btn-primary">📞 Hubungi</a>
                    <a href="#" class="btn btn-secondary" onclick="openDirections('Bandung')">🗺️ Petunjuk Arah</a>
                </div>
            </div>
        </div>

        <!-- Map Section -->
        <div class="map-section">
            <div class="map-header">
                <h2 class="map-title">Peta Lokasi</h2>
                <p class="map-subtitle">Temukan lokasi terdekat dengan Anda</p>
            </div>
            <div class="map-container">
                <div class="map-bg"></div>
                <div class="map-placeholder pulse">
                    <div style="font-size: 3rem; margin-bottom: 15px;">🗺️</div>
                    <div>Peta Interaktif akan dimuat di sini</div>
                    <div style="font-size: 0.9rem; margin-top: 10px; opacity: 0.8;">Klik pada lokasi untuk melihat detail dan petunjuk arah</div>
                </div>
            </div>
        </div>

        <!-- Contact Section -->
        <div class="contact-section">
            <h2 class="contact-title">Hubungi Kami</h2>
            <p style="color: #718096; margin-bottom: 30px;">Tim customer service kami siap membantu Anda 24/7</p>
            
            <div class="contact-grid">
                <div class="contact-item">
                    <div class="contact-icon">📧</div>
                    <div class="contact-label">Email</div>
                    <div class="contact-value">info@techstore.co.id</div>
                </div>
                
                <div class="contact-item">
                    <div class="contact-icon">💬</div>
                    <div class="contact-label">WhatsApp</div>
                    <div class="contact-value">+62 812-3456-7890</div>
                </div>
                
                <div class="contact-item">
                    <div class="contact-icon">📱</div>
                    <div class="contact-label">SMS Center</div>
                    <div class="contact-value">0858-1234-5678</div>
                </div>
                
                <div class="contact-item">
                    <div class="contact-icon">🌐</div>
                    <div class="contact-label">Live Chat</div>
                    <div class="contact-value">24/7 Online Support</div>
                </div>
            </div>
        </div>
    </div>

    <script>
        function openDirections(city) {
            const locations = {
                'Jakarta': {
                    address: 'Jl. Sudirman No. 123, Blok M, Jakarta Selatan 12190',
                    coords: '-6.2088,106.8456'
                },
                'Surabaya': {
                    address: 'Jl. Pemuda No. 45, Gubeng, Surabaya 60271',
                    coords: '-7.2575,112.7521'
                },
                'Bandung': {
                    address: 'Jl. Braga No. 78, Sumur Bandung, Bandung 40111',
                    coords: '-6.9175,107.6191'
                }
            };

            const location = locations[city];
            if (location) {
                // Try to open in Google Maps mobile app first, fallback to web
                const googleMapsUrl = `https://maps.google.com/maps?q=${encodeURIComponent(location.address)}`;
                window.open(googleMapsUrl, '_blank');
            }
        }

        // Add interactive hover effects to cards
        document.addEventListener('DOMContentLoaded', function() {
            const cards = document.querySelectorAll('.location-card');
            
            cards.forEach(card => {
                card.addEventListener('mouseenter', function() {
                    this.style.transform = 'translateY(-15px) scale(1.02)';
                });
                
                card.addEventListener('mouseleave', function() {
                    this.style.transform = 'translateY(0) scale(1)';
                });
            });

            // Add staggered animation to location cards
            cards.forEach((card, index) => {
                card.style.animationDelay = `${index * 0.2}s`;
            });
        });

        // Smooth scroll effect for floating elements
        window.addEventListener('scroll', () => {
            const scrolled = window.pageYOffset;
            const elements = document.querySelectorAll('.floating-element');
            
            elements.forEach((el, index) => {
                const speed = 0.1 + (index * 0.05);
                el.style.transform = `translateY(${scrolled * speed}px) rotate(${scrolled * 0.05}deg)`;
            });
        });

        // Add click animation to buttons
        document.querySelectorAll('.btn').forEach(btn => {
            btn.addEventListener('click', function(e) {
                this.style.transform = 'scale(0.95)';
                setTimeout(() => {
                    this.style.transform = '';
                }, 150);
            });
        });

        // Add ripple effect to contact items