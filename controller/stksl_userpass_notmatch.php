<?php
error_reporting(E_ALL);
ini_set('display_errors', '1');
//VIENE DEL MODELO ../VISTA
$diccUsPassNotMach = array(
'h3Class00'=>'dino-text-center',
'h3Class01'=>'dino-text-center',
'h3Text00'=> 'USER AND PASS NOT MATCH','h3Text01'=> 'REFRESH WEBSITE');
$UsPassNotMach = file_get_contents('view/html/stksl_userPassNotMatch.html');
foreach ($diccUsPassNotMach as $clave=>$valor) {
$UsPassNotMach = str_replace('{'.$clave.'}', $valor, $UsPassNotMach);
}
print $UsPassNotMach;
?>
