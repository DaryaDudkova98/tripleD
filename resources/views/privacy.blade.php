<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Политика конфиденциальности | tripleD</title>
    
    <!-- Подключаем Tailwind CSS через Vite (или ваш способ) -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    
    <!-- Если Vite не используется, подключите CSS напрямую -->
    <!-- <link href="/css/app.css" rel="stylesheet"> -->
    
    <style>
        /* Дополнительные стили на случай, если Tailwind не подгрузился */
        body {
            background-color: #0a0a0a;
            font-family: system-ui, -apple-system, sans-serif;
        }
    </style>
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
                <a href="/" class="relative group bg-gradient-to-r from-[#ff1a2a] to-[#51080d] text-white px-6 py-2.5 rounded-lg font-medium transition-all duration-300 overflow-hidden shadow-[0_0_10px_rgba(255,26,42,0.3)] hover:shadow-[0_0_25px_rgba(255,26,42,0.6)] hover:scale-105">
                    <span class="relative z-10">На главную</span>
                </a>
            </nav>
        </div>
    </header>

    <!-- Страница политики конфиденциальности -->
    <section class="py-16 md:py-24">
        <div class="container mx-auto px-4 max-w-4xl">
            
            <!-- Кнопка назад -->
            <a href="/" class="inline-flex items-center gap-2 text-gray-400 hover:text-[#ff1a2a] transition mb-8">
                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 19l-7-7m0 0l7-7m-7 7h18"/>
                </svg>
                ← Вернуться на главную
            </a>
            
            <div class="bg-gradient-to-br from-[#1f1c23] to-[#19171b] rounded-2xl p-6 md:p-10 border border-white/10">
                
                <h1 class="text-3xl md:text-4xl font-bold text-white mb-2">Политика в отношении обработки персональных данных</h1>
                <p class="text-gray-500 text-sm mb-8">Последнее обновление: 18 апреля 2026 г.</p>
                
                <div class="space-y-6 text-gray-400">
                    
                    <div>
                        <h2 class="text-xl font-semibold text-white mb-3">1. Общие положения</h2>
                        <p class="leading-relaxed">
                            Настоящая Политика конфиденциальности (далее — Политика) действует в отношении всей информации, 
                            которую сайт <span class="text-[#ff1a2a]">tripled.by</span> (доменное имя: <span class="text-[#ff1a2a]">https://tripled.by</span>), 
                            администратором которого является <span class="text-white">Дудкова Дарья Дмитриевна</span> (далее — Оператор), 
                            может получить о пользователе во время использования им сайта.
                        </p>
                        <p class="leading-relaxed mt-3">
                            Использование сайта означает безоговорочное согласие пользователя с настоящей Политикой и указанными 
                            в ней условиями обработки его персональной информации; в случае несогласия с этими условиями 
                            пользователь должен воздержаться от использования сайта.
                        </p>
                    </div>
                    
                    <div>
                        <h2 class="text-xl font-semibold text-white mb-3">2. Персональные данные пользователей, которые обрабатывает Оператор</h2>
                        <p class="leading-relaxed mb-2">2.1. В рамках настоящей Политики под «персональными данными пользователя» понимаются:</p>
                        <ul class="list-disc list-inside space-y-1 ml-4">
                            <li>Персональная информация, которую пользователь предоставляет о себе самостоятельно при заполнении форм обратной связи или при переходе в мессенджеры (Telegram, Viber), включая: имя, номер телефона, аккаунт в мессенджере.</li>
                            <li>Данные, которые автоматически передаются сервисам сайта в процессе его использования с помощью установленного на устройстве пользователя программного обеспечения (IP-адрес, данные файлов cookie, информация о браузере пользователя, технические характеристики оборудования и программного обеспечения).</li>
                        </ul>
                    </div>
                    
                    <div>
                        <h2 class="text-xl font-semibold text-white mb-3">3. Цели обработки персональных данных пользователей</h2>
                        <p class="leading-relaxed mb-2">3.1. Сайт собирает и хранит только ту персональную информацию, которая необходима для предоставления услуг и связи с пользователем.</p>
                        <p class="leading-relaxed mb-2">3.2. Персональную информацию пользователя Оператор обрабатывает в следующих целях:</p>
                        <ul class="list-disc list-inside space-y-1 ml-4">
                            <li>Установление обратной связи с пользователем, включая направление уведомлений, запросов, касающихся использования сайта, оказания услуг, обработку запросов и заявок от пользователя.</li>
                            <li>Заключение, исполнение и прекращение гражданско-правовых договоров.</li>
                            <li>Улучшение качества сайта, удобства его использования (через анализ метрики).</li>
                        </ul>
                    </div>
                    
                    <div>
                        <h2 class="text-xl font-semibold text-white mb-3">4. Условия обработки персональных данных и их передачи третьим лицам</h2>
                        <ul class="list-disc list-inside space-y-1 ml-4">
                            <li>Оператор хранит персональную информацию пользователей в соответствии с внутренними регламентами конкретных сервисов.</li>
                            <li>В отношении персональной информации пользователя сохраняется ее конфиденциальность.</li>
                            <li>Оператор вправе передать персональную информацию пользователя третьим лицам в следующих случаях: пользователь выразил согласие на такие действия; передача необходима для использования пользователем определенного сервиса либо для исполнения определенного соглашения или договора с пользователем; передача предусмотрена законодательством в рамках установленной процедуры.</li>
                        </ul>
                    </div>
                    
                    <div>
                        <h2 class="text-xl font-semibold text-white mb-3">5. Обработка файлов Cookie</h2>
                        <p class="leading-relaxed">
                            Файлы cookie, передаваемые оборудованием пользователя сайту, могут использоваться Оператором 
                            для улучшения работы сайта и сбора статистики. Пользователь может запретить обработку файлов cookie 
                            в настройках своего браузера.
                        </p>
                    </div>
                    
                    <div>
                        <h2 class="text-xl font-semibold text-white mb-3">6. Права пользователя и обратная связь</h2>
                        <p class="leading-relaxed mb-2">
                            Пользователь имеет право на получение информации, касающейся обработки его персональных данных, 
                            а также на изменение или удаление своих персональных данных.
                        </p>
                        <p class="leading-relaxed">
                            Все предложения или вопросы по поводу настоящей Политики пользователь вправе направлять Оператору 
                            по электронной почте: <a href="mailto:info.website.tripled@gmail.com" class="text-[#ff1a2a] hover:underline">info.website.tripled@gmail.com</a>
                        </p>
                    </div>
                    
                    <div>
                        <h2 class="text-xl font-semibold text-white mb-3">7. Реквизиты Оператора</h2>
                        <div class="space-y-1 text-gray-400">
                            <p><span class="text-white">ФИО:</span> Дудкова Дарья Дмитриевна</p>
                            <p><span class="text-white">УНП:</span> — (физическое лицо)</p>
                            <p><span class="text-white">Телефон:</span> <a href="tel:+375336517301" class="hover:text-[#ff1a2a] transition">+375 33 651 73 01</a></p>
                            <p><span class="text-white">Email:</span> <a href="mailto:info.website.tripled@gmail.com" class="hover:text-[#ff1a2a] transition">info.website.tripled@gmail.com</a></p>
                        </div>
                    </div>
                    
                </div>
                
                <!-- Ссылка назад внизу -->
                <div class="mt-8 pt-6 border-t border-white/10 text-center">
                    <a href="/" class="text-gray-400 hover:text-[#ff1a2a] transition inline-flex items-center gap-2">
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 19l-7-7m0 0l7-7m-7 7h18"/>
                        </svg>
                        ← Вернуться на главную
                    </a>
                </div>
                
            </div>
        </div>
    </section>

    <!-- Футер -->
    <footer class="bg-[#1a1a1a] border-t border-white/10 mt-auto">
        <div class="container mx-auto px-4 py-8 text-center">
            <p class="text-gray-500 text-xs">© 2026 tripleD — Разработка современных сайтов</p>
        </div>
    </footer>

</body>
</html>