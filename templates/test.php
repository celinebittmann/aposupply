<!DOCTYPE html>
<html lang="de">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Counter</title>
    <style>
        .counters {
            display: flex;
            justify-content: space-around;
            margin-top: 100vh; /* Um sicherzustellen, dass man scrollen muss, um die Counter zu sehen */
        }
        .counter {
            font-size: 2em;
            margin: 20px;
            text-align: center;
        }
    </style>
</head>
<body>
    <div class="counters">
        <div class="counter" data-target="100">0</div>
        <div class="counter" data-target="200">0</div>
        <div class="counter" data-target="300">0</div>
    </div>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const counters = document.querySelectorAll('.counter');
            const totalAnimationTime = 30000; // Gesamtzeit der Animation in Millisekunden (30 Sekunden)
            const startTime = performance.now();
            const frameTime = 1000 / 60; // Zeit pro Frame (etwa 60 FPS)

            function animateCounter(counter, startTime) {
                const target = +counter.getAttribute('data-target');
                const duration = totalAnimationTime;
                const startValue = 0;

                function updateCount(timestamp) {
                    const elapsedTime = timestamp - startTime;
                    const progress = Math.min(elapsedTime / duration, 1);
                    const count = startValue + (target - startValue) * progress;

                    counter.innerText = Math.floor(count);

                    if (progress < 1) {
                        requestAnimationFrame(updateCount);
                    } else {
                        counter.innerText = target;
                    }
                }

                requestAnimationFrame(updateCount);
            }

            function handleScroll() {
                counters.forEach(counter => {
                    const rect = counter.getBoundingClientRect();
                    if (rect.top < window.innerHeight && rect.bottom >= 0) {
                        const startTime = performance.now();
                        animateCounter(counter, startTime);
                    }
                });
                // Event-Listener entfernen, nachdem der Counter gestartet wurde
                window.removeEventListener('scroll', handleScroll);
            }

            window.addEventListener('scroll', handleScroll);
            // Überprüfen, ob der Counter bereits beim Laden der Seite im Viewport ist
            handleScroll();
        });
    </script>
</body>
</html>


