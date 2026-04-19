<header class="bg-[#19171b] border-b border-white/10 sticky top-0 z-50">
    <div class="container mx-auto px-4">
        <nav class="flex justify-between items-center py-4">
            <!-- Логотип -->
            <a href="/" class="logo flex items-center gap-2 hover:opacity-80 transition group">
                <img src="/images/logo.svg" alt="tripleD" class="h-6 w-auto brightness-0 invert opacity-70 group-hover:opacity-100 group-hover:scale-110 transition-all duration-300">
                <span class="font-bold text-lg bg-gradient-to-r from-white via-[#ff1a2a] to-white bg-clip-text text-transparent 
                    bg-[length:200%_auto] bg-left group-hover:bg-right transition-all duration-700">
                    tripleD
                </span>
            </a>
            
            <!-- Десктопное меню (скрыто на мобильных) -->
            <ul class="hidden md:flex gap-8">
                <li><a href="#about" class="relative text-gray-300 hover:text-white transition pb-1 after:absolute after:bottom-0 after:left-0 after:w-0 hover:after:w-full after:h-0.5 after:bg-gradient-to-r after:from-[#ff1a2a] after:to-[#51080d] after:transition-all after:duration-300">Обо мне</a></li>
                <li><a href="#projects" class="relative text-gray-300 hover:text-white transition pb-1 after:absolute after:bottom-0 after:left-0 after:w-0 hover:after:w-full after:h-0.5 after:bg-gradient-to-r after:from-[#ff1a2a] after:to-[#51080d] after:transition-all after:duration-300">Портфолио</a></li>
                <li><a href="#service" class="relative text-gray-300 hover:text-white transition pb-1 after:absolute after:bottom-0 after:left-0 after:w-0 hover:after:w-full after:h-0.5 after:bg-gradient-to-r after:from-[#ff1a2a] after:to-[#51080d] after:transition-all after:duration-300">Услуги</a></li>
                <li><a href="#pricing" class="relative text-gray-300 hover:text-white transition pb-1 after:absolute after:bottom-0 after:left-0 after:w-0 hover:after:w-full after:h-0.5 after:bg-gradient-to-r after:from-[#ff1a2a] after:to-[#51080d] after:transition-all after:duration-300">Цены</a></li>
            </ul>
            
            <!-- Десктопная кнопка "Связаться" (скрыта на мобильных) -->
            <a href="#contacts"
                class="hidden md:block relative group bg-gradient-to-r from-[#ff1a2a] to-[#51080d] text-white px-6 py-2.5 rounded-lg font-medium transition-all duration-300 overflow-hidden
                shadow-[0_0_10px_rgba(255,26,42,0.3)] 
                hover:shadow-[0_0_25px_rgba(255,26,42,0.6)] 
                hover:scale-105 
                active:scale-95">
                <span class="absolute inset-0 bg-gradient-to-r from-[#ff1a2a] to-[#51080d] opacity-0 group-hover:opacity-100 transition-opacity duration-300 blur-md"></span>
                <span class="relative z-10">Связаться</span>
            </a>
            
            <!-- Бургер-меню для мобильных устройств (появляется на экранах меньше 768px) -->
            <button id="burgerBtn" class="md:hidden flex flex-col items-center justify-center w-10 h-10 rounded-lg hover:bg-white/10 transition-all">
                <span class="burger-line w-6 h-0.5 bg-white rounded-full transition-all duration-300 mb-1.5"></span>
                <span class="burger-line w-6 h-0.5 bg-white rounded-full transition-all duration-300 mb-1.5"></span>
                <span class="burger-line w-6 h-0.5 bg-white rounded-full transition-all duration-300"></span>
            </button>
        </nav>
        
        <!-- Мобильное меню (скрыто по умолчанию) -->
        <div id="mobileMenu" class="md:hidden hidden flex-col py-4 border-t border-white/10 mt-2">
            <ul class="flex flex-col gap-2">
                <li><a href="#about" class="mobile-link block text-gray-300 hover:text-white transition py-3 px-4 hover:bg-white/5 rounded-lg">Обо мне</a></li>
                <li><a href="#projects" class="mobile-link block text-gray-300 hover:text-white transition py-3 px-4 hover:bg-white/5 rounded-lg">Портфолио</a></li>
                <li><a href="#service" class="mobile-link block text-gray-300 hover:text-white transition py-3 px-4 hover:bg-white/5 rounded-lg">Услуги</a></li>
                <li><a href="#pricing" class="mobile-link block text-gray-300 hover:text-white transition py-3 px-4 hover:bg-white/5 rounded-lg">Цены</a></li>
                <li class="pt-2">
                    <a href="#contacts" class="mobile-link block text-center bg-gradient-to-r from-[#ff1a2a] to-[#51080d] text-white px-6 py-3 rounded-lg font-medium transition-all duration-300 hover:scale-105">
                        Связаться
                    </a>
                </li>
            </ul>
        </div>
    </div>
</header>