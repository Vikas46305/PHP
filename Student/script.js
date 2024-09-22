document.addEventListener("DOMContentLoaded", () => {

    const button = document.querySelector('button');
    const aside = document.querySelector('aside');
    const logo = document.getElementById('logo');

    // Function to set the default width based on screen size
    function setDefaultWidth() {
        if (window.matchMedia("(max-width: 768px)").matches) {
            // Mobile: default width 16%
            aside.style.width = '16%';
        } else {
            // Laptop: default width 3.9%
            aside.style.width = '3.9%';
        }
        aside.style.transition = "0.3s ease";
    }

    // Set initial width on page load
    setDefaultWidth();

    button.addEventListener('click', () => {
        if (window.matchMedia("(max-width: 768px)").matches) {
            // Mobile: Toggle between 16% and 45%
            aside.style.width = aside.style.width === '45%' ? '16%' : '45%';
        } else {
            // Laptop: Toggle between 3.9% and 20%
            aside.style.width = aside.style.width === '20%' ? '3.9%' : '20%';
            logo.style.visibility = aside.style.width === '20%' ? 'hidden' : 'visible';
        }
    });

    // Optional: Update width when the window is resized
    window.addEventListener('resize', setDefaultWidth);});