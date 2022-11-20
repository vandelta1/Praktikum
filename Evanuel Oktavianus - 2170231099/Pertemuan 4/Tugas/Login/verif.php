<?php
session_start();
$user = isset($_POST['user']) ? $_POST['user']:'';
$pass = isset($_POST['pass']) ? $_POST['pass']:'';

include 'data.php';
if (isset($logins[$user]) && $logins[$user] == $pass)
{
	$_SESSION["user"]=$user;
echo "<script type='text/javascript'>alert('Login Berhasil');</script>";
header("refresh:0.5; url=masuk.php?nama=$user");
}
else{
echo "<script type='text/javascript'>alert('Login Gagal');</script>";
header("refresh:0.5; url=login.php");
session_destroy();

}?>