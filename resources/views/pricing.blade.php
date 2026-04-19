<!-- Секция услуг с калькулятором -->
<section id="pricing" class="services-calculator-section py-16 md:py-24">
    <div class="container mx-auto px-4">
        
        <div class="text-center mb-12 animate-fade-in-up">
            <div class="inline-block mb-4 px-4 py-1 rounded-full bg-[#ff1a2a]/20 border border-[#ff1a2a]/30">
                <span class="text-[#ff1a2a] text-sm font-medium">Специальное предложение</span>
            </div>
            <h2 class="text-3xl md:text-4xl lg:text-5xl font-bold mb-4">
                <span class="bg-gradient-to-r from-[#ff1a2a] to-[#51080d] bg-clip-text text-transparent">Создам сайт</span>
                <span class="text-white"> для вашего бизнеса</span>
            </h2>
            <div class="w-20 h-1 bg-gradient-to-r from-[#ff1a2a] to-[#51080d] mx-auto rounded-full"></div>
            <p class="text-gray-400 mt-4">Честные цены без скрытых платежей</p>
            <div class="flex justify-center gap-3 mt-3 flex-wrap">
                <span class="px-3 py-1 bg-white/5 rounded-full text-xs text-gray-400">Быстрый старт</span>
                <span class="px-3 py-1 bg-white/5 rounded-full text-xs text-gray-400">Качественно</span>
                <span class="px-3 py-1 bg-white/5 rounded-full text-xs text-gray-400">Поддержка</span>
            </div>
        </div>
        
        <div class="grid lg:grid-cols-2 gap-8 max-w-5xl mx-auto">
            
            <!-- Форма калькулятора -->
            <div class="calculator-form bg-gradient-to-br from-[#1f1c23] to-[#19171b] rounded-2xl p-6 md:p-8 border border-white/10">
                <h3 class="text-xl font-bold text-white mb-6">Параметры проекта</h3>
                
                <div class="space-y-6">
                    <!-- Тип сайта -->
                    <div>
                        <label class="text-gray-300 text-sm mb-3 block">Тип сайта</label>
                        <div class="grid grid-cols-1 sm:grid-cols-3 gap-3">
                            
                            <!-- Сайт-визитка -->
                            <label class="calc-option cursor-pointer">
                                <input type="radio" name="type" value="visitcard" class="hidden" data-price="100" data-original="200">
                                <span class="block p-3 text-center rounded-xl border border-white/10 hover:border-[#ff1a2a] transition-all cursor-pointer">
                                    <div class="flex flex-col items-center">
                                        <svg class="w-8 h-8 mb-2 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4"/>
                                        </svg>
                                        <span class="text-sm font-medium text-white">Сайт-визитка</span>
                                        <div class="flex flex-col items-center mt-2">
                                            <span class="text-xs text-gray-500 line-through">200 BYN</span>
                                            <span class="text-sm text-[#ff1a2a] font-bold">100 BYN</span>
                                        </div>
                                    </div>
                                </span>
                            </label>
                            
                            <!-- Лендинг -->
                            <label class="calc-option cursor-pointer">
                                <input type="radio" name="type" value="landing" class="hidden" data-price="150" data-original="300" checked>
                                <span class="block p-3 text-center rounded-xl border border-white/10 hover:border-[#ff1a2a] transition-all cursor-pointer">
                                    <div class="flex flex-col items-center">
                                        <svg class="w-8 h-8 mb-2 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M3.75 9.776c.112-.017.227-.026.344-.026h15.812c.117 0 .232.009.344.026m-16.5 0a2.25 2.25 0 00-1.883 2.542l.857 6a2.25 2.25 0 002.227 1.932H19.05a2.25 2.25 0 002.227-1.932l.857-6a2.25 2.25 0 00-1.883-2.542m-16.5 0V6A2.25 2.25 0 016 3.75h3.879a1.5 1.5 0 011.06.44l2.122 2.12a1.5 1.5 0 001.06.44H18A2.25 2.25 0 0120.25 9v.776"/>
                                        </svg>
                                        <span class="text-sm font-medium text-white">Лендинг</span>
                                        <div class="flex flex-col items-center mt-2">
                                            <span class="text-xs text-gray-500 line-through">300 BYN</span>
                                            <span class="text-sm text-[#ff1a2a] font-bold">150 BYN</span>
                                        </div>
                                    </div>
                                </span>
                            </label>
                            
                            <!-- Многостраничник -->
                            <label class="calc-option cursor-pointer">
                                <input type="radio" name="type" value="multipage" class="hidden" data-price="300" data-original="600">
                                <span class="block p-3 text-center rounded-xl border border-white/10 hover:border-[#ff1a2a] transition-all cursor-pointer">
                                    <div class="flex flex-col items-center">
                                        <svg class="w-8 h-8 mb-2 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M4 6h16M4 12h16M4 18h16"/>
                                        </svg>
                                        <span class="text-sm font-medium text-white">Многостраничник</span>
                                        <div class="flex flex-col items-center mt-2">
                                            <span class="text-xs text-gray-500 line-through">600 BYN</span>
                                            <span class="text-sm text-[#ff1a2a] font-bold">300 BYN</span>
                                        </div>
                                    </div>
                                </span>
                            </label>
                        </div>
                    </div>
                    
                    <!-- Доп опции -->
                    <div>
                        <label class="text-gray-300 text-sm mb-3 block">Дополнительно</label>
                        <div class="space-y-2">
                            <label class="flex items-center justify-between p-3 rounded-lg border border-white/10 cursor-pointer hover:bg-white/5 transition-all">
                                <div class="flex items-center gap-3">
                                    <input type="checkbox" class="w-4 h-4 accent-[#ff1a2a]" data-price="30">
                                    <span class="text-gray-300 text-sm">Адаптивная вёрстка</span>
                                </div>
                                <span class="text-gray-500 text-xs">+30 BYN</span>
                            </label>
                            
                            <label class="flex items-center justify-between p-3 rounded-lg border border-white/10 cursor-pointer hover:bg-white/5 transition-all">
                                <div class="flex items-center gap-3">
                                    <input type="checkbox" class="w-4 h-4 accent-[#ff1a2a]" data-price="70">
                                    <span class="text-gray-300 text-sm">Админ-панель</span>
                                </div>
                                <span class="text-gray-500 text-xs">+70 BYN</span>
                            </label>
                        </div>
                    </div>
                    
                    <!-- Привлекательный баннер -->
                    <div class="mt-4 p-4 rounded-lg bg-gradient-to-r from-[#ff1a2a]/15 to-[#51080d]/15 border border-[#ff1a2a]/30 text-center">
                        <p class="text-[#ff1a2a] text-sm font-medium mb-2">Первым 5 клиентам — особые условия!</p>
                        <p class="text-gray-400 text-xs">Бесплатная консультация и помощь с хостингом</p>
                        <p class="text-gray-500 text-xs mt-2">Сделаю качественно</p>
                    </div>
                </div>
            </div>
            
            <!-- Результат -->
            <div class="calculator-result bg-gradient-to-br from-[#1f1c23] to-[#19171b] rounded-2xl p-6 md:p-8 border border-white/10 flex flex-col justify-between relative overflow-hidden">
                <!-- Декоративный элемент -->
                <div class="absolute -top-10 -right-10 w-32 h-32 bg-[#ff1a2a]/10 rounded-full blur-2xl"></div>
                
                <div>
                    <div class="flex justify-between items-start mb-4">
                        <h3 class="text-xl font-bold text-white">Стоимость проекта</h3>
                        <div class="px-2 py-1 bg-[#ff1a2a]/20 rounded-lg">
                            <span class="text-[#ff1a2a] text-xs font-medium" id="discountLabel">-50%</span>
                        </div>
                    </div>
                    <div class="text-center">
                        <div class="text-5xl font-bold text-white mb-2">
                            <span id="totalPrice">150</span> <span class="text-xl text-gray-400">BYN</span>
                        </div>
                        <div class="flex flex-col items-center gap-1 mb-3">
                            <span class="text-gray-500 text-xs line-through" id="originalPrice">300 BYN</span>
                            <span class="text-[#ff1a2a] text-xs" id="savingsText">экономия 50%</span>
                        </div>
                        <p class="text-gray-500 text-sm">* Домен и хостинг оплачиваются отдельно</p>
                    </div>
                </div>
                <div class="mt-6">
                    <a href="#contacts" class="block w-full text-center bg-gradient-to-r from-[#ff1a2a] to-[#51080d] text-white py-3 rounded-lg font-medium hover:scale-105 transition-all group">
                        <span class="flex items-center justify-center gap-2">
                            Обсудить проект
                            <svg class="w-4 h-4 group-hover:translate-x-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/>
                            </svg>
                        </span>
                    </a>
                </div>
            </div>
        </div>
        
        <!-- Блок с условиями оплаты и гарантиями -->
        <div class="max-w-4xl mx-auto mt-8">
            <div class="bg-gradient-to-br from-[#1f1c23] to-[#19171b] rounded-2xl p-6 md:p-8 border border-white/10">
                <div class="grid md:grid-cols-2 gap-6">
                    
                    <!-- Условия оплаты -->
                    <div>
                        <div class="flex items-center gap-2 mb-4">
                            <svg class="w-5 h-5 text-[#ff1a2a]" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/>
                            </svg>
                            <h4 class="text-white font-semibold">Прозрачные условия</h4>
                        </div>
                        <ul class="space-y-3 text-sm text-gray-400">
                            <li class="flex items-start gap-2">
                                <span class="text-[#ff1a2a] mt-0.5">▹</span>
                                <span>Вы получаете демо-версию сайта для ознакомления</span>
                            </li>
                            <li class="flex items-start gap-2">
                                <span class="text-[#ff1a2a] mt-0.5">▹</span>
                                <span>Оплата только после подтверждения проекта на демо-версии</span>
                            </li>
                            <li class="flex items-start gap-2">
                                <span class="text-[#ff1a2a] mt-0.5">▹</span>
                                <span>После оплаты получаете готовый сайт в исходных файлах</span>
                            </li>
                            <li class="flex items-start gap-2">
                                <span class="text-[#ff1a2a] mt-0.5">▹</span>
                                <span>Помогаю с переносом на ваш хостинг и настройкой</span>
                            </li>
                        </ul>
                    </div>
                    
                    <!-- Поддержка и помощь -->
                    <div>
                        <div class="flex items-center gap-2 mb-4">
                            <svg class="w-5 h-5 text-[#ff1a2a]" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M18.364 5.636l-3.536 3.536m0 5.656l3.536 3.536M9.172 9.172L5.636 5.636m3.536 9.192l-3.536 3.536M21 12a9 9 0 11-18 0 9 9 0 0118 0zm-5 0a4 4 0 11-8 0 4 4 0 018 0z"/>
                            </svg>
                            <h4 class="text-white font-semibold">Доводим до результата</h4>
                        </div>
                        <ul class="space-y-3 text-sm text-gray-400">
                            <li class="flex items-start gap-2">
                                <span class="text-[#ff1a2a] mt-0.5">▹</span>
                                <span>Вношу правки до полного соответствия вашим требованиям</span>
                            </li>
                            <li class="flex items-start gap-2">
                                <span class="text-[#ff1a2a] mt-0.5">▹</span>
                                <span>Помогаю довести сайт до конца — вы не остаётесь один на один с проблемами</span>
                            </li>
                            <li class="flex items-start gap-2">
                                <span class="text-[#ff1a2a] mt-0.5">▹</span>
                                <span>Бесплатные консультации после сдачи проекта</span>
                            </li>
                            <li class="flex items-start gap-2">
                                <span class="text-[#ff1a2a] mt-0.5">▹</span>
                                <span>Поддержка в течение 14 дней после сдачи</span>
                            </li>
                        </ul>
                    </div>
                </div>
                
                <!-- Итоговая строка доверия -->
                <div class="mt-6 pt-6 border-t border-white/10 text-center">
                    <p class="text-gray-300 text-sm">
                        <span class="text-[#ff1a2a] font-medium">Вы платите только после того, как увидите результат</span>
                        — и я помогу вам на всех этапах
                    </p>
                </div>
            </div>
        </div>
        
        <!-- Дополнительные плюшки -->
        <div class="text-center mt-6">
            <p class="text-gray-500 text-sm">В стоимость включено: чистовой код, адаптив под все устройства, базовое SEO</p>
        </div>
    </div>
