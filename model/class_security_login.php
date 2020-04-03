<?php 
/*******************************************************************************
* 			STEFLINK SECURITY LOGIN                                *
*                                                                              *
* Version: 1.0                                                                 *
* Date:    2018                                                                *
* Author:  CH47LY                                                              * 
* License: GPL                                                                 *
*******************************************************************************/
require_once($_SERVER['DOCUMENT_ROOT'].'/GIT_STEFLINKSEGURIDAD/config.php');
class SecurityLogin extends ConexionDB {
	public   $mail;
	private  $pass;
	private  $pass1;
	private  $pass2;
	
public function __construct ($mail,$tbname="Administrador") {
	$this->mail=$mail;
	$this->tbname=$tbname;
} 	
public function Login(){
	$this->pass=$_POST['pass'];
	$this->consulta="SELECT * FROM $this->tbname WHERE mail =
'$this->mail'";
$this->VerificarDatos();
$this->pass2=$this->row["pass"];
/*ENCODE 64 DETECTE*/
$this->pass1=base64_encode($this->pass);
if ($this->pass1==$this->pass2) {
echo "debe reseatera la clave";
}

else {
/*security login*/
if (password_verify($this->pass, $this->pass2)) {
    		$_SESSION['pass']=$this->pass;
		$_SESSION['mail']=$this->mail;
		$_SESSION['nombre']=$this->row["nombre"];
		include (constant('PATH_CONTROLLER').'stksl_login_Successful.php');	
		
		}
	else {
		include (constant('PATH_CONTROLLER').'stksl_login_error.php');
		}
}
}
public function VerifySession() {
	if (isset($_SESSION['pass'])) {
		$this->pass=$_SESSION['pass'];
		$this->consulta="SELECT * FROM $this->tbname WHERE mail =
'$this->mail'";
		$this->VerificarDatos();
		$this->pass2=$this->row["pass"];
			if (password_verify($this->pass, $this->pass2)) {
    				include (constant('PATH_CONTROLLER').'stksl_login_Successful.php');	
			} 
			else {
				$_SESSION['mail']=NULL;
				include (constant('PATH_CONTROLADOR').'stksl_userpass_notmach.php');
				
			}
		
	}
	else {
	$_SESSION['mail']=NULL;
	include (constant('PATH_CONTROLLER').'stksl_session_down.php');
	}

}

public function CloseSession() {
session_destroy() ;
header("Location: " .$_SESSION['urla']);
}


}
