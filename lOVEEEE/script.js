// Professional JavaScript: Modular, efficient, with error handling.

// Configuration
const MONTHSARY_DATE = new Date('2024-12-12T00:00:00'); // FIXED: Update to your next monthsary (e.g., December 12, 2024)
const GIRLFRIEND_NAME = 'Moniqueeeee';
const CURRENT_MONTHSARY = 'November 12, 2024'; // FIXED: Update to your current monthsary date

// Generate Floating Hearts (Particle Effect)
function createHearts(heartsContainer) {
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

// Generate Single Big CSS-Coded Blooming Rose (Pure CSS Structure)
function createBloomingRose(button) {
    // Check if rose already exists to prevent duplicates
    if (document.querySelector('.css-rose')) return;

    const rect = button.getBoundingClientRect();
    const buttonCenterX = rect.left + rect.width / 2;
    const buttonCenterY = rect.top + rect.height / 2;

    // Create rose container
    const rose = document.createElement('div');
    rose.className = 'css-rose';
    rose.style.left = (buttonCenterX - 50) + 'px'; // Offset for rose width
    rose.style.top = (buttonCenterY - 60) + 'px'; // Offset for rose height (centered vertically)

    // Create stem
    const stem = document.createElement('div');
    stem.className = 'stem';
    rose.appendChild(stem);

    // Create leaves
    const leafLeft = document.createElement('div');
    leafLeft.className = 'leaf left';
    rose.appendChild(leafLeft);

    const leafRight = document.createElement('div');
    leafRight.className = 'leaf right';
    rose.appendChild(leafRight);

    // Create center
    const center = document.createElement('div');
    center.className = 'center';
    rose.appendChild(center);

    // Create 8 petals
    for (let i = 0; i < 8; i++) {
        const petal = document.createElement('div');
        petal.className = 'petal';
        rose.appendChild(petal);
    }

    document.body.appendChild(rose);

    // Trigger bloom after a brief pause for positioning (this activates petal animations via CSS)
    setTimeout(() => {
        rose.classList.add('bloom');
        // Add bloom class to each petal individually for staggered effect (CSS handles the rest)
        const petals = rose.querySelectorAll('.petal');
        petals.forEach((petal, index) => {
            setTimeout(() => petal.classList.add('bloom'), index * 200); // 0.2s stagger per petal
        });
    }, 200);

    // No auto-removal: Let it stay as a permanent surprise element
}

// Countdown Timer (Fixed: Robust calculation and updates)
function updateCountdown(timerElements) {
    const now = new Date().getTime();
    const distance = MONTHSARY_DATE.getTime() - now;

    if (distance < 0) {
        // Past date: Show "Next Monthsary Soon!" or reset to 00
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

// Surprise Button Handler (Updated for CSS Rose)
function initSurprise(surpriseBtn) {
    let isRevealed = false;
    surpriseBtn.addEventListener('click', () => {
        if (!isRevealed) {
            createBloomingRose(surpriseBtn); // Trigger CSS rose bloom
            surpriseBtn.textContent = 'Rose Has Bloomed! 🌹';
            isRevealed = true;
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
                observer.unobserve(entry.target); // Stop observing once triggered
            }
        });
    }, { threshold: 0.1 });

    document.querySelectorAll('.fade-in, .slide-up').forEach(el => observer.observe(el));
}

// Initialize Everything (All DOM selections moved here for safety)
document.addEventListener('DOMContentLoaded', () => {
    // Select DOM elements now that DOM is ready
    const surpriseBtn = document.getElementById('surprise-btn');
    const timerElements = {
        days: document.getElementById('days'),
        hours: document.getElementById('hours'),
        minutes: document.getElementById('minutes'),
        seconds: document.getElementById('seconds')
    };
    const heartsContainer = document.querySelector('.hearts-bg');

    // Validate elements exist
    if (!surpriseBtn || !timerElements.days || !heartsContainer) {
        console.warn('Some DOM elements not found—check HTML structure.');
        return;
    }

    personalize();
    initSurprise(surpriseBtn);
    initAnimations();
    createHearts(heartsContainer); // Initial hearts
    setInterval(() => createHearts(heartsContainer), 3000); // Regenerate every 3s
    updateCountdown(timerElements); // Initial countdown
    setInterval(() => updateCountdown(timerElements), 1000); // Update every second
});

// Error Handling: Graceful fallback if JS fails
window.addEventListener('error', (e) => {
    console.warn('JS Error:', e.message); // Log but don't break site
    // Optional: Show a subtle message to user if critical
});
