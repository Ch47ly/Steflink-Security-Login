<?php
error_reporting(E_ALL);
ini_set('display_errors', '1');

if (isset($_SESSION['mail'])) {
 
include ("stksl_verifySession.php");

}
else {
include ("stksl_login.php");
}
?>
