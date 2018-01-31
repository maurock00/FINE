<?php 
include('../config/conmysql.php');
include('../lib/adodb/adodb.inc.php');
require_once('../lib/jpgraph/src/jpgraph.php');
require_once('../lib/jpgraph/src/jpgraph_bar.php');

//Funcion para conectarse a la BDD
function omnisoftConnectDB() {
global $DBConnection;
$dblink = NewADOConnection($DBConnection);
return $dblink;
}

$db=omnisoftConnectDB();

$auxsql= "SELECT MAX(codigoLobo) as max FROM lobo"; 
$rs = $db->Execute($auxsql);
if (!$rs) 
	print $conn->ErrorMsg();
else
while (!$rs->EOF) {
	$id = $rs->fields[0].'<BR>';
	$rs->MoveNext();
}

$auxsql= "SELECT *FROM Lobo WHERE codigoLobo='$id'"; 
$rs2 = $db->Execute($auxsql);
if (!$rs2) 
	print $conn->ErrorMsg();
else
while (!$rs2->EOF) {
	$p1 = $rs2->fields[3];$p2 = $rs2->fields[4];$p3 = $rs2->fields[5];$p4 = $rs2->fields[6];$p5 = $rs2->fields[7];
	$p6 = $rs2->fields[8];$p7 = $rs2->fields[9];$p8 = $rs2->fields[10];$p9 = $rs2->fields[11];$p10 = $rs2->fields[12];
	$p11 = $rs2->fields[13];$p12 = $rs2->fields[14];$p13 = $rs2->fields[15];$p14 = $rs2->fields[16];$p15 = $rs2->fields[17];
	$p16 = $rs2->fields[18];$p17 = $rs2->fields[19];$p18 = $rs2->fields[20];$p19 = $rs2->fields[21];$p20 = $rs2->fields[22];
	$p21 = $rs2->fields[23];$p22 = $rs2->fields[24]; $resultado = $rs2->fields[26]; 
	$rs2->MoveNext();
}

// Se define el array de datos
$datosy=array($p1,$p2,$p3,$p4,$p5,$p6,$p7,$p8,$p9,$p10,$p11,$p12,$p13,$p14,$p15,$p16,$p17,$p18,$p19,$p20,$p21,$p22);
 
// Creamos el grafico
$grafico = new Graph(1000,250);
$grafico->SetScale('textlin');
 
// Ajustamos los margenes del grafico-----    (left,right,top,bottom)
$grafico->SetMargin(40,30,50,40);
 
// Creamos barras de datos a partir del array de datos
$bplot = new BarPlot($datosy);
 
// Configuramos color de las barras
$bplot->SetFillColor('orange');
 
//Añadimos barra de datos al grafico
$grafico->Add($bplot);
 
// Queremos mostrar el valor numerico de la barra
$bplot->value->Show();
 
// Configuracion de los titulos
$grafico->title->Set('Puntuacion del Usuario para LOBO');
$grafico->xaxis->title->Set('Pregunta');
$grafico->yaxis->title->Set('Valor');
 
$grafico->title->SetFont(FF_FONT1,FS_BOLD);
$grafico->yaxis->title->SetFont(FF_FONT1,FS_BOLD);
$grafico->xaxis->title->SetFont(FF_FONT1,FS_BOLD);
 
// Se muestra el grafico
$grafico->Stroke();

?>

