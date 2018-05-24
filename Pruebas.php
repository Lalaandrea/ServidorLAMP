<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>
<head>
<title>Suscripción boletín</title> 
<style type="text/css">
h1 { text-align: center; }
td { padding: 0.2em 2em ; }
</style>

</head>
<body>
<h1>Suscripción electronica a nuestro boletín.</h1>

<?php 
$Hola= "1 1 1 1 1 1 1 1 0 0 0 0 0 0 0 0 1 0 0 0 0 0 0 "."0";
$salida = shell_exec('./a.out '.$Hola);
echo "<pre>$salida</pre>";
?>
</body>
</html>