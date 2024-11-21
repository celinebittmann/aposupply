// für card einfliegen lassen

  document.addEventListener('DOMContentLoaded', function() {
    const card = document.querySelector('.card');

    function checkVisibility() {
        const cardPosition = card.getBoundingClientRect().top;
        const windowHeight = window.innerHeight;

        if (cardPosition < windowHeight && cardPosition > 0) {
            card.classList.add('visible');
        } 
    }

    window.addEventListener('scroll', checkVisibility);
    window.addEventListener('resize', checkVisibility); // Überprüfung bei Änderung der Fenstergröße

    // Initialer Check, falls die Karte von Anfang an im Sichtbereich ist
    checkVisibility();
});













