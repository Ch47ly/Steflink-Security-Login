<?php
error_reporting(E_ALL);
ini_set('display_errors', '1');
$diccLogin = array(
'pClass00'=>'dino-text-center',
'pClass01'=>'dino-text-center dino-form-login1Title',
'pClass02'=>'dino-text-center',
'pClass03'=>'dino-text-center',
'pClass04'=>'dino-text-center',
'pClass05'=>'dino-text-center',
'pClass06'=>'dino-text-center',
'pClass07'=>'dino-text-center',
'formClass00'=>'dino-form-login1',
'inputClass00'=>'dino-form-login1',
'inputClass01'=>'dino-form-login1',
'inputClass02'=>'dino-form-login1Bot',
'inputType00'=>'email',
'inputType01'=>'password',
'inputType02'=>'button',
'inputName00'=>'mail',
'inputName01'=>'pass',
'inputId00'=>'mail',
'inputId01'=>'pass',
'inputValue00'=>'intro',
'inputOnclick00'=>'Login()',
'pText00'=> '',
'pText01'=> 'LOGIN',
'pText02'=> 'mail',
'pText03'=> 'password',
'pText04'=> '',
);
$Login = file_get_contents('view/html/stksl_login.html');
foreach ($diccLogin as $clave=>$valor) {
$Login = str_replace('{'.$clave.'}', $valor, $Login);
}
print $Login;
?>
