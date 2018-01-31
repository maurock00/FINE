<html>
 <title>RESULTADO BLESSED</title>
  <link rel="stylesheet" type="text/css" href="../css/resultado.css">
<center><img src="generaBlessedBase.php" /></center>

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
$auxtdomesticas=$_POST['tdomesticas'];
$auxudinero=$_POST['udinero'];
$auxrlistasc=$_POST['rlistasc'];
$auxocasa=$_POST['ocasa'];
$auxocalles=$_POST['ocalles'];
$auxventorno=$_POST['ventorno'];
$auxrhechos=$_POST['rhechos'];
$auxrpasado=$_POST['rpasado'];
$auxcomer=$_POST['comer'];
$auxvestir=$_POST['vestir'];
$auxcesfinteres=$_POST['cesfinteres'];
$auxrcreciente=$_POST['rcreciente'];
$auxeaumentado=$_POST['eaumentado'];
$auxpsentimientos=$_POST['psentimientos'];
$auxaembotada=$_POST['aembotada'];
$auxcemocional=$_POST['cemocional'];
$auxhinapropiada=$_POST['hinapropiada'];
$auxremocionald=$_POST['remocionald'];
$auxisexuales=$_POST['isexuales'];
$auxahabituales=$_POST['ahabituales'];
$auxaprogresiva=$_POST['aprogresiva'];
$auxhnjustificada=$_POST['hnjustificada'];
$auxresultadoa = $auxtdomesticas+$auxudinero+$auxrlistasc+$auxocasa+$auxocalles+$auxventorno+$auxrhechos+$auxrpasado;
$auxresultadob = $auxcomer+$auxvestir+$auxcesfinteres;
$auxresultadoc = $auxrcreciente+$auxeaumentado+$auxpsentimientos+$auxaembotada+$auxcemocional+$auxhinapropiada+$auxremocionald+$auxisexuales+$auxahabituales+$auxaprogresiva+$auxhnjustificada;
$auxresultado = $auxresultadoa+$auxresultadob+$auxresultadob; 


$db=omnisoftConnectDB();

$auxsql="INSERT INTO Blessed(codigoUsuario,pregunta1A,pregunta2A,pregunta3A,pregunta4A, pregunta5A,pregunta6A,pregunta7A,pregunta8A,pregunta1B,pregunta2B,pregunta3B,pregunta1C,pregunta2C,pregunta3C, pregunta4C,pregunta5C,pregunta6C,pregunta7C,pregunta8C,pregunta9C,pregunta10C,pregunta11C,resultadoBlessed)  values (?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)";
$a_bind_params = array($auxcodusr,$auxtdomesticas,$auxudinero,$auxrlistasc,$auxocasa,$auxocalles,$auxventorno,$auxrhechos,$auxrpasado,$auxcomer,$auxvestir,$auxcesfinteres,$auxrcreciente,$auxeaumentado,$auxpsentimientos,$auxaembotada,$auxcemocional,$auxhinapropiada,$auxremocionald,$auxisexuales,$auxahabituales,$auxaprogresiva,$auxhnjustificada,$auxresultado);

$rs = $db->Execute($auxsql, $a_bind_params);
 
?>
</br></br>
<center><img src="generaBlessed.php" /></center>
<p> El resultado del usuario de la secci&oacute;n A es: <?php echo $auxresultadoa; ?> </p>
<p> El resultado del usuario de la secci&oacute;n B es: <?php echo $auxresultadob; ?> </p>
<p> El resultado del usuario de la secci&oacute;n C es: <?php echo $auxresultadoc; ?> </p>
<p> El resultado TOTAL del usuario es: <?php echo $auxresultado; ?> </p>

</html>