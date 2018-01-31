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

if(!$_POST){
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
<title>LOBO</title>
</head>
<body>
<div id="colorstrip">
    <h1>LOBO</h1>
  </div>
  
<form name="lobo" action="grafico_Lobo.php" method="POST">
<fieldset>
<label>ORIENTACIÓN</label></br></br>
<table >
	<tr>
		<td width="350"> P1. ¿En qué día de la semana estamos? </td>
		<td width="220">	
				<input type="radio" name="grupo1" value="1"> Correcto
				<input type="radio" name="grupo1" value="0" checked> Incorrecto 
		</td> 
	</tr>
	<tr>
		<td width="350" height="12"> P2. ¿Qué día(N°) es hoy? </td>
		<td width="220" height="12">	
				<input type="radio" name="grupo2" value="1"> Correcto
				<input type="radio" name="grupo2" value="0" checked> Incorrecto 
		</td> 
	</tr>
	<tr>
		<td width="350" height="12"> P3. ¿En qué mes estamos? </td>
		<td width="220" height="12">	
				<input type="radio" name="grupo3" value="1"> Correcto
				<input type="radio" name="grupo3" value="0" checked> Incorrecto 
		</td> 
	</tr>
	<tr>
		<td width="350" height="12"> P4. ¿En qué estación del año estamos? </td>
		<td width="220" height="12">	
				<input type="radio" name="grupo4" value="1"> Correcto
				<input type="radio" name="grupo4" value="0" checked> Incorrecto 
		</td> 
	</tr>
	<tr>
		<td width="350" height="12"> P5. ¿En qué año estamos? </td>
		<td width="220" height="12">	
				<input type="radio" name="grupo5" value="1"> Correcto
				<input type="radio" name="grupo5" value="0" checked> Incorrecto 
		</td> 
	</tr>
	<tr>
		<td width="350" height="12"> P6. ¿Dónde estamos? </td>
		<td width="220" height="12">	
				<input type="radio" name="grupo6" value="1"> Correcto
				<input type="radio" name="grupo6" value="0" checked> Incorrecto 
		</td> 
	</tr>
	<tr>
		<td width="350" height="12"> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;P7. Provincia </td>
		<td width="220" height="12">	
				<input type="radio" name="grupo7" value="1"> Correcto
				<input type="radio" name="grupo7" value="0" checked> Incorrecto 
		</td> 
	</tr>
	<tr>
		<td width="350" height="12"> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;P8. País </td>
		<td width="220" height="12">	
				<input type="radio" name="grupo8" value="1"> Correcto
				<input type="radio" name="grupo8" value="0" checked> Incorrecto 
		</td> 
	</tr>
	<tr>
		<td width="350" height="12"> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;P9. Ciudad o pueblo </td>
		<td width="220" height="12">	
				<input type="radio" name="grupo9" value="1"> Correcto
				<input type="radio" name="grupo9" value="0" checked> Incorrecto 
		</td> 
	</tr>
	<tr>
		<td width="350" height="12"> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;P10. Lugar, centro </td>
		<td width="220" height="12">	
				<input type="radio" name="grupo10" value="1"> Correcto
				<input type="radio" name="grupo10" value="0" checked> Incorrecto 
		</td> 
	</tr>
	<tr>
		<td width="350" height="12"> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;P11. Planta, piso </td>
		<td width="220" height="12">	
				<input type="radio" name="grupo11" value="1"> Correcto
				<input type="radio" name="grupo11" value="0" checked> Incorrecto 
		</td> 
	</tr>
</table>
	<hr>
	<label>FIJACIÓN</label></br></br>
	<table>
	<tr>
		<td width="500" height="12"> P12. Repita las palabras: peseta-caballo-manzana </td>
	</tr>
	<tr>
		<td width="380" height="12">	
				<input type="radio" name="grupo12" value="0"> 0 Aciertos
				<input type="radio" name="grupo12" value="1" > 1 Acierto
				<input type="radio" name="grupo12" value="2" > 2 Aciertos
				<input type="radio" name="grupo12" value="3" checked> 3 Aciertos
		</td> 
	</tr>
	</table>
	<hr>
	<label>CONCENTRACIÓN Y CÁLCULO</label></br></br>
	<table>
	<tr>
		<td width="500" height="12"> P13. Si tiene 30 dólares y me los va dando de 3 en 3. Cuántas le van quedando ? Hasta 5 veces </td>
	</tr>
	<tr>
	
		<td width="600" height="12">	
				<input type="radio" name="grupo13" value="0"> 0 Aciertos
				<input type="radio" name="grupo13" value="1" > 1 Acierto
				<input type="radio" name="grupo13" value="2" > 2 Aciertos
				<input type="radio" name="grupo13" value="3" > 3 Aciertos
		</td>
	</tr>
	
	<tr>
		<td width="600" height="12">	
				
				<input type="radio" name="grupo13" value="3" > 4 Aciertos
				<input type="radio" name="grupo13" value="3" checked> 5 Aciertos
		</td> 
	</tr>
	<tr>
	<td>&nbsp;</td>
	</tr>
	<tr>
		<td width="500" height="12"> P14. Repita 5-9-2. Ahora hacia atrás</td>
	</tr>
	<tr>
	<td width="100%" height="12">	
				<input type="radio" name="grupo14" value="0"> 0 Aciertos
				<input type="radio" name="grupo14" value="1"> 1 Acierto
				<input type="radio" name="grupo14" value="2"> 2 Aciertos
				<input type="radio" name="grupo14" value="3" checked> 3 Aciertos
		</td>
	</tr>
	</table>
	<hr>
	<label>MEMORIA</label></br></br>
	<table>
	<tr>
		<td width="500" height="12">P15. ¿Recuerda las tres palabras (objetos) que le he dicho antes?</td>
	</tr>
	<tr>
		<td width="380" height="12">	
				<input type="radio" name="grupo15" value="0"> 0 Aciertos
				<input type="radio" name="grupo15" value="1" > 1 Acierto
				<input type="radio" name="grupo15" value="2" > 2 Aciertos
				<input type="radio" name="grupo15" value="3" checked> 3 Aciertos
		</td> 
	</tr>
	</table>
	<hr>
	<label>LENGUAJE Y CONSTRUCCIÓN</label></br></br>
	<table>
	<tr>
		<td width="500" height="12">P16. Señalar un bolígrafo y que el paciente lo nombre. Repetirlo con el reloj.</td>
		<td width="320" height="12">	
				<input type="radio" name="grupo16" value="0"> 0 Aciertos
				<input type="radio" name="grupo16" value="1" > 1 Acierto
				<input type="radio" name="grupo16" value="2" checked> 2 Aciertos
		</td> 
	</tr>
	<tr>
		<td width="500" height="12">P17. Que repita:"En un trigal había cinco perros"</td>
		<td width="320" height="12">	
				<input type="radio" name="grupo17" value="1"> Correcto
				<input type="radio" name="grupo17" value="0" checked> Incorrecto
		</td> 
	</tr>
	<tr>
		<td width="500" height="12">P18. "Una manzana y una pera son frutas ¿verdad? ¿Qué son el rojo y el verde?"</td>
		<td width="320" height="12">	
				<input type="radio" name="grupo18" value="1"> Correcto
				<input type="radio" name="grupo18" value="0" checked> Incorrecto
		</td> 
	</tr>
	<tr>
		<td width="500" height="12">P19¿Qué son un perro y un gato?</td>
		<td width="320" height="12">	
				<input type="radio" name="grupo19" value="1"> Correcto
				<input type="radio" name="grupo19" value="0" checked> Incorrecto
		</td> 
	</tr>
	<tr>
		<td width="500" height="12">P20. Coja este papel con su mano derecha, dóblelo por la mitad y póngalo en la mesa.</td>
		<td width="320" height="12">	
				<input type="radio" name="grupo20" value="1"> Correcto
				<input type="radio" name="grupo20" value="0" checked> Incorrecto
		</td> 
	</tr>
	<tr>
		<td width="500" height="12">P21. "Lea esto, haga lo que dice:CIERRE LOS OJOS"</td>
		<td width="320" height="12">	
				<input type="radio" name="grupo21" value="1"> Correcto
				<input type="radio" name="grupo21" value="0" checked> Incorrecto
		</td> 
	</tr>
	<tr>
		<td width="500" height="12">P22. "Escriba una frase cualquiera"</td>
		<td width="320" height="12">	
				<input type="radio" name="grupo22" value="1"> Correcto
				<input type="radio" name="grupo22" value="0" checked> Incorrecto
		</td> 
	</tr>
	</table>
	<input name='codusr' id='codusr' type='hidden' value='<?php echo $auxcodusr?>'>
</br></br>
 <button type="submit" class="wideButton" id='grabar' name='grabar'>
 <img src="../img/guardar.png" alt="Save icon"/> <strong>GRABAR</strong> 
</button>
	
</form>
</fieldset>


</body>
</html>

<?php }else{
 
if($rs=== false) {?>
 <script> alert("** ERROR: PROBLEMA AL GRABAR **");
window.location.href = 'LOBO.php?auxcod=<?php echo $auxcodusr?>';
</script> 
  
<?php  
  }else{
?>
<script> alert("Se ha guardado exitosamente \nResultado:<?php echo $auxresultado; ?>");
window.location.href = 'LOBO.php?auxcod=<?php echo $auxcodusr?>';
</script>


<?php 
    }
}?>
