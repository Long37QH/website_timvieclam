<?php
ob_start();
$mabaiviet = $_GET['sid'];
include('../model/config.php');
$delete = "DELETE FROM tbl_post WHERE baiviet_id = '$mabaiviet'";
$re = mysqli_query($conn, $delete);
header("location:./baiviet_ds.php");
