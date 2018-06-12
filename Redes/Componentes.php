<!DOCTYPE html>
<html lang="en">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
  <meta name="viewport" content="width=device-width, initial-scale=1"/>

  <title>Componentes</title>

  <!-- CSS  -->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link href="css/materialize.css" type="text/css" rel="stylesheet" media="screen,projection"/>
  <link href="css/style.css" type="text/css" rel="stylesheet" media="screen,projection"/>
     <script src="Javascript.js"></script> 
</head>

<body>
    <!--##############################      NAVEGADOR    ######################################################-->
   <nav class=" teal">
         <div class = "container nav-wrapper">
            <div class = "col s12">
               <a href = "index.html" class = "breadcrumb">Home</a>
               <a href = "Componentes.php" class = "breadcrumb">Componentes</a>
            </div>
         </div>
      </nav>
    <!--##############################      BANER    ######################################################-->
  <div id="index-banner" class="parallax-container">
    <div class="section no-pad-bot">
      <div class="container">
        <br><br>
        <h1 class="header center teal-text text-lighten-2">Componentes del Protocolo</h1>
        <div class="row center">
          <h5 class="header col s12 light">En esta página se muestran los bloques que constituyen el protocolo de comunicación</h5>
        </div>
        <br><br>

      </div>
    </div>
    <div class="parallax"><img src="background1.jpg" alt="Unsplashed background img 1"></div>
  </div>

    <!--##############################      1ER ESPACIO  ######################################################-->
  <div class="container">
    <div class="section">

      <!--   Icon Section   -->
        <h2 class="header col s12 teal-text light">Usuario y Grupo</h2>
        <p class="left-align light">
		En este campo se detecta al emisor y receptor del mensaje, es decir, para entablar una comunicación con alguien, es necesario saber con quién se realizará.
		Para que quede más claro, tomemos el siguiente ejemplo con respecto a este protocolo: Gustavo del grupo 2CM8 le mandará un "Hola" a Josue del grupo 3CV5. 
		Por tanto, se sabe que Gustavo es el que envía el mensaje y Josue es quién lo reciba, además de qué ambos son de diferentes grupos.
		</p>

      </div>

    </div>
  </div>

    <!--##############################      PARALLAX     ######################################################-->
  <div class="parallax-container valign-wrapper">
    <div class="section no-pad-bot">
      <div class="container">
      	<h2 class="header col s12 teal-text light">Idiomas</h2>
        <p class="left-align light">
		Este campo se dedica a que la comunicación sea comprensible, entendible y clara para quienes vayan a intervenir, es decir, válida que el mensaje siga 
		las normas gramaticales del idioma o manera particular de expresarse, y así, poder relacionarse correctamente. Tales idiomas como: Español, Inglés, 
		Francés, Aléman, entre otros.		
		</p>
      </div>
    </div>
    <div class="parallax"><img src="background2.jpg" alt="Unsplashed background img 2"></div>
  </div>
