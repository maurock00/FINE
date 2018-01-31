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

$auxsql= "SELECT MAX(codigoKatz) as max FROM katz"; 
$rs = $db->Execute($auxsql);
if (!$rs) 
	print $conn->ErrorMsg();
else
while (!$rs->EOF) {
	$id = $rs->fields[0].'<BR>';
	$rs->MoveNext();
}

$auxsql= "SELECT *FROM Katz WHERE codigoKatz='$id'"; 
$rs2 = $db->Execute($auxsql);
if (!$rs2) 
	print $conn->ErrorMsg();
else
while (!$rs2->EOF) {
	$p1 = $rs2->fields[3];$p2 = $rs2->fields[4];$p3 = $rs2->fields[5];$p4 = $rs2->fields[6];$p5 = $rs2->fields[7];
	$p6 = $rs2->fields[8];
	$rs2->MoveNext();
}

// Se define el array de datos
$datosy=array($p1,$p2,$p3,$p4,$p5,$p6);
 
// Creamos el grafico
$grafico = new Graph(500,250);
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
$grafico->title->Set('Puntuacion del Usuario para KATZ');
$grafico->xaxis->title->Set('Pregunta');
$grafico->yaxis->title->Set('Valor');
 
$grafico->title->SetFont(FF_FONT1,FS_BOLD);
$grafico->yaxis->title->SetFont(FF_FONT1,FS_BOLD);
$grafico->xaxis->title->SetFont(FF_FONT1,FS_BOLD);
 
// Se muestra el grafico
$grafico->Stroke();

?>

