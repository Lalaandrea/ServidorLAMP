<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1"/>
    <title>Enviar una trama</title>
    <!-- CSS  -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link href="css/materialize.css" type="text/css" rel="stylesheet" media="screen,projection"/>
    <link href="css/style.css" type="text/css" rel="stylesheet" media="screen,projection"/>
    <script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
    <script src="js/materialize.js"></script>
    <script src="js/init.js"></script>
    <script src="Javascript.js"></script> 
    <title>The Materialize Selects Example</title>
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
          <a href = "index.html" class = "breadcrumb">     Home</a>
          <a href = "Trama.php" class = "breadcrumb">Enviar una trama</a>
        </div>
      </div>
    </nav>
    <div id="index-banner" class="parallax-container">
      <div class="section no-pad-bot">
        <div class="container">
          <br><br>
          <h1 class="header center teal-text text-lighten-1">Enviar Trama</h1>
          <div class="row center">
            <h5 class="header col s12 light">En esta sección podrás crear una Trama. Selecciona los valores, envia y actualiza la página para visualizar tu Trama</h5>
          </div>
        </div>
      </div>
      <div class="parallax"><img src="background1.jpg" alt="Unsplashed background img 1"></div>
    </div>

    <div class="container">
      
      
        <div class = "row ">
          <div class="col s12">
            <p></p>
          </div>
          <div class="col s12">
            <p></p>
          </div>
