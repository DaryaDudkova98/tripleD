<!-- Секция Обо мне -->
<section id="about" class="about-section py-16 md:py-24 bg-gradient-to-b from-transparent to-[#19171b]/30">
    <div class="container mx-auto px-4">
        
        <!-- Заголовок секции -->
        <div class="text-center mb-12 md:mb-16 animate-fade-in-up">
            <h2 class="text-3xl md:text-4xl lg:text-5xl font-bold mb-4">
                <span class="bg-gradient-to-r from-[#ff1a2a] to-[#51080d] bg-clip-text text-transparent">Обо мне</span>
            </h2>
            <div class="w-20 h-1 bg-gradient-to-r from-[#ff1a2a] to-[#51080d] mx-auto rounded-full"></div>
        </div>
        
        <div class="grid lg:grid-cols-2 gap-12 lg:gap-16 items-start">
            
            <!-- Левая колонка - описание -->
            <div class="about-content space-y-6 animate-fade-in-left">
                <h3 class="text-2xl md:text-3xl font-bold text-white">
                    Дудкова Дарья Дмитриевна
                </h3>
                
                <div class="inline-block px-3 py-1 rounded-full bg-[#ff1a2a]/20 border border-[#ff1a2a]/30 w-fit">
                    <span class="text-[#ff1a2a] text-sm font-medium">Начинающий веб-разработчик</span>
                </div>
                
                <p class="text-gray-400 text-lg leading-relaxed">
                    Привет! Меня зовут Дарья, и я создаю сайты, которые решают задачи бизнеса. 
                    Я на старте своего пути, но уже готова предлагать качественные решения по доступным ценам.
                </p>
                
                <p class="text-gray-400 leading-relaxed">
                    Моя цель — набрать портфолио и заслужить доверие клиентов. Поэтому к каждому проекту 
                    подхожу ответственно, делаю всё возможное для отличного результата и всегда остаюсь на связи. 
                    Вы получаете современный сайт, а я — ценный опыт и ваши рекомендации.
                </p>
                
                <div class="grid sm:grid-cols-2 gap-4 pt-4">
                    <div class="flex items-center gap-3 group hover:translate-x-1 transition-transform duration-300">
                        <svg class="w-5 h-5 text-[#ff1a2a]" fill="currentColor" viewBox="0 0 24 24">
                            <path d="M9 16.17L4.83 12l-1.42 1.41L9 19 21 7l-1.41-1.41z"/>
                        </svg>
                        <span class="text-gray-300 group-hover:text-white transition">Портфолио в процессе</span>
                    </div>
                    <div class="flex items-center gap-3 group hover:translate-x-1 transition-transform duration-300">
                        <svg class="w-5 h-5 text-[#ff1a2a]" fill="currentColor" viewBox="0 0 24 24">
                            <path d="M9 16.17L4.83 12l-1.42 1.41L9 19 21 7l-1.41-1.41z"/>
                        </svg>
                        <span class="text-gray-300 group-hover:text-white transition">Индивидуальный подход</span>
                    </div>
                    <div class="flex items-center gap-3 group hover:translate-x-1 transition-transform duration-300">
                        <svg class="w-5 h-5 text-[#ff1a2a]" fill="currentColor" viewBox="0 0 24 24">
                            <path d="M9 16.17L4.83 12l-1.42 1.41L9 19 21 7l-1.41-1.41z"/>
                        </svg>
                        <span class="text-gray-300 group-hover:text-white transition">Постоянная связь</span>
                    </div>
                    <div class="flex items-center gap-3 group hover:translate-x-1 transition-transform duration-300">
                        <svg class="w-5 h-5 text-[#ff1a2a]" fill="currentColor" viewBox="0 0 24 24">
                            <path d="M9 16.17L4.83 12l-1.42 1.41L9 19 21 7l-1.41-1.41z"/>
                        </svg>
                        <span class="text-gray-300 group-hover:text-white transition">Доступные цены</span>
                    </div>
                </div>
                
                <div class="pt-4">
                    <a href="#contacts" 
                       class="inline-flex items-center gap-2 group relative bg-gradient-to-r from-[#ff1a2a] to-[#51080d] text-white px-6 py-3 rounded-lg font-medium transition-all duration-300 overflow-hidden
                              shadow-[0_0_10px_rgba(255,26,42,0.3)] hover:shadow-[0_0_25px_rgba(255,26,42,0.6)] hover:scale-105">
                        <span class="absolute inset-0 bg-gradient-to-r from-[#ff1a2a] to-[#51080d] opacity-0 group-hover:opacity-100 transition-opacity duration-300 blur-md"></span>
                        <span class="relative z-10 flex items-center gap-2">
                            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="2">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M8 12h.01M12 12h.01M16 12h.01M21 12c0 4.418-4.03 8-9 8a9.863 9.863 0 01-4.255-.949L3 20l1.395-3.72C3.512 15.042 3 13.574 3 12c0-4.418 4.03-8 9-8s9 3.582 9 8z"/>
                            </svg>
                            Написать мне
                        </span>
                    </a>
                </div>
            </div>
            
            <!-- Правая колонка - скиллы -->
            <div class="skills-stats animate-fade-in-right">
                <div class="bg-gradient-to-br from-[#1f1c23] to-[#19171b] rounded-2xl p-6 md:p-8 border border-white/10">
                    <h4 class="text-xl font-bold text-white mb-6 flex items-center gap-2">
                        <svg class="w-5 h-5 text-[#ff1a2a]" fill="currentColor" viewBox="0 0 24 24">
                            <path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm1 15h-2v-2h2v2zm0-4h-2V7h2v6z"/>
                        </svg>
                        Мои технологии
                    </h4>
                    
                    <div class="flex flex-wrap gap-3 mb-8">
                        <span class="skill-tag-static">HTML5</span>
                        <span class="skill-tag-static">CSS3</span>
                        <span class="skill-tag-static">Tailwind CSS</span>
                        <span class="skill-tag-static">JavaScript ES6+</span>
                        <span class="skill-tag-static">PHP</span>
                        <span class="skill-tag-static">Laravel</span>
                        <span class="skill-tag-static">Symfony</span>
                        <span class="skill-tag-static">MySQL</span>
                        <span class="skill-tag-static">Git</span>
                    </div>
                    
                    <h4 class="text-xl font-bold text-white mb-6 flex items-center gap-2">
                        <svg class="w-5 h-5 text-[#ff1a2a]" fill="currentColor" viewBox="0 0 24 24">
                            <path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2z"/>
                        </svg>
                        Почему стоит выбрать меня
                    </h4>
                    
                    <ul class="space-y-3">
                        <li class="flex items-center gap-3 text-gray-400">
                            <svg class="w-4 h-4 text-[#ff1a2a]" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M9 16.17L4.83 12l-1.42 1.41L9 19 21 7l-1.41-1.41z"/>
                            </svg>
                            Цены ниже рыночных
                        </li>
                        <li class="flex items-center gap-3 text-gray-400">
                            <svg class="w-4 h-4 text-[#ff1a2a]" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M9 16.17L4.83 12l-1.42 1.41L9 19 21 7l-1.41-1.41z"/>
                            </svg>
                            Покажу результат до оплаты
                        </li>
                        <li class="flex items-center gap-3 text-gray-400">
                            <svg class="w-4 h-4 text-[#ff1a2a]" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M9 16.17L4.83 12l-1.42 1.41L9 19 21 7l-1.41-1.41z"/>
                            </svg>
                            Вношу правки до вашего одобрения
                        </li>
                        <li class="flex items-center gap-3 text-gray-400">
                            <svg class="w-4 h-4 text-[#ff1a2a]" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M9 16.17L4.83 12l-1.42 1.41L9 19 21 7l-1.41-1.41z"/>
                            </svg>
                            Помогаю с запуском и хостингом
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Бегущая строка с навыками -->
<section class="skills-section py-12">
    <div class="skills-wrapper relative">
        <!-- Обрамление слева -->
        <div class="skills-border-left"></div>
        
        <!-- Обрамление справа -->
        <div class="skills-border-right"></div>
        
        <!-- Бегущая строка -->
        <div class="marquee-container relative overflow-hidden group" data-direction="right" id="marqueeContainer">
            <div class="marquee-track flex items-center gap-6 py-3 animate-marquee-right" id="marqueeTrack">
                <!-- Навыки (повторены 3 раза для бесконечности) -->
                <span class="skill-tag">Laravel</span>
                <span class="skill-tag">Symfony</span>
                <span class="skill-tag">Tailwind CSS</span>
                <span class="skill-tag">HTML5</span>
                <span class="skill-tag">PHP</span>
                <span class="skill-tag">MySQL</span>
                <span class="skill-tag">Git</span>
                <span class="skill-tag">Docker</span>
                <span class="skill-tag">CSS3</span>
                <span class="skill-tag">JavaScript</span>
                
                <!-- 2-й повтор -->
                <span class="skill-tag">Laravel</span>
                <span class="skill-tag">Symfony</span>
                <span class="skill-tag">Tailwind CSS</span>
                <span class="skill-tag">HTML5</span>
                <span class="skill-tag">PHP</span>
                <span class="skill-tag">MySQL</span>
                <span class="skill-tag">Git</span>
                <span class="skill-tag">Docker</span>
                <span class="skill-tag">CSS3</span>
                <span class="skill-tag">JavaScript</span>
                
                <!-- 3-й повтор -->
                <span class="skill-tag">Laravel</span>
                <span class="skill-tag">Symfony</span>
                <span class="skill-tag">Tailwind CSS</span>
                <span class="skill-tag">HTML5</span>
                <span class="skill-tag">PHP</span>
                <span class="skill-tag">MySQL</span>
                <span class="skill-tag">Git</span>
                <span class="skill-tag">Docker</span>
                <span class="skill-tag">CSS3</span>
                <span class="skill-tag">JavaScript</span>
            </div>
        </div>
    </div>
</section>