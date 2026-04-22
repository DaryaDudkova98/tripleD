<section id="hero" class="hero min-h-screen container mx-auto px-4 relative overflow-hidden flex items-center" style="min-height: calc(100vh - 80px); margin-top: -80px;">
    
    <!-- Фоновое свечение -->
    <div class="glow-bg absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 w-[800px] h-[600px] bg-[#ff1a2a]/5 rounded-full blur-[100px] pointer-events-none animate-pulse-slow"></div>
    
    <div class="relative z-10 w-full pt-16">
        <div class="grid md:grid-cols-2 gap-12 lg:gap-16 xl:gap-20 items-center">
            
            <!-- Левая колонка с контентом -->
            <div class="hero-content space-y-6 animate-fade-in-left">
                
                <!-- Бейдж -->
                <div class="inline-block px-4 py-1 rounded-full bg-[#ff1a2a]/20 border border-[#ff1a2a]/30 w-fit">
                    <span class="text-[#ff1a2a] text-sm font-medium">Начинающий веб-разработчик</span>
                </div>
                
                <h1 class="text-4xl md:text-5xl lg:text-6xl xl:text-7xl font-bold leading-tight">
                    <span class="bg-gradient-to-r from-[#ff1a2a] to-[#51080d] bg-clip-text text-transparent">Создам сайт</span>
                    <span class="text-white block mt-2">
                        для вашего бизнеса
                    </span>
                </h1>
                
                <p class="text-gray-400 text-lg md:text-xl leading-relaxed animate-fade-in-up animation-delay-200">
                    Ищу первых клиентов для портфолио. Сделаю качественный сайт со скидкой — вы получаете отличный продукт, я — опыт и примеры работ.
                </p>
                
                <div class="flex flex-wrap gap-4 pt-4 animate-fade-in-up animation-delay-400">
                    <a href="#projects" 
                       class="group relative bg-gradient-to-r from-[#ff1a2a] to-[#51080d] text-white px-8 py-3 rounded-lg font-medium transition-all duration-300 overflow-hidden
                              shadow-[0_0_10px_rgba(255,26,42,0.3)] hover:shadow-[0_0_25px_rgba(255,26,42,0.6)] hover:scale-105">
                        <span class="absolute inset-0 bg-gradient-to-r from-[#ff1a2a] to-[#51080d] opacity-0 group-hover:opacity-100 transition-opacity duration-300 blur-md"></span>
                        <span class="relative z-10 flex items-center gap-2">
                            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="2">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M21 13.255A23.931 23.931 0 0112 15c-3.183 0-6.22-.62-9-1.745M16 6V4a2 2 0 00-2-2h-4a2 2 0 00-2 2v2m4 6h.01M5 20h14a2 2 0 002-2V8a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/>
                            </svg>
                            Мои работы
                        </span>
                    </a>
                    
                    <a href="#contacts" 
                       class="group relative px-8 py-3 rounded-lg font-medium transition-all duration-300 overflow-hidden
                              border border-white/20 text-white hover:border-[#ff1a2a] hover:bg-[#ff1a2a]/10 hover:scale-105">
                        <span class="relative z-10 flex items-center gap-2">
                            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="2">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M8 12h.01M12 12h.01M16 12h.01M21 12c0 4.418-4.03 8-9 8a9.863 9.863 0 01-4.255-.949L3 20l1.395-3.72C3.512 15.042 3 13.574 3 12c0-4.418 4.03-8 9-8s9 3.582 9 8z"/>
                            </svg>
                            Связаться
                        </span>
                    </a>
                </div>
                
                <!-- Блок с преимуществами для клиента -->
                <div class="flex flex-wrap gap-6 pt-6 border-t border-white/10 animate-fade-in-up animation-delay-600">
                    <div class="flex items-center gap-2 group hover:translate-y-[-2px] transition-transform duration-300">
                        <svg class="w-5 h-5 text-[#ff1a2a]" fill="currentColor" viewBox="0 0 24 24">
                            <path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm-2 15h-2v-2h2v2zm0-4h-2V7h2v6z"/>
                        </svg>
                        <span class="text-gray-400 text-sm group-hover:text-white transition">Специальные цены</span>
                    </div>
                    <div class="flex items-center gap-2 group hover:translate-y-[-2px] transition-transform duration-300">
                        <svg class="w-5 h-5 text-[#ff1a2a]" fill="currentColor" viewBox="0 0 24 24">
                            <path d="M9 16.17L4.83 12l-1.42 1.41L9 19 21 7l-1.41-1.41z"/>
                        </svg>
                        <span class="text-gray-400 text-sm group-hover:text-white transition">До оплаты покажу результат</span>
                    </div>
                    <div class="flex items-center gap-2 group hover:translate-y-[-2px] transition-transform duration-300">
                        <svg class="w-5 h-5 text-[#ff1a2a]" fill="currentColor" viewBox="0 0 24 24">
                            <path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm1 15h-2v-2h2v2zm0-4h-2V7h2v6z"/>
                        </svg>
                        <span class="text-gray-400 text-sm group-hover:text-white transition">Помощь с хостингом</span>
                    </div>
                </div>
            </div>
            
            <!-- Правая колонка с оффером -->
            <div class="offer-card group relative animate-fade-in-right">
                <!-- Анимированная граница -->
                <div class="absolute -inset-0.5 bg-gradient-to-r from-[#ff1a2a] to-[#51080d] rounded-2xl opacity-0 group-hover:opacity-100 transition duration-500 blur"></div>
                
                <div class="relative bg-gradient-to-br from-[#1f1c23] to-[#19171b] rounded-2xl p-8 md:p-10 border border-white/10 group-hover:border-transparent transition-all duration-500 hover:transform hover:scale-[1.02]">
                    
                    <div class="offer-badge absolute -top-3 right-6 bg-gradient-to-r from-[#ff1a2a] to-[#51080d] text-white px-4 py-1 rounded-full text-sm font-bold shadow-lg animate-pulse flex items-center gap-1.5">
                        <svg class="w-3.5 h-3.5" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="2">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M12 8v13m0-13V6a2 2 0 112 2h-2zm0 0V5.5A2.5 2.5 0 109.5 8H12zm-7 4h14M5 12a2 2 0 110-4h14a2 2 0 110 4M5 12v4a2 2 0 002 2h10a2 2 0 002-2v-4"/>
                        </svg>
                        ВЫГОДНО
                    </div>
                    
                    <h3 class="text-2xl md:text-3xl font-bold text-white mb-4 pt-4">Хотите сайт со скидкой?</h3>
                    <p class="text-gray-400 mb-6 text-base md:text-lg">
                        Я набираю портфолио и предлагаю выгодные условия:<br>
                        качественная разработка по специальной цене.
                    </p>
                    
                    <ul class="space-y-4 mb-8">
                        <li class="flex items-center gap-3 text-gray-300 group/item hover:translate-x-1 transition-transform duration-300">
                            <div class="w-6 h-6 rounded-full bg-[#ff1a2a]/20 flex items-center justify-center group-hover/item:bg-[#ff1a2a]/40 transition">
                                <svg class="w-3.5 h-3.5 text-[#ff1a2a]" fill="currentColor" viewBox="0 0 24 24">
                                    <path d="M9 16.17L4.83 12l-1.42 1.41L9 19 21 7l-1.41-1.41z"></path>
                                </svg>
                            </div>
                            <span class="group-hover/item:text-white transition text-base">Цены ниже рыночных</span>
                        </li>
                        <li class="flex items-center gap-3 text-gray-300 group/item hover:translate-x-1 transition-transform duration-300">
                            <div class="w-6 h-6 rounded-full bg-[#ff1a2a]/20 flex items-center justify-center group-hover/item:bg-[#ff1a2a]/40 transition">
                                <svg class="w-3.5 h-3.5 text-[#ff1a2a]" fill="currentColor" viewBox="0 0 24 24">
                                    <path d="M9 16.17L4.83 12l-1.42 1.41L9 19 21 7l-1.41-1.41z"></path>
                                </svg>
                            </div>
                            <span class="group-hover/item:text-white transition text-base">Покажу результат до оплаты</span>
                        </li>
                        <li class="flex items-center gap-3 text-gray-300 group/item hover:translate-x-1 transition-transform duration-300">
                            <div class="w-6 h-6 rounded-full bg-[#ff1a2a]/20 flex items-center justify-center group-hover/item:bg-[#ff1a2a]/40 transition">
                                <svg class="w-3.5 h-3.5 text-[#ff1a2a]" fill="currentColor" viewBox="0 0 24 24">
                                    <path d="M9 16.17L4.83 12l-1.42 1.41L9 19 21 7l-1.41-1.41z"></path>
                                </svg>
                            </div>
                            <span class="group-hover/item:text-white transition text-base">Помогу с выбором и запуском</span>
                        </li>
                    </ul>
                    
                    <a href="#pricing" 
                       class="relative group w-full bg-gradient-to-r from-[#ff1a2a] to-[#51080d] text-white px-6 py-3.5 rounded-lg font-medium transition-all duration-300 overflow-hidden text-center block
                              shadow-[0_0_10px_rgba(255,26,42,0.3)] hover:shadow-[0_0_25px_rgba(255,26,42,0.6)] hover:scale-[1.02]">
                        <span class="absolute inset-0 bg-gradient-to-r from-[#ff1a2a] to-[#51080d] opacity-0 group-hover:opacity-100 transition-opacity duration-300 blur-md"></span>
                        <span class="relative z-10 flex items-center justify-center gap-2">
                            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="2">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M13 10V3L4 14h7v7l9-11h-7z"/>
                            </svg>
                            Узнать стоимость
                        </span>
                    </a>
                    
                    <p class="text-center text-gray-500 text-xs mt-4">
                        Отвечаю быстро. Обсудим детали и сделаем крутой сайт
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>