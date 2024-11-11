<?php 
error_reporting(-1); 
ini_set('display_errors','On'); 

// session_start();
?>

<!doctype html>
<html lang="de">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Apo-Supply</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link href="functions/mystyle.css"rel="stylesheet">
  </head>
  <body>
    <?php
    require(__DIR__ . '/includes.php');
    require "templates/navbar.php";
    ?>
    <div class="container">
    <br>
    <h1>Willkommen</h1>
    <br>

<div class="row">
<div class="col-6">
<p style="font-style: italic; letter-spacing: 1px; text-align: justify;">Wir freuen uns, Sie auf unserer Seite begrüßen zu dürfen.</p>
<p style="text-align: justify;">Ihre Gesundheit und Ihr Wohlbefinden stehen bei uns an erster Stelle. Unsere Plattform stellt sicher, dass Sie stets Zugriff 
  auf aktuelle und verlässliche Informationen haben. Wir bieten detaillierte Produktbeschreibungen, Anwendungsinformationen und Hinweise zur sicheren Verwendung.
  Wir sind bestrebt, Ihnen eine benutzerfreundliche und informative Plattform zu bieten. Unser motiviertes Team arbeitet kontinuierlich daran, 
  Ihnen die bestmöglichen Informationen zur Verfügung zu stellen und Ihre Fragen kompetent zu beantworten.
</p>

<img src="assets/img/frau.png" class="img-small animated-slide-in-right img-hover-zoom" alt="Frau mit Medikamenten">


</div>
</div>





<!-- Counter???
     
      <div class="elementor-element elementor-element-554a111 e-con-full e-flex e-con e-child" data-id="554a111" data-element_type="container">
				<div class="elementor-element elementor-element-e489b09 elementor-widget elementor-widget-counter" data-id="e489b09" data-element_type="widget" data-widget_type="counter.default">
				<div class="elementor-widget-container">
			<style>/*! elementor - v3.23.0 - 25-07-2024 */
.elementor-counter{display:flex;justify-content:center;align-items:stretch;flex-direction:column-reverse}.elementor-counter .elementor-counter-number{flex-grow:var(--counter-number-grow,0)}.elementor-counter .elementor-counter-number-wrapper{flex:1;display:flex;font-size:69px;font-weight:600;line-height:1;text-align:center}.elementor-counter .elementor-counter-number-prefix{text-align:end;flex-grow:var(--counter-prefix-grow,1);white-space:pre-wrap}.elementor-counter .elementor-counter-number-suffix{text-align:start;flex-grow:var(--counter-suffix-grow,1);white-space:pre-wrap}.elementor-counter .elementor-counter-title{flex:1;display:flex;justify-content:center;align-items:center;margin:0;padding:0;font-size:19px;font-weight:400;line-height:2.5}</style>		<div class="elementor-counter">
			<div class="elementor-counter-title">Personen</div>			<div class="elementor-counter-number-wrapper">
				<span class="elementor-counter-number-prefix"></span>
				<span class="elementor-counter-number" data-duration="2000" data-to-value="200" data-from-value="0" data-delimiter=",">200</span>
				<span class="elementor-counter-number-suffix"></span>
			</div>
		</div>
				</div>
				</div>
				</div>
		<div class="elementor-element elementor-element-c89c006 e-con-full e-flex e-con e-child" data-id="c89c006" data-element_type="container">
				<div class="elementor-element elementor-element-40fbf58 elementor-widget elementor-widget-counter" data-id="40fbf58" data-element_type="widget" data-widget_type="counter.default">
				<div class="elementor-widget-container">
					<div class="elementor-counter">
			<div class="elementor-counter-title">Personen</div>			<div class="elementor-counter-number-wrapper">
				<span class="elementor-counter-number-prefix"></span>
				<span class="elementor-counter-number" data-duration="1000" data-to-value="21" data-from-value="0" data-delimiter=",">0</span>
				<span class="elementor-counter-number-suffix"></span>
			</div>
		</div>
				</div>
				</div>
				</div>
		<div class="elementor-element elementor-element-cb42e6a e-con-full e-flex e-con e-child" data-id="cb42e6a" data-element_type="container">
				<div class="elementor-element elementor-element-c8c1952 elementor-widget elementor-widget-counter" data-id="c8c1952" data-element_type="widget" data-widget_type="counter.default">
				<div class="elementor-widget-container">
					<div class="elementor-counter">
			<div class="elementor-counter-title">Personen</div>			<div class="elementor-counter-number-wrapper">
				<span class="elementor-counter-number-prefix"></span>
				<span class="elementor-counter-number" data-duration="1200" data-to-value="35" data-from-value="0" data-delimiter=",">0</span>
				<span class="elementor-counter-number-suffix"></span>
			</div>
		</div>
				</div>
				</div>
				</div> -->
























</div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  </body>
  
  <!-- Hintergrundfarbe & -verlauf -->
  <style>
body {
    margin: 0;
    padding: 0;
    height: 100%;
    background: linear-gradient(90deg, #e6f9ff, #d7f8fe, #6ae8fe, #e6f9ff, #d7f8fe);
    background-size: 200% 200%;
    animation: gradientMove 12s linear infinite;
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