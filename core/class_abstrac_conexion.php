<?php
/*******************************************************************************
* 			CLASS ABSTRAC CONEXION                                 *
*                                                                              *
* Date:    2018                                                                *
* Author:  CH47LY                                                              * 
* License: GPL                                                                 *
*******************************************************************************/
abstract class ConexionDB {
     	private    $servername= "localhost";            // server name
	private    $username= "root";                   // user name
	private    $password="password_name";                // password name
	protected  $dbname = 'db_name';			// db name
	private $conexion;
	protected $consulta;
	public $result;
	public $row;
	
	public $SuccessfulLoad;
	public $ErrorLoad;
	public $ErrorConect;
	
private function OpenConexion() {
	$this->conexion = mysqli_connect($this->servername,$this->username, $this->password, $this->dbname);
	if (mysqli_connect_errno())
  		{
  		echo $this->ErrorConect. mysqli_connect_error();
  		}
	}
private function CloseConexion() {
		$this->conexion->close();
		}

protected function ConsultarDatos() {
	$this->OpenConexion();
	$this->conexion->query($this->consulta);
	$this->result=mysqli_query($this->conexion,$this->consulta);
	}

protected function VerificarDatos() {
	$this->ConsultarDatos();
	$this->row=mysqli_fetch_array($this->result,MYSQLI_ASSOC);
	}

protected function InsertarDatos() {
	$this->OpenConexion();
	if (mysqli_query($this->conexion,$this->consulta))
		
			{
			echo $this->SuccessfulLoad;
			}
		else
			{
			echo  $this->ErrorLoad. mysqli_error($this->conexion);
			}
	}


}
?> 
