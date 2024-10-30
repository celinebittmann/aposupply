<!doctype html>
<html lang="de">
  <head>
    <meta charset="utf-8">
    <title>Hintergrund-Test</title>
    <link href="../functions/mystyle.css"rel="stylesheet">
  </head>
  <body>
    <h1>Testseite für Hintergrundanimation</h1>
  </body>


  <!-- Hintergrundfarbe & -verlauf -->
  <style>
body {
    margin: 0;
    padding: 0;
    height: 100%;
    background: linear-gradient(90deg, #def6fa, #6ae8fe);
    background-size: 200% 200%;
    animation: gradientMove 15s linear infinite;
}

@keyframes gradientMove {
    0% {
        background-position: 0% 50%;
    }
    50% {
        background-position: 100% 50%;
    }
    100% {
        background-position: 0% 50%;
    }
}
</style>

</html>


