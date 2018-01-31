<?php
//Librerias Adodb
include('../lib/adodb/adodb.inc.php');
include('../config/conmysql.php');

//Funcion para conectarse a la BDD
function omnisoftConnectDB() {
global $DBConnection;
$dblink = NewADOConnection($DBConnection);
return $dblink;
}

if(isset($_GET['auxevi']))
    $auxserial_caev=$_GET['auxevi'];
    
if(isset($_GET['auxcod']))
    $auxcodusr=$_GET['auxcod'];

?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>
<head>
  <style> 
  img, span{
    vertical-align:middle;
}
  </style>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
 <link rel="stylesheet" type="text/css" href="../css/test.css">
<title>KATZ</title>
</head>
<body>
 <div id="colorstrip">
 <h1>INDICE DE KATZ</h1>
 </div>

<form action='grafico_Katz.php' method='POST'>
<fieldset>
Valore cada una de las actividades por anamnesis directa del paciente o, si su estado mental no lo
permite, a través de un familiar o cuidador, considerando su capacidad en los últimos 7 días.

<p>
  <label><b>BAÑARSE</b> (Con esponja, en bañera o ducha)</label></p>

<select name='kbanarse' id='kbanarse'>
    <option value="1">No recibe asistencia (entra y sale de la bañera por si mismo si la bañera es el medio de limpieza
habitual.</option>
    <option value="1">Recibe asistencia al lavar únicamente una parte del cuerpo (espalda o una pierna).</option>
    <option value="0">Recibe asistencia al lavar más de una parte del cuerpo (o no se lava).</option>
  </select>

<p>
  <label><b>VESTIRSE</b> (Saca la ropa de los armarios y los cajones - incluyendo la ropa interior, la ropa
exterior y el manejo de botones, incluyendo bragueros, si los lleva)</label></p>

<select name='kvestirse' id='kvestirse'>
    <option value="1">Saca la ropa y se viste completamente sin asistencia</option>
    <option value="1">Saca la ropa Y se viste sin asistencia excepto al anudarse los zapatos.</option>
    <option value="0">Recibe asistencia al sacar la ropa o al vestirse, o queda parcial o completamente desvestido</option>
  </select>

<p><label><b>IR AL SERVICIO</b> (Ir al servicio para eliminar orina y heces; lavarse a si mismo tras la eliminación
y arreglerse la ropa)</label></p>

 <select name='kiralservicio' id='kiralservicio'>
    <option value="1">Va al servicio, se lava, se arregla la ropa sin asistencia (puede usar un objeto de apoyo como un bastón
o una silla de ruedas y puede manejar la cuña o la silla retrete, vaciandolas por la mañana).</option>
    <option value="1">Recibe asistencia para ir al servicio o a lavarse o arreglarse la ropa tras la eliminación o al usar
la cuña o la silla retrete</option>
    <option value="0">No va a la habitación denominada "servicio" para el proceso de eliminación</option>
  </select>

<p><label><b>DESPLAZARSE</b></label></p>

<select name='kdesplazarse' id='kdesplazarse'>
    <option value="1">Se acuesta y se levanta de la cama así como de la silla sin ayuda (puede utiliza un objeto de
apoyo como un bastón.</option>
    <option value="1">Se acuesta y se levanta de la cama o la silla con asistencia.</option>
    <option value="0">No se levanta de la cama.</option>
  </select>

<p>
<label><b>CONTINENCIA</b></label></p>

<select name='kcontinencia' id='kcontinencia'>
    <option value="1">Controla la micción y la defecación por sí mismo.</option>
    <option value="0">Sufre accidentes "ocasionalmente".</option>
    <option value="0">La supervisión le ayuda a mantener el control vesical y anal: usa una sonda o es incontinente.</option>
  </select>

<p>
<label><b>ALIMENTARSE</b></label></p>

<select name='kalimentarse' id='kalimentarse'>
 <option value="1">Se alimenta sin asistencia.</option>
  <option value="0">Se alimenta solo excepto al requerir asistencia para cortar la carne o untar el pan.</option>
  <option value="0">Recibe asistencia al alimentarse o es alimentado parcial o completamente mediante sondas o
líquidos endovenosos.</option>
  </select>



</br></br>
 <button type="submit" class="wideButton" id='grabar' name='grabar'>
 <img src="../img/guardar.png" alt="Save icon"/> <strong>GRABAR</strong> 
 </button>
 <input name='codusr' id='codusr' type='hidden' value='<?php echo $auxcodusr?>'>
</fieldset>
</form>
</body>
</html>



