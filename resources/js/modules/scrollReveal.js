// Анимации при скроллинге (в обе стороны)
export function initScrollReveal() {
    const revealElements = document.querySelectorAll(
        'section, .hero-content, .offer-card, .calculator-form, .calculator-result, ' +
        '.flip-card, .about-content, .skills-stats, .services-mini-section .group, ' +
        '.portfolio-section, .skills-section, .contacts-section, .about-section'
    );
    
    revealElements.forEach(element => {
        if (element.classList.contains('scroll-reveal')) return;
        
        element.classList.add('scroll-reveal');
        
        if (element.classList.contains('hero-content') || 
            element.classList.contains('about-content') ||
            element.classList.contains('calculator-form')) {
            element.classList.add('scroll-reveal-fade-left');
        } 
        else if (element.classList.contains('offer-card') ||
                 element.classList.contains('skills-stats') ||
                 element.classList.contains('calculator-result')) {
            element.classList.add('scroll-reveal-fade-right');
        }
        else if (element.classList.contains('flip-card')) {
            element.classList.add('scroll-reveal-scale');
        }
        else {
            element.classList.add('scroll-reveal-fade-up');
        }
    });
    
    const cards = document.querySelectorAll('.flip-card, .services-mini-section .group');
    cards.forEach((card, index) => {
        if (!card.classList.contains('scroll-reveal')) {
            card.classList.add('scroll-reveal', 'scroll-reveal-scale');
        }
        const delay = (index % 4) + 1;
        card.classList.add(`scroll-reveal-delay-${delay}`);
    });
    
    const observerOptions = { threshold: 0.15, rootMargin: '0px 0px -30px 0px' };
    
    const observer = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                entry.target.classList.add('revealed');
            } else {
                entry.target.classList.remove('revealed');
            }
        });
    }, observerOptions);
    
    revealElements.forEach(element => observer.observe(element));
    
    const manualElements = document.querySelectorAll('.animate-on-scroll');
    manualElements.forEach(element => {
        if (!element.classList.contains('scroll-reveal')) {
            element.classList.add('scroll-reveal', 'scroll-reveal-fade-up');
        }
        observer.observe(element);
    });
    
    setTimeout(() => {
        revealElements.forEach(element => {
            const rect = element.getBoundingClientRect();
            const windowHeight = window.innerHeight;
            if (rect.top < windowHeight - 100) element.classList.add('revealed');
        });
    }, 100);
}