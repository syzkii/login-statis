<?php
	error_reporting(0);
  $conn = @mysql_connect("localhost","root","");
  @mysql_select_db("sppadminop", $conn);

  $str_hapus = "delete from data_siswa where no_induk='".$_GET["no_induk"]."'";
  $qry_hapus = @mysql_query ($str_hapus, $conn);

  header("Location: view_siswa.php"); 
?>