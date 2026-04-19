// Бегущая строка с возможностью перетаскивания в обе стороны
export function initMarquee() {
    const container = document.getElementById('marqueeContainer');
    const track = document.getElementById('marqueeTrack');
    
    if (!container || !track) return;
    
    let isDragging = false;
    let startX = 0;
    let currentTranslate = 0;
    let prevTranslate = 0;
    let startTime = 0;
    let velocity = 0;
    let lastX = 0;
    let lastTime = 0;
    
    const getCurrentTranslate = () => {
        const transform = track.style.transform;
        if (transform && transform.includes('translateX')) {
            const match = transform.match(/translateX\(([^)]+)\)/);
            if (match) return parseFloat(match[1]);
        }
        return 0;
    };
    
    const setTranslate = (x, withTransition = false) => {
        if (withTransition) {
            track.style.transition = 'transform 0.3s ease-out';
            setTimeout(() => { track.style.transition = ''; }, 300);
        }
        track.style.transform = `translateX(${x}px)`;
    };
    
    const stopAnimation = () => {
        track.classList.remove('animate-marquee-right');
        currentTranslate = getCurrentTranslate();
        setTranslate(currentTranslate);
    };
    
    const startAnimation = () => {
        if (!isDragging) {
            track.classList.add('animate-marquee-right');
            track.style.transform = '';
            track.style.transition = '';
        }
    };
    
    const dragStart = (e) => {
        e.preventDefault();
        const clientX = e.type === 'mousedown' ? e.clientX : e.touches[0].clientX;
        isDragging = true;
        startX = clientX;
        lastX = clientX;
        startTime = Date.now();
        lastTime = startTime;
        velocity = 0;
        stopAnimation();
        prevTranslate = getCurrentTranslate();
        currentTranslate = prevTranslate;
        container.classList.add('dragging');
    };
    
    const dragMove = (e) => {
        if (!isDragging) return;
        e.preventDefault();
        const clientX = e.type === 'mousemove' ? e.clientX : e.touches[0].clientX;
        const now = Date.now();
        const deltaTime = now - lastTime;
        if (deltaTime > 0) {
            const deltaX = clientX - lastX;
            velocity = deltaX / deltaTime;
        }
        const deltaX = clientX - startX;
        currentTranslate = prevTranslate + deltaX;
        setTranslate(currentTranslate);
        lastX = clientX;
        lastTime = now;
    };
    
    const dragEnd = () => {
        if (!isDragging) return;
        isDragging = false;
        container.classList.remove('dragging');
        const dragDuration = Date.now() - startTime;
        const dragDistance = Math.abs(currentTranslate - prevTranslate);
        
        if (dragDuration < 100 && dragDistance < 5) {
            startAnimation();
            return;
        }
        
        if (Math.abs(velocity) > 0.2) {
            const inertia = velocity * 200;
            let targetTranslate = currentTranslate + inertia;
            let startTimeInertia = null;
            const startPosition = currentTranslate;
            const duration = 500;
            
            const animateInertia = (timestamp) => {
                if (!startTimeInertia) startTimeInertia = timestamp;
                const elapsed = timestamp - startTimeInertia;
                const progress = Math.min(1, elapsed / duration);
                const easeOut = 1 - Math.pow(1 - progress, 3);
                const newPosition = startPosition + (targetTranslate - startPosition) * easeOut;
                setTranslate(newPosition);
                if (progress < 1) {
                    requestAnimationFrame(animateInertia);
                } else {
                    setTimeout(() => { if (!isDragging) startAnimation(); }, 50);
                }
            };
            requestAnimationFrame(animateInertia);
        } else {
            setTimeout(() => { if (!isDragging) startAnimation(); }, 100);
        }
        velocity = 0;
    };
    
    container.addEventListener('mousedown', dragStart);
    window.addEventListener('mousemove', dragMove);
    window.addEventListener('mouseup', dragEnd);
    container.addEventListener('touchstart', dragStart);
    window.addEventListener('touchmove', dragMove);
    window.addEventListener('touchend', dragEnd);
    container.addEventListener('dragstart', (e) => e.preventDefault());
    
    const skillTags = document.querySelectorAll('.skill-tag');
    skillTags.forEach(tag => {
        tag.addEventListener('mouseenter', () => { if (!isDragging) stopAnimation(); });
        tag.addEventListener('mouseleave', () => { if (!isDragging) startAnimation(); });
    });
}