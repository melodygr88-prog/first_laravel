<!DOCTYPE html>
<html lang="mn">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Хичээлүүд</title>
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

        .header-container {
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

        .nav-links a.active {
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

        .container {
            max-width: 1400px;
            margin: 0 auto;
            padding: 20px;
        }

        h1 {
            color: #111827;
            text-align: center;
            margin: 30px 0 20px;
            font-size: 2.5em;
            font-weight: 600;
        }

        .filter-tabs {
            display: flex;
            justify-content: center;
            gap: 8px;
            margin-bottom: 20px;
            flex-wrap: wrap;
            max-width: 900px;
            margin-left: auto;
            margin-right: auto;
        }

        .filter-tab {
            background: #ffffff;
            color: #374151;
            border: 1px solid #d1d5db;
            padding: 10px 18px;
            border-radius: 6px;
            font-size: 0.9em;
            font-weight: 500;
            cursor: pointer;
            transition: all 0.3s;
            white-space: nowrap;
            flex: 0 0 calc(25% - 6px);
            text-align: center;
        }

        .filter-tab:hover {
            background: #f9fafb;
            border-color: #9ca3af;
        }

        .filter-tab.active {
            background: #111827;
            color: white;
            border-color: #111827;
        }

        .filter-section {
            margin-bottom: 15px;
        }

        .filter-section-title {
            color: #6b7280;
            text-align: center;
            font-size: 0.9em;
            margin-bottom: 8px;
            font-weight: 500;
        }

        .search-box {
            width: 100%;
            max-width: 500px;
            margin: 0 auto 30px;
            padding: 12px 18px;
            font-size: 1em;
            border: 1px solid #d1d5db;
            border-radius: 6px;
            outline: none;
            display: block;
            font-family: inherit;
        }

        .search-box:focus {
            border-color: #111827;
        }

        .section {
            margin-bottom: 40px;
        }

        .section-header {
            background: #fafafa;
            padding: 20px;
            border-radius: 8px;
            margin-bottom: 20px;
            border: 1px solid #e5e7eb;
        }

        .section-title {
            font-size: 1.5em;
            color: #111827;
            margin-bottom: 10px;
            font-weight: 600;
        }

        .section-stats {
            color: #6b7280;
            font-size: 1em;
            font-weight: 500;
        }

        .lessons-grid {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(350px, 1fr));
            gap: 20px;
        }

        .lesson-card {
            background: #fafafa;
            border-radius: 8px;
            padding: 20px;
            border: 1px solid #e5e7eb;
            transition: transform 0.3s, box-shadow 0.3s;
            cursor: pointer;
        }

        .lesson-card:hover {
            transform: translateY(-3px);
            box-shadow: 0 4px 12px rgba(0,0,0,0.08);
            border-color: #d1d5db;
        }

        .lesson-header {
            display: flex;
            justify-content: space-between;
            align-items: flex-start;
            margin-bottom: 15px;
        }

        .lesson-code {
            font-size: 0.85em;
            color: #6b7280;
            font-weight: 600;
        }

        .lesson-credits {
            background: #111827;
            color: white;
            padding: 4px 12px;
            border-radius: 4px;
            font-size: 0.85em;
            font-weight: 500;
        }

        .lesson-title {
            font-size: 1.2em;
            color: #111827;
            margin-bottom: 12px;
            font-weight: 600;
        }

        .lesson-details {
            display: flex;
            flex-direction: column;
            gap: 8px;
        }

        .detail-row {
            display: flex;
            align-items: center;
            gap: 8px;
            font-size: 0.9em;
            color: #6b7280;
        }

        .detail-label {
            font-weight: 600;
            color: #374151;
        }

        .type-badge {
            display: inline-block;
            padding: 3px 10px;
            border-radius: 4px;
            font-size: 0.8em;
            font-weight: 500;
            background: #e5e7eb;
            color: #374151;
        }

        .overall-stats {
            background: #fafafa;
            padding: 15px;
            border-radius: 8px;
            margin-bottom: 30px;
            text-align: center;
            color: #374151;
            font-size: 1em;
            border: 1px solid #e5e7eb;
            font-weight: 500;
        }

        .no-results {
            text-align: center;
            color: #6b7280;
            font-size: 1.2em;
            padding: 40px;
            background: #fafafa;
            border-radius: 8px;
            border: 1px solid #e5e7eb;
        }

        @media (max-width: 768px) {
            .nav-links {
                display: none;
            }

            .filter-tab {
                flex: 0 0 calc(50% - 4px);
            }
        }
    </style>
</head>
<body>
    <!-- Header -->
    <header>
        <div class="header-container">
            <nav>
                <div class="logo">📚 EduPortal</div>
                <ul class="nav-links">
                    <li><a href="{{ route('home') }}">Нүүр</a></li>
                    <li><a href="{{ route('lessons') }}" class="active">Хичээлүүд</a></li>
                    <li><a href="{{ route('home') }}#features">Онцлог</a></li>
                    <li><a href="#about">Бидний тухай</a></li>
                </ul>
                @auth
                    <a href="{{ route('dashboard') }}" class="login-btn">Хяналтын самбар</a>
                @else
                    <a href="{{ route('login') }}" class="login-btn">Нэвтрэх</a>
                @endauth
            </nav>
        </div>
    </header>

    <div class="container">
        <h1>📚 Хичээлүүд</h1>
        
        <div class="filter-section">
            <div class="filter-section-title">Курс сонгох</div>
            <div class="filter-tabs">
                <button class="filter-tab" data-filter="year" data-value="1">1-р Курс</button>
                <button class="filter-tab" data-filter="year" data-value="2">2-р Курс</button>
                <button class="filter-tab" data-filter="year" data-value="3">3-р Курс</button>
                <button class="filter-tab" data-filter="year" data-value="4">4-р Курс</button>
            </div>
        </div>

        <div class="filter-section">
            <div class="filter-section-title">Төрөл сонгох</div>
            <div class="filter-tabs">
                <button class="filter-tab" data-filter="type" data-value="GE">GE Ерөнхий боловсрол</button>
                <button class="filter-tab" data-filter="type" data-value="MB">MB Мэргэжилийн хичээл</button>
                <button class="filter-tab" data-filter="type" data-value="MA">MA Мэргэжлийн ахисан</button>
            </div>
        </div>

        <div class="filter-section">
            <button class="filter-tab active" id="clearFilters" style="margin: 0 auto; display: block;">Бүгдийг харах</button>
        </div>

        <input type="text" class="search-box" id="searchBox" placeholder="Хичээл хайх..." />
        
        <div class="overall-stats" id="overallStats"></div>
        
        <div id="contentContainer"></div>
    </div>

    <script>
        const lessons = [
            {code: "MBCS201", class: "IT2A", name: "Database", credits: 3, type: "MB", teacher: "Бямбаа Бат-Амгалан", year: 2},
            {code: "GENS201", class: "IT2A", name: "Development of IT", credits: 3, type: "GE", teacher: "Юра Отгонбаатар", year: 2},
            {code: "MBIT216", class: "IT2A", name: "Digital Electronic Logic Circuit", credits: 3, type: "MB", teacher: "Нямдаваа Нямдаг", year: 2},
            {code: "GEHS108", class: "IT1A", name: "English Language I", credits: 2, type: "GE", teacher: "Эрдэнэбат Батбаяр", year: 1},
            {code: "MAIT408", class: "IT4A", name: "Gradution Project I", credits: 2, type: "MA", teacher: "Юра Отгонбаатар", year: 4},
            {code: "GEHS116", class: "IT1A", name: "Human Development and Civil Ethics", credits: 3, type: "GE", teacher: "Мөнжаргал Гүндэгмаа", year: 1},
            {code: "MBIT115", class: "IT1A", name: "Introduction to EE", credits: 3, type: "MB", teacher: "Нямдаваа Нямдаг", year: 1},
            {code: "MBIT110", class: "IT2A", name: "Introduction to IoT", credits: 3, type: "MB", teacher: "Отгонбаяр Уянга", year: 2},
            {code: "MBCS103", class: "IT1A", name: "Introduction to Python", credits: 3, type: "MB", teacher: "Ён Ми Ким", year: 1},
            {code: "GEHS102", class: "IT1A", name: "Korean Language I", credits: 2, type: "GE", teacher: "Бо Хван Лим", year: 1},
            {code: "GESS103", class: "IT2A", name: "Management", credits: 2, type: "GE", teacher: "Өлзийтогтох Нямсүрэн", year: 2},
            {code: "GENS104", class: "IT1A", name: "Mathematics", credits: 3, type: "GE", teacher: "Баяраа Отгончимэг", year: 1},
            {code: "MAIT315", class: "IT3A", name: "Microprocessor I", credits: 3, type: "MA", teacher: "Нямдаваа Нямдаг", year: 3},
            {code: "MAIT422", class: "IT4A", name: "Mobile Communication", credits: 3, type: "MA", teacher: "Юра Отгонбаатар", year: 4},
            {code: "GEHS105", class: "IT2A", name: "Mongolian History and Culture", credits: 3, type: "GE", teacher: "Мөнжаргал Гүндэгмаа", year: 2},
            {code: "MAIT322", class: "IT3A", name: "Network Technologies", credits: 3, type: "MA", teacher: "Отгонбаяр Уянга", year: 3},
            {code: "MBCS301", class: "IT3A", name: "Operating System", credits: 3, type: "MB", teacher: "Ён Ми Ким", year: 3},
            {code: "MAIT411", class: "IT4A", name: "Optic Network Technology", credits: 3, type: "MA", teacher: "Дүгэрээ Норжмаа", year: 4},
            {code: "MAIT411", class: "IT3A", name: "Optic Network Technology", credits: 3, type: "MA", teacher: "Дүгэрээ Норжмаа", year: 3},
            {code: "GELS113", class: "IT1A", name: "Prevention Management of Disaster", credits: 1, type: "GE", teacher: "Чойжилсүрэн Мэндэлмаа", year: 1},
            {code: "MAIT330", class: "IT4A", name: "Signal System", credits: 3, type: "MA", teacher: "Отгонбаяр Уянга", year: 4},
            {code: "MBCS203", class: "IT3A", name: "Web Programming I", credits: 3, type: "MB", teacher: "Бямбаа Бат-Амгалан", year: 3}
        ];

        const yearNames = {
            1: "IT1 - Нэгдүгээр курс",
            2: "IT2 - Хоёрдугаар курс",
            3: "IT3 - Гуравдугаар курс",
            4: "IT4 - Дөрөвдүгээр курс"
        };

        const typeNames = {
            "MB": "MB - Мэргэжлийн Боловсрол",
            "GE": "GE - Ерөнхий Боловсрол",
            "MA": "MA - Мэргэжлийн Ахисан"
        };

        let currentYearFilter = null;
        let currentTypeFilter = null;
        let currentSearch = '';

        function createLessonCard(lesson) {
            return `
                <div class="lesson-card">
                    <div class="lesson-header">
                        <div class="lesson-code">${lesson.code}</div>
                        <div class="lesson-credits">${lesson.credits} кредит</div>
                    </div>
                    <div class="lesson-title">${lesson.name}</div>
                    <div class="lesson-details">
                        <div class="detail-row">
                            <span class="detail-label">Анги:</span>
                            <span>${lesson.class}</span>
                        </div>
                        <div class="detail-row">
                            <span class="detail-label">Төрөл:</span>
                            <span class="type-badge">${lesson.type}</span>
                        </div>
                        <div class="detail-row">
                            <span class="detail-label">Багш:</span>
                            <span>${lesson.teacher}</span>
                        </div>
                    </div>
                </div>
            `;
        }

        function renderAll(filteredLessons) {
            const container = document.getElementById('contentContainer');
            container.innerHTML = `
                <div class="lessons-grid">
                    ${filteredLessons.map(createLessonCard).join('')}
                </div>
            `;
        }

        function render() {
            let filtered = lessons.filter(lesson => 
                lesson.name.toLowerCase().includes(currentSearch) ||
                lesson.code.toLowerCase().includes(currentSearch) ||
                lesson.teacher.toLowerCase().includes(currentSearch) ||
                lesson.class.toLowerCase().includes(currentSearch)
            );

            if (currentYearFilter !== null) {
                filtered = filtered.filter(l => l.year === currentYearFilter);
            }

            if (currentTypeFilter !== null) {
                filtered = filtered.filter(l => l.type === currentTypeFilter);
            }

            let displayedLessons = filtered;

            if (filtered.length === 0) {
                document.getElementById('contentContainer').innerHTML = 
                    '<div class="no-results">Хайлтын үр дүн олдсонгүй</div>';
                displayedLessons = [];
            } else {
                renderAll(filtered);
            }

            const totalCredits = displayedLessons.reduce((sum, l) => sum + l.credits, 0);
            
            let filterDesc = '';
            if (currentYearFilter !== null) {
                filterDesc += `${currentYearFilter}-р курс`;
            }
            if (currentTypeFilter !== null) {
                if (filterDesc) filterDesc += ' | ';
                filterDesc += typeNames[currentTypeFilter].split(' - ')[0];
            }
            if (!filterDesc) {
                filterDesc = 'Бүгд';
            }

            document.getElementById('overallStats').textContent = 
                `${filterDesc}: ${displayedLessons.length} хичээл | ${totalCredits} кредит`;
        }

        document.querySelectorAll('.filter-tab[data-filter]').forEach(tab => {
            tab.addEventListener('click', () => {
                const filterType = tab.dataset.filter;
                const filterValue = tab.dataset.value;

                if (filterType === 'year') {
                    if (currentYearFilter === parseInt(filterValue)) {
                        currentYearFilter = null;
                        tab.classList.remove('active');
                    } else {
                        document.querySelectorAll('.filter-tab[data-filter="year"]').forEach(t => 
                            t.classList.remove('active')
                        );
                        currentYearFilter = parseInt(filterValue);
                        tab.classList.add('active');
                    }
                } else if (filterType === 'type') {
                    if (currentTypeFilter === filterValue) {
                        currentTypeFilter = null;
                        tab.classList.remove('active');
                    } else {
                        document.querySelectorAll('.filter-tab[data-filter="type"]').forEach(t => 
                            t.classList.remove('active')
                        );
                        currentTypeFilter = filterValue;
                        tab.classList.add('active');
                    }
                }

                const clearBtn = document.getElementById('clearFilters');
                if (currentYearFilter === null && currentTypeFilter === null) {
                    clearBtn.classList.add('active');
                } else {
                    clearBtn.classList.remove('active');
                }

                render();
            });
        });

        document.getElementById('clearFilters').addEventListener('click', () => {
            currentYearFilter = null;
            currentTypeFilter = null;
            
            document.querySelectorAll('.filter-tab[data-filter]').forEach(t => 
                t.classList.remove('active')
            );
            
            document.getElementById('clearFilters').classList.add('active');
            render();
        });

        document.getElementById('searchBox').addEventListener('input', (e) => {
            currentSearch = e.target.value.toLowerCase();
            render();
        });

        render();
    </script>
</body>
</html>
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
            gap: 2rem;
        }
        
        .welcome {
            color: #374151;
            font-weight: 500;
            font-size: 0.95rem;
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