<html>
 <title>RESULTADO LOBO</title>
  <link rel="stylesheet" type="text/css" href="../css/resultado.css">
<center><img src="generaLoboBase.php" /></center>

<?php 

include('../config/conmysql.php');
include('../lib/adodb/adodb.inc.php');
//Funcion para conectarse a la BDD
function omnisoftConnectDB() {
global $DBConnection;
$dblink = NewADOConnection($DBConnection);
return $dblink;
}

//SE GRABA LA INFORMACION EN LA BDD

$auxcodusr=$_POST['codusr'];
$auxgrupo1=$_POST['grupo1'];
$auxgrupo2=$_POST['grupo2'];
$auxgrupo3=$_POST['grupo3'];
$auxgrupo4=$_POST['grupo4'];
$auxgrupo5=$_POST['grupo5'];
$auxgrupo6=$_POST['grupo6'];
$auxgrupo7=$_POST['grupo7'];
$auxgrupo8=$_POST['grupo8'];
$auxgrupo9=$_POST['grupo9'];
$auxgrupo10=$_POST['grupo10'];
$auxgrupo11=$_POST['grupo11'];
$auxgrupo12=$_POST['grupo12'];
$auxgrupo13=$_POST['grupo13'];
$auxgrupo14=$_POST['grupo14'];
$auxgrupo15=$_POST['grupo15'];
$auxgrupo16=$_POST['grupo16'];
$auxgrupo17=$_POST['grupo17'];
$auxgrupo18=$_POST['grupo18'];
$auxgrupo19=$_POST['grupo19'];
$auxgrupo20=$_POST['grupo20'];
$auxgrupo21=$_POST['grupo21'];
$auxgrupo22=$_POST['grupo22'];
$auxresultado=$auxgrupo1+$auxgrupo2+$auxgrupo3+$auxgrupo4+$auxgrupo5+$auxgrupo6+$auxgrupo7+$auxgrupo8+$auxgrupo9+$auxgrupo10+$auxgrupo11+$auxgrupo12+$auxgrupo13+$auxgrupo14+$auxgrupo15+$auxgrupo16+$auxgrupo17+$auxgrupo18+$auxgrupo19+$auxgrupo20+$auxgrupo21+$auxgrupo22;


$db=omnisoftConnectDB();

$auxsql="INSERT INTO Lobo (codigoUsuario,1oLobo,2oLobo,3oLobo,4oLobo,5oLobo,6oLobo,7oLobo,8oLobo, 9oLobo,10oLobo,11oLobo,1fLobo,1cLobo,2cLobo,1mLobo,1lLobo,2lLobo,3lLobo,4lLobo,5lLobo,6lLobo,7lLobo,resultadoLobo)  values (?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)";
$a_bind_params = array($auxcodusr,$auxgrupo1,$auxgrupo2,$auxgrupo3,$auxgrupo4,$auxgrupo5,$auxgrupo6,$auxgrupo7,$auxgrupo8,$auxgrupo9,$auxgrupo10,$auxgrupo11,$auxgrupo12,$auxgrupo13,$auxgrupo14,$auxgrupo15,$auxgrupo16,$auxgrupo17,$auxgrupo18,$auxgrupo19,$auxgrupo20,$auxgrupo21,$auxgrupo22,$auxresultado);

$rs = $db->Execute($auxsql, $a_bind_params);
 
?>
</br></br>
<center><img src="generaLobo.php" /></center>
</br><p> El resultado del usuario es: <?php echo $auxresultado; ?> </p>
</br><p> 35 puntos m&aacute;ximo. 30-35 normal.</p>
<p> Por debajo de 25 puntos en mayores de 65 a&ntilde;os sugiere deterioro cognitivo.</p>
<p> Por debajo de 29 puntos en menores de 65 a&ntilde;os sugiere deterioro cognitivo.</p>

</html>