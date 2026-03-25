/* ============================================
   FLIPKART CLONE - JAVASCRIPT
   ============================================ */

// ---- Hero Carousel ----
let currentSlide = 0;
let totalSlides = 0;
let autoplayInterval = null;

document.addEventListener('DOMContentLoaded', () => {
    const track = document.getElementById('carouselTrack');
    if (track) {
        totalSlides = track.children.length;
        startAutoplay();
    }

    // Start countdown timer
    startDealTimer();

    // Sort bar interaction
    document.querySelectorAll('.sort-option').forEach(opt => {
        opt.addEventListener('click', function () {
            document.querySelectorAll('.sort-option').forEach(o => o.classList.remove('active'));
            this.classList.add('active');
        });
    });

    // Thumbnail interaction
    document.querySelectorAll('.detail-thumb').forEach(thumb => {
        thumb.addEventListener('click', function () {
            document.querySelectorAll('.detail-thumb').forEach(t => t.classList.remove('active'));
            this.classList.add('active');
        });
    });
});

function moveCarousel(direction) {
    currentSlide += direction;
    if (currentSlide < 0) currentSlide = totalSlides - 1;
    if (currentSlide >= totalSlides) currentSlide = 0;
    updateCarousel();
    resetAutoplay();
}

function goToSlide(index) {
    currentSlide = index;
    updateCarousel();
    resetAutoplay();
}

function updateCarousel() {
    const track = document.getElementById('carouselTrack');
    if (!track) return;
    track.style.transform = `translateX(-${currentSlide * 100}%)`;

    // Update dots
    document.querySelectorAll('.carousel-dot').forEach((dot, i) => {
        dot.classList.toggle('active', i === currentSlide);
    });
}

function startAutoplay() {
    autoplayInterval = setInterval(() => {
        currentSlide = (currentSlide + 1) % totalSlides;
        updateCarousel();
    }, 4000);
}

function resetAutoplay() {
    clearInterval(autoplayInterval);
    startAutoplay();
}

// ---- Product Scroll ----
function scrollProducts(containerId, direction) {
    const container = document.getElementById(containerId);
    if (!container) return;
    const scrollAmount = 440;
    container.scrollBy({
        left: direction * scrollAmount,
        behavior: 'smooth'
    });
}

// ---- Deal Timer ----
function startDealTimer() {
    // Set timer to end of day
    const now = new Date();
    const endOfDay = new Date(now);
    endOfDay.setHours(23, 59, 59, 999);

    function updateTimer() {
        const now = new Date();
        const diff = endOfDay - now;

        if (diff <= 0) return;

        const hours = Math.floor(diff / (1000 * 60 * 60));
        const mins = Math.floor((diff % (1000 * 60 * 60)) / (1000 * 60));
        const secs = Math.floor((diff % (1000 * 60)) / 1000);

        const hoursEl = document.getElementById('timer-hours');
        const minsEl = document.getElementById('timer-mins');
        const secsEl = document.getElementById('timer-secs');

        if (hoursEl) hoursEl.textContent = hours.toString().padStart(2, '0');
        if (minsEl) minsEl.textContent = mins.toString().padStart(2, '0');
        if (secsEl) secsEl.textContent = secs.toString().padStart(2, '0');
    }

    updateTimer();
    setInterval(updateTimer, 1000);
}

// ---- Cart Quantity ----
function changeQty(index, delta) {
    const input = document.getElementById(`qty-${index}`);
    if (!input) return;
    let val = parseInt(input.value) || 1;
    val += delta;
    if (val < 1) val = 1;
    if (val > 10) val = 10;
    input.value = val;
}
