<?php
error_reporting(E_ALL);
ini_set('display_errors', '1');
//VIENE DEL MODELO ../VISTA
$diccSdown = array(
'h3Class00'=>'dino-text-center',
'h3Class01'=>'dino-text-center',
'h3Text00'=> 'SESSION DOWN!!!',
'h3Text01'=> 'REFRESH WEBSITE');
$SessionDown = file_get_contents('view/html/stksl_sessionDown.html');
foreach ($diccSdown as $clave=>$valor) {
$SessionDown = str_replace('{'.$clave.'}', $valor, $SessionDown);
}
print $SessionDown;
?>
