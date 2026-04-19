// Бургер-меню
export function initMobileMenu() {
    const burgerBtn = document.getElementById('burgerBtn');
    const mobileMenu = document.getElementById('mobileMenu');
    
    if (burgerBtn && mobileMenu) {
        burgerBtn.addEventListener('click', () => {
            // Открываем/закрываем меню
            mobileMenu.classList.toggle('hidden');
            
            // Анимация бургера (превращение в крестик)
            const lines = document.querySelectorAll('.burger-line');
            lines.forEach((line, index) => {
                if (index === 0) {
                    line.classList.toggle('rotate-45');
                    line.classList.toggle('translate-y-2');
                } else if (index === 1) {
                    line.classList.toggle('opacity-0');
                } else if (index === 2) {
                    line.classList.toggle('-rotate-45');
                    line.classList.toggle('-translate-y-2');
                }
            });
        });
        
        // Закрываем меню при клике на ссылку
        const mobileLinks = document.querySelectorAll('.mobile-link');
        mobileLinks.forEach(link => {
            link.addEventListener('click', () => {
                mobileMenu.classList.add('hidden');
                // Возвращаем бургер в исходное состояние
                const lines = document.querySelectorAll('.burger-line');
                lines.forEach((line, index) => {
                    if (index === 0) {
                        line.classList.remove('rotate-45', 'translate-y-2');
                    } else if (index === 1) {
                        line.classList.remove('opacity-0');
                    } else if (index === 2) {
                        line.classList.remove('-rotate-45', '-translate-y-2');
                    }
                });
            });
        });
    }
}