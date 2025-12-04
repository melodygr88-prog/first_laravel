<!DOCTYPE html>
<html lang="mn">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Хичээлийн Портал - Нүүр</title>
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=instrument-sans:400,500,600" rel="stylesheet" />
        
        <style>
            * {
                margin: 0;
                padding: 0;
                box-sizing: border-box;
            }
            
            body {
                font-family: 'Instrument Sans', ui-sans-serif, system-ui, sans-serif;
                background: #ffffff;
                min-height: 100vh;
                display: flex;
                flex-direction: column;
            }
            
            .container {
                max-width: 1200px;
                margin: 0 auto;
                padding: 0 2rem;
                width: 100%;
            }
            
            /* Header */
            header {
                background: #ffffff;
                border-bottom: 1px solid #e5e7eb;
                padding: 1.5rem 0;
                position: sticky;
                top: 0;
                z-index: 100;
            }
            
            nav {
                display: flex;
                justify-content: space-between;
                align-items: center;
            }
            
            .logo {
                font-size: 1.5rem;
                font-weight: 600;
                color: #111827;
            }
            
            .nav-links {
                display: flex;
                gap: 2rem;
                list-style: none;
            }
            
            .nav-links a {
                text-decoration: none;
                color: #6b7280;
                font-weight: 500;
                transition: color 0.3s;
                position: relative;
            }
            
            .nav-links a:hover {
                color: #111827;
            }
            
            .login-btn {
                background: #111827;
                color: white;
                padding: 0.65rem 1.5rem;
                border-radius: 6px;
                text-decoration: none;
                font-weight: 500;
                transition: background 0.3s;
                font-size: 0.95rem;
            }
            
            .login-btn:hover {
                background: #1f2937;
            }
            
            /* Hero Section */
            .hero {
                flex: 1;
                display: flex;
                align-items: center;
                padding: 5rem 0;
                background: #fafafa;
            }
            
            .hero-content {
                display: grid;
                grid-template-columns: 1fr 1fr;
                gap: 4rem;
                align-items: center;
            }
            
            .hero-text h1 {
                font-size: 3rem;
                color: #111827;
                margin-bottom: 1.5rem;
                font-weight: 700;
                line-height: 1.2;
            }
            
            .hero-text p {
                font-size: 1.15rem;
                color: #6b7280;
                margin-bottom: 2rem;
                line-height: 1.6;
            }
            
            .cta-buttons {
                display: flex;
                gap: 1rem;
            }
            
            .btn-primary, .btn-secondary {
                padding: 0.85rem 2rem;
                border-radius: 6px;
                text-decoration: none;
                font-weight: 500;
                font-size: 1rem;
                transition: all 0.3s;
                display: inline-block;
            }
            
            .btn-primary {
                background: #111827;
                color: white;
            }
            
            .btn-primary:hover {
                background: #1f2937;
            }
            
            .btn-secondary {
                background: #ffffff;
                color: #111827;
                border: 1px solid #d1d5db;
            }
            
            .btn-secondary:hover {
                border-color: #9ca3af;
            }
            
            .hero-image {
                position: relative;
            }
            
            .hero-image svg {
                width: 100%;
            }
            
            /* Features Section */
            .features {
                background: white;
                padding: 5rem 0;
                border-top: 1px solid #e5e7eb;
            }
            
            .features h2 {
                text-align: center;
                font-size: 2rem;
                margin-bottom: 3rem;
                color: #111827;
                font-weight: 600;
            }
            
            .features-grid {
                display: grid;
                grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
                gap: 2rem;
            }
            
            .feature-card {
                background: #fafafa;
                padding: 2rem;
                border-radius: 8px;
                color: #111827;
                transition: transform 0.3s;
                border: 1px solid #e5e7eb;
            }
            
            .feature-card:hover {
                transform: translateY(-5px);
                border-color: #d1d5db;
            }
            
            .feature-icon {
                font-size: 2.5rem;
                margin-bottom: 1rem;
                opacity: 0.8;
            }
            
            .feature-card h3 {
                font-size: 1.25rem;
                margin-bottom: 0.75rem;
                font-weight: 600;
            }
            
            .feature-card p {
                line-height: 1.6;
                color: #6b7280;
                font-size: 0.95rem;
            }
            
            /* Footer */
            footer {
                background: #111827;
                color: #9ca3af;
                padding: 2rem 0;
                text-align: center;
                border-top: 1px solid #1f2937;
            }
            
            footer p {
                margin: 0.5rem 0;
                font-size: 0.9rem;
            }
            
            footer a {
                color: #d1d5db;
                text-decoration: none;
            }
            
            footer a:hover {
                color: white;
            }
            
            /* Responsive */
            @media (max-width: 768px) {
                .nav-links {
                    display: none;
                }
                
                .hero-content {
                    grid-template-columns: 1fr;
                    text-align: center;
                }
                
                .hero-text h1 {
                    font-size: 2.5rem;
                }
                
                .cta-buttons {
                    justify-content: center;
                }
                
                .features-grid {
                    grid-template-columns: 1fr;
                }
            }
        </style>
    </head>
    <body>
        <!-- Header -->
        <header>
            <div class="container">
                <nav>
                    <div class="logo">📚 EduPortal</div>
                    <ul class="nav-links">
                        <li><a href="{{ route('home') }}">Нүүр</a></li>
                        <li><a href="{{ route('lessons') }}">Хичээлүүд</a></li>
                        <li><a href="#features">Онцлог</a></li>
                        <li><a href="#about">Бидний тухай</a></li>
                        <li><a href="#contact">Холбоо барих</a></li>
                    </ul>
                    @auth
                        <a href="{{ route('dashboard') }}" class="login-btn">Хяналтын самбар</a>
                    @else
                        <a href="{{ route('login') }}" class="login-btn">Нэвтрэх</a>
                    @endauth
                </nav>
            </div>
        </header>

        <!-- Hero Section -->
        <section class="hero">
            <div class="container">
                <div class="hero-content">
                    <div class="hero-text">
                        <h1>Сүлжээний технологи</h1>
                        <p>Манай онлайн хичээлийн платформ нь сүлжээний бүхий л түвшиний хичээлүүдийг багтаасан болно.</p>
                        <div class="cta-buttons">
                            @auth
                                <a href="{{ route('dashboard') }}" class="btn-primary">Хичээл үзэх</a>
                            @else
                                <a href="{{ route('login') }}" class="btn-primary">Эхлэх</a>
                            @endauth
                            <a href="{{ route('register') }}" class="btn-secondary">Бүртгүүлэх</a>
                        </div>
                    </div>
                    <div class="hero-image">
                        <svg width="500" height="400" viewBox="0 0 500 400">
                            <rect x="50" y="50" width="300" height="200" rx="8" fill="#fafafa" stroke="#e5e7eb" stroke-width="2"/>
                            <rect x="80" y="100" width="120" height="80" rx="4" fill="#f3f4f6"/>
                            <rect x="220" y="100" width="120" height="80" rx="4" fill="#e5e7eb"/>
                            <rect x="80" y="200" width="260" height="12" rx="6" fill="#f3f4f6"/>
                            <rect x="80" y="225" width="180" height="12" rx="6" fill="#e5e7eb"/>
                            <circle cx="400" cy="100" r="35" fill="#f3f4f6" stroke="#e5e7eb" stroke-width="2"/>
                            <text x="250" y="350" font-size="20" fill="#6b7280" text-anchor="middle" font-weight="500">Онлайн Хичээл</text>
                        </svg>
                    </div>
                </div>
            </div>
        </section>

        <!-- Features Section -->
        <section class="features" id="features">
            <div class="container">
                <h2>Танд юу санал болгож байна вэ?</h2>
                <div class="features-grid">
                    <div class="feature-card">
                        <div class="feature-icon">🎓</div>
                        <h3>Мэргэжлийн багш нар</h3>
                        <p>Олон жилийн туршлагатай мэргэшсэн багш нараас хичээл авах боломжтой</p>
                    </div>
                    <div class="feature-card">
                        <div class="feature-icon">💻</div>
                        <h3>Интерактив хичээл</h3>
                        <p>Практик дасгал, тест, лабораториор дамжуулан мэдлэгээ туршина уу</p>
                    </div>
                    <div class="feature-card">
                        <div class="feature-icon">📱</div>
                        <h3>Хаанаас ч суралцаарай</h3>
                        <p>Компьютер, утас, таблет ашиглан хүссэн газраасаа хичээлээ үзнэ үү</p>
                    </div>
                    <div class="feature-card">
                        <div class="feature-icon">🏆</div>
                        <h3>Сертификат</h3>
                        <p>Хичээлээ амжилттай дүүргэсний дараа баталгаат сертификат авна уу</p>
                    </div>
                </div>
            </div>
        </section>

        <!-- Footer -->
        <footer>
            <div class="container">
                <p>&copy; 2024 EduPortal. Бүх эрх хуулиар хамгаалагдсан.</p>
                <p>Холбоо барих: <a href="mailto:info@eduportal.mn">info@eduportal.mn</a></p>
            </div>
        </footer>
    </body>
</html>