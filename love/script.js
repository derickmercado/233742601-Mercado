// Professional JavaScript: Modular, efficient, with error handling.

// Configuration
const MONTHSARY_DATE = new Date('2023-11-15T00:00:00'); // Customize: Next monthsary date (e.g., YYYY-MM-DD)
const GIRLFRIEND_NAME = '[Girlfriend\'s Name]'; // Replace with actual name
const CURRENT_MONTHSARY = 'October 15, 2023'; // Replace with actual date

// DOM Elements
const surpriseBtn = document.getElementById('surprise-btn');
const surprise = document.getElementById('surprise');
const timerElements = {
    days: document.getElementById('days'),
    hours: document.getElementById('hours'),
    minutes: document.getElementById('minutes'),
    seconds: document.getElementById('seconds')
};

// Generate Floating Hearts (Particle Effect)
function createHearts() {
    const heartsContainer = document.querySelector('.hearts-bg');
    for (let i = 0; i < 20; i++) {
        const heart = document.createElement('div');
        heart.innerHTML = '💖';
        heart.className = 'heart';
        heart.style.left = Math.random() * 100 + '%';
        heart.style.animationDelay = Math.random() * 6 + 's';
        heart.style.animationDuration = (Math.random() * 3 + 4) + 's';
        heartsContainer.appendChild(heart);

        // Remove heart after animation to prevent DOM bloat
        setTimeout(() => heart.remove(), 7000);
    }
}

// Countdown Timer
function updateCountdown() {
    const now = new Date().getTime();
    const distance = MONTHSARY_DATE.getTime() - now;

    if (distance < 0) {
        timerElements.days.textContent = '00';
        timerElements.hours.textContent = '00';
        timerElements.minutes.textContent = '00';
        timerElements.seconds.textContent = '00';
        return;
    }

    const days = Math.floor(distance / (1000 * 60 * 60 * 24));
    const hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
    const minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
    const seconds = Math.floor((distance % (1000 * 60)) / 1000);

    timerElements.days.textContent = days.toString().padStart(2, '0');
    timerElements.hours.textContent = hours.toString().padStart(2, '0');
    timerElements.minutes.textContent = minutes.toString().padStart(2, '0');
    timerElements.seconds.textContent = seconds.toString().padStart(2, '0');
}

// Surprise Button Handler
function initSurprise() {
    let isRevealed = false;
    surpriseBtn.addEventListener('click', () => {
        if (!isRevealed) {
            surprise.classList.remove('hidden');
            surprise.style.animation = 'slideUp 0.5s ease-out';
            isRevealed = true;
            surpriseBtn.textContent = 'Surprise Revealed! ✨';
        }
    });
}

// Update Personalization (Dynamic if needed)
function personalize() {
    document.querySelector('.subheadline').textContent = `To my amazing ${GIRLFRIEND_NAME}, the light of my life. 💖`;
    document.querySelector('.footer p').textContent = `Made with ❤️ for ${GIRLFRIEND_NAME} on ${CURRENT_MONTHSARY}`;
}

// Intersection Observer for Animations (Performance-Optimized)
function initAnimations() {
    const observer = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                entry.target.style.animationDelay = '0.2s'; // Staggered effect
                observer.unobserve(entry.target);
            }
        });
    }, { threshold: 0.1 });

    document.querySelectorAll('.fade-in, .slide-up').forEach(el => observer.observe(el));
}

// Initialize Everything
document.addEventListener('DOMContentLoaded', () => {
    personalize();
    initSurprise();
    initAnimations();
    createHearts(); // Initial hearts
    setInterval(createHearts, 3000); // Regenerate every 3s
    updateCountdown(); // Initial countdown
    setInterval(updateCountdown, 1000); // Update every second
});

// Error Handling: Graceful fallback if JS fails
window.addEventListener('error', (e) => {
    console.warn('JS Error:', e.message); // Log but don't break site
});
