<html>
 <title>RESULTADO TINETTI</title>
  <link rel="stylesheet" type="text/css" href="../css/resultado.css">
<center><img src="generaTinettiBase.php" /></center>

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
$auxmarcha=$_POST['marcha'];
$auxderecho1=$_POST['derecho1'];
$auxderecho2=$_POST['derecho2'];
$auxizquierdo1=$_POST['izquierdo1'];
$auxizquierdo2=$_POST['izquierdo2'];
$auxsimetria=$_POST['simetria'];
$auxfluidez=$_POST['fluidez'];
$auxtrayectoria=$_POST['trayectoria'];
$auxtronco=$_POST['tronco'];
$auxpostura=$_POST['postura'];
$auxequilibrio=$_POST['equilibrio'];
$auxlevantarse=$_POST['levantarse'];
$auxintentos=$_POST['intentos'];
$auxequilibrioeb=$_POST['equilibrioeb'];
$auxebipedestacion=$_POST['ebipedestacion'];
$auxempujar=$_POST['empujar'];
$auxojoscerrados=$_POST['ojoscerrados'];
$auxvuelta360=$_POST['vuelta360'];
$auxvuelta3602=$_POST['vuelta3602'];
$auxsentarse=$_POST['sentarse'];
$auxresultadomarcha= $auxmarcha+$auxderecho1+$auxderecho2+$auxizquierdo1+$auxizquierdo2+$auxsimetria+$auxfluidez+$auxtrayectoria+$auxtronco+$auxpostura;
$auxresultadoequilibrio= $auxequilibrio+$auxlevantarse+$auxintentos+$auxequilibrioeb+$auxebipedestacion+$auxempujar+$auxojoscerrados+$auxvuelta360+$auxvuelta3602+$auxsentarse;
$auxresultado = $auxresultadomarcha+$auxresultadoequilibrio;

$db=omnisoftConnectDB();

$auxsql="INSERT INTO Tinetti(codigoUsuario,marchaTinetti,longitudDerecho1Tinetti,longitudDerecho2Tinetti,longitudIzquierdo1Tinetti,longitudIzquierdo2Tinetti,simetriaTinetti,fluidezTinetti,trayectoriaTinetti,troncoTinetti,posturaTinetti,equilibrioTinetti,levantarseTinetti,intentosTinetti,inmediataTinetti,equilibrioETinetti,empujarTinetti,ojosCerradosTinetti,vueltaA360Tinetti,vueltaB360Tinetti,sentarseTinetti,resultadoTinetti) values (?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)";
$a_bind_params = array($auxcodusr,$auxmarcha,$auxderecho1,$auxderecho2,$auxizquierdo1,$auxizquierdo2,$auxsimetria,$auxfluidez,$auxtrayectoria,$auxtronco,$auxpostura,$auxequilibrio,$auxlevantarse,$auxintentos,$auxequilibrioeb,$auxebipedestacion,$auxempujar,$auxojoscerrados,$auxvuelta360,$auxvuelta3602,$auxsentarse,$auxresultado);

$rs = $db->Execute($auxsql, $a_bind_params);
 
?>
</br></br>
<center><img src="generaTinetti.php" /></center>
<p> El resultado del usuario en MARCHA es: <?php echo $auxresultadomarcha; ?> </p>
<p> El resultado del usuario en EQUILIBRIO es: <?php echo $auxresultadoequilibrio; ?> </p>
<p> El resultado TOTAL del usuario es: <?php echo $auxresultado; ?> </p>


</html>