<!--##############################      ESPACIO3     ######################################################-->
  <div class="container">
    <div class="section">

      <!--   Icon Section   -->
        <h2 class="header col s12 teal-text light">Medio</h2>
        <p class="left-align light">Cuando dos o más entidades se están comunicando, se toman varias cosas en cuenta, como lo es: el idioma,
		a quien se dirije y por supuesto, algo muy importante: el medio. Este medio, es el canal que permite transmitir y hacer llegar a su destino final
		los mensajes que se desean intercambiar; ya sea por conexión alámbrica o inalámbrica.  
        </p>

      </div>

    </div>
  </div>

    <!--##############################      PARALLAX   ######################################################-->
  <div class="parallax-container valign-wrapper">
    <div class="section no-pad-bot">
      <div class="container">
        <h2 class="header col s12 teal-text light">Enrutamiento</h2>
        <p class="left-align light">
		 En el momento en que se transmite la información y antes de que llegue a su destino final, se debe pasar por un proceso de búsqueda, en el cúal
		 se trata de encontrar la mejor ruta, ósea la más corta, entre la(s) red(es). Esto con la finalidad de que esta información llegue más rápido 
		 y sin alguna alteración. 
		</p>

      </div>
    </div>
    <div class="parallax"><img src="background3.jpg" alt="Unsplashed background img 3"></div>
  </div>

 <!--############################## BANNER ######################################################-->

    <!--##############################      1ER ESPACIO  ######################################################-->
  <div class="container">
    <div class="section">

      <!--   Icon Section   -->
        <h2 class="header col s12 teal-text light">Código de línea</h2>
        <p class="left-align light">
		Este campo hace referencia a la manera en que se califican los bits en el medio de transmisión. En otras palabras, es la señal que se formará 
		al transmitir los bits "1's y 0's"; Existen diferentes características, por lo cual, la clasificación depende del voltaje que se emplea para
		cada tipo y será distinto, según el caso como lo es: Unipolar, Bipolar, Polar, Manchester, entre otras. 
		</p>

      </div>

    </div>
  </div>

    <!--##############################      PARALLAX     ######################################################-->
  <div class="parallax-container valign-wrapper">
    <div class="section no-pad-bot">
      <div class="container">
      	<h2 class="header col s12 teal-text light">Control de Flujo</h2>
        <p class="left-align light">
		Este control de flujo se encarga de limitar la cantidad o tasa de datos que es enviada por una entidad transmisora. Esto es, al trasnsmitirse los datos 
		es necesario de un mediador o controlador del procesamiento para frenar y asi evitar una saturación de datos.  
    </p>       
      </div>
    </div>
    <div class="parallax"><img src="background2.jpg" alt="Unsplashed background img 2"></div>
  </div>
<!--##############################      ESPACIO3     ######################################################-->
  <div class="container">
    <div class="section">

      <!--   Icon Section   -->
        <h2 class="header col s12 teal-text light">Control de Error</h2>
        <p class="left-align light">
		En los protocolos, el control de error es necesario para la prevención frente a pérdidas o daños en los datos y la información de control. Funciona 
		de tal manera que el emisor envia un acuse de recibo y el receptor debe confirmarlo. Es de suma importancia, puesto que los datos que se transmiten deben
		ser los correctos, asi que se hará la detección y corrección de errores en el envío de tramas, entre sus entidades. 
		</p>

      </div>

    </div>
  </div>

   
    <!--##############################      NAVEGADOR    ######################################################-->
 <footer class="page-footer teal">
    <div class="container">
      <div class="row">
        <div class="col l6 s12">
          <h5 class="white-text">Mi Trama</h5>
          <p class="grey-text text-lighten-4">Página dedicada a trama realizada como proyecto en la Escuela Superior de Cómputo del Instituto Politécnico Nacional.</p>


        </div>
        <div class="col l3 s12">
          <h5 class="white-text">Minimapa</h5>
          <ul>
            <li><a class="white-text" href="index.html">Home</a></li>
            <li><a class="white-text" href="Trama.php">Envia Trama</a></li>
            <li><a class="white-text" href="Analizar.php">Analizar Trama</a></li>
            <li><a class="white-text" href="Componentes.php">Conoce más</a></li>
            
          </ul>
        </div>
        <div class="col l3 s12">
          <h5 class="white-text">Sitios de Interes</h5>
          <ul>
            <li><a class="white-text" href="http://www.escom.ipn.mx">Página de Escom</a></li>
            <li><a class="white-text" href="http://www.comunidad.escom.ipn.mx/ncortez">Nidia Cortez</a></li>
            
          </ul>
        </div>
      </div>
    </div>
     <div class = "footer-copyright">
            <div class = "container">
               © 2018 Redes de Computadoras ESCOM
            </div>
         </div>    
  </footer>



  <!--  Scripts-->
  <script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
  <script src="js/materialize.js"></script>
  <script src="js/init.js"></script>

  </body>

</html>
