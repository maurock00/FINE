<html>
 <title>RESULTADO KATZ</title>
  <link rel="stylesheet" type="text/css" href="../css/resultado.css">
<center><img src="generaKatzBase.php" /></center>

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
$auxkbanarse=$_POST['kbanarse'];
$auxkvestirse=$_POST['kvestirse'];
$auxkiralservicio=$_POST['kiralservicio'];
$auxkdesplazarse=$_POST['kdesplazarse'];
$auxkcontinencia=$_POST['kcontinencia'];
$auxkalimentarse=$_POST['kalimentarse'];
$auxtotal=$auxkbanarse+$auxkvestirse+$auxkiralservicio+$auxkdesplazarse+$auxkcontinencia+$auxkalimentarse;

if($auxtotal==6)
	$auxkcategoria = "A"; 
	else if($auxtotal==5)
		$auxkcategoria = "B";
	else if($auxtotal==4)
		$auxkcategoria = "C";
	else if($auxtotal==3)
		$auxkcategoria = "D";
	else if($auxtotal==2)
		$auxkcategoria = "E";
	else if($auxtotal==1)
		$auxkcategoria = "F";
	else if($auxtotal==3)
		$auxkcategoria = "G";
		
$db=omnisoftConnectDB();

$auxsql="INSERT INTO Katz (codigoUsuario,banioKatz,vestirseKatz,retreteKatz,movilidadKatz,continenciaKatz,alimentacionKatz,resultadoKatz) values (?,?,?,?,?,?,?,?)";
$a_bind_params = array($auxcodusr,$auxkbanarse,$auxkvestirse,$auxkiralservicio,$auxkdesplazarse,$auxkcontinencia,$auxkalimentarse,$auxkcategoria);

$rs = $db->Execute($auxsql, $a_bind_params);
 
?>
</br></br>
<center><img src="generaKatz.php" /></center>
</br><p> El resultado del usuario es: <?php echo $auxkcategoria; ?> </p>

</html>