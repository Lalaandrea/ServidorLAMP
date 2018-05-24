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
            <h5 class="header col s12 light">En esta sección podrás ver la representacion real de la trama</h5>
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
                <label class="teal-text">Usuario</label>
                <!--################################### Usuario ################################################################-->
                <select name="Usuario" class="teal-text">
                  <option value = "000001">1</option>
                  <option value = "000010">2</option>
                  <option value = "000011">3</option>
                  <option value = "000100">4</option>
                  <option value = "000101">5</option>
                  <option value = "000110">6</option>
                  <option value = "000111">7</option>
                  <option value = "001000">8</option>
                  <option value = "001001">9</option>
                  <option value = "001010">10</option>
                  <option value = "001011">11</option>
                  <option value = "001100">12</option>
                  <option value = "001101">13</option>
                  <option value = "001110">14</option>
                  <option value = "001111">15</option>
                  <option value = "010000">16</option>
                  <option value = "010001">17</option>
                  <option value = "010010">18</option>
                  <option value = "010011">19</option>
                  <option value = "010100">20</option>
                  <option value = "010101">21</option>
                  <option value = "010110">22</option>
                  <option value = "010111">23</option>
                  <option value = "011000">24</option>
                  <option value = "011001">25</option>
                </select>
              </div>
              <!--################################### Grupo ################################################################-->
              <div  class = "row ">
                <label class="teal-text">Grupo</label>
                <select name="Grupo" class="teal-text">
                  <option value = "00">2CM8</option>
                  <option value = "01">3CM5</option>
                  <option value = "10">4CV7</option>
                </select>
              </div>
              <!--################################### Idioma ################################################################-->
              <div  class = "row ">
                <label class="teal-text">Idioma</label>
                <select name="Idioma" class="teal-text">
                  <option value = "11">Español</option>
                  <option value = "10">Inglés</option>
                  <option value = "01">Alemán</option>
                  <option value = "00">Francés</option>
                </select>
              </div>
              <!--################################### Control de Error ############################################################-->
              <div class = "row ">
                <label class="teal-text">Control de error</label>
                <select name="ControlError" class="teal-text">
                  <option value = "000">Bit de Paridad par</option>
                  <option value = "001">Bit de paridad impar</option>
                  <option value = "010">CRC-8</option>
                  <option value = "10">Checksum</option>
                </select>
              </div>

              <div  class = "col s12 m6 l3"></div>
            </div>
            <!--################################### Black space ################################################################-->

            <div class = "col s12 m6 l3"></div>
            <!--################################### Lado derecho ################################################################-->

            <div class = "col s12 m6 l3" >
              <div class = "row">
                <!--################################### Enrutamiento ##############################################################-->
                <label class="teal-text">Enrutamiento</label>
                <select name="Enrutamiento" class="teal-text">
                  <option value = "0">Estatico</option>
                  <option value = "10">Dijstra</option>
                  <option value = "11">Bellmau Ford</option>
                </select>
              </div>
              <!--################################### Conexion ################################################################-->
              <div class = "row">
                <label class="teal-text">Conexión</label>
                <select name="Conexion" class="teal-text">
                  <optgroup label = "Alámbrica">
                    <option value = "100">Coaxial</option>
                    <option value = "101">Par Trenzado</option>
                    <option value = "110">Fibra Optica</option>
                    <option value = "111">Telefónica</option>
                  </optgroup>
                  <optgroup label = "Inalámbrica">
                    <option value = "011">Bluetooth</option>
                    <option value = "010">Infrarrojo</option>
                    <option value = "001">Wifi</option>
                  </optgroup>
                </select>
              </div>
              <!--################################### Formulario ################################################################-->
              <div class = "row">
                <label class="teal-text">Control de flujo</label>
                <select name="ControlFlujo" class="teal-text">
                  <optgroup label = "Parar y Esperar">
                    <option value = "0">Parar y Esperar</option>
                  </optgroup>
                  <optgroup label = "Ventana Deslizante">
                    <option value = "10">Retroceder N</option>
                    <option value = "11">Rechazo Selectivo</option>
                  </optgroup>
                </select>
              </div>

              
            </div>
            
         

          <div class = "row col s12 m6 l3" >  
            <div class = "row">

                <label class="teal-text">Codigo de Linea</label>
               
              <p><label><input name="Codigo8" value="1" type="checkbox" checked="checked" />
              <span>Return Zero</span></label></p>
              <p><label><input name="Codigo7" value="1" type="checkbox" />
              <span>No Return Zero</span></label></p>
              <p><label><input name="Codigo6" value="1" type="checkbox" />
              <span>Unipolar</span></label></p>
              <p><label><input name="Codigo5" value="1" type="checkbox" />
              <span>Polar</span></label></p>
              <p><label><input name="Codigo4" value="1" type="checkbox" />
              <span>AMI</span></label></p>
              <p><label><input name="Codigo3" value="1" type="checkbox" />
              <span>Pseudoternario</span></label></p>
              <p><label><input name="Codigo2" value="1" type="checkbox" />
              <span>Manchester</span></label></p>
              <p><label><input name="Codigo1" value="1" type="checkbox" />
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
     <div class="container">
    <div class="section">

      <!--   Icon Section   -->
        <h2 class="header col s12 teal-text light">Medio</h2>
         <?php
            echo '<div class="col s12"><p>';
            
            echo "<table style='border: solid 1px black;'>";
            echo "<tr><th>Nomm</th><th>Edad</th></tr>";
            
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
            $dbname = "Parejas";
            $CodigodeLinea="";

            
            
            
            try {
                $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
                $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                $stmt = $conn->prepare("SELECT * FROM Hombre");
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
           /* foreach ($_POST as $key => $value) {
              echo "Post '$key' has '$value'</br>";
              # code...
            }*/
            echo "</br>";
            for ($i=1; $i <9 ; $i++) { 
              if($_POST['Codigo'.$i]==null){
              $CodigodeLinea=$CodigodeLinea."0";
              
              }
              else{
                
                $CodigodeLinea=$CodigodeLinea."1";

              }
              # code...
            }
            

            
            echo "</br>"."Usuario: ". $_POST['Usuario']."<br/>";
            echo "Grupo: ". $_POST['Grupo']. "<br/>";
            echo "Idioma: ". $_POST['Idioma']. "<br/>";
            echo "ControlError: ". $_POST['ControlError']. "<br/>";
            echo "ControlFlujo: ". $_POST['ControlFlujo']. "<br/>";
            echo "Enrutamiento: ". $_POST['Enrutamiento']. "<br/>";
            echo "Conexion: ". $_POST['Conexion']. "<br/>";
            echo "Codigo de linea: ".$CodigodeLinea;
            
            echo "<br/></p>";
            
            
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
              <li><a class="white-text" href="Trama.html">Envia Trama</a></li>
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
