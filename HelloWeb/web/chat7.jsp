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
                    <jsp:setProperty name="mybean" property="marca" />
                    <h3 class="bounceInDown animated" style="color: greenyellow;">Felicidades te espera una nueva maquina <jsp:getProperty name="mybean" property="marca" /></h3>
                    <h2 class="bounceInLeft animated" style="color: white;">¿Que tipo de maquina se adapta mejor a usted?</h2>
                </div>
			</div>
			<div class="row">
				<div class="col-sm-6 col-lg-offset-6 text-center-mobile">
                                    <form name="monitor Input Form" action="chat8.jsp">
                                        <ul class="list-inline">
                                            <li class="bounce animated"><a href="" data-toggle="tooltip" data-placement="top" title="Precio: 0000 16pulgadas">Compacto</a></li>
                                            <li class="bounce animated"><a href="" data-toggle="tooltip" data-placement="top" title="Precio: 0000 9pulgadas">Tamaño medio</a></li>
                                            <li class="bounce animated"><a href="" data-toggle="tooltip" data-placement="top" title="Precio: 0000 22pulgadas">Grande</a></li>
                                            
                                        </ul>
                                        <input type="text" class="form-control form-white" name="monitor" />
                                        <input type="submit" class="btn btn-block btn-blue"  value="Enviar" />
                                        <p>Monto actual: <jsp:getProperty name="mybean" property="monto" /></p>
                                    </form>
				</div>
			</div>
		</div>
	</section>

<script>
$(document).ready(function(){
    $('[data-toggle="tooltip"]').tooltip();   
});
</script>
</body>
</html>
