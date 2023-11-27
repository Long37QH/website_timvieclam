<?php
ob_start();
$ap_id = $_GET['sid'];
include('../model/config.php');
$delete = "DELETE FROM tbl_apply WHERE ap_id = '$ap_id'";
$re = mysqli_query($conn, $delete);
header("location: index.php");
