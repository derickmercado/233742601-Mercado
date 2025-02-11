document.querySelectorAll('nav a').forEach(anchor => {
    anchor.addEventListener('click', function(e) {
        e.preventDefault(); 

        const targetId = this.getAttribute('href').substring(1);
        const targetElement = document.getElementById(targetId);

        if (targetElement) {
            window.scrollTo({
                top: targetElement.offsetTop - 50,
                behavior: 'smooth' 
            });
        }
    });
});


document.addEventListener("DOMContentLoaded", function () {
    const carousel = document.querySelector(".holosuite-carousel");
    const leftBtn = document.querySelector(".left-btn");
    const rightBtn = document.querySelector(".right-btn");

    leftBtn.addEventListener("click", () => {
        carousel.scrollBy({ left: -320, behavior: "smooth" });
    });

    rightBtn.addEventListener("click", () => {
        carousel.scrollBy({ left: 320, behavior: "smooth" });
    });
});

document.addEventListener("DOMContentLoaded", function () {
    const findButton = document.getElementById("find-holosuite");
    const holosuitesSection = document.getElementById("holosuites");

    findButton.addEventListener("click", function () {
        holosuitesSection.scrollIntoView({ behavior: "smooth" });
    });
});

document.addEventListener("DOMContentLoaded", function () {
    const sections = document.querySelectorAll("section");
    const navLinks = document.querySelectorAll("nav ul li a");

    function updateActiveSection() {
        let scrollPosition = window.scrollY;

        sections.forEach(section => {
            const sectionTop = section.offsetTop - 100; 
            const sectionHeight = section.offsetHeight;
            const sectionId = section.getAttribute("id");

            if (scrollPosition >= sectionTop && scrollPosition < sectionTop + sectionHeight) {
                navLinks.forEach(link => {
                    link.classList.remove("active");
                    if (link.getAttribute("href") === `#${sectionId}`) {
                        link.classList.add("active");
                    }
                });
            }
        });
    }

    window.addEventListener("scroll", updateActiveSection);
    updateActiveSection(); 
});
