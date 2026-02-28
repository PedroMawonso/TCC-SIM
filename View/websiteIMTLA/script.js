(() => {
    const slider = document.getElementById('sliders');
    if (!slider) return;

    const slides = Array.from(slider.querySelectorAll('[data-slide]'));
    const dots = slides.map((_, i) => document.getElementById(`bot-${i}`));
    const total = slides.length;

    if (!total) return;

    const fadeDuration = 1200;
    const autoDelay = 6000;

    let current = 0;
    let isTransitioning = false;
    let autoTimer;

    const toggleSlideState = (index, show) => {
        const slide = slides[index];
        if (!slide) return;
        slide.classList.toggle('opacity-100', show);
        slide.classList.toggle('opacity-0', !show);
        slide.classList.toggle('pointer-events-auto', show);
        slide.classList.toggle('pointer-events-none', !show);
        slide.style.zIndex = show ? '10' : '0';
    };

    const updateDots = () => {
        dots.forEach((dot, index) => {
            if (!dot) return;
            const isActive = index === current;
            dot.classList.toggle('bg-white', isActive);
            dot.classList.toggle('bg-white/40', !isActive);
            dot.classList.toggle('opacity-90', isActive);
            dot.classList.toggle('opacity-60', !isActive);
            dot.classList.toggle('scale-110', isActive);
        });
    };

    const scheduleAuto = () => {
        clearTimeout(autoTimer);
        autoTimer = setTimeout(() => {
            goTo((current + 1) % total);
        }, autoDelay);
    };

    const goTo = (target) => {
        if (target === current || isTransitioning) return;
        isTransitioning = true;

        const previous = current;
        toggleSlideState(previous, false);
        toggleSlideState(target, true);

        current = target;
        updateDots();

        setTimeout(() => {
            isTransitioning = false;
        }, fadeDuration);

        scheduleAuto();
    };

    window.slideTo = (index) => {
        if (index < 0 || index >= total) return;
        goTo(index);
    };

    // Initialize
    slides.forEach((_, index) => toggleSlideState(index, index === current));
    updateDots();
    scheduleAuto();
})();