<!--################################### Formulario ################################################################-->

          <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="post">
            
            
            <!--################################### Lado izquierdo ################################################################-->
            <div class = "col s12 m6 l3">
              <div class = "row ">
                <label class="teal-text">Usuario Emisor</label>
                <!--################################### Usuario ################################################################-->
                <select name="Usuario" class="teal-text">
                  <option value = "0 0 0 0 0 1 ">1</option>
                  <option value = "0 0 0 0 1 0 ">2</option>
                  <option value = "0 0 0 0 1 1 ">3</option>
                  <option value = "0 0 0 1 0 0 ">4</option>
                  <option value = "0 0 0 1 0 1 ">5</option>
                  <option value = "0 0 0 1 1 0 ">6</option>
                  <option value = "0 0 0 1 1 1 ">7</option>
                  <option value = "0 0 1 0 0 0 ">8</option>
                  <option value = "0 0 1 0 0 1 ">9</option>
                  <option value = "0 0 1 0 1 0 ">10</option>
                  <option value = "0 0 1 0 1 1 ">11</option>
                  <option value = "0 0 1 1 0 0 ">12</option>
                  <option value = "0 0 1 1 0 1 ">13</option>
                  <option value = "0 0 1 1 1 0 ">14</option>
                  <option value = "0 0 1 1 1 1 ">15</option>
                  <option value = "0 1 0 0 0 0 ">16</option>
                  <option value = "0 1 0 0 0 1 ">17</option>
                  <option value = "0 1 0 0 1 0 ">18</option>
                  <option value = "0 1 0 0 1 1 ">19</option>
                  <option value = "0 1 0 1 0 0 ">20</option>
                  <option value = "0 1 0 1 0 1 ">21</option>
                  <option value = "0 1 0 1 1 0 ">22</option>
                  <option value = "0 1 0 1 1 1 ">23</option>
                  <option value = "0 1 1 0 0 0 ">24</option>
                  <option value = "0 1 1 0 0 1 ">25</option>
                </select>
              </div>
              <!--################################### Grupo ################################################################-->
              <div  class = "row ">
                <label class="teal-text">Grupo Emisor</label>
                <select name="Grupo" class="teal-text">
                  <option value = "0 0 ">2CM8</option>
                  <option value = "0 1 ">3CM5</option>
                  <option value = "1 0 ">4CV7</option>
                </select>
              </div>
              <!--################################### Idioma ################################################################-->
              <div  class = "row ">
                <label class="teal-text">Idioma</label>
                <select name="Idioma" class="teal-text">
                  <option value = "1 1 ">Español</option>
                  <option value = "1 0 ">Inglés</option>
                  <option value = "0 1 ">Alemán</option>
                  <option value = "0 0 ">Francés</option>
                </select>
              </div>
              <!--################################### Control de Error ############################################################-->
              <div class = "row ">
                <label class="teal-text">Control de error</label>
                <select name="ControlError" class="teal-text">
                  <option value = "0 1 0 0 ">CRC-8</option>
                  <option value = "1 0 0 0 " >Checksum</option>
                  <option value = "0 0 0 ">Bit de Paridad par</option>
                  <option value = "0 0 1 ">Bit de paridad impar</option>
                  
                </select>
              </div>
            </div>
            <!--################################### Receptor ################################################################-->

            <div class = "col s12 m6 l3">
              <div class = "row ">
                <label class="teal-text">Usuario Receptor</label>
                <!--======================= Usuario =======================-->
                <select name="UsuarioR" class="teal-text">
                  <option value = "0 0 0 0 0 1 ">1</option>
                  <option value = "0 0 0 0 1 0 ">2</option>
                  <option value = "0 0 0 0 1 1 ">3</option>
                  <option value = "0 0 0 1 0 0 ">4</option>
                  <option value = "0 0 0 1 0 1 ">5</option>
                  <option value = "0 0 0 1 1 0 ">6</option>
                  <option value = "0 0 0 1 1 1 ">7</option>
                  <option value = "0 0 1 0 0 0 ">8</option>
                  <option value = "0 0 1 0 0 1 ">9</option>
                  <option value = "0 0 1 0 1 0 ">10</option>
                  <option value = "0 0 1 0 1 1 ">11</option>
                  <option value = "0 0 1 1 0 0 ">12</option>
                  <option value = "0 0 1 1 0 1 ">13</option>
                  <option value = "0 0 1 1 1 0 ">14</option>
                  <option value = "0 0 1 1 1 1 ">15</option>
                  <option value = "0 1 0 0 0 0 ">16</option>
                  <option value = "0 1 0 0 0 1 ">17</option>
                  <option value = "0 1 0 0 1 0 ">18</option>
                  <option value = "0 1 0 0 1 1 ">19</option>
                  <option value = "0 1 0 1 0 0 ">20</option>
                  <option value = "0 1 0 1 0 1 ">21</option>
                  <option value = "0 1 0 1 1 0 ">22</option>
                  <option value = "0 1 0 1 1 1 ">23</option>
                  <option value = "0 1 1 0 0 0 ">24</option>
                  <option value = "0 1 1 0 0 1 ">25</option>
                </select>
              </div>
              <!--======================= Grupo =======================-->
              <div  class = "row ">
                <label class="teal-text">Grupo Receptor</label>
                <select name="GrupoR" class="teal-text">
                  <option value = "0 0 ">2CM8</option>
                  <option value = "0 1 ">3CM5</option>
                  <option value = "1 0 ">4CV7</option>
                </select>
              </div>
            <!--################################### Mensaje ################################################################-->
            <div class="row">
               <div class="input-field ">
              <input id="input_text" placeholder="Hola Mundo!" name="Mensaje" type="text" class="validate" maxlength="127" length="127">
              <label for="input_text">Mensaje</label>
          </div>
           </div>
              
            </div>
            <!--################################### Lado derecho ################################################################-->

            <div class = "col s12 m6 l3" >
              <div class = "row">
                <!--################################### Enrutamiento ##############################################################-->
                <label class="teal-text">Enrutamiento</label>
                <select name="Enrutamiento" class="teal-text">
                  <option value = "0 0 ">Estatico</option>
                  <option value = "1 0 ">Dijstra</option>
                  <option value = "1 1 ">Bellmau Ford</option>
                </select>
              </div>
              <!--################################### Conexion ################################################################-->
              <div class = "row">
                <label class="teal-text">Conexión</label>
                <select name="Conexion" class="teal-text">
                  <optgroup label = "Alámbrica">
                    <option value = "1 0 0 0 0 0 0 0 ">Coaxial</option>
                    <option value = "1 0 1 0 0 0 0 0 ">Par Trenzado</option>
                    <option value = "1 1 0 0 0 0 0 0 ">Fibra Optica</option>
                    <option value = "1 1 1 0 0 0 0 0 ">Telefónica</option>
                  </optgroup>
                  <optgroup label = "Inalámbrica">
                    <option value = "0 1 1 0 0 0 0 0 ">Bluetooth</option>
                    <option value = "0 1 0 0 0 0 0 0 ">Infrarrojo</option>
                    <option value = "0 0 1 0 0 0 0 0 ">Wifi</option>
                  </optgroup>
                </select>
              </div>
              <!--################################### Formulario ################################################################-->
              <div class = "row">
                <label class="teal-text">Control de flujo</label>
                <select name="ControlFlujo" class="teal-text">
                  <optgroup label = "Parar y Esperar">
                    <option value = "0 0 ">Parar y Esperar</option>
                  </optgroup>
                  <optgroup label = "Ventana Deslizante">
                    <option value = "1 0 ">Retroceder N</option>
                    <option value = "1 1 ">Rechazo Selectivo</option>
                  </optgroup>
                </select>
              </div>

              
            </div>
            
         

          <div class = "row col s12 m6 l3" >  
            <div class = "row">

                <label class="teal-text">Codigo de Linea</label>
               
              <p><label><input name="Codigo8" value="1 " type="checkbox" checked="checked" />
              <span>Return Zero</span></label></p>
              <p><label><input name="Codigo7" value="1 " type="checkbox" />
              <span>No Return Zero</span></label></p>
              <p><label><input name="Codigo6" value="1 " type="checkbox" />
              <span>Unipolar</span></label></p>
              <p><label><input name="Codigo5" value="1 " type="checkbox" />
              <span>Polar</span></label></p>
              <p><label><input name="Codigo4" value="1 " type="checkbox" />
              <span>AMI</span></label></p>
              <p><label><input name="Codigo3" value="1 " type="checkbox" />
              <span>Pseudoternario</span></label></p>
              <p><label><input name="Codigo2" value="1 " type="checkbox" />
              <span>Manchester</span></label></p>
              <p><label><input name="Codigo1" value="1 " type="checkbox" />
              <span>Manchester Diferencial</span></label></p>

               
              </div>
            <button class="btn-large waves-effect waves-light" type="submit" name="action">Enviar
            <i class="material-icons right">send</i>
            </button>
          </div>

          </form>
          <div class="col s12">
            <p></p>
          </div>
          <div class="col s12">
            <p></p>
          </div>
        </div>
      
    </div>
    <div class="parallax-container">
      <div class="parallax"><img src="background1.jpg"></div>
      <div class="container">
        <div class = "row ">
           <div class="section no-pad-bot">
      <div class="container">
        <br><br>
        <h1 class="header center teal-text text-lighten-2">Analizar una Trama</h1>
        
        <div class="row center">
          <a href="Analizar.php" id="download-button" class="btn-large waves-effect waves-orange teal lighten-1">Analizar Trama</a>
        </div>
        <br><br>

      </div>
    </div>
          
      </div>
    </div>
    </div>
     <div class="container">
    <div class="section">

      <!--   Icon Section   -->
        <h2 class="header col s12 teal-text light">Tramas</h2>
         <?php
            
            echo "<table style='border: solid 1px black;'>";
            echo "<tr><th>Trama</th></tr>";
            
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
            $CodigodeLinea="";

            
            
            
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
                //echo "Error: " . $e->getMessage();
            }
            $conn = null;
            echo "</table>";
            echo "<p>";

            header("Content-Type: text/html; charset=utf-8");
            echo "</br>";

      function textBinASCII($text){
        $bin = array();
          for($i=0; strlen($text)>$i; $i++)
            $bin[] = sprintf("%08d",decbin(ord($text[$i])));

          return implode($bin);
      }

      function ASCIIBinText($bin){
        $text = array();
        $bin = explode(" ", $bin);
        for($i=0; count($bin)>$i; $i++)
          $text[] = chr(bindec($bin[$i]));
          
        return implode($text);
      }
           /* foreach ($_POST as $key => $value) {
              echo "Post '$key' has '$value'</br>";
              # code...
            }*/
            
            for ($i=1; $i <9 ; $i++) { 
              if($_POST['Codigo'.$i]==null){
              $CodigodeLinea=$CodigodeLinea."0 ";
              
              }
              else{
                
                $CodigodeLinea=$CodigodeLinea."1 ";

              }
              # code...
            }

            $Idioma = $_POST['Idioma'];
            $Grupo = $_POST['Grupo'];
            $Usuario = $_POST['Usuario'];
            $Mensaje = $_POST['Mensaje'];
            $GrupoR = $_POST['GrupoR'];
            $UsuarioR = $_POST['UsuarioR'];
            $Enrutamiento = $_POST['Enrutamiento'];
            $ControlError = $_POST['ControlError'];
            $ControlFlujo = $_POST['ControlFlujo'];
            $Conexion = $_POST['Conexion'];




            $MensajeBinario = implode(" ",str_split(textBinASCII($Mensaje)))." ";
            

            $SizeOfMensaje = implode(' ',str_split(sprintf( "%06d", decbin(strlen($Mensaje)/2))))." "; 

            /*echo "</br>";
            echo "Usuario Emisor: ". $Usuario."<br/>";
            echo "Grupo Emisor: ". $Grupo. "<br/>";
            echo "Usuario Receptor: ". $UsuarioR."<br/>";
            echo "Grupo Receptor: ". $GrupoR. "<br/>";
            echo "Idioma: ". $Idioma. "<br/>";
            echo "ControlError: ". $ControlError. "<br/>";
            echo "ControlFlujo: ". $ControlFlujo. "<br/>";
            echo "Enrutamiento: ". $Enrutamiento. "<br/>";
            echo "Conexion: ". $Conexion. "<br/>";
            echo "Codigo de linea: ".$CodigodeLinea."<br/>";
            echo "Mensaje: ".$Mensaje."<br/>";
            echo "Size of Mensaje: ".$SizeOfMensaje."<br/>";
            echo "Mensaje: ".$MensajeBinario."<br/>";*/
            //echo "Size of Mensaje: ".$SizeOfMensaje."<br/>";

            
            
            echo "<br/></p>";
            $Hola= $Idioma.$SizeOfMensaje.$Grupo.$Usuario.$GrupoR.$UsuarioR.$MensajeBinario.$Enrutamiento.$ControlFlujo.$ControlError;

            if ($ControlError=="0 1 0 0 ") {
              //Eres Crc
               $Crc = shell_exec('./Crc '.$Hola);
              //echo "Crc <pre>$Crc</pre>";
              $Hola=$Hola.$Crc.$CodigodeLinea.$Conexion;

            
              //echo "<pre>$Hola</pre>";
        //$salida = shell_exec('./a.out '.$Hola);
        //echo "<pre>$salida</pre>";
              
              # code...
            }
            else if ($ControlError== "0 0 0 " || $ControlError== "0 0 1 ") {
              //Eres Bit de Paridad
               
               //echo "BitParidad </br>".$Hola."0 "."</br>";
              $BitParidad = shell_exec('./BitParidad '.$Hola."0 ");
              //echo "BitParidad <pre>$BitParidad</pre>";
              //echo "BitParidad </br>".$Hola.$BitParidad."</br>";
              //echo "<pre>$Hola</pre>";
              $Hola=$Hola.$BitParidad.$CodigodeLinea.$Conexion;
        //$salida = shell_exec('./a.out '.$Hola);
        //echo "<pre>$salida</pre>";
              
              # code...
            }
            else if($ControlError == "1 0 0 0 "){
              //Eres Checksum
              $Checksum = shell_exec('./Checksum '.$Hola);
              //echo "Checksum <pre>$Checksum</pre>";
              //echo "<pre>$Hola</pre>";
              $Hola=$Hola.$Checksum.$CodigodeLinea.$Conexion;
        //$salida = shell_exec('./a.out '.$Hola);
        //echo "<pre>$salida</pre>";
             
              


            }
    if (strlen($Hola)>20 ) {
      try {
              $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
              // set the PDO error mode to exception
              $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
              $sql = "INSERT INTO Tramas (Trama)
              VALUES ('{$Hola}')";
              // use exec() because no results are returned
              $conn->exec($sql);
              //echo "New record created successfully";
              }
        catch(PDOException $e)
              {
              echo $sql . "<br>" . $e->getMessage();
              }
             
      # code...
    }
            

        $conn = null;
        //header("Refresh:0");
         
            ?> 

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
