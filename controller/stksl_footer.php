<?php
error_reporting(E_ALL);
ini_set('display_errors', '1');
$diccFooter = array(
'pClass00'=>'dino-text-center',
'pText00'=>'--  steflink segurity login  --');
$footer = file_get_contents('view/html/stksl_footer.html');
foreach ($diccFooter as $clave=>$valor) {
$footer = str_replace('{'.$clave.'}', $valor, $footer);
}
print $footer;
?>
