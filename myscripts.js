function displayText(section) {
    // Hide all sections first
    document.getElementById("intro").style.display = "none";
    document.getElementById("about").style.display = "none";
    document.getElementById("skills").style.display = "none";
    document.getElementById("contacts").style.display = "none";
    
    // document.getElementById("contacts").style.display = "none"; // Uncomment if you have a contacts section
    
    // Show the selected section
    document.getElementById(section).style.display = "block";
}

    document.addEventListener("DOMContentLoaded", function() {
    const elements = document.querySelectorAll('.typewriter-text');

    elements.forEach(el => {
        el.addEventListener('animationend', function() {
            el.classList.add('finished');  // Removes blinking cursor after animation
        });
    });
});