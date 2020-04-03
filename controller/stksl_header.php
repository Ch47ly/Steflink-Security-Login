<?php
error_reporting(E_ALL);
ini_set('display_errors', '1');
$diccionario = array(
'h3Class00'=>'dino-text-center',
'pClass00'=>'dino-text-center',
'aType00'=>'button',
'aHref00'=>'#',
'aOnclick00'=>'Csessio()',
'pText00'=>'',
'h3Text00'=>'STEFLINK SECURITY LOGIN',
'pText01'=>'cerrar sesion');
$header = file_get_contents('view/html/stksl_header.html');
foreach ($diccionario as $clave=>$valor) {
$header = str_replace('{'.$clave.'}', $valor, $header);
}
print $header;
?>
