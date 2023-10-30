<?php
ob_start();
$maCareer = $_GET['sid'];
include('../model/config.php');
$delete = "DELETE FROM tbl_career WHERE id_career = '$maCareer'";
$re = mysqli_query($conn, $delete);
header("location:./nganh_ds.php");
