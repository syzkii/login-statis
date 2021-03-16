<?
	error_reporting(0);
	session_start();
	$username=$_POST["username"];
	$password=$_POST["password"];

	if($username=="aku" && $password=="uka")
	{
		$_SESSION["hak_akses"]="admin";
		header("location: view_siswa.php");
	}
	else
	{
		header("location: login.php?pesan=Gagal! DATA TIDAK DITEMUKAN.");
	}
?>