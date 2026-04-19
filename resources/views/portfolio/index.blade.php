<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Портфолио | tripleD</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-black text-white">

    <!-- Хедер -->
    <header class="bg-[#19171b] border-b border-white/10 sticky top-0 z-50">
        <div class="container mx-auto px-4">
            <nav class="flex justify-between items-center py-4">
                <a href="/" class="logo flex items-center gap-2 hover:opacity-80 transition group">
                    <img src="/images/logo.svg" alt="tripleD" class="h-6 w-auto brightness-0 invert opacity-70 group-hover:opacity-100 group-hover:scale-110 transition-all duration-300">
                    <span class="font-bold text-lg bg-gradient-to-r from-white via-[#ff1a2a] to-white bg-clip-text text-transparent bg-[length:200%_auto] bg-left group-hover:bg-right transition-all duration-700">
                        tripleD
                    </span>
                </a>
                
                <ul class="hidden md:flex gap-8">
                    <li><a href="/#about" class="relative text-gray-300 hover:text-white transition pb-1 after:absolute after:bottom-0 after:left-0 after:w-0 hover:after:w-full after:h-0.5 after:bg-gradient-to-r after:from-[#ff1a2a] after:to-[#51080d] after:transition-all after:duration-300">Обо мне</a></li>
                    <li><a href="/#projects" class="relative text-gray-300 hover:text-white transition pb-1 after:absolute after:bottom-0 after:left-0 after:w-0 hover:after:w-full after:h-0.5 after:bg-gradient-to-r after:from-[#ff1a2a] after:to-[#51080d] after:transition-all after:duration-300">Портфолио</a></li>
                    <li><a href="/#service" class="relative text-gray-300 hover:text-white transition pb-1 after:absolute after:bottom-0 after:left-0 after:w-0 hover:after:w-full after:h-0.5 after:bg-gradient-to-r after:from-[#ff1a2a] after:to-[#51080d] after:transition-all after:duration-300">Услуги</a></li>
                    <li><a href="/#pricing" class="relative text-gray-300 hover:text-white transition pb-1 after:absolute after:bottom-0 after:left-0 after:w-0 hover:after:w-full after:h-0.5 after:bg-gradient-to-r after:from-[#ff1a2a] after:to-[#51080d] after:transition-all after:duration-300">Цены</a></li>
                </ul>
                
                <a href="/#contacts"
                    class="relative group bg-gradient-to-r from-[#ff1a2a] to-[#51080d] text-white px-6 py-2.5 rounded-lg font-medium transition-all duration-300 overflow-hidden shadow-[0_0_10px_rgba(255,26,42,0.3)] hover:shadow-[0_0_25px_rgba(255,26,42,0.6)] hover:scale-105">
                    <span class="relative z-10">Связаться</span>
                </a>
            </nav>
        </div>
    </header>

    <!-- Страница портфолио -->
    <section class="py-16 md:py-24">
        <div class="container mx-auto px-4">
            
            <!-- Заголовок -->
            <div class="text-center mb-12">
                <h1 class="text-4xl md:text-5xl font-bold mb-4">
                    <span class="bg-gradient-to-r from-[#ff1a2a] to-[#51080d] bg-clip-text text-transparent">Портфолио</span>
                </h1>
                <div class="w-20 h-1 bg-gradient-to-r from-[#ff1a2a] to-[#51080d] mx-auto rounded-full"></div>
                <p class="text-gray-400 mt-4">Здесь будут ваши проекты</p>
            </div>
            
            <!-- Фильтрация -->
            <div class="flex flex-wrap justify-center gap-3 mb-12">
                <button data-filter="all" class="filter-btn active px-6 py-2 rounded-full bg-[#ff1a2a]/20 border border-[#ff1a2a]/30 text-[#ff1a2a] text-sm font-medium hover:bg-[#ff1a2a]/30 transition-all">Все проекты</button>
                <button data-filter="visitcard" class="filter-btn px-6 py-2 rounded-full bg-white/5 border border-white/10 text-gray-400 text-sm font-medium hover:bg-white/10 hover:text-white transition-all">Сайт-визитка</button>
                <button data-filter="landing" class="filter-btn px-6 py-2 rounded-full bg-white/5 border border-white/10 text-gray-400 text-sm font-medium hover:bg-white/10 hover:text-white transition-all">Лендинг</button>
                <button data-filter="multipage" class="filter-btn px-6 py-2 rounded-full bg-white/5 border border-white/10 text-gray-400 text-sm font-medium hover:bg-white/10 hover:text-white transition-all">Многостраничник</button>
            </div>
            
            <!-- Сетка карточек 3x3 (9 карточек на страницу) -->
            <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-6" id="projectsGrid"></div>
            
            <!-- Пагинация (всегда видна) -->
            <div class="flex justify-center mt-12" id="pagination"></div>
            
            <!-- Сообщение, если проектов нет -->
            <div id="noProjects" class="text-center py-12 hidden">
                <p class="text-gray-400">Проекты в этой категории скоро появятся</p>
                <a href="/#contacts" class="inline-block mt-4 text-[#ff1a2a] hover:underline">Обсудить ваш проект</a>
            </div>
            
            <!-- Кнопка назад на главную -->
            <div class="text-center mt-12">
                <a href="/#projects" class="inline-flex items-center gap-2 text-gray-400 hover:text-[#ff1a2a] transition">
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 19l-7-7m0 0l7-7m-7 7h18"/>
                    </svg>
                    Вернуться на главную
                </a>
            </div>
            
        </div>
    </section>

    <!-- Футер -->
    <footer class="bg-[#1a1a1a] border-t border-white/10 mt-auto">
        <div class="container mx-auto px-4 py-8 text-center">
            <p class="text-gray-500 text-xs">© 2026 tripleD — Разработка современных сайтов</p>
        </div>
    </footer>

    <script>
        // 9 карточек-заглушек (по 3 каждого типа) - ВСЕ НА ОДНОЙ СТРАНИЦЕ
        const projects = [
            // Сайты-визитки (3 шт)
            { id: 1, title: "Ваш проект", type: "visitcard", typeName: "Сайт-визитка", technologies: ["HTML5", "CSS3", "Tailwind CSS", "JavaScript"], badge: "МЕСТО ДЛЯ ВАС" },
            { id: 2, title: "Ваш проект", type: "visitcard", typeName: "Сайт-визитка", technologies: ["HTML5", "CSS3", "Tailwind CSS", "JavaScript"], badge: "МЕСТО ДЛЯ ВАС" },
            { id: 3, title: "Ваш проект", type: "visitcard", typeName: "Сайт-визитка", technologies: ["HTML5", "CSS3", "Tailwind CSS", "JavaScript"], badge: "МЕСТО ДЛЯ ВАС" },
            // Лендинги (3 шт)
            { id: 4, title: "Ваш проект", type: "landing", typeName: "Лендинг", technologies: ["HTML5", "Tailwind CSS", "JavaScript", "PHP"], badge: "МЕСТО ДЛЯ ВАС" },
            { id: 5, title: "Ваш проект", type: "landing", typeName: "Лендинг", technologies: ["HTML5", "Tailwind CSS", "JavaScript", "PHP"], badge: "МЕСТО ДЛЯ ВАС" },
            { id: 6, title: "Ваш проект", type: "landing", typeName: "Лендинг", technologies: ["HTML5", "Tailwind CSS", "JavaScript", "PHP"], badge: "МЕСТО ДЛЯ ВАС" },
            // Многостраничники (3 шт)
            { id: 7, title: "Ваш проект", type: "multipage", typeName: "Многостраничник", technologies: ["PHP", "Laravel", "MySQL", "Tailwind CSS"], badge: "МЕСТО ДЛЯ ВАС" },
            { id: 8, title: "Ваш проект", type: "multipage", typeName: "Многостраничник", technologies: ["PHP", "Laravel", "MySQL", "Tailwind CSS"], badge: "МЕСТО ДЛЯ ВАС" },
            { id: 9, title: "Ваш проект", type: "multipage", typeName: "Многостраничник", technologies: ["PHP", "Laravel", "MySQL", "Tailwind CSS"], badge: "МЕСТО ДЛЯ ВАС" }
        ];

        // ПОКАЗЫВАЕМ ВСЕ 9 ПРОЕКТОВ НА СТРАНИЦЕ (3x3)
        const ITEMS_PER_PAGE = 9;
        let currentFilter = 'all';
        let currentPage = 1;

        function getIconByType(type) {
            if (type === 'visitcard') {
                return '<path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4"/>';
            } else if (type === 'landing') {
                return '<path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M3.75 9.776c.112-.017.227-.026.344-.026h15.812c.117 0 .232.009.344.026m-16.5 0a2.25 2.25 0 00-1.883 2.542l.857 6a2.25 2.25 0 002.227 1.932H19.05a2.25 2.25 0 002.227-1.932l.857-6a2.25 2.25 0 00-1.883-2.542m-16.5 0V6A2.25 2.25 0 016 3.75h3.879a1.5 1.5 0 011.06.44l2.122 2.12a1.5 1.5 0 001.06.44H18A2.25 2.25 0 0120.25 9v.776"/>';
            } else {
                return '<path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M4 6h16M4 12h16M4 18h16"/>';
            }
        }

        function renderProjects() {
            let filteredProjects = projects;
            if (currentFilter !== 'all') {
                filteredProjects = projects.filter(p => p.type === currentFilter);
            }
            
            const totalProjects = filteredProjects.length;
            // Пагинация: если проектов меньше ITEMS_PER_PAGE, то страница всё равно 1
            const totalPages = Math.max(1, Math.ceil(totalProjects / ITEMS_PER_PAGE));
            
            if (currentPage > totalPages) currentPage = totalPages;
            
            const start = (currentPage - 1) * ITEMS_PER_PAGE;
            const end = start + ITEMS_PER_PAGE;
            const paginatedProjects = filteredProjects.slice(start, end);
            
            const grid = document.getElementById('projectsGrid');
            const noProjectsDiv = document.getElementById('noProjects');
            
            if (paginatedProjects.length === 0) {
                grid.innerHTML = '';
                noProjectsDiv.classList.remove('hidden');
            } else {
                noProjectsDiv.classList.add('hidden');
                
                grid.innerHTML = paginatedProjects.map(project => `
                    <div class="flip-card h-80 cursor-pointer group perspective" data-type="${project.type}">
                        <div class="flip-card-inner relative w-full h-full transition-all duration-700 preserve-3d group-hover:rotate-y-180">
                            <div class="flip-card-front absolute w-full h-full backface-hidden rounded-2xl overflow-hidden bg-gradient-to-br from-[#1f1c23] to-[#19171b] border border-white/10">
                                <div class="w-full h-full flex flex-col items-center justify-center p-6 text-center">
                                    <div class="w-20 h-20 rounded-full bg-[#ff1a2a]/20 flex items-center justify-center mb-4">
                                        <svg class="w-10 h-10 text-[#ff1a2a]" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            ${getIconByType(project.type)}
                                        </svg>
                                    </div>
                                    <h3 class="text-white font-bold text-xl mb-2">${project.title}</h3>
                                    <p class="text-gray-400 text-sm">${project.typeName}</p>
                                    <p class="text-[#ff1a2a] text-xs mt-3">место для вашего бизнеса</p>
                                </div>
                            </div>
                            <div class="flip-card-back absolute w-full h-full backface-hidden rounded-2xl bg-gradient-to-br from-[#1f1c23] to-[#19171b] border border-white/10 p-6 rotate-y-180 flex flex-col justify-between">
                                <div>
                                    <div class="mb-2">
                                        <span class="text-[#ff1a2a] text-xs font-bold">${project.badge}</span>
                                    </div>
                                    <h3 class="text-xl font-bold text-white mb-2">Здесь может быть ваш сайт</h3>
                                    <p class="text-gray-400 text-sm mb-4">Свяжитесь со мной, и я создам современный сайт под ключ с выгодной ценой.</p>
                                    <div class="flex flex-wrap gap-2">
                                        ${project.technologies.map(tech => `<span class="skill-tag-static">${tech}</span>`).join('')}
                                    </div>
                                </div>
                                <div class="flex items-center justify-between mt-4">
                                    <a href="/#contacts" class="text-[#ff1a2a] hover:underline text-sm inline-flex items-center gap-1">
                                        Обсудить проект
                                        <svg class="w-3 h-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"/>
                                        </svg>
                                    </a>
                                    <span class="text-gray-500 text-xs">ждём вас</span>
                                </div>
                            </div>
                        </div>
                    </div>
                `).join('');
            }
            
            // ВСЕГДА показываем пагинацию
            renderPagination(totalPages, totalProjects);
        }
        
        function renderPagination(totalPages, totalProjects) {
            const paginationContainer = document.getElementById('pagination');
            
            // Пагинация отображается ВСЕГДА, даже при 1 странице
            let paginationHtml = '<div class="flex gap-2 flex-wrap justify-center">';
            
            // Кнопка "Назад"
            paginationHtml += `
                <button class="pagination-btn px-4 py-2 rounded-lg bg-white/5 border border-white/10 text-gray-400 hover:bg-[#ff1a2a]/20 hover:text-[#ff1a2a] transition-all ${currentPage === 1 ? 'opacity-50 cursor-not-allowed' : 'cursor-pointer'}" 
                        ${currentPage === 1 ? 'disabled' : `onclick="goToPage(${currentPage - 1})"`}>
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"/>
                    </svg>
                </button>
            `;
            
            // Номера страниц
            for (let i = 1; i <= totalPages; i++) {
                if (i === 1 || i === totalPages || (i >= currentPage - 1 && i <= currentPage + 1)) {
                    paginationHtml += `
                        <button class="pagination-btn w-10 h-10 rounded-lg transition-all ${i === currentPage ? 'bg-[#ff1a2a] text-white' : 'bg-white/5 border border-white/10 text-gray-400 hover:bg-[#ff1a2a]/20 hover:text-[#ff1a2a]'}" 
                                onclick="goToPage(${i})">
                            ${i}
                        </button>
                    `;
                } else if (i === currentPage - 2 || i === currentPage + 2) {
                    paginationHtml += `<span class="px-2 py-2 text-gray-500">...</span>`;
                }
            }
            
            // Кнопка "Вперёд"
            paginationHtml += `
                <button class="pagination-btn px-4 py-2 rounded-lg bg-white/5 border border-white/10 text-gray-400 hover:bg-[#ff1a2a]/20 hover:text-[#ff1a2a] transition-all ${currentPage === totalPages ? 'opacity-50 cursor-not-allowed' : 'cursor-pointer'}" 
                        ${currentPage === totalPages ? 'disabled' : `onclick="goToPage(${currentPage + 1})"`}>
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/>
                    </svg>
                </button>
            `;
            
            const filteredProjects = currentFilter === 'all' ? projects : projects.filter(p => p.type === currentFilter);
            const startItem = (currentPage - 1) * ITEMS_PER_PAGE + 1;
            const endItem = Math.min(currentPage * ITEMS_PER_PAGE, filteredProjects.length);
            
            paginationHtml += '</div>';
            paginationHtml += `
                <div class="text-center text-gray-500 text-sm mt-4">
                    Показано ${startItem}-${endItem} из ${filteredProjects.length} проектов
                </div>
            `;
            
            paginationContainer.innerHTML = paginationHtml;
        }
        
        window.goToPage = (page) => {
            let filteredProjects = projects;
            if (currentFilter !== 'all') {
                filteredProjects = projects.filter(p => p.type === currentFilter);
            }
            const totalPages = Math.max(1, Math.ceil(filteredProjects.length / ITEMS_PER_PAGE));
            
            if (page >= 1 && page <= totalPages) {
                currentPage = page;
                renderProjects();
                document.getElementById('projectsGrid').scrollIntoView({ behavior: 'smooth', block: 'start' });
            }
        };
        
        // Фильтрация
        document.querySelectorAll('.filter-btn').forEach(btn => {
            btn.addEventListener('click', () => {
                document.querySelectorAll('.filter-btn').forEach(b => {
                    b.classList.remove('active', 'bg-[#ff1a2a]/20', 'border-[#ff1a2a]/30', 'text-[#ff1a2a]');
                    b.classList.add('bg-white/5', 'border-white/10', 'text-gray-400');
                });
                btn.classList.remove('bg-white/5', 'border-white/10', 'text-gray-400');
                btn.classList.add('active', 'bg-[#ff1a2a]/20', 'border-[#ff1a2a]/30', 'text-[#ff1a2a]');
                
                currentFilter = btn.dataset.filter;
                currentPage = 1;
                renderProjects();
            });
        });
        
        renderProjects();
    </script>

    <style>
        .pagination-btn {
            cursor: pointer;
            min-width: 40px;
        }
        .pagination-btn:disabled {
            cursor: not-allowed;
        }
        .skill-tag-static {
            display: inline-block;
            padding: 4px 10px;
            background: rgba(255, 26, 42, 0.1);
            border-radius: 20px;
            font-size: 11px;
            font-weight: 500;
            color: #ff1a2a;
        }
    </style>

</body>
</html>