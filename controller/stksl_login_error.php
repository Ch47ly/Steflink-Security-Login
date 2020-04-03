<?php
error_reporting(E_ALL);
ini_set('display_errors', '1');
//VIENE DEL MODELO ../VISTA
$diccLoginErr = array(
'h3Class00'=>'dino-text-center',
'h3Text00'=> 'LOGIN ERROR'
);
$LoginErr = file_get_contents('../view/html/stksl_loginError.html');
foreach ($diccLoginErr as $clave=>$valor) {
$LoginErr = str_replace('{'.$clave.'}', $valor, $LoginErr);
}
print $LoginErr;
?>
