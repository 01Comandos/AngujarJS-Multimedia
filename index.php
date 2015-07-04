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

    <!--TEORIA ANGULARJS -->
    <section class="teoria-angularjs">
        <div class="container">
            <div class="row">
                <!-- TITULO SEGMENTO -->
                <div class="col-sm-12">
                    <div class="titulo-seccion">
                        <span>¿Porqué AngularJS?</span>
                    </div>
                </div>
            </div>

            <!-- MENU TEORIA -->
            <div class="row">
                <div class="col-sm-3">
                    <div class="tabbable tabs">
                        <ul id="top-bar" class="nav nav-tabs nav-justified menu-index">
                            <li class="active"><a href="#angularJS" data-toggle="tab">¿Porqué AngularJS?</a></li>
                            <li><a href="#scopes" data-toggle="tab">Scopes</a></li>
                            <li><a href="#controllers" data-toggle="tab">Controllers</a></li>
                            <li><a href="#client-side" data-toggle="tab">Client-side template</a></li>
                            <li><a href="#DataBinding" data-toggle="tab">Data binding</a></li>
                            <li><a href="#Directives" data-toggle="tab">Directives</a></li>
                            <li><a href="#Filters" data-toggle="tab">Filters</a></li>
                            <li><a href="#services" data-toggle="tab">Services</a></li>
                        </ul>

                        <div class="download-angular">
                            <a href="https://angularjs.org/">Descargar AngularJS</a>
                        </div>
                    </div>
                </div>

                <!-- MODULOS DE TEXTO -->
                <div class="col-sm-9">
                    <div class="tab-content textos-teoriaAngular">
                        <!-- TEXTO ¿PORQUE ANGULARJS -->
                        <div id="angularJS" class="tab-pane active">
                            <p> <span id="tag-azul">AngularJS</span> es un <span id="tag-oscuro">framework JavaScript</span> de desarrollo de aplicaciones web en el lado cliente, viene de la mano de los chicos de Google y se podría decir que utiliza el patrón <span id="tag-oscuro">MVC</span> (Model-View-Controller), aunque ellos mismos lo definen más bien como un <span id="tag-oscuro">MVW</span> (Model-View-Whatever (whatever works for you)).</p>
                            <p id="mg-p">Los creadores de este framework están convencidos de que HTML no está aún preparado para servir vistas dinámicas de un modo eficiente, así que han decidido extender la sintaxis de HTML para darle más funcionalidad.</p>
                            <p id="mg-p">Vale, espera, <span id="tag-oscuro">¿extender la sintaxis de <span id="tag-azul">HTML</span>?</span> Bien, esto puede resultar algo confuso al principio así que les voy a dejar un ejemplo para que entiendas a que me refiero. Puedes encontrar elementos nuevos como ng-app, ng-model y el nombre de una variable rodeada de dobles corchetes. Las dos primeras son lo que en <span id="tag-azul">AngularJS llaman directives</span> y la tercera es el modo de mostrar el valor de una variable del <span id="tag-oscuro">$scope</span> (algo así como el contexto de la aplicación) en pantalla, como si de un template se tratara.</p>
                            <figure class="codigo">
                                <img src="img/codigo-1.jpg" alt="">
                            </figure>
                            <p>Entonces, ¿qué nos permite <span id="tag-azul">AngularJS</span>? Vamos a ver varios ejemplos donde intentaremos explicar de pasada los puntos notables del framework. No obstante, me gustaría aclarar un par de conceptos que vais a ver continuamente en los ejemplos, los scopes y los controllers pero estarán explicados en otros <span id="tag-oscuro">tags</span></p>
                        </div>

                        <!--TEXTO SCOPES-->
                        <div id="scopes" class="tab-pane">
                            <p>Los <span id="tag-azul">scopes</span> son los distintos contextos de ejecución sobre los que trabajan las <span id="tag-oscuro">expresiones de AngularJS</span>, por ejemplo, cuando referenciamos un atributo del modelo mediante la directive <span id="tag-oscuro">ng-model</span>, no estamos sino apuntando a un atributo que contiene el scope sobre el que se está trabajando. En los scopes se guarda la información de los modelos que se representan en la vista y también atributos que se utilizan para manejar la lógica de la misma.</p>
                            <p id="mg-p">Los scopes se manejan principalmente desde los <span id="tag-oscuro">controllers</span> y desde las <span id="tag-oscuro">directives.</span></p>
                        </div>

                        <!--TEXTO CONTROLLERS -->
                        <div id="controllers" class="tab-pane">
                            <p>Los <span id="tag-azul">controllers</span> son los encargados de inicializar y modificar la información que contienen los <span id="tag-oscuro">scopes</span> en función de las necesidades de la aplicación.</p>
                            <p id="mg-p">También podemos declarar funciones en el <span id="tag-oscuro">scope</span> que se podrán utilizar más tarde o ser llamadas desde la vista.</p>
                        </div>

                        <!--TEXTO CLIENT-SIDE TEMPLATE -->
                        <div id="client-side" class="tab-pane">
                            <p>El sistema de plantillas en <span id="tag-oscuro">AngularJS</span> es diferente del utilizado en otros frameworks. Por lo general es el servidor el encargado de mezclar la plantilla con los datos y devolver el resultado al navegador. En <span id="tag-oscuro">AngularJS</span> el servidor proporciona los contenidos estáticos (plantillas) y la información que se va a representar (modelo) y es el cliente el encargado de mezclar la información del modelo con la plantilla para generar la vista.</p>
                            <p id="mg-p">En el siguiente ejemplo se puede observar como representamos en <span id="tag-oscuro">AngularJS</span> una lista de contactos utilizando el motor de plantillas y la directive <span id="tag-azul">ng-repeat</span> , la cual nos permite iterar sobre el array para después mostrar uno a uno la información de cada elemento contenido en él.</p>
                            <figure class="codigo">
                                <img src="img/codigo-2.jpg" alt="">
                            </figure>
                        </div>

                        <!--TEXTO DATA BINGIND -->
                        <div id="DataBinding" class="tab-pane">
                            <p>Con <span id="tag-oscuro">AngularJS</span> podemos sincronizar el modelo y la vista automáticamente utilizando ciertas <span id="tag-azul">directives</span> (<span id="tag-oscuro">ng-model</span> en el ejemplo) del framework. Esta sincronización es bidireccional, es decir, la información se sincroniza tanto si cambia el valor en la vista como si lo hace el valor en el modelo</p>
                            <figure class="codigo">
                                <img src="img/codigo-3.jpg" alt="">
                            </figure>
                        </div>

                        <!-- TEXTO DIRECTIVES -->
                        <div id="Directives" class="tab-pane">
                            <p>Las <span id="tag-azul">Directives</span> son el plato fuerte de <span id="tag-oscuro">AngularJS.</span> Mediante el uso de las mismas podemos extender la sintaxis de HTML y darle el comportamiento que deseemos. Podemos crear directives a nivel de elemento, de atributo, de clase y de comentario. Un ejemplo sería el siguiente, mediante nuestra <span id="tag-azul">directive fucusable</span> (una directive a nivel de atributo) podemos modificar el comportamiento de los elementos input. En este caso cada vez que el input obtiene o pierde el foco cambia su color de fondo.</p>
                            <figure class="codigo">
                                <img src="img/codigo-4.jpg" alt="">
                            </figure>
                            <p id="mg-p">Una de las cosas más interesantes de las <span id="tag-azul">directives</span> es la posibilidad de declararlas a nivel de elemento, lo que nos permite crear nuevas etiquetas de HTML que facilitan la creación de componentes reutilizables.</p>
                            <p id="mg-p">Vamos a poner un ejemplo rápido, una nueva etiqueta HTML llamada <span id="tag-oscuro">Hello</span> que será reemplazada por un botón que al hacer clic sobre él mostrará una alerta.</p>
                            <figure class="codigo">
                                <img src="img/codigo-5.jpg" alt="">
                            </figure>
                        </div>

                        <!--TEXTO FILTERS -->
                        <div id="Filters" class="tag-pane">
                            <p>Los <span id="tag-azul">filters</span> nos permiten modificar el modo en el que se va a presentar la información al usuario. La utilización de los mismos es similar a los Pipeline de Unix: <br> <span id="tag-oscuro">{{ expresion | filtro }} </span></p>
                            <p id="mg-p">Donde expresion puede ser cualquier tipo de expresión de <span id="tag-oscuro">AngularJS,</span> como una variable del <span id="tag-oscuro">$scope,</span> y filtro el nombre del filtro que le queremos aplicar a la expresión.</p>
                            <p id="mg-p">En el siguiente ejemplo hemos creado un filtro llamado <span id="tag-oscuro">toUpperCase</span>, el cual transforma todo el texto recibido de la expresión en mayúsculas.</p>
                            <figure class="codigo">
                                <img src="img/codigo-6.jpg" alt="">
                            </figure>
                        </div>

                        <!--TEXTO SERVICES -->
                        <div id="services" class="tab-pane">
                            <p>Los <span id="tag-azul">Services</span> son los encargados de comunicarse con el servidor para enviar y obtener información que después será tratada por los <span id="tag-oscuro">controllers</span> para mostrarla en las vistas.</p>
                            <p id="mg-p">Esta parte es más compleja de explicar con un ejemplo, por el momento nos basta con saber que los services se pueden dividir en tres categorías: services, factories y providers.</p>
                            <p id="mg-p">Uno de los services incluidos en el framework es <span id="tag-oscuro">$resource</span>, el cual nos permite encapsular la interacción con <span id="tag-oscuro">servicios RESTful</span> sin tener que tratar directamente con las llamadas http.</p>
                            <p id="mg-p">Otros services interesantes que incluye <span id="tag-oscuro">AngularJS</span> son <span id="tag-azul">$q</span> y las llamadas <span id="tag-oscuro">promises</span>. Mediante este mecanismo podemos realizar acciones asíncronas y devolver valores que puede que aún no hayan sido resueltos. Cuando la acción ha finalizado el valor devuelto, llamado <span id="tag-oscuro">promise</span>, se resuelve en función del resultado de la misma, mientras tanto la ejecución del programa sigue su curso.</p>
                        </div>

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
                        <a href="https://twitter.com/01Comandos/" target="_blank">@01Comandos</a>
                    </div>

                    <div class="comandos" id="avatar">
                        <figure>
                            <img src="img/ranyela-avatar.jpg" alt="">
                        </figure>
                        <span id="nombre-prof">Ranyela Gómez</span>
                        <a href="https://twitter.com/R_GL/" target="_blank">@R_GL</a>
                    </div>

                    <div class="comandos" id="avatar">
                        <figure>
                            <img src="img/monica-avatar.jpg" alt="">
                        </figure>
                        <span id="nombre-prof">Mónica Lares</span>
                        <a href="https://twitter.com/monicalares07/" target="_blank">@monicalares07</a>
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