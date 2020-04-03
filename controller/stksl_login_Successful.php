<?php
error_reporting(E_ALL);
ini_set('display_errors', '1');
$diccPanel = array(
'h3Class00'=>'dino-text-center',
'h3Text00'=> 'HERE PANEL, LOGIN SUCCESSFUL');
$Panel = file_get_contents($_SERVER['DOCUMENT_ROOT'].'/APIS/steflinkSeguridad/MVC/view/html/stksl_loginSuccessful.html');
foreach ($diccPanel as $clave=>$valor) {
$Panel = str_replace('{'.$clave.'}', $valor, $Panel);
}
print $Panel;

?>
