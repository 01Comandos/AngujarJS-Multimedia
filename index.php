<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>AngularJS - Multimedia</title>
    <meta name="description" content="Aplicación AngularJS - Asignatura Multimedia - UDONS" />
    <meta name="author" content="@01Comandos">
    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css">
    
    <link rel="shortcut icon" href="img/favicon.ico">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->      
    
  </head>
  <body>
    <?php include 'inc/header.php'; ?>

    <!-- Zona principal del curso -->
    <section class="header-general">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 text-center">
                <!-- ZONA IZQUIERDA LOGO - NIVEL -->
                    <div class="level-curso">
                        <figure class="escudo-angular">
                            <img src="img/logo-angular.png" alt="">
                        </figure>

                        <figure class="level">
                            <img src="img/level.png" alt="">
                        </figure>
                    </div>
                <!-- ZONA TEXTO -->
                    <div class="mensaje-invitar">
                        <div class="texto1">
                            <img src="img/logo-js.jpg" alt="">
                            <span>EN EL SERVIDOR</span>
                        </div>
                        <div class="texto2">
                            <span>PREPARATE PARA EL FUTURO</span>
                        </div>
                        <div class="texto3">
                            <span>JavaScript se ha convertido en el lenguaje mas versátil de todos los tiempos, aprende a implementarlo en el lado del servidor sin que interfiera con el FrontEnd</span>
                        </div>
                    </div>
                <!-- BOTON EMPEZAR CURSO -->
                    <div class="empezar">
                        <a href="empezar.php">¡Quiero Aprender!</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- PROFESORES -->
    <section class="profesores">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <div class="titulo-seccion">
                        <span>Profesores</span>
                    </div>
                </div>

                <div class="avatar-profesores">
                    <div class="comandos">
                        <figure>
                            <img src="img/comandos-avatar.jpg" alt="">
                        </figure>
                        <span id="nombre-prof">Carlos Pérez</span>
                        <a href="https://twitter.com/01Comandos/">@01Comandos</a>
                    </div>

                    <div class="comandos" id="avatar">
                        <figure>
                            <img src="img/ranyela-avatar.jpg" alt="">
                        </figure>
                        <span id="nombre-prof">Ranyela Gómez</span>
                        <a href="https://twitter.com/R_GL/">@R_GL</a>
                    </div>

                    <div class="comandos" id="avatar">
                        <figure>
                            <img src="img/monica-avatar.jpg" alt="">
                        </figure>
                        <span id="nombre-prof">Mónica Lares</span>
                        <a href="https://twitter.com/monicalares07/">@monicalares07</a>
                    </div>
                </div>
            </div>
        </div>



    </section>
  


    
    <!--
        FOOTER
     -->
    <footer>
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                    <h5>Desarrollado para la asignatura “Multimedia” - Licenciatura en Informática <br>Universidad de Oriente - Núcleo Sucre - 2015</h5>
                </div>
            </div>
        </div>
    </footer>
    
    
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>