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
                    
                   
                    <h2 class="bounceInDown animated" style="color: red;">El procesador es un <?php echo filter_input( INPUT_GET, 'cpu', FILTER_SANITIZE_URL ); ?></h2>
                    <h2 class="bounceInLeft animated" style="color: white;">¿Que procesador gráfico te gustaría?</h2>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-6 col-lg-offset-6 text-center-mobile">
                                    <form name="cpu Input Form" action="chat5.php">
                                        <ul class="list-inline">
                                            <li class="bounce animated"><a href="" data-toggle="tooltip" data-placement="top" title="ATI RADEON">ATI Radeon</a></li>
                                            <li class="bounce animated"><a href="" data-toggle="tooltip" data-placement="top" title="Nvidia the way is meant to be played">Nvidia</a></li>
                                        </ul>
                                        <input type="text" class="form-control form-white" name="gpu" />
                                        <input type="submit" class="btn btn-block btn-blue"  value="Enviar" />
                                        
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