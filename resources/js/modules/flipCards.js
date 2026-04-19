// 3D карточки для мобильных устройств (клик вместо наведения)
export function initFlipCards() {
    const isTouch = 'ontouchstart' in window;
    
    if (isTouch) {
        const cards = document.querySelectorAll('.flip-card');
        
        cards.forEach(card => {
            card.addEventListener('click', () => {
                const inner = card.querySelector('.flip-card-inner');
                if (inner.classList.contains('rotate-y-180')) {
                    inner.classList.remove('rotate-y-180');
                } else {
                    cards.forEach(c => {
                        const otherInner = c.querySelector('.flip-card-inner');
                        if (otherInner !== inner) otherInner.classList.remove('rotate-y-180');
                    });
                    inner.classList.add('rotate-y-180');
                }
            });
        });
    }
}