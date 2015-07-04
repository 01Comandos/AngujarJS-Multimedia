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
    <?php include 'inc/header2.php'; ?>
    
    <!-- MENU DE DOCUMENTACION -->
    <section class="menu">
        <nav>
            <!--capitulo 1-->
            <ul class="capitulo1">
                <li class="active"><a href="#">Mi primera APP</a></li>
                <li><a href="#">Hola AngujarJS</a></li>
                <li><a href="#">Workflow</a></li>
                <li><a href="#">Filters</a></li>
                <li><a href="#">ng-repeat</a></li>
                <li><a href="#">Directives</a></li>
                <li><a href="#">ng-clic</a></li>
                <li><a href="#">Generalizaciones</a></li>
            </ul>

            <!--capitulo 2-->
            <ul class="capitulo1">
                <li><a href="#">Aprende Directives</a></li>
                <li><a href="#">Directives</a></li>
                <li><a href="#">Built-in</a></li>
                <li><a href="#">InstallApp</a></li>
                <li><a href="#">Generalizaciones</a></li>
            </ul>
        </nav>
    </section>

    <!--CONTENIDOS SEGÚN OPCION DEL MENU-->
    <section class="contenido-empezar">
        <ul class="contenido-documentacion">

            <!--HELLO ANGULARJS-->
            <li id="HelloAngular-contenido">
                <div class="titulo-seccion">
                    <span>Hola AngularJS</span>
                </div>
                <div class="text">
                    <p><span id="tag-azul">AngularJS</span> es un framework web JavaScript que tiene como objetivo hacer que las aplicaciones web sean fáciles y sencillas de mantener y construir.</p>
                    <p id="mg-p">Vamos a empezar por la construcción de una aplicación AngularJS simple. Después de hacer esta aplicación vamos a generalizar algunos pasos que se pueden utilizar para crear aplicaciones más complejas. Al final de todas las unidades serás capaz de utilizar esta secuencia de pasos para poner en marcha tus propios AngularJS en aplicaciones. Explicaremos en cada paso como hacer tu primer <span id="tag-oscuro">"Hola Mundo"</span> <span id="tag-azul">¡Manos a la obra!</span></p>
                    <p id="mg-p">En <span id="tag-oscuro">app.js</span>, escriba el contenido exactamente como se ve a continuación:</p>
                    <figure class="codigo">
                        <img src="img/codigo-7.jpg" alt="">
                    </figure>
                    <p id="mg-p">Abre index.html. Modifica la etiqueta <span id="tag-oscuro">body</span> por como se ve así:</p>
                    <p id="mg-p">Abre <span id="tag-oscuro">Js/Controllers /MainController.js</span> y escribe el contenido tal como se puede ver aquí</p>
                    <figure class="codigo">
                        <img src="img/codigo-8.jpg" alt="">
                    </figure>
                    <p id="mg-p">Anda a index.html y modifica la etiqueta <span id="tag-oscuro">del div "principal"</span></p>
                    <figure class="codigo">
                        <img src="img/codigo-9.jpg" alt="">
                    </figure>
                    <p id="mg-p">En index.html, dentro del <span id="tag-oscuro">div "principal",</span> modifica los <span id="tag-oscuro">h1</span></p>
                    <figure class="codigo">
                        <img src="img/codigo-10.jpg" alt="">
                    </figure>
                    <p id="mg-p">Ahora en <span id="tag-oscuro">app.js</span>, , crea un nuevo módulo llamado <span id="tag-oscuro">Myapp</span> Este módulo contiene los diferentes componentes de una aplicación AngularJS.</p>
                    <p id="mg-p">Luego, en index.html agregamos <span id="tag-oscuro">body ng-app="myApp"</span> el <span id="tag-oscuro">ng-app</span> es una directives. En AngularJS, myApp es un modulo que convive dentro del <body> para que nuestra naciente aplicación tenga interactividad, esto se logra mediante ng-app para definir el alcance.</p>
                    <p id="mg-p">En <span id="tag-azul">MainController.js</span> creamos un nuevo controlador llamado <span id="tag-oscuro">MainController.</span> Este controlador maneja los datos de la aplicación. Aquí podemos utilizar las propiedades <span id="tag-oscuro">{{ title }}</span> para almacenar una cadena y adjuntarlo a <span id="tag-oscuro">$scope</span></p>
                    <p id="mg-p">Luego, en <span id="tag-azul">index.html</span> añadimos <span id="tag-azul">div class="main" ng-controller="MainController"</span> como <span id="tag-oscuro">ng-app, ng-controller</span> es un directive en el que se define el alcance del controlador creado. Esto significa que las propiedades unidas a <span id="tag-oscuro">$scope</span> en MainController estén disponibles para el uso dentro de <span id="tag-azul">div class="main" ng-controller="MainController"</span></p>
                    <p id="mg-p">Dentro de <span id="tag-azul">div class="main" ng-controller="MainController"</span> accedemos a <span id="tag-oscuro">$scope.title usando {{title}}.</span> Esto es una expresion que se utiliza para mostrar los valores en la página.</p>
                    <p id="mg-p">El valor <span id="tag-oscuro">{title}}</span> se presentó cuando vimos la aplicación en el navegador.</p>
                </div>
            </li>

            <!--WORKFLOW-->
            <li id="workflow-contenido">
                <div class="titulo-seccion">
                    <span>WorkFlow</span>
                </div>
                <div class="text">
                    <p>Vamos a añadir más datos al controlador para que los muestre en la vista. Como ejemplo, imaginemos que queremos introducir los siguientes datos:</p>
                    <figure class="codigo">
                        <img src="img/codigo-11.jpg" alt="">
                    </figure>
                    <p id="mg-p">A continuación, dentro de index.html y dentro de <span id="tag-oscuro">p class="title"</span>, debemos pasar los parámetros de la siguiente manera:</p>
                    <figure class="codigo">
                        <img src="img/codigo-12.jpg" alt="">
                    </figure>
                </div>
            </li>

            <!--FILTERS-->
            <li id="filters-contenido">
                <div class="titulo-seccion">
                    <span>Filters</span>
                </div>
                <div class="text">
                    <p>Actualmente el precio del producto se muestra como un número. Sería mejor darle formato de moneda, en lugar de cambiar los datos en el controlador, vamos a usar un <span id="tag-azul">filters</span> en AngularJS para dar formato a los datos</p>
                    <p id="mg-p">En index.html en <span id="tag-oscuro">p class="precio"</span> , agregamos lo siguiente</p>
                    <figure class="codigo">
                        <img src="img/codigo-13.jpg" alt="">
                    </figure>
                    <p id="mg-p">AngularJS viene con una variedad de filtros incorporados, vamos a utilizar dos más: El primero de ellos, en <span id="tag-oscuro">MainController.js</span> dentro de $scrope.product, añade una tercera propiedad denominada pubdate: <span id="tag-azul">Pubdate: new Date (‘2014’, ‘03’, ‘08’)</span></p>
                    <p id="mg-p">Ahora en index.html podrás pasar parámetros y asignarle filtrado de datos indistintos del tipo</p>
                    <figure class="codigo">
                        <img src="img/codigo-14.jpg" alt="">
                    </figure>
                </div>
            </li>

            <!--NG-REPEAT-->
            <li id="ng-repeat-contenido">
                <div class="titulo-seccion">
                    <span>ng-repeat</span>
                </div>
                <div class="text">
                    <p><span id="tag-oscuro">Recuerda:</span><br><span id="tag-azul">a.-</span> Un módulo contiene los diferentes componentes de una aplicación AngularJS
                        <br><span id="tag-azul">b.-</span> Un controlador maneja los datos de la aplicación
                        <br><span id="tag-azul">c.-</span> Una expresión muestra los valores en la página
                        <br><span id="tag-azul">d.-</span> Un filtro formatea el valor de una expresión
                    </p>
                    <p id="mg-p">Vamos a añadir más datos al controlador y los muestra en la vista,  en el controlador, elimine el $ scope.product objeto</p>
                    <p id="mg-p">Debemos adjuntar una nueva propiedad a <span id="tag-oscuro">$scope</span> nombradas productos. Póngalo igual a un conjunto de objetos y escriba el contenido tal y como se puede ver a continuación</p>
                    <figure class="codigo">
                        <img src="img/codigo-16.jpg" alt="">
                    </figure>
                    <p id="mg-p">En el interior del <span id="tag-azul">div class="principal"</span>, reemplácelo con el HTML que puede ver aquí</p>
                    <figure class="codigo">
                        <img src="img/codigo-17.jpg" alt="">
                    </figure>
                    <p id="mg-p">¿Qué pasa cuando tienes varios productos con una imagen igual? Normalmente incluiríamos una imagen así <span id="tag-azul">img src="img/el-libro-de-trees.jpg"</span></p>
                    <p id="mg-p">En AngularJS, utilizamos la propiedad <span id="tag-oscuro">ng-src</span> para establecer el img.</p>
                    <figure class="codigo">
                        <img src="img/codigo-18.jpg" alt="">
                    </figure>
                </div>
            </li>

            <!--DIRECTIVES-->
            <li id="directives1-contenido">
                <div class="titulo-seccion">
                    <span>Directives</span>
                </div>
                <div class="text">
                    <p>¿Qué podemos generalizar acerca de las directives? Estas unen el comportamiento de los elementos HTML. Cuando la aplicación se ejecuta, AngularJS camina a través de cada elemento HTML en busca de directives. Cuando encuentra uno, AngularJS provoca el comportamiento (como la fijación de un ámbito o bucle a través de una matriz)</p>
                    <p id="mg-p">Por ejemplo, listar varios productos de manera dinámica con Directives sería de la siguiente manera</p>
                    <figure class="codigo">
                        <img src="img/codigo-19.jpg" alt="">
                    </figure>
                </div>
            </li>

            <!--NG-CLIC-->
            <li id="ng-clic-contenido">
                <div class="titulo-seccion">
                    <span>ng-clic</span>
                </div>
                <div class="text">
                    <p>Por medio de esta propiedad empezaremos a dar interacciones con el usuario, por ejemplo darle “me gusta” a algo. Creamos el siguiente ejemplo para un rating de “me gusta”.</p>
                    <figure class="codigo">
                        <img src="img/codigo-20.jpg" alt="">
                    </figure>
                    <p id="mg-p">De vuelta al controlador <span id="tag-oscuro">$ scope.products,</span> se crea un llamado PlusOne y se activa de la siguiente manera. Por defecto iniciaremos el contador en 0</p>
                    <figure class="codigo">
                        <img src="img/codigo-21.jpg" alt="">
                    </figure>
                    <p id="mg-p">En el HTML, se modifica p class="me gusta" para buscar de la siguiente manera</p>
                    <figure class="codigo">
                        <img src="img/codigo-22.jpg" alt="">
                    </figure>
                    <p id="mg-p">Para terminar con las propiedades de aumentar el número de “me gusta”… pero ¿cómo funciona?</p>
                    <p id="mg-p">El <span id="tag-oscuro">ng-clic</span> es una directiva. Cuando <span id="tag-azul">p class="le gusta"</span> se hace clic, ng-clic le dice a AngularJS para que ejecute <span id="tag-azul">PlusOne()</span> que es la función en el controlador</p>
                    <p id="mg-p">El <span id="tag-azul">PlusOne()</span> es una función donde obtenemos el índice del producto que se hizo clic y, a continuación, agrega un punto adicional al producto que el usuario le gusta.</p>
                </div>
            </li>

            <!--GENERALIZACIONES 1 -->
            <li id="generalizaciones1-contenido">
                <div class="titulo-seccion">
                    <span>Generalizaciones</span>
                </div>
                <div class="text">
                    <p>Finalmente haz logrado que tu proyecto de productos se visualicen correctamente con la funcionalidad de “me gusta” si has seguido nuestros pasos. ¿Qué podemos generalizar hasta ahora?</p>
                    <p id="mg-p">El usuario visita la aplicación AngularJS. La vista en la que está le muestra todo el contenido que el quiere visualizar y esto ocurre por medio de  <span id="tag-oscuro">expresiones, filtros y directivas.</span> Directivas que unen nuevos elementos HTML con el comportamiento.</p>
                    <p id="mg-p">Nuestro usuario hace clic en un elemento en la vista, si el elemento tiene una directiva, AngularJS ejecuta la función. Esta función está en el controlador que actualiza el estado de los datos.</p>
                    <p id="mg-p">La vista cambia automáticamente y muestra los datos actualizados. La página no necesita recargar para visualizar el contenido actualizado</p>
                </div>
            </li>

            <!--CONTENIDO CAPITULO II
                DIRECTIVES II-->
            <li id="directives2-contenido">
                <div class="titulo-seccion">
                    <span>Más Sobre Directives</span>
                </div>
                <div class="text">
                    <p>Cuando trabajamos en una aplicación que tiene mucho contenido repetitivo como por ejemplo una tienda de aplicaciones móviles, está propenso a los errores. Para estos casos trabajaremos con tres objetos <span id="tag-oscuro">$ scope.move, $ scope.shutterbug y $ scrope.gameboard.</span></p>
                    <p id="mg-p">Crea el siguiente archivo en esta ruta <span id="tag-azul">js/directive/appinfo.js</span> y escribe el siguiente código</p>
                    <figure class="codigo">
                        <img src="img/codigo-23.jpg" alt="">
                    </figure>
                    <p id="mg-p">Una vez finalizado este paso, introduce el script de este archivo en el siguiente código</p>
                    <figure class="codigo">
                        <img src="img/codigo-24.jpg" alt="">
                    </figure>
                    <p id="mg-p">Ahora, sustituimos el contenido en <span id="tag-azul">div class="tarjeta"</span> por una etiqueta personalizada que nos dará el dinamismo que buscamos</p>
                    <figure class="codigo">
                        <img src="img/codigo-25.jpg" alt="">
                    </figure>
                    <p id="mg-p">La etiqueta <span id="tag-azul">app-info</span> lo usamos para enseñarle al navegador que muestre los detalles de cada aplicación, en nuestro caso nos devuelve un objeto con tres opciones:</p>
                    <p id="mg-p">1. En el alcance especificamos que pasaremos la información en esta directiva a través de un atributo denominado info. Los <span id="tag-azul">=</span> le dice a la directiva que debe buscar un atributo denominado info en el <span id="tag-azul">app-info</span>, como esto:</p>
                    <figure class="codigo">
                        <img src="img/codigo-26.jpg" alt="">
                    </figure>
                    <p id="mg-p">Luego, esta información se plasmará en la plantilla templateURL</p>
                    <p id="mg-p">En <span id="tag-osucro">templateURL</span> especifica el código HTML para utilizar con el fin de mostrar los datos en <span id="tag-azul">scope.info</span> . Aquí se utiliza el HTML en <span id="tag-azul">js/directives/appInfo.html.</span></p>
                    <p id="mg-p">En cuanto a la ruta <span id="tag-azul">js/directives/appInfo.html</span> , definimos el código HTML para mostrar los detalles acerca de una aplicación, como su título y precio. Utilizamos las expresiones y filtros para mostrar los datos. Aquí debemos mostrar especial interés en el controlador <span id="tag-azul">$ scope.shutterbug</span> que será el artífice de todo.</p>
                    <p id="mg-p">¿Por qué son útiles las directives? Se basan en dos razones:</p>
                    <p id="mg-p"><span id="tag-azul">a.- Legibilidad:</span> Las directives permiten escribir HTML dinámico y expresivo. Se puede entender el comportamiento de la aplicación con solo leer el código HTML</p>
                    <p id="mg-p"><span id="tag-azul">b.- Reutilización:</span> Las directives permiten crear unidades autónomas de funcionalidad. Podríamos fácilmente conectar en esta directiva a otra aplicación AngularJS y evitar escribir un montón de HTML repetitivo.</p>
                </div>
            </li>

            <!--BUILT-IN-->
            <li id="Built-in-contenido">
                <div class="titulo-seccion">
                    <span>Built-in and Custom Directives</span>
                </div>
                <div class="text">
                    <p>Sabemos que AngularJS viene con algunas directives integradas como <span id="tag-oscuro">ng-repeat y ng-clic</span>  también hemos visto que AngularJS hace posible la creación de sus propias directivas personalizadas como <span id="tag-azul">app-info</span>. Pero podemos utilizar directives incorporadas junto con directives personalizadas para crear aplicaciones más legibles</p>
                    <p id="mg-p">Como referencia, en este ejemplo utilizaremos <span id="tag-oscuro">ng-repeat</span></p>
                    <figure class="codigo">
                        <img src="img/codigo-27.jpg" alt="">
                    </figure>
                    <p id="mg-p">Agregamos en el controlador estos datos para probar el funcionamiento creando una propiedad <span id="tag-azul">$ scope.apps </span></p>
                    <figure class="codigo">
                        <img src="img/codigo-28.jpg" alt="">
                    </figure>
                </div>
            </li>

            <!--INSTALLAPP -->
            <li id="installApp-contenido">
                <div class="titulo-seccion">
                    <span>InstallApp</span>
                </div>
                <div class="text">
                    <p>Los Directives son una característica central de AngularJS, hasta ahora hemos utilizado directives personalizados para simplemente mostrar contenido estático pero podemos hacer mucho más que esto. Es posible crear interactividad en los directives.</p>
                    <p id="mg-p">Por ejemplo, en la ruta <span id="tag-azul">js/directives/installApp.js</span>, creamos una nueva directiva llamada <span id="tag-azul">INSTALLAPP.</span></p>
                    <figure class="codigo">
                        <img src="img/codigo-29.jpg" alt="">
                    </figure>
                    <p id="mg-p">Recuerda que estamos utilizando <span id="tag-azul">app.directive</span> para crear la nueva directiva personalizada y se utiliza el <span id="tag-oscuro">templateUrl</span> como opción para la inicialización de la misma. Los directives contienen las opciones de restringir, alcanzar y templaceUrl.</p>
                    <p id="mg-p">Cualquier nueva propiedad unida a <span id="tag-oscuro">$ scope</span> estará disponible para su uso en la plantilla de directive, <span id="tag-azul">attrs</span> contiene atributos del elemento. Un ejemplo de esta directiva disponible en la plantilla sería el siguiente código:</p>
                    <figure class="codigo">
                        <img src="img/codigo-30.jpg" alt="">
                    </figure>
                    <p id="mg-p">La plantilla utiliza la función ng-clic como directiva. Cuando se hace clic en el botón, ng-clic le dirá a AngularJS que ejecute <span id="tag-azul">download()</span>. La función <span id="tag-azul">download()</span> utiliza el <span id="tag-oscuro">scope.installed</span> como una propiedad que compruebe si se ha instalado la aplicación. Cuando se instala hace tres cosas:</p>
                    <p id="mg-p">1. Alterna la -.btn active <br>2.  Cambia el texto del botón de “desinstalar”. <br>3.  Cambios en scope.installed de true</p>
                </div>
            </li>

            <!--GENERALIZACIONES II-->
            <li id="generalizaciones2-contenido">
                <div class="titulo-seccion">
                    <span>Generalizaciones</span>
                </div>
                <div class="text">
                    <p>Las directivas son una poderosa manera de crear componentes interactivos autónomos. A diferencia de JQuery podemos añadir interactividad como una capa en la parte superior de HTML, AngularJS trata la interactividad como un componente natural de HTML</p>
                    <figure class="codigo">
                        <img src="img/resultado.jpg" alt="">
                    </figure>
                </div>
            </li>
        </ul>
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