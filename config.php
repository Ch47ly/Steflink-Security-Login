<?php 
/*******************************************************************************
* 			PATH CONFIG(caminos absolutos)                         *
*                                                                              *
*******************************************************************************/
DEFINE("PATH_CONTROLLER",$_SERVER['DOCUMENT_ROOT'].'/GIT_STEFLINKSEGURIDAD/controller/');//CAMBIAR POR RUTA QUE CORRESPONDA
DEFINE("PATH_VIEW_HTML",$_SERVER['DOCUMENT_ROOT'].'/GIT_STEFLINKSEGURIDAD/view/html/');//CAMBIAR POR RUTA QUE CORRESPONDA
$model = $_SERVER['DOCUMENT_ROOT'].'/GIT_STEFLINKSEGURIDAD/model/class_security_login.php';
$core = $_SERVER['DOCUMENT_ROOT'].'/GIT_STEFLINKSEGURIDAD/core/class_abstrac_conexion.php';
require_once($core);
require_once($model);
?>
