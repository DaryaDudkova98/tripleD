<!-- Секция с 3D карточками -->
<section id="projects" class="flip-cards-section py-16 md:py-24">
    <div class="container mx-auto px-4">
        
        <div class="text-center mb-12 animate-fade-in-up">
            <div class="inline-block mb-4 px-4 py-1 rounded-full bg-[#ff1a2a]/20 border border-[#ff1a2a]/30">
                <span class="text-[#ff1a2a] text-sm font-medium">Портфолио пополняется</span>
            </div>
            <h2 class="text-3xl md:text-4xl font-bold mb-4">
                <span class="bg-gradient-to-r from-[#ff1a2a] to-[#51080d] bg-clip-text text-transparent">Мои проекты</span>
            </h2>
            <div class="w-20 h-1 bg-gradient-to-r from-[#ff1a2a] to-[#51080d] mx-auto rounded-full"></div>
            <p class="text-gray-400 mt-4">Наведите на карточку, чтобы увидеть детали</p>
            <p class="text-gray-500 text-sm mt-2">* Здесь могут быть ваши проекты</p>
        </div>
        
        <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-6">
            
            <!-- Карточка 1 - Сайт-визитка -->
            <div class="flip-card h-80 cursor-pointer group perspective">
                <div class="flip-card-inner relative w-full h-full transition-all duration-700 preserve-3d group-hover:rotate-y-180">
                    <!-- Передняя сторона -->
                    <div class="flip-card-front absolute w-full h-full backface-hidden rounded-2xl overflow-hidden bg-gradient-to-br from-[#1f1c23] to-[#19171b] border border-white/10">
                        <div class="w-full h-full flex flex-col items-center justify-center p-6 text-center">
                            <div class="w-20 h-20 rounded-full bg-[#ff1a2a]/20 flex items-center justify-center mb-4">
                                <svg class="w-10 h-10 text-[#ff1a2a]" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4"/>
                                </svg>
                            </div>
                            <h3 class="text-white font-bold text-xl mb-2">Сайт-визитка</h3>
                            <p class="text-gray-400 text-sm">Для малого бизнеса</p>
                            <p class="text-[#ff1a2a] text-xs mt-3">пример портфолио</p>
                        </div>
                    </div>
                    <!-- Задняя сторона -->
                    <div class="flip-card-back absolute w-full h-full backface-hidden rounded-2xl bg-gradient-to-br from-[#1f1c23] to-[#19171b] border border-white/10 p-6 rotate-y-180 flex flex-col justify-between">
                        <div>
                            <div class="mb-2">
                                <span class="text-[#ff1a2a] text-xs font-bold">САЙТ-ВИЗИТКА</span>
                            </div>
                            <h3 class="text-xl font-bold text-white mb-2">Название проекта</h3>
                            <p class="text-gray-400 text-sm mb-4">Современный одностраничный сайт с информацией о компании, услугах и контактами.</p>
                            <div class="flex flex-wrap gap-2">
                                <span class="skill-tag-static">HTML5</span>
                                <span class="skill-tag-static">CSS3</span>
                                <span class="skill-tag-static">Tailwind CSS</span>
                                <span class="skill-tag-static">JavaScript ES6+</span>
                            </div>
                        </div>
                        <div class="flex items-center justify-between mt-4">
                            <a href="#" class="text-[#ff1a2a] hover:underline text-sm inline-flex items-center gap-1">
                                Смотреть сайт
                                <svg class="w-3 h-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"/>
                                </svg>
                            </a>
                            <span class="text-gray-500 text-xs">готов к запуску</span>
                        </div>
                    </div>
                </div>
            </div>
            
            <!-- Карточка 2 - Лендинг -->
            <div class="flip-card h-80 cursor-pointer group perspective">
                <div class="flip-card-inner relative w-full h-full transition-all duration-700 preserve-3d group-hover:rotate-y-180">
                    <div class="flip-card-front absolute w-full h-full backface-hidden rounded-2xl overflow-hidden bg-gradient-to-br from-[#1f1c23] to-[#19171b] border border-white/10">
                        <div class="w-full h-full flex flex-col items-center justify-center p-6 text-center">
                            <div class="w-20 h-20 rounded-full bg-[#ff1a2a]/20 flex items-center justify-center mb-4">
                                <svg class="w-10 h-10 text-[#ff1a2a]" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M3.75 9.776c.112-.017.227-.026.344-.026h15.812c.117 0 .232.009.344.026m-16.5 0a2.25 2.25 0 00-1.883 2.542l.857 6a2.25 2.25 0 002.227 1.932H19.05a2.25 2.25 0 002.227-1.932l.857-6a2.25 2.25 0 00-1.883-2.542m-16.5 0V6A2.25 2.25 0 016 3.75h3.879a1.5 1.5 0 011.06.44l2.122 2.12a1.5 1.5 0 001.06.44H18A2.25 2.25 0 0120.25 9v.776"/>
                                </svg>
                            </div>
                            <h3 class="text-white font-bold text-xl mb-2">Лендинг</h3>
                            <p class="text-gray-400 text-sm">Для продаж и заявок</p>
                            <p class="text-[#ff1a2a] text-xs mt-3">пример портфолио</p>
                        </div>
                    </div>
                    <div class="flip-card-back absolute w-full h-full backface-hidden rounded-2xl bg-gradient-to-br from-[#1f1c23] to-[#19171b] border border-white/10 p-6 rotate-y-180 flex flex-col justify-between">
                        <div>
                            <div class="mb-2">
                                <span class="text-[#ff1a2a] text-xs font-bold">ПРОДАЮЩИЙ САЙТ</span>
                            </div>
                            <h3 class="text-xl font-bold text-white mb-2">Название проекта</h3>
                            <p class="text-gray-400 text-sm mb-4">Одностраничный сайт с формой захвата, преимуществами и призывом к действию.</p>
                            <div class="flex flex-wrap gap-2">
                                <span class="skill-tag-static">HTML5</span>
                                <span class="skill-tag-static">Tailwind CSS</span>
                                <span class="skill-tag-static">JavaScript ES6+</span>
                                <span class="skill-tag-static">PHP</span>
                            </div>
                        </div>
                        <div class="flex items-center justify-between mt-4">
                            <a href="#" class="text-[#ff1a2a] hover:underline text-sm inline-flex items-center gap-1">
                                Смотреть сайт
                                <svg class="w-3 h-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"/>
                                </svg>
                            </a>
                            <span class="text-gray-500 text-xs">готов к запуску</span>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Карточка 3 - Интернет-магазин -->
            <div class="flip-card h-80 cursor-pointer group perspective">
                <div class="flip-card-inner relative w-full h-full transition-all duration-700 preserve-3d group-hover:rotate-y-180">
                    <div class="flip-card-front absolute w-full h-full backface-hidden rounded-2xl overflow-hidden bg-gradient-to-br from-[#1f1c23] to-[#19171b] border border-white/10">
                        <div class="w-full h-full flex flex-col items-center justify-center p-6 text-center">
                            <div class="w-20 h-20 rounded-full bg-[#ff1a2a]/20 flex items-center justify-center mb-4">
                                <svg class="w-10 h-10 text-[#ff1a2a]" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M15.75 10.5V6a3.75 3.75 0 10-7.5 0v4.5m11.356-1.993l1.263 12c.07.665-.45 1.243-1.119 1.243H4.25a1.125 1.125 0 01-1.12-1.243l1.264-12A1.125 1.125 0 015.513 7.5h12.974c.576 0 1.059.435 1.119 1.007zM8.625 10.5a.375.375 0 11-.75 0 .375.375 0 01.75 0zm7.5 0a.375.375 0 11-.75 0 .375.375 0 01.75 0z"/>
                                </svg>
                            </div>
                            <h3 class="text-white font-bold text-xl mb-2">Интернет-магазин</h3>
                            <p class="text-gray-400 text-sm">С корзиной и каталогом</p>
                            <p class="text-[#ff1a2a] text-xs mt-3">пример портфолио</p>
                        </div>
                    </div>
                    <div class="flip-card-back absolute w-full h-full backface-hidden rounded-2xl bg-gradient-to-br from-[#1f1c23] to-[#19171b] border border-white/10 p-6 rotate-y-180 flex flex-col justify-between">
                        <div>
                            <div class="mb-2">
                                <span class="text-[#ff1a2a] text-xs font-bold">ДЛЯ ТОРГОВЛИ</span>
                            </div>
                            <h3 class="text-xl font-bold text-white mb-2">Название проекта</h3>
                            <p class="text-gray-400 text-sm mb-4">Полноценный интернет-магазин с каталогом товаров, корзиной и формой заказа.</p>
                            <div class="flex flex-wrap gap-2">
                                <span class="skill-tag-static">PHP</span>
                                <span class="skill-tag-static">Laravel</span>
                                <span class="skill-tag-static">MySQL</span>
                                <span class="skill-tag-static">Tailwind CSS</span>
                                <span class="skill-tag-static">JavaScript ES6+</span>
                            </div>
                        </div>
                        <div class="flex items-center justify-between mt-4">
                            <a href="#" class="text-[#ff1a2a] hover:underline text-sm inline-flex items-center gap-1">
                                Смотреть сайт
                                <svg class="w-3 h-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"/>
                                </svg>
                            </a>
                            <span class="text-gray-500 text-xs">готов к запуску</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        <!-- Сообщение о пополнении портфолио -->
        <div class="text-center mt-12 p-6 bg-gradient-to-br from-[#1f1c23] to-[#19171b] rounded-2xl border border-white/10 max-w-2xl mx-auto">
            <p class="text-gray-400 text-sm mb-3">
                <span class="text-[#ff1a2a] font-medium">Портфолио в процессе наполнения</span>
            </p>
            <p class="text-gray-500 text-sm">
                Хотите, чтобы ваш проект был здесь? <br>
                Свяжитесь со мной — сделаем качественный сайт с выгодной ценой!
            </p>
            <div class="mt-4">
                <a href="#contacts" 
                   class="inline-flex items-center gap-2 text-[#ff1a2a] hover:text-white transition-all group">
                    <span>Обсудить проект</span>
                    <svg class="w-4 h-4 group-hover:translate-x-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/>
                    </svg>
                </a>
            </div>
        </div>
    </div>
    <!-- Кнопка "Смотреть все проекты" -->
<div class="text-center mt-12">
    <a href="/portfolio" 
       class="inline-flex items-center gap-2 text-gray-400 hover:text-white transition-all group">
        <span>Смотреть все проекты</span>
        <svg class="w-4 h-4 group-hover:translate-x-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/>
        </svg>
    </a>
</div>
</section>