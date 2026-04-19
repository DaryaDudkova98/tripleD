<footer class="bg-[#1a1a1a] border-t border-white/10 mt-auto">
    <div class="container mx-auto px-4 py-12">
        
        <!-- Верхняя часть с информацией -->
        <div class="flex flex-col md:flex-row justify-between items-start md:items-center gap-8 mb-8 pb-8 border-b border-white/10">
            
            <!-- Блок с логотипом -->
            <div class="text-center md:text-left">
                <div class="flex items-center justify-center md:justify-start gap-2 mb-2">
                    <img src="/images/logo.svg" alt="tripleD" class="h-6 w-auto brightness-0 invert opacity-70">
                    <span class="font-bold text-lg bg-gradient-to-r from-white to-gray-400 bg-clip-text text-transparent">tripleD</span>
                </div>
                <p class="text-gray-500 text-sm">Создаём сайты, которые работают</p>
            </div>
            
            <!-- Контакты -->
            <div class="text-center md:text-right">
                <p class="text-gray-400 text-sm mb-1">Связь со мной</p>
                <a href="mailto:info.website.tripled@gmail.com" class="text-gray-300 hover:text-[#ff1a2a] transition text-sm">info.website.tripled@gmail.com</a>
            </div>
            
        </div>
        
        <!-- Нижняя часть -->
        <div class="flex flex-col items-center text-center space-y-4">
            
            <p class="text-gray-300 text-xs">
                © <span id="year">2026</span> tripleD — Разработка современных сайтов
            </p>
            
            <div class="w-12 h-px bg-gradient-to-r from-transparent via-[#51080d] to-transparent"></div>
            
            <div class="space-y-1.5">
                <p class="text-gray-300 text-sm">Дудкова Дарья Дмитриевна</p>
                <p class="text-gray-300 text-xs">УНП: — (физическое лицо)</p>
            </div>
            
            <a href="/privacy" 
               class="text-gray-400 text-xs hover:text-[#ff1a2a] transition-colors duration-300 underline underline-offset-4">
                Политика конфиденциальности
            </a>
            
        </div>
    </div>
</footer>

<script>
    document.getElementById('year').textContent = new Date().getFullYear();
</script>