<!DOCTYPE html>
<html>
<head>
	<title> Nombre del Músico | Slogan </title>
	<meta charset="utf-8">
	<meta name="description" content="">
	<meta name="author" content="Adrián Vázquez Navarrete">
	<meta name="viewport" content="width=device-width">
	<meta http-equiv="X-UA-Compatible" content="IE=edge"/>
    <meta name="dc.language" content="es_MX"/>
    <meta property="og:locale" content="es_MX"/>
    <meta name="apple-mobile-web-app-capable" content="yes"/>

    <!-- Estilos -->
    <link href='https://fonts.googleapis.com/css?family=PT+Sans+Narrow' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Dancing+Script' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" type="text/css" href="assets/css/main.css" > 
    <link rel="stylesheet" href="assets/slider/responsiveslides.css">

    <!-- JS -->
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
  	<script src="assets/slider/responsiveslides.min.js"></script>
  	<script>
  	$(function () {
      $("#slider4").responsiveSlides({
        auto: true,
        pager: false,
        nav: true,
        speed: 500,
        namespace: "callbacks",
        before: function () {
          $('.events').append("<li>before event fired.</li>");
        },
        after: function () {
          $('.events').append("<li>after event fired.</li>");
        }
      });

    });
  	</script>
</head>
<body>

<?php include('assets/header.php'); ?>

<section class="slider_top" id="slider_top">
	<div class="callbacks_container">
    	<ul class="rslides" id="slider4">
        	<li>
          		<img src="assets/img/slider/1.jpg" alt="">
          		<div class="caption column right text-justify">
          			<h1>Imagen 1</h1>
          			<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
          			tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
          			quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
          			consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
          			cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
          			proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>	
          		</div>
        	</li>
        	<li>
          		<img src="assets/img/slider/2.jpg" alt="">
          		<div class="caption column left text-justify">
          			<h1>Imagen 2</h1>
          			<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
          			tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
          			quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
          			consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
          			cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
          			proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>	
          		</div>
        	</li>
        	<li>
          		<img src="assets/img/slider/3.jpg" alt="">
          		<div class="caption column left text-justify">
          			<h1>Imagen 3</h1>
          			<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
          			tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
          			quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
          			consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
          			cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
          			proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>	
          		</div>
        	</li>
      	</ul>
    </div>
</section>

<section class="iconos_contacto" class="iconos_contacto">
	<div class="container">
		<div class="column left">
			<h1>Contacto</h1>
			<ul>
				<li><img src="assets/img/icons/fb.png"></li>
				<li><img src="assets/img/icons/twitter.png"></li>
				<li><img src="assets/img/icons/gplus.png"></li>
				<li><img src="assets/img/icons/insta.png"></li>
				<li><img src="assets/img/icons/yt.png"></li>
				<li><img src="assets/img/icons/soundcloud.png"></li>
			</ul>
		</div>
		<div class="column right">
			<input type="text" name="correo" class="input-black" placeholder="Correo">
			<input type="text" name="asunto" class="input-black" placeholder="Asunto">
			<textarea name="texto" class="input-black" placeholder="Mensaje..."></textarea>
			<input type="submit" class="button-black right" name="enviar" value="Enviar">
		</div>		
	</div>
</section>

<?php include('assets/footer.php'); ?>

</body>
</html>