<!DOCTYPE html>
<html lang="en">
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
            <form action="" method="post">
            
                <div class="col-sm-6 text-center-mobile">
                    <h1 class="white">Ingrese el numero de su proforma:</h1>
                    <h6 class="white">
                    <?php
                            //ACA SE PONE EL POST DE ENVIAR FACTURA :v 
                            if (isset($_POST['Aceptar'])) {

                            $ch = curl_init();
                            curl_setopt($ch, CURLOPT_URL, "http://localhost:60036/FacturaService.svc//AceptarFactura/".($_POST['cedula'])."");
                            curl_setopt($ch,CURLOPT_RETURNTRANSFER, true);
                            curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type: application/json','Accept: application/json'));
                            curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
                            curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, false);
                            $result = curl_exec($ch);
                            print_r("Proforma Aceptada!!! \nPase a retirar su compra en la tienda TechForce mas cercana.");

                            }else if (isset($_POST['Cancelar'])) {

                            $ch = curl_init();
                            curl_setopt($ch, CURLOPT_URL, "http://localhost:60036/FacturaService.svc//AceptarFactura/".($_POST['cedula'])."");
                            curl_setopt($ch,CURLOPT_RETURNTRANSFER, true);
                            curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type: application/json','Accept: application/json'));
                            curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
                            curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, false);
                            $result = curl_exec($ch);
                            print_r("Proforma Cancelada. Si gusta crear otra proforma, vuelva a nuestra pagina principal.");

                            }else if (isset($_POST['buscar'])) {

                            $ch = curl_init();
                            curl_setopt($ch, CURLOPT_URL, "http://localhost:60036/FacturaService.svc//GetFactura/".($_POST['cedula'])."");
                            curl_setopt($ch,CURLOPT_RETURNTRANSFER, true);
                            curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type: application/json','Accept: application/json'));
                            curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
                            curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, false);
                            $result = curl_exec($ch);
                            $status = curl_getinfo($ch, CURLINFO_HTTP_CODE);
                            $json = json_decode($result, true);
                            echo '<br>';
                            print_r("Id Proforma : ".$json['Id']);
                            echo '<br>';
                            print_r("Id Cliente :".$json['IdCliente']);
                            echo '<br>';
                            print_r("Marca :".$json['Marca']);
                            echo '<br>';
                            print_r("Tipo :".$json['Tipo']);
                            echo '<br>';
                            print_r("Monitor :".$json['Monitor']);
                            echo '<br>';
                            print_r("Cpu :".$json['Cpu']);
                            echo '<br>';
                            print_r("Gpu :".$json['Gpu']);
                            echo '<br>';
                            print_r("Memoria :".$json['Memoria']);
                            echo '<br>';
                            print_r("DiscoDuro :".$json['DiscoDuro']);
                            echo '<br>';
                            print_r("Fecha :".$json['Fecha']);
                            echo '<br>';
                            print_r("Estado :".$json['Estado']);
                            echo '<br>';
                            print_r("Monto :".$json['Monto']);
                            }
                       ?></h6>
                </div>
                <fieldset>
                <span class="pull-right"><a class="btn btn-block btn-blue-fill" href="index_2.html">Inicio</a></span>
            </div>
            <div class="row">
                <div class="col-sm-6 col-lg-offset-6 text-center-mobile">
                        <td><input type="text" class="form-control form-white" name="cedula"></td>
                        <input type="submit" class="btn btn-block btn-blue"  value="Buscar" name="buscar"/>
                        </fieldset>
                       
                        <p>
                        </p>
                             <div class="row">
                                <div class="col-sm-6 text-center-mobile">
                                    
                                    <input type="submit" class="btn btn-block btn-blue" value="Aceptar Proforma" name="Aceptar"/> 
                                    <input type="submit" class="btn btn-block btn-blue" value="Cancelar Proforma" name="Cancelar"/>
                                </div>
                                
                                </span>
                                </div>
                    </form>
                </div>
                

            </div>
        </div>
    </section>
    
    <!-- Holder for mobile navigation -->
    
    <!-- Scripts -->
    <script src="js/jquery-1.11.1.min.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/wow.min.js"></script>
    <script src="js/typewriter.js"></script>
    <script src="js/jquery.onepagenav.js"></script>
    <script src="js/main.js"></script>
    
</body>
</html>