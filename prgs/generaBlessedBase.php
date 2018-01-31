<?php

require_once('../lib/jpgraph/src/jpgraph.php');
require_once('../lib/jpgraph/src/jpgraph_bar.php');


// Se define el array de datos
$datosy=array(1,1,1,1,1,1,1,1,3,3,3,1,1,1,1,1,1,1,1,1,1,1);
 
// Creamos el grafico
$grafico = new Graph(1000,250);
$grafico->SetScale('textlin');
 
// Ajustamos los margenes del grafico-----    (left,right,top,bottom)
$grafico->SetMargin(40,30,50,40);
 
// Creamos barras de datos a partir del array de datos
$bplot = new BarPlot($datosy);
 
// Configuramos color de las barras
$bplot->SetFillColor('#479CC9');
 
//Añadimos barra de datos al grafico
$grafico->Add($bplot);
 
// Queremos mostrar el valor numerico de la barra
$bplot->value->Show();
 
// Configuracion de los titulos
$grafico->title->Set('Puntuacion perfecta para BLESSED');
$grafico->xaxis->title->Set('Pregunta');
$grafico->yaxis->title->Set('Valor');
 
$grafico->title->SetFont(FF_FONT1,FS_BOLD);
$grafico->yaxis->title->SetFont(FF_FONT1,FS_BOLD);
$grafico->xaxis->title->SetFont(FF_FONT1,FS_BOLD);
 
// Se muestra el grafico
$grafico->Stroke();

?>