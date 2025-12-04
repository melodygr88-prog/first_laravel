<!DOCTYPE html>
<html lang="mn">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Хяналтын самбар</title>
    <link href="https://fonts.bunny.net/css?family=instrument-sans:400,500,600" rel="stylesheet" />
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        
        body {
            font-family: 'Instrument Sans', ui-sans-serif, system-ui, sans-serif;
            background: #fafafa;
        }
        
        /* Header */
        header {
            background: white;
            box-shadow: 0 1px 3px rgba(0, 0, 0, 0.1);
            padding: 1.5rem 0;
            border-bottom: 1px solid #e5e7eb;
        }
        
        .container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 2rem;
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
        
        .user-info {
            display: flex;
            align-items: center;
            gap: 1.5rem;
        }
        
        .welcome {
            color: #374151;
            font-weight: 500;
            font-size: 0.95rem;
        }
        
        .home-btn {
            background: transparent;
            color: #6b7280;
            border: 1px solid #d1d5db;
            padding: 0.65rem 1.5rem;
            border-radius: 6px;
            cursor: pointer;
            font-weight: 500;
            transition: all 0.3s;
            font-size: 0.9rem;
            text-decoration: none;
            display: inline-block;
        }
        
        .home-btn:hover {
            border-color: #9ca3af;
            color: #374151;
        }
        
        .logout-btn {
            background: #111827;
            color: white;
            border: none;
            padding: 0.65rem 1.5rem;
            border-radius: 6px;
            cursor: pointer;
            font-weight: 500;
            transition: all 0.3s;
            font-size: 0.9rem;
        }
        
        .logout-btn:hover {
            background: #1f2937;
        }
        
        /* Main Content */
        main {
            padding: 3rem 0;
        }
        
        .dashboard-header {
            background: white;
            color: #111827;
            padding: 3rem;
            border-radius: 8px;
            margin-bottom: 2rem;
            border: 1px solid #e5e7eb;
        }
        
        .dashboard-header h1 {
            font-size: 2rem;
            margin-bottom: 0.5rem;
            font-weight: 600;
        }
        
        .dashboard-header p {
            font-size: 1rem;
            color: #6b7280;
        }
        
        /* Stats Grid */
        .stats-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 1.5rem;
            margin-bottom: 2rem;
        }
        
        .stat-card {
            background: white;
            padding: 2rem;
            border-radius: 8px;
            border: 1px solid #e5e7eb;
            transition: transform 0.3s;
        }
        
        .stat-card:hover {
            transform: translateY(-3px);
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.05);
        }
        
        .stat-icon {
            font-size: 2rem;
            margin-bottom: 1rem;
            opacity: 0.7;
        }
        
        .stat-card h3 {
            color: #6b7280;
            font-size: 0.85rem;
            margin-bottom: 0.5rem;
            text-transform: uppercase;
            font-weight: 500;
        }
        
        .stat-value {
            font-size: 2rem;
            font-weight: 600;
            color: #111827;
        }
        
        /* Course Section */
        .courses-section {
            background: white;
            padding: 2rem;
            border-radius: 8px;
            border: 1px solid #e5e7eb;
        }
        
        .courses-section h2 {
            color: #111827;
            margin-bottom: 1.5rem;
            font-size: 1.5rem;
            font-weight: 600;
        }
        
        .course-grid {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(280px, 1fr));
            gap: 1.5rem;
        }
        
        .course-card {
            border: 1px solid #e5e7eb;
            border-radius: 8px;
            padding: 1.5rem;
            transition: all 0.3s;
            cursor: pointer;
            background: #fafafa;
        }
        
        .course-card:hover {
            border-color: #9ca3af;
            transform: translateY(-2px);
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.05);
        }
        
        .course-card h4 {
            color: #111827;
            margin-bottom: 0.5rem;
            font-size: 1.1rem;
            font-weight: 600;
        }
        
        .course-card p {
            color: #6b7280;
            font-size: 0.9rem;
            margin-bottom: 1rem;
        }
        
        .progress-bar {
            background: #e5e7eb;
            height: 6px;
            border-radius: 3px;
            overflow: hidden;
            margin-bottom: 0.5rem;
        }
        
        .progress-fill {
            background: #111827;
            height: 100%;
            transition: width 0.3s;
        }
        
        .progress-text {
            font-size: 0.85rem;
            color: #6b7280;
        }
    </style>
</head>
<body>
    <!-- Header -->
    <header>
        <div class="container">
            <nav>
                <div class="logo">📚 EduPortal</div>
                <div class="user-info">
                    <span class="welcome">Сайн байна уу, {{ Auth::user()->name }}!</span>
                    <a href="{{ route('home') }}" class="home-btn">Нүүр хуудас</a>
                    <form method="POST" action="{{ route('logout') }}" style="display: inline;">
                        @csrf
                        <button type="submit" class="logout-btn">Гарах</button>
                    </form>
                </div>
            </nav>
        </div>
    </header>

    <!-- Main Content -->
    <main>
        <div class="container">
            <!-- Dashboard Header -->
            <div class="dashboard-header">
                <h1>Хяналтын самбар</h1>
                <p>Таны суралцах явцыг хянах, шинэ хичээл үзэх боломжтой</p>
            </div>

            <!-- Stats Grid -->
            <div class="stats-grid">
                <div class="stat-card">
                    <div class="stat-icon">📚</div>
                    <h3>Нийт хичээл</h3>
                    <div class="stat-value">12</div>
                </div>
                <div class="stat-card">
                    <div class="stat-icon">✅</div>
                    <h3>Дууссан</h3>
                    <div class="stat-value">5</div>
                </div>
                <div class="stat-card">
                    <div class="stat-icon">⏳</div>
                    <h3>Үргэлжилж байгаа</h3>
                    <div class="stat-value">3</div>
                </div>
                <div class="stat-card">
                    <div class="stat-icon">🏆</div>
                    <h3>Сертификат</h3>
                    <div class="stat-value">2</div>
                </div>
            </div>

            <!-- Courses Section -->
            <div class="courses-section">
                <h2>Миний хичээлүүд</h2>
                <div class="course-grid">
                    <div class="course-card">
                        <h4>Сүлжээний үндэс</h4>
                        <p>TCP/IP, OSI загвар, сүлжээний топологи</p>
                        <div class="progress-bar">
                            <div class="progress-fill" style="width: 75%"></div>
                        </div>
                        <div class="progress-text">75% дууссан</div>
                    </div>
                    <div class="course-card">
                        <h4>Роутер тохиргоо</h4>
                        <p>Cisco роутер тохируулах үндсэн мэдлэг</p>
                        <div class="progress-bar">
                            <div class="progress-fill" style="width: 45%"></div>
                        </div>
                        <div class="progress-text">45% дууссан</div>
                    </div>
                    <div class="course-card">
                        <h4>Сүлжээний аюулгүй байдал</h4>
                        <p>Firewall, VPN, шифрлэлтийн үндэс</p>
                        <div class="progress-bar">
                            <div class="progress-fill" style="width: 20%"></div>
                        </div>
                        <div class="progress-text">20% дууссан</div>
                    </div>
                </div>
            </div>
        </div>
    </main>
</body>
</html>