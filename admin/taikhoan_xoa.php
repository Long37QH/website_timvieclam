<?php
ob_start();
$id_tk = $_GET['sid'];
include('../model/config.php');
$delete = "DELETE FROM tbl_taikhoan WHERE id_tk = '$id_tk'";
$re = mysqli_query($conn, $delete);
header("location: taikhoan_ds.php");
