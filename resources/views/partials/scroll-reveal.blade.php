{{-- Scroll reveal transitions - include before </body> on every page --}}
<style>
    .scroll-reveal {
        opacity: 0;
        transform: translateY(32px);
        transition: opacity 0.7s cubic-bezier(0.22, 1, 0.36, 1), transform 0.7s cubic-bezier(0.22, 1, 0.36, 1);
    }
    .scroll-reveal.visible {
        opacity: 1;
        transform: translateY(0);
    }
    .scroll-reveal.reveal-left {
        transform: translateX(-40px) translateY(0);
    }
    .scroll-reveal.reveal-left.visible {
        transform: translateX(0) translateY(0);
    }
    .scroll-reveal.reveal-right {
        transform: translateX(40px) translateY(0);
    }
    .scroll-reveal.reveal-right.visible {
        transform: translateX(0) translateY(0);
    }
    .scroll-reveal-scale {
        opacity: 0;
        transform: scale(0.92) translateY(20px);
        transition: opacity 0.6s cubic-bezier(0.22, 1, 0.36, 1), transform 0.6s cubic-bezier(0.22, 1, 0.36, 1);
    }
    .scroll-reveal-scale.visible {
        opacity: 1;
        transform: scale(1) translateY(0);
    }
    .scroll-reveal-grid > * {
        opacity: 0;
        transform: translateY(24px);
        transition: opacity 0.5s cubic-bezier(0.22, 1, 0.36, 1), transform 0.5s cubic-bezier(0.22, 1, 0.36, 1);
    }
    .scroll-reveal-grid.visible > *:nth-child(1) { transition-delay: 0.05s; }
    .scroll-reveal-grid.visible > *:nth-child(2) { transition-delay: 0.12s; }
    .scroll-reveal-grid.visible > *:nth-child(3) { transition-delay: 0.19s; }
    .scroll-reveal-grid.visible > *:nth-child(4) { transition-delay: 0.26s; }
    .scroll-reveal-grid.visible > *:nth-child(5) { transition-delay: 0.33s; }
    .scroll-reveal-grid.visible > *:nth-child(6) { transition-delay: 0.4s; }
    .scroll-reveal-grid.visible > * {
        opacity: 1;
        transform: translateY(0);
    }
</style>
<script>
(function () {
    var revealSelectors = '.scroll-reveal, .scroll-reveal-scale, .scroll-reveal-grid';
    var elements = document.querySelectorAll(revealSelectors);
    var observer = new IntersectionObserver(function (entries) {
        entries.forEach(function (entry) {
            if (entry.isIntersecting) entry.target.classList.add('visible');
        });
    }, { threshold: 0.12, rootMargin: '0px 0px -40px 0px' });
    elements.forEach(function (el) { observer.observe(el); });
})();
</script>
