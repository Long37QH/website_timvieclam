<?php 
ob_start();
$maMenu = $_GET['sid'];
include('../model/config.php');
$delete = "DELETE FROM menu WHERE menu_id = '$maMenu'";
$re = mysqli_query($conn,$delete);
header("location:./menu_ds.php");