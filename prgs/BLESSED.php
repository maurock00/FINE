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
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
  <style> 
  img, span{
    vertical-align:middle;
}
  </style>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>BLESSED</title>
<link rel="stylesheet" type="text/css" href="../css/test.css">
</head>

<body>
  <div id="colorstrip">
    <h1> Escala de demencia de Blessed, Timiison y Roth 
 </h1>
  </div>
  
    <form action='grafico_Blessed.php' method='POST'>
<fieldset>

<p><b>A-CAMBIOS EN LA EJECUCIÓN DE LAS ACTIVIDADES DIARIAS </b></p>

<p>1. Incapacidad para realizar tareas domésticas </p>
<select name='tdomesticas' id='tdomesticas'>
   <option value="0">NINGUNA</option>
   <option value="0.5">PARCIAL</option>
   <option value="1">TOTAL</option> 
</select> 

<p>2. Incapacidad para el uso de pequeñas cantidades de dinero </p>
<select name='udinero' id='udinero'>
   <option value="0">NINGUNA</option>
   <option value="0.5">PARCIAL</option>
   <option value="1">TOTAL</option> 
</select> 


<p>3. Incapacidad para recordar listas cortas de elementos (p. ej. compras, etc.) </p>
<select name='rlistasc' id='rlistasc'>
   <option value="0">NINGUNA</option>
   <option value="0.5">PARCIAL</option>
   <option value="1">TOTAL</option> 
</select> 


<p>4. Incapacidad para orientarse en casa </p>
<select name='ocasa' id='ocasa' >
   <option value="0">NINGUNA</option>
   <option value="0.5">PARCIAL</option>
   <option value="1">TOTAL</option> 
</select> 


<p>5. Incapacidad para orientarse en calles familiares </p>
<select name='ocalles' id='ocalles'>
   <option value="0">NINGUNA</option>
   <option value="0.5">PARCIAL</option>
   <option value="1">TOTAL</option> 
</select> 


<p>6. Incapacidad para valorar el entorno (p.ej. reconocer si está en casa o en ei hospital, discriminar entre parientes, médicos y enfenneras, etc.) </p>
<select name='ventorno' id='ventorno'>
   <option value="0">NINGUNA</option>
   <option value="0.5">PARCIAL</option>
   <option value="1">TOTAL</option> 
</select> 



<p>7. Incapacidad para recordar hechos recientes (p. ej. visitas de parientes o amigos, etc.) </p>
<select name='rhechos' id='rhechos'>
   <option value="0">NINGUNA</option>
   <option value="0.5">PARCIAL</option>
   <option value="1">TOTAL</option> 
</select> 


<p>8. Tendencia a rememorar el pasado </p>
<select name='rpasado' id='rpasado'>
   <option value="0">NINGUNA</option>
   <option value="0.5">PARCIAL</option>
   <option value="1">TOTAL</option> 
</select> 
 

<p><b>B.-CAMBIOS EN LOS HABITOS </b></p>

<p>1. Comer: </p>
<select name='comer' id='comer'>
   <option value="0">Limpiamente, con los cubiertos adecuados </option>
   <option value="1">Desaliñadamente, sólo con la cuchara</option>
   <option value="2">Sólidos simples (galletas)</option> 
   <option value="3">Ha de ser alimentado </option> 
</select> 

<p>2. Vestir: </p>
<select name='vestir' id='vestir'>
   <option value="0"> Se viste sin ayuda </option>
   <option value="1">Fallos ocasionales (en el abotonamiento) </option>
   <option value="2">Errores y olvidos frecuentes en la secuencia de vestirse </option> 
   <option value="3">Incapaz de vestirse </option> 
</select> 

<p>3. Control de esfínteres: </p>
<select name='cesfinteres' id='cesfinteres'>
   <option value="0">Normal </option>
   <option value="1">Incontinencia urinaria ocasional </option>
   <option value="2">Incontinencia urinaria frecuente </option> 
   <option value="3"> Doble incontinencia</option> 
</select> 
<p><b>C.-CAMBIOS DE PERSONALIDAD Y CONDUCTA </b></p>

<p>1. Retraimiento creciente </p>
<select name='rcreciente' id='rcreciente'>
   <option value="0">NO</option>
   <option value="1">SI</option>
</select> 

<p>2. Egocentrismo aumentado </p>
<select name='eaumentado' id='eaumentado'>
   <option value="0">NO</option>
   <option value="1">SI</option>
</select> 

<p>3. Pérdida de interés por los sentimientos de otros </p>
<select name='psentimientos' id='psentimientos'>
    <option value="0">NO</option>
    <option value="1">SI</option>
</select>

<p>4. Afectividad embotada </p>
<select name='aembotada' id='aembotada'>
    <option value="0">NO</option>
    <option value="1">SI</option>
</select> 

<p>5. Perturbación del control emocional (aumento de la susceptibilidad e irritabilidad). </p>
<select name='cemocional' id='cemocional'>
    <option value="0">NO</option>
    <option value="1">SI</option>
</select> 

<p>6. Hilaridad Inapropiada </p>
<select name='hinapropiada' id='hinapropiada'>
    <option value="0">NO</option>
    <option value="1">SI</option>
</select>

<p>7. Respuesta emocional disminuida </p>
<select name='remocionald' id='remocionald'>
    <option value="0">NO</option>
    <option value="1">SI</option>
</select>

<p>8. Indiscreciones sexuales (de aparición reciente) </p>
<select name='isexuales' id='isexuales'>
    <option value="0">NO</option>
    <option value="1">SI</option>
</select> 

<p>9. Falta de interés en las aficiones habituales </p>
<select name='ahabituales' id='ahabituales'>
    <option value="0">NO</option>
    <option value="1">SI</option>
</select> 

<p>10. Disminución de la iniciativa o apatía progresiva </p>
<select name='aprogresiva' id='aprogresiva'>
    <option value="0">NO</option>
    <option value="1">SI</option>
</select> 

<p>11. Hiperactividad no justificada </p>
<select name='hnjustificada' id='hnjustificada'>
   <option value="0">NO</option>
   <option value="1">SI</option>
</select> 

<p>
 <button type="submit" class="wideButton" id='grabar' name='grabar'>
 <img src="../img/guardar.png" alt="Save icon"/> <strong>GRABAR</strong> 
</button></p>
<input name='codusr' id='codusr' type='hidden' value='<?php echo $auxcodusr?>'>
</fieldset>
</form>
</body>
</html>



