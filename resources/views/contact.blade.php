<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hubungi Kami - Contact Page</title>
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
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            min-height: 100vh;
        }

        .container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 20px;
        }

        .header {
            text-align: center;
            color: white;
            margin-bottom: 50px;
            padding: 40px 0;
        }

        .header h1 {
            font-size: 3rem;
            margin-bottom: 10px;
            font-weight: 700;
            text-shadow: 2px 2px 4px rgba(0,0,0,0.3);
        }

        .header p {
            font-size: 1.2rem;
            opacity: 0.9;
        }

        .contact-wrapper {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 40px;
            margin-bottom: 50px;
        }

        .contact-form, .contact-info {
            background: rgba(255, 255, 255, 0.95);
            backdrop-filter: blur(10px);
            padding: 40px;
            border-radius: 20px;
            box-shadow: 0 15px 35px rgba(0,0,0,0.1);
            border: 1px solid rgba(255,255,255,0.2);
        }

        .contact-form h2, .contact-info h2 {
            color: #2c3e50;
            margin-bottom: 30px;
            font-size: 1.8rem;
            font-weight: 600;
        }

        .form-group {
            margin-bottom: 25px;
        }

        .form-group label {
            display: block;
            margin-bottom: 8px;
            color: #555;
            font-weight: 500;
        }

        .form-group input,
        .form-group textarea,
        .form-group select {
            width: 100%;
            padding: 15px;
            border: 2px solid #e1e8ed;
            border-radius: 10px;
            font-size: 16px;
            transition: all 0.3s ease;
            background: #f8f9fa;
        }

        .form-group input:focus,
        .form-group textarea:focus,
        .form-group select:focus {
            outline: none;
            border-color: #667eea;
            background: white;
            box-shadow: 0 0 0 3px rgba(102, 126, 234, 0.1);
            transform: translateY(-2px);
        }

        .form-group textarea {
            min-height: 120px;
            resize: vertical;
        }

        .btn-submit {
            background: linear-gradient(135deg, #667eea, #764ba2);
            color: white;
            padding: 15px 40px;
            border: none;
            border-radius: 50px;
            font-size: 16px;
            font-weight: 600;
            cursor: pointer;
            transition: all 0.3s ease;
            width: 100%;
            text-transform: uppercase;
            letter-spacing: 1px;
        }

        .btn-submit:hover {
            transform: translateY(-3px);
            box-shadow: 0 10px 25px rgba(102, 126, 234, 0.3);
            background: linear-gradient(135deg, #5a67d8, #6b46c1);
        }

        .contact-item {
            display: flex;
            align-items: center;
            margin-bottom: 25px;
            padding: 20px;
            background: #f8f9fa;
            border-radius: 15px;
            transition: all 0.3s ease;
        }

        .contact-item:hover {
            background: #e9ecef;
            transform: translateX(10px);
        }

        .contact-icon {
            width: 50px;
            height: 50px;
            background: linear-gradient(135deg, #667eea, #764ba2);
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            margin-right: 20px;
            color: white;
            font-size: 20px;
        }

        .contact-details h3 {
            color: #2c3e50;
            margin-bottom: 5px;
            font-weight: 600;
        }

        .contact-details p {
            color: #666;
            margin: 0;
        }

        .social-links {
            display: flex;
            gap: 15px;
            justify-content: center;
            margin-top: 30px;
        }

        .social-link {
            width: 50px;
            height: 50px;
            background: rgba(255,255,255,0.2);
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            color: white;
            text-decoration: none;
            transition: all 0.3s ease;
            font-size: 20px;
        }

        .social-link:hover {
            background: white;
            color: #667eea;
            transform: translateY(-5px);
        }

        .map-container {
            background: rgba(255, 255, 255, 0.95);
            backdrop-filter: blur(10px);
            padding: 30px;
            border-radius: 20px;
            box-shadow: 0 15px 35px rgba(0,0,0,0.1);
            text-align: center;
        }

        .map-placeholder {
            width: 100%;
            height: 300px;
            background: linear-gradient(135deg, #f1f3f4, #e8eaed);
            border-radius: 15px;
            display: flex;
            align-items: center;
            justify-content: center;
            color: #666;
            font-size: 18px;
            margin-top: 20px;
        }

        @media (max-width: 768px) {
            .contact-wrapper {
                grid-template-columns: 1fr;
                gap: 30px;
            }

            .header h1 {
                font-size: 2rem;
            }

            .contact-form, .contact-info {
                padding: 30px 20px;
            }

            .container {
                padding: 10px;
            }
        }

        .success-message {
            background: #d4edda;
            color: #155724;
            padding: 15px;
            border-radius: 10px;
            margin-top: 20px;
            display: none;
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

    </style>
</head>
<body>
    <div class="container">
        <header class="header">
            <h1>Hubungi Kami</h1>
            <a class="mybutton" href="{{ route(name: 'welcome.page') }}">HOME</a>
            <p>Kami siap membantu Anda! Jangan ragu untuk menghubungi kami</p>
        </header>

        <div class="contact-wrapper">
            <div class="contact-form">
                <h2>Kirim Pesan</h2>
                <form id="contactForm">
                    <div class="form-group">
                        <label for="name">Nama Lengkap</label>
                        <input type="text" id="name" name="name" required>
                    </div>

                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="email" id="email" name="email" required>
                    </div>

                    <div class="form-group">
                        <label for="phone">Nomor Telepon</label>
                        <input type="tel" id="phone" name="phone">
                    </div>

                    <div class="form-group">
                        <label for="subject">Subjek</label>
                        <select id="subject" name="subject" required>
                            <option value="">Pilih Subjek</option>
                            <option value="general">Pertanyaan Umum</option>
                            <option value="support">Dukungan Teknis</option>
                            <option value="business">Kerjasama Bisnis</option>
                            <option value="complaint">Keluhan</option>
                            <option value="other">Lainnya</option>
                        </select>
                    </div>

                    <div class="form-group">
                        <label for="message">Pesan</label>
                        <textarea id="message" name="message" placeholder="Tulis pesan Anda di sini..." required></textarea>
                    </div>

                    <button type="submit" class="btn-submit">Kirim Pesan</button>
                    
                    <div id="successMessage" class="success-message">
                        Terima kasih! Pesan Anda telah terkirim. Kami akan segera menghubungi Anda.
                    </div>
                </form>
            </div>

            <div class="contact-info">
                <h2>Informasi Kontak</h2>
                
                <div class="contact-item">
                    <div class="contact-icon">📍</div>
                    <div class="contact-details">
                        <h3>Alamat</h3>
                        <p>Jl. Raya Pamanukan No. 123<br>Pamanukan, Subang, Jawa Barat 41254</p>
                    </div>
                </div>

                <div class="contact-item">
                    <div class="contact-icon">📞</div>
                    <div class="contact-details">
                        <h3>Telepon</h3>
                        <p>+62 264 123 4567<br>+62 812 3456 7890</p>
                    </div>
                </div>

                <div class="contact-item">
                    <div class="contact-icon">✉️</div>
                    <div class="contact-details">
                        <h3>Email</h3>
                        <p>info@perusahaan.co.id<br>kontak@perusahaan.co.id</p>
                    </div>
                </div>

                <div class="contact-item">
                    <div class="contact-icon">⏰</div>
                    <div class="contact-details">
                        <h3>Jam Operasional</h3>
                        <p>Senin - Jumat: 08:00 - 17:00<br>Sabtu: 08:00 - 12:00</p>
                    </div>
                </div>
            </div>
        </div>

        <div class="map-container">
            <h2>Lokasi Kami</h2>
            <div class="map-placeholder">
                🗺️ Google Maps akan ditampilkan di sini
            </div>
        </div>

        <div class="social-links">
            <a href="#" class="social-link">📘</a>
            <a href="#" class="social-link">📸</a>
            <a href="#" class="social-link">🐦</a>
            <a href="#" class="social-link">💼</a>
            <a href="#" class="social-link">📺</a>
        </div>
    </div>

    <script>
        document.getElementById('contactForm').addEventListener('submit', function(e) {
            e.preventDefault();
            
            // Simulasi pengiriman form
            const submitBtn = document.querySelector('.btn-submit');
            const successMessage = document.getElementById('successMessage');
            
            // Ubah tombol saat loading
            submitBtn.innerHTML = 'Mengirim...';
            submitBtn.disabled = true;
            
            // Simulasi delay pengiriman
            setTimeout(() => {
                // Reset tombol
                submitBtn.innerHTML = 'Kirim Pesan';
                submitBtn.disabled = false;
                
                // Tampilkan pesan sukses
                successMessage.style.display = 'block';
                
                // Reset form
                this.reset();
                
                // Sembunyikan pesan sukses setelah 5 detik
                setTimeout(() => {
                    successMessage.style.display = 'none';
                }, 5000);
                
            }, 2000);
        });

        // Animasi smooth pada input focus
        document.querySelectorAll('input, textarea, select').forEach(input => {
            input.addEventListener('focus', function() {
                this.parentElement.style.transform = 'scale(1.02)';
            });
            
            input.addEventListener('blur', function() {
                this.parentElement.style.transform = 'scale(1)';
            });
        });
    </script>
</body>
</html>