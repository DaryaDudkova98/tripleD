// Импорт всех модулей
import { initMarquee } from './modules/marquee';
import { initFlipCards } from './modules/flipCards';
import { initScrollReveal } from './modules/scrollReveal';
import { initBackToTop } from './modules/backToTop';

// Инициализация всех модулей при загрузке DOM
document.addEventListener('DOMContentLoaded', () => {
    initMarquee();      // Бегущая строка
    initFlipCards();    // 3D карточки для мобильных
    initScrollReveal(); // Анимации при скролле
    initBackToTop();    // Кнопка "Наверх"
});