</section>

<script>
// Калькулятор стоимости (упрощённая версия без количества блоков)
document.addEventListener('DOMContentLoaded', () => {
    const typeRadios = document.querySelectorAll('input[name="type"]');
    const checkboxes = document.querySelectorAll('input[type="checkbox"][data-price]');
    const totalSpan = document.getElementById('totalPrice');
    const originalPriceSpan = document.getElementById('originalPrice');
    const discountLabel = document.getElementById('discountLabel');
    const savingsText = document.getElementById('savingsText');
    
    // Базовые цены
    const basePrices = {
        visitcard: 100,
        landing: 150,
        multipage: 300
    };
    
    const originalPrices = {
        visitcard: 200,
        landing: 300,
        multipage: 600
    };
    
    let currentType = 'landing';
    
    // Функция для обновления цены
    const updatePrice = () => {
        let total = basePrices[currentType];
        let originalTotal = originalPrices[currentType];
        
        // Доп опции
        checkboxes.forEach(cb => {
            if (cb.checked) {
                const price = parseInt(cb.dataset.price);
                total += price;
                originalTotal += price;
            }
        });
        
        // Обновляем отображение
        totalSpan.textContent = total;
        originalPriceSpan.textContent = originalTotal + ' BYN';
        
        // Обновляем скидку
        if (originalTotal > 0 && originalTotal > total) {
            const discountPercent = Math.round(((originalTotal - total) / originalTotal) * 100);
            discountLabel.textContent = `-${discountPercent}%`;
            savingsText.textContent = `экономия ${discountPercent}%`;
        } else {
            discountLabel.textContent = `0%`;
            savingsText.textContent = `без скидки`;
        }
    };
    
    // Обработчики для радио-кнопок
    typeRadios.forEach(radio => {
        radio.addEventListener('change', () => {
            if (radio.checked) {
                currentType = radio.value;
                updatePrice();
            }
        });
    });
    
    // Обработчики для чекбоксов
    checkboxes.forEach(cb => cb.addEventListener('change', updatePrice));
    
    // Выбор опции по клику на карточку
    document.querySelectorAll('.calc-option').forEach(option => {
        option.addEventListener('click', () => {
            const radio = option.querySelector('input');
            if (radio && !radio.checked) {
                radio.checked = true;
                currentType = radio.value;
                updatePrice();
            }
            
            // Визуальное выделение
            document.querySelectorAll('.calc-option span').forEach(span => {
                span.classList.remove('border-[#ff1a2a]', 'bg-[#ff1a2a]/10');
            });
            const targetSpan = option.querySelector('span');
            if (targetSpan) {
                targetSpan.classList.add('border-[#ff1a2a]', 'bg-[#ff1a2a]/10');
            }
        });
    });
    
    // Выделяем лендинг по умолчанию
    const defaultOption = document.querySelector('.calc-option input[checked]');
    if (defaultOption) {
        defaultOption.closest('.calc-option').querySelector('span').classList.add('border-[#ff1a2a]', 'bg-[#ff1a2a]/10');
        currentType = defaultOption.value;
    }
    
    updatePrice();
});
</script>