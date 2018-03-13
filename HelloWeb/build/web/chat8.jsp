<%@page contentType="text/html" pageEncoding="UTF-8"%>
<!DOCTYPE html>
<html>
    <head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>TechForce</title>
	<meta name="description" content="Cardio is a free one page template made exclusively for Codrops by Luka Cvetinovic" />
	<meta name="keywords" content="html template, css, free, one page, gym, fitness, web design" />
	<meta name="author" content="Luka Cvetinovic for Codrops" />
	<link rel="icon" type="image/png" href="img/favicons/favicon-32x32.png" sizes="32x32">
	<link rel="icon" type="image/png" href="img/favicons/favicon-16x16.png" sizes="16x16">
	<link rel="manifest" href="img/favicons/manifest.json">
	<link rel="shortcut icon" href="img/favicons/favicon.ico">
	<meta name="msapplication-TileColor" content="#00a8ff">
	<meta name="msapplication-config" content="img/favicons/browserconfig.xml">
	<meta name="theme-color" content="#ffffff">
	<!-- Normalize -->
	<link rel="stylesheet" type="text/css" href="css/normalize.css">
	<!-- Bootstrap -->
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
	<!-- Owl -->
	<link rel="stylesheet" type="text/css" href="css/owl.css">
	<!-- Animate.css -->
	<link rel="stylesheet" type="text/css" href="css/animate.css">
	<!-- Font Awesome -->
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.1.0/css/font-awesome.min.css">
	<!-- Elegant Icons -->
	<link rel="stylesheet" type="text/css" href="fonts/eleganticons/et-icons.css">
	<!-- Main style -->
	<link rel="stylesheet" type="text/css" href="css/cardio.css">
    </head>
    <body style="background-color: black;">
    <section style="background-color: black;" id="services" class="section">
        <div class="container" >
		<div class="row">
		<div class="col-sm-6 text-center-mobile">
                    <jsp:useBean id="mybean" scope="session" class="org.mypackage.hello.FacturaHandler" />
                    <jsp:setProperty name="mybean" property="monitor" />
                    <h1 class="light blue wobble animated">TechForce</h1>
                    <h3 style="color: pink;">¡<jsp:getProperty name="mybean" property="idCliente" />, gracias por preferirnos!</h3>
                    <h3 style="color: lightblue;"> El equipo llegara a ti en un empaque de tamaño: <jsp:getProperty name="mybean" property="monitor" /></h3>
                    <h2 class="lightSpeedIn animated" style="color: yellowgreen;">La proforma de tu articulo esta lista ve a la tienda, revisala y retirala si te ha gustado.</h2>
                </div>
			</div>
			<div class="row">
				<div class="col-sm-6 col-lg-offset-6 text-center-mobile">
                        <p style="color: yellow;"><jsp:getProperty name="mybean" property="placeFactura" /></p>
                                        <p style="color: yellow;">Monto actual: <jsp:getProperty name="mybean" property="monto" /></p>
                                    <h2 class="text-center"><a href="/HelloWeb/"><i class="fa fa-home shake animated" aria-hidden="true"></i> Volver a la pagina principal</a></h2>
				</div>
			</div>
		</div>
	</section>
</body>
</html>
