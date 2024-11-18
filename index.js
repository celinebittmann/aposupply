// // laufende zahlen 
const config = {
  amount: 100,
  increment: 1,
  counterSpeed: 10
};

let counter = document.querySelector(".counter-container .number");
let i = 0;
let interval;

// Funktion, um zu überprüfen, ob das Element im sichtbaren Bereich ist
function isElementInViewport(el) {
  const rect = el.getBoundingClientRect();
  return (
      rect.top >= 0 &&
      rect.left >= 0 &&
      rect.bottom <= (window.innerHeight || document.documentElement.clientHeight) &&
      rect.right <= (window.innerWidth || document.documentElement.clientWidth)
  );
}

// Funktion, um den Zähler zu starten
function startCounter() {
  interval = setInterval(() => {
      if (i < config.amount) {
          i += config.increment;
          counter.innerText = i;
      } else {
          counter.innerText = config.amount;
          clearInterval(interval); // Stoppt das Intervall, sobald das Maximum erreicht ist
      }
  }, config1.counterSpeed);
}

// Scroll-Event-Listener hinzufügen
window.addEventListener('scroll', function() {
  if (isElementInViewport(counter)) {
      if (!interval) { // Verhindert mehrfaches Starten des Intervalls
          startCounter();
      }
  }
});






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















