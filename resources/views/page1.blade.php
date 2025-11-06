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
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            min-height: 100vh;
        }

        /* Header */
        header {
            background: rgba(255, 255, 255, 0.95);
            backdrop-filter: blur(10px);
            box-shadow: 0 2px 20px rgba(0, 0, 0, 0.1);
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
            font-size: 1.8rem;
            font-weight: 700;
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
        }

        .nav-links {
            display: flex;
            gap: 2rem;
            list-style: none;
        }

        .nav-links a {
            text-decoration: none;
            color: #333;
            font-weight: 500;
            transition: color 0.3s;
            position: relative;
        }

        .nav-links a:hover {
            color: #667eea;
        }

        .nav-links a.active {
            color: #667eea;
        }

        .nav-links a::after {
            content: '';
            position: absolute;
            bottom: -5px;
            left: 0;
            width: 0;
            height: 2px;
            background: #667eea;
            transition: width 0.3s;
        }

        .nav-links a:hover::after,
        .nav-links a.active::after {
            width: 100%;
        }

        .login-btn {
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            color: white;
            padding: 0.7rem 1.8rem;
            border-radius: 25px;
            text-decoration: none;
            font-weight: 600;
            transition: transform 0.3s, box-shadow 0.3s;
            box-shadow: 0 4px 15px rgba(102, 126, 234, 0.4);
        }

        .login-btn:hover {
            transform: translateY(-2px);
            box-shadow: 0 6px 20px rgba(102, 126, 234, 0.6);
        }

        .container {
            max-width: 1400px;
            margin: 0 auto;
            padding: 20px;
        }

        h1 {
            color: white;
            text-align: center;
            margin: 30px 0 20px;
            font-size: 2.5em;
            text-shadow: 2px 2px 4px rgba(0,0,0,0.3);
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
            background: rgba(255,255,255,0.2);
            backdrop-filter: blur(10px);
            color: white;
            border: 2px solid rgba(255,255,255,0.3);
            padding: 12px 20px;
            border-radius: 25px;
            font-size: 0.95em;
            font-weight: 600;
            cursor: pointer;
            transition: all 0.3s;
            white-space: nowrap;
            flex: 0 0 calc(25% - 6px);
            text-align: center;
        }

        .filter-tab:hover {
            background: rgba(255,255,255,0.3);
            transform: translateY(-2px);
        }

        .filter-tab.active {
            background: white;
            color: #667eea;
            border-color: white;
            box-shadow: 0 4px 12px rgba(0,0,0,0.2);
        }

        .filter-section {
            margin-bottom: 15px;
        }

        .filter-section-title {
            color: white;
            text-align: center;
            font-size: 0.9em;
            margin-bottom: 8px;
            font-weight: 600;
            opacity: 0.9;
        }

        .search-box {
            width: 100%;
            max-width: 500px;
            margin: 0 auto 30px;
            padding: 15px 20px;
            font-size: 1.1em;
            border: none;
            border-radius: 30px;
            box-shadow: 0 4px 12px rgba(0,0,0,0.2);
            outline: none;
            display: block;
        }

        .section {
            margin-bottom: 40px;
        }

        .section-header {
            background: rgba(255,255,255,0.95);
            padding: 20px;
            border-radius: 12px;
            margin-bottom: 20px;
            box-shadow: 0 4px 12px rgba(0,0,0,0.2);
        }

        .section-title {
            font-size: 1.8em;
            color: #2d3748;
            margin-bottom: 10px;
            font-weight: 700;
        }

        .section-stats {
            color: #667eea;
            font-size: 1.1em;
            font-weight: 600;
        }

        .lessons-grid {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(350px, 1fr));
            gap: 20px;
        }

        .lesson-card {
            background: white;
            border-radius: 12px;
            padding: 20px;
            box-shadow: 0 8px 16px rgba(0,0,0,0.2);
            transition: transform 0.3s, box-shadow 0.3s;
            cursor: pointer;
        }

        .lesson-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 12px 24px rgba(0,0,0,0.3);
        }

        .lesson-header {
            display: flex;
            justify-content: space-between;
            align-items: flex-start;
            margin-bottom: 15px;
        }

        .lesson-code {
            font-size: 0.85em;
            color: #667eea;
            font-weight: 600;
        }

        .lesson-credits {
            background: #667eea;
            color: white;
            padding: 4px 12px;
            border-radius: 20px;
            font-size: 0.85em;
            font-weight: 600;
        }

        .lesson-title {
            font-size: 1.3em;
            color: #2d3748;
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
            font-size: 0.95em;
            color: #4a5568;
        }

        .detail-label {
            font-weight: 600;
            color: #764ba2;
        }

        .type-badge {
            display: inline-block;
            padding: 3px 10px;
            border-radius: 12px;
            font-size: 0.8em;
            font-weight: 600;
        }

        .type-mb {
            background: #fef3c7;
            color: #92400e;
        }

        .type-ge {
            background: #dbeafe;
            color: #1e40af;
        }

        .type-ma {
            background: #dcfce7;
            color: #166534;
        }

        .overall-stats {
            background: rgba(255,255,255,0.2);
            backdrop-filter: blur(10px);
            padding: 15px;
            border-radius: 12px;
            margin-bottom: 30px;
            text-align: center;
            color: white;
            font-size: 1.1em;
        }

        .no-results {
            text-align: center;
            color: white;
            font-size: 1.3em;
            padding: 40px;
            background: rgba(255,255,255,0.1);
            border-radius: 12px;
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
                    <li><a href="/">Нүүр</a></li>
                    <li><a href="/page1" class="active">Хичээлүүд</a></li>
                    <li><a href="/page2">Багш нар</a></li>
                    <li><a href="/#features">Боломжууд</a></li>
                </ul>
                <a href="/login" class="login-btn">Нэвтрэх</a>
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
                <button class="filter-tab" data-filter="type" data-value="GE">GE-Ерөнхий Боловсрол</button>
                <button class="filter-tab" data-filter="type" data-value="MB">MB-Мэргэжлийн Боловсрол</button>
                <button class="filter-tab" data-filter="type" data-value="MA">MA-Мэргэжлийн Ахисан</button>
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
                            <span class="type-badge type-${lesson.type.toLowerCase()}">${lesson.type}</span>
                        </div>
                        <div class="detail-row">
                            <span class="detail-label">Багш:</span>
                            <span>${lesson.teacher}</span>
                        </div>
                    </div>
                </div>
            `;
        }

        function renderSingleYear(filteredLessons, yearNum) {
            const container = document.getElementById('contentContainer');
            const yearLessons = filteredLessons.filter(l => l.year === yearNum);
            
            if (yearLessons.length === 0) {
                container.innerHTML = '<div class="no-results">Энэ курст хичээл олдсонгүй</div>';
                return;
            }

            const yearCredits = yearLessons.reduce((sum, l) => sum + l.credits, 0);
            container.innerHTML = `
                <div class="section">
                    <div class="section-header">
                        <div class="section-title">${yearNames[yearNum]}</div>
                        <div class="section-stats">${yearLessons.length} хичээл | ${yearCredits} кредит</div>
                    </div>
                    <div class="lessons-grid">
                        ${yearLessons.map(createLessonCard).join('')}
                    </div>
                </div>
            `;
        }

        function renderSingleType(filteredLessons, typeCode) {
            const container = document.getElementById('contentContainer');
            const typeLessons = filteredLessons.filter(l => l.type === typeCode);
            
            if (typeLessons.length === 0) {
                container.innerHTML = '<div class="no-results">Энэ төрлийн хичээл олдсонгүй</div>';
                return;
            }

            const typeCredits = typeLessons.reduce((sum, l) => sum + l.credits, 0);
            container.innerHTML = `
                <div class="section">
                    <div class="section-header">
                        <div class="section-title">${typeNames[typeCode]}</div>
                        <div class="section-stats">${typeLessons.length} хичээл | ${typeCredits} кредит</div>
                    </div>
                    <div class="lessons-grid">
                        ${typeLessons.map(createLessonCard).join('')}
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

            // Apply year filter
            if (currentYearFilter !== null) {
                filtered = filtered.filter(l => l.year === currentYearFilter);
            }

            // Apply type filter
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
            
            // Build filter description
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
                    // Toggle year filter
                    if (currentYearFilter === parseInt(filterValue)) {
                        currentYearFilter = null;
                        tab.classList.remove('active');
                    } else {
                        // Remove active from all year tabs
                        document.querySelectorAll('.filter-tab[data-filter="year"]').forEach(t => 
                            t.classList.remove('active')
                        );
                        currentYearFilter = parseInt(filterValue);
                        tab.classList.add('active');
                    }
                } else if (filterType === 'type') {
                    // Toggle type filter
                    if (currentTypeFilter === filterValue) {
                        currentTypeFilter = null;
                        tab.classList.remove('active');
                    } else {
                        // Remove active from all type tabs
                        document.querySelectorAll('.filter-tab[data-filter="type"]').forEach(t => 
                            t.classList.remove('active')
                        );
                        currentTypeFilter = filterValue;
                        tab.classList.add('active');
                    }
                }

                // Update clear button state
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
            
            // Remove active from all filter tabs
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