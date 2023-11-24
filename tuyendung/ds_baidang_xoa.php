<?php
ob_start();
$job_id = $_GET['sid'];
include('../model/config.php');
$delete = "DELETE FROM tbl_job WHERE job_id = '$job_id'";
$re = mysqli_query($conn, $delete);
header("location: ./ds_dangpheduyet.php");
