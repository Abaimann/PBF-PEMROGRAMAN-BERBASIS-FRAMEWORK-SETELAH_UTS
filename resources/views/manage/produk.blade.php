<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TechStore - Premium Electronics</title>
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
            padding: 20px 0;
        }

        .header {
            text-align: center;
            color: white;
            margin-bottom: 40px;
            animation: fadeInDown 0.8s ease-out;
        }

        .header h1 {
            font-size: 3rem;
            font-weight: 700;
            margin-bottom: 10px;
            text-shadow: 0 4px 8px rgba(0, 0, 0, 0.3);
        }

        .header p {
            font-size: 1.2rem;
            opacity: 0.9;
            max-width: 600px;
            margin: 0 auto;
        }

        .container {
            max-width: 1400px;
            margin: 0 auto;
            padding: 0 20px;
        }

        .filters {
            display: flex;
            justify-content: center;
            gap: 15px;
            margin-bottom: 40px;
            flex-wrap: wrap;
            animation: fadeInUp 0.8s ease-out 0.2s both;
        }

        .filter-btn {
            padding: 12px 25px;
            background: rgba(255, 255, 255, 0.15);
            border: 2px solid rgba(255, 255, 255, 0.3);
            color: white;
            border-radius: 25px;
            cursor: pointer;
            transition: all 0.3s ease;
            font-weight: 500;
            backdrop-filter: blur(10px);
        }

        .filter-btn:hover,
        .filter-btn.active {
            background: rgba(255, 255, 255, 0.25);
            border-color: rgba(255, 255, 255, 0.5);
            transform: translateY(-2px);
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.2);
        }

        .products-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 30px;
            animation: fadeInUp 0.8s ease-out 0.4s both;
        }

        .product-card {
            background: rgba(255, 255, 255, 0.95);
            border-radius: 20px;
            overflow: hidden;
            box-shadow: 0 15px 35px rgba(0, 0, 0, 0.1);
            transition: all 0.4s cubic-bezier(0.4, 0, 0.2, 1);
            position: relative;
            backdrop-filter: blur(20px);
        }

        .product-card:hover {
            transform: translateY(-10px) scale(1.02);
            box-shadow: 0 25px 50px rgba(0, 0, 0, 0.2);
        }

        .product-image {
            height: 220px;
            background: linear-gradient(45deg, #f093fb 0%, #f5576c 100%);
            position: relative;
            display: flex;
            align-items: center;
            justify-content: center;
            overflow: hidden;
        }

        .product-image svg {
            width: 80px;
            height: 80px;
            filter: drop-shadow(0 5px 15px rgba(0, 0, 0, 0.3));
            transition: transform 0.3s ease;
        }

        .product-card:hover .product-image svg {
            transform: scale(1.1) rotate(5deg);
        }

        .badge {
            position: absolute;
            top: 15px;
            left: 15px;
            background: linear-gradient(135deg, #ff6b6b, #feca57);
            color: white;
            padding: 6px 12px;
            border-radius: 15px;
            font-size: 11px;
            font-weight: 600;
            text-transform: uppercase;
            z-index: 10;
        }

        .wishlist-btn {
            position: absolute;
            top: 15px;
            right: 15px;
            background: rgba(255, 255, 255, 0.9);
            border: none;
            width: 40px;
            height: 40px;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            cursor: pointer;
            transition: all 0.3s ease;
            z-index: 10;
        }

        .wishlist-btn:hover {
            background: white;
            transform: scale(1.1);
        }

        .product-info {
            padding: 25px;
        }

        .product-category {
            color: #667eea;
            font-size: 0.85rem;
            font-weight: 500;
            text-transform: uppercase;
            letter-spacing: 0.5px;
            margin-bottom: 8px;
        }

        .product-title {
            font-size: 1.3rem;
            font-weight: 700;
            color: #2d3748;
            margin-bottom: 10px;
            line-height: 1.3;
        }

        .product-description {
            color: #718096;
            font-size: 0.9rem;
            line-height: 1.5;
            margin-bottom: 15px;
        }

        .rating {
            display: flex;
            align-items: center;
            gap: 8px;
            margin-bottom: 20px;
        }

        .stars {
            color: #fbbf24;
            font-size: 1rem;
        }

        .rating-text {
            color: #a0aec0;
            font-size: 0.85rem;
        }

        .price-section {
            display: flex;
            align-items: center;
            justify-content: space-between;
            margin-bottom: 20px;
        }

        .price-current {
            font-size: 1.4rem;
            font-weight: 700;
            color: #48bb78;
        }

        .price-original {
            font-size: 1rem;
            color: #a0aec0;
            text-decoration: line-through;
            margin-left: 10px;
        }

        .discount {
            background: #e53e3e;
            color: white;
            padding: 3px 8px;
            border-radius: 10px;
            font-size: 0.8rem;
            font-weight: 600;
        }

        .product-actions {
            display: flex;
            gap: 10px;
        }

        .btn {
            padding: 12px 20px;
            border: none;
            border-radius: 10px;
            font-weight: 600;
            cursor: pointer;
            transition: all 0.3s ease;
            font-size: 0.9rem;
            flex: 1;
        }

        .mybutton {
            background: #000000; /* hitam */
            color: white;        /* supaya teks terlihat */
            padding: 10px 20px;
            border-radius: 8px;
            text-decoration: none;
            display: inline-block;
            margin: 10px;
        }
        .mybutton:hover {
            background: #333333; /* sedikit abu-abu saat hover */
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

        @keyframes fadeInDown {
            from {
                opacity: 0;
                transform: translateY(-30px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
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

        .floating-bg {
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
            width: 60px;
            height: 60px;
            top: 10%;
            left: 5%;
            animation-delay: 0s;
        }

        .floating-element:nth-child(2) {
            width: 80px;
            height: 80px;
            top: 50%;
            right: 10%;
            animation-delay: -7s;
        }

        .floating-element:nth-child(3) {
            width: 40px;
            height: 40px;
            bottom: 20%;
            left: 20%;
            animation-delay: -14s;
        }

        @keyframes float {
            0%, 100% { transform: translateY(0px) rotate(0deg); }
            25% { transform: translateY(-20px) rotate(90deg); }
            50% { transform: translateY(0px) rotate(180deg); }
            75% { transform: translateY(-10px) rotate(270deg); }
        }

        @media (max-width: 768px) {
            .products-grid {
                grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
                gap: 20px;
            }
            
            .header h1 {
                font-size: 2.2rem;
            }
            
            .filters {
                gap: 10px;
            }
            
            .filter-btn {
                padding: 10px 20px;
                font-size: 0.9rem;
            }
        }

        .loading {
            opacity: 0.6;
            pointer-events: none;
        }

        .fade-in {
            animation: fadeIn 0.5s ease-out;
        }

        @keyframes fadeIn {
            from { opacity: 0; }
            to { opacity: 1; }
        }
    </style>
</head>
<body>
    <div class="floating-bg">
        <div class="floating-element"></div>
        <div class="floating-element"></div>
        <div class="floating-element"></div>
    </div>

    <div class="header">
        <h1>TechStore Premium</h1>
        <p>Koleksi lengkap gadget dan elektronik terdepan dengan kualitas premium</p>
        <a class="mybutton" href="{{ route(name: 'welcome.page') }}">HOME</a>
    </div>

    <div class="container">
        <div class="filters">
            <button class="filter-btn active" data-category="all">Semua Produk</button>
            <button class="filter-btn" data-category="audio">Audio</button>
            <button class="filter-btn" data-category="mobile">Mobile</button>
            <button class="filter-btn" data-category="computing">Computing</button>
            <button class="filter-btn" data-category="gaming">Gaming</button>
        </div>

        <div class="products-grid" id="productsGrid">
            <!-- Products will be generated by JavaScript -->
        </div>
    </div>

    <script>
        const products = [
            {
                id: 1,
                title: "Wireless Headphones Pro",
                category: "audio",
                description: "Premium noise-canceling headphones dengan kualitas suara studio",
                price: 1299000,
                originalPrice: 1699000,
                rating: 4.8,
                reviews: 2847,
                badge: "Bestseller",
                icon: "🎧"
            },
            {
                id: 2,
                title: "Smartphone Ultra 5G",
                category: "mobile",
                description: "Flagship smartphone dengan kamera 108MP dan chipset terdepan",
                price: 12999000,
                originalPrice: 14999000,
                rating: 4.9,
                reviews: 1523,
                badge: "New",
                icon: "📱"
            },
            {
                id: 3,
                title: "Gaming Laptop RTX",
                category: "computing",
                description: "Laptop gaming dengan GPU RTX 4070 dan display 165Hz",
                price: 25999000,
                originalPrice: 28999000,
                rating: 4.7,
                reviews: 892,
                badge: "Gaming",
                icon: "💻"
            },
            {
                id: 4,
                title: "Wireless Earbuds Pro",
                category: "audio",
                description: "True wireless earbuds dengan ANC dan battery life 30 jam",
                price: 899000,
                originalPrice: 1299000,
                rating: 4.6,
                reviews: 3421,
                badge: "Deal",
                icon: "🎵"
            },
            {
                id: 5,
                title: "Gaming Mechanical Keyboard",
                category: "gaming",
                description: "Mechanical keyboard RGB dengan switch Cherry MX",
                price: 1599000,
                originalPrice: 1999000,
                rating: 4.8,
                reviews: 756,
                badge: "Popular",
                icon: "⌨️"
            },
            {
                id: 6,
                title: "4K Webcam Pro",
                category: "computing",
                description: "Webcam 4K dengan autofocus dan noise reduction",
                price: 799000,
                originalPrice: 999000,
                rating: 4.5,
                reviews: 1234,
                badge: "Work",
                icon: "📹"
            },
            {
                id: 7,
                title: "Smartwatch Fitness",
                category: "mobile",
                description: "Smartwatch dengan GPS, heart rate monitor, dan 7 hari battery",
                price: 2299000,
                originalPrice: 2799000,
                rating: 4.7,
                reviews: 2156,
                badge: "Health",
                icon: "⌚"
            },
            {
                id: 8,
                title: "Gaming Mouse RGB",
                category: "gaming",
                description: "Gaming mouse dengan 16000 DPI dan customizable RGB",
                price: 699000,
                originalPrice: 899000,
                rating: 4.6,
                reviews: 1876,
                badge: "Esports",
                icon: "🖱️"
            },
            {
                id: 9,
                title: "Portable SSD 1TB",
                category: "computing",
                description: "SSD eksternal dengan kecepatan baca 1050 MB/s",
                price: 1899000,
                originalPrice: 2299000,
                rating: 4.8,
                reviews: 987,
                badge: "Storage",
                icon: "💾"
            },
            {
                id: 10,
                title: "Bluetooth Speaker Pro",
                category: "audio",
                description: "Speaker portable dengan 360° sound dan waterproof IPX7",
                price: 1299000,
                originalPrice: 1599000,
                rating: 4.7,
                reviews: 2543,
                badge: "Outdoor",
                icon: "🔊"
            },
            {
                id: 11,
                title: "Gaming Chair RGB",
                category: "gaming",
                description: "Kursi gaming ergonomis dengan RGB lighting dan lumbar support",
                price: 3299000,
                originalPrice: 3999000,
                rating: 4.5,
                reviews: 654,
                badge: "Comfort",
                icon: "🪑"
            },
            {
                id: 12,
                title: "Tablet Pro 12.9",
                category: "mobile",
                description: "Tablet premium dengan stylus dan keyboard support",
                price: 15999000,
                originalPrice: 17999000,
                rating: 4.9,
                reviews: 1123,
                badge: "Creative",
                icon: "📟"
            }
        ];

        function formatPrice(price) {
            return new Intl.NumberFormat('id-ID', {
                style: 'currency',
                currency: 'IDR',
                minimumFractionDigits: 0
            }).format(price);
        }

        function createProductCard(product) {
            const discount = Math.round((1 - product.price / product.originalPrice) * 100);
            
            return `
                <div class="product-card fade-in" data-category="${product.category}">
                    <div class="product-image" style="background: linear-gradient(45deg, hsl(${product.id * 30}, 70%, 60%), hsl(${product.id * 30 + 60}, 70%, 70%))">
                        <div class="badge">${product.badge}</div>
                        <button class="wishlist-btn" onclick="toggleWishlist(this)">♡</button>
                        <div style="font-size: 3rem;">${product.icon}</div>
                    </div>
                    <div class="product-info">
                        <div class="product-category">${product.category}</div>
                        <h3 class="product-title">${product.title}</h3>
                        <p class="product-description">${product.description}</p>
                        <div class="rating">
                            <div class="stars">${'★'.repeat(Math.floor(product.rating))}${'☆'.repeat(5 - Math.floor(product.rating))}</div>
                            <span class="rating-text">${product.rating}/5 (${product.reviews.toLocaleString()})</span>
                        </div>
                        <div class="price-section">
                            <div>
                                <span class="price-current">${formatPrice(product.price)}</span>
                                <span class="price-original">${formatPrice(product.originalPrice)}</span>
                            </div>
                            <span class="discount">-${discount}%</span>
                        </div>
                        <div class="product-actions">
                            <button class="btn btn-primary" onclick="addToCart(${product.id})">Tambah ke Keranjang</button>
                            <button class="btn btn-secondary" onclick="viewDetails(${product.id})">Detail</button>
                        </div>
                    </div>
                </div>
            `;
        }

        function renderProducts(productsToRender = products) {
            const grid = document.getElementById('productsGrid');
            grid.innerHTML = productsToRender.map(product => createProductCard(product)).join('');
        }

        function filterProducts(category) {
            const grid = document.getElementById('productsGrid');
            grid.classList.add('loading');
            
            setTimeout(() => {
                if (category === 'all') {
                    renderProducts();
                } else {
                    const filtered = products.filter(product => product.category === category);
                    renderProducts(filtered);
                }
                grid.classList.remove('loading');
            }, 300);
        }

        function addToCart(productId) {
            const btn = event.target;
            const originalText = btn.textContent;
            
            btn.style.background = '#48bb78';
            btn.textContent = '✓ Ditambahkan!';
            btn.style.transform = 'scale(0.95)';
            
            setTimeout(() => {
                btn.style.background = 'linear-gradient(135deg, #667eea 0%, #764ba2 100%)';
                btn.textContent = originalText;
                btn.style.transform = 'scale(1)';
            }, 2000);
        }

        function toggleWishlist(btn) {
            const isActive = btn.textContent.includes('❤️');
            btn.textContent = isActive ? '♡' : '❤️';
            btn.style.color = isActive ? '#666' : '#e53e3e';
            btn.style.transform = 'scale(1.2)';
            
            setTimeout(() => {
                btn.style.transform = 'scale(1)';
            }, 200);
        }

        function viewDetails(productId) {
            const product = products.find(p => p.id === productId);
            alert(`Detail produk: ${product.title}\n\nHarga: ${formatPrice(product.price)}\nRating: ${product.rating}/5\n\n${product.description}`);
        }

        // Event listeners
        document.addEventListener('DOMContentLoaded', () => {
            renderProducts();
            
            document.querySelectorAll('.filter-btn').forEach(btn => {
                btn.addEventListener('click', () => {
                    document.querySelectorAll('.filter-btn').forEach(b => b.classList.remove('active'));
                    btn.classList.add('active');
                    filterProducts(btn.dataset.category);
                });
            });
        });

        // Smooth scroll effects
        window.addEventListener('scroll', () => {
            const scrolled = window.pageYOffset;
            const elements = document.querySelectorAll('.floating-element');
            elements.forEach((el, index) => {
                el.style.transform = `translateY(${scrolled * (0.1 + index * 0.05)}px)`;
            });
        });
    </script>
</body>
</html>