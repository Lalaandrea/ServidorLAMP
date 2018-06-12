<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1"/>
    <title>Analizar una trama</title>
    <!-- CSS  -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link href="css/materialize.css" type="text/css" rel="stylesheet" media="screen,projection"/>
    <link href="css/style.css" type="text/css" rel="stylesheet" media="screen,projection"/>
    <script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
    <script src="js/materialize.js"></script>
    <script src="js/init.js"></script>
    <script src="Javascript.js"></script> 
    <meta name = "viewport" content = "width = device-width, initial-scale = 1">
    <link rel = "stylesheet"
      href = "https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel = "stylesheet"
      href = "https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.3/css/materialize.min.css">
    <script type = "text/javascript"
      src = "https://code.jquery.com/jquery-2.1.1.min.js"></script>           
    <script src = "https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.3/js/materialize.min.js"></script> 
    <script>
      $(document).ready(function() {
         $('select').material_select();
      });
      $(document).ready(function(){
      $('.parallax').parallax();
      
      });
    </script>
  </head>
  <body >
    <nav class=" teal">
      <div class = "container nav-wrapper">
        <div class = "col s12">
          <a href = "index.html" class = "breadcrumb"> Home</a>
          <a href = "Trama.php" class = "breadcrumb">Enviar Trama</a>
          <a href = "Analizar.php" class = "breadcrumb">Analizar</a>
        </div>
      </div>
    </nav>
    <div id="index-banner" class="parallax-container">
      <div class="section no-pad-bot">
        <div class="container">
          <br><br>
          <h1 class="header center teal-text text-lighten-1">Analizar una Trama</h1>
          <div class="row center">
            <h5 class="header col s12 light">En esta sección podrás analizar una trama creada anteriormente por otro usuario. Copia y Pega la Trama que quieras visualizar.</h5>
          </div>
        </div>
      </div>
      <div class="parallax"><img src="background1.jpg" alt="Unsplashed background img 1"></div>
    </div>

    <div class="container">
      
      
        
<!--################################### Formulario ################################################################-->
			
          <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="post">
            
            
            <!--################################### Lado izquierdo ################################################################-->
            
            <!--################################### Mensaje ################################################################-->
            <div class="row">
            	 <div class="input-field ">
          		<input id="input_text" placeholder="Copia Trama!" name="Mensaje" type="text" class="validate" maxlength="500" length="500">
          		<label for="input_text">Trama</label>
        	</div>
       		 </div>
            	
            <div class="row">
          	<button class="btn-large waves-effect waves-light" type="submit" name="action">Analizar
            <i class="material-icons right">send</i>
            </button>
          </div>

          </form>
           <div class="container">
    <div class="section">

      <!--   Icon Section   -->
        <h2 class="header col s12 teal-text light">Medio</h2>
         <?php
            echo '<div class="col s12"><p>';
            
            echo "<table style='border: solid 1px black;'>";
            echo "<tr><th>Tramas Creadas</th></tr>";
            
            class TableRows extends RecursiveIteratorIterator {
                function __construct($it) {
                    parent::__construct($it, self::LEAVES_ONLY);
                }
            
                function current() {
                    return "<td style='width:150px;border:1px solid black;'>" . parent::current(). "</td>";
                }
            
                function beginChildren() {
                    echo "<tr>";
                }
            
                function endChildren() {
                    echo "</tr>" . "\n";
                }
            }
            
            $servername = "localhost";
            $username = "lalaandrea10";
            $password = "root";
            $dbname = "Redes";

            
            
            
            try {
                $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
                $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                $stmt = $conn->prepare("SELECT Trama FROM Tramas");
                $stmt->execute();
            
                // set the resulting array to associative
                $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
                foreach(new TableRows(new RecursiveArrayIterator($stmt->fetchAll())) as $k=>$v) {
                    echo $v;
                }
            }
            catch(PDOException $e) {
                echo "Error: " . $e->getMessage();
            }
            $conn = null;
            echo "</table>";
            echo "<p>";

            header("Content-Type: text/html; charset=utf-8");

			
            echo "</br>";
            
            $MensajeBinario =$_POST['Mensaje'];
            

           
				$salida = shell_exec('./a.out '.$MensajeBinario);
				echo $salida;
	            


            

           
            ?> 

      </div>

    </div>
          
        </div>
      
    </div>
</div>
    <div class="parallax-container">
      <div class="parallax"><img src="background1.jpg"></div>
      <div class="container">
        <div class = "row ">
          <div class="col s12">
            <p></p>
          </div>
         
          </p>
        </div>
        <div class="col s12">
          <p>
          </p>
        </div>
        <div class="col s12">
          <p></p>
        </div>
        <div class="col s12">
          <p></p>
        </div>
        <div class="col s12">
          <p></p>
        </div>
      </div>
    </div>
    </div>
    
  </div>
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
  </body>
</html>
