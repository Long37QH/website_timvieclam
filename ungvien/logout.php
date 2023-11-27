<?php
session_start();
if (isset($_SESSION['tkungvien']) && isset($_SESSION['id_tkuv'])) {
    unset($_SESSION['tkungvien']);  //kiem tra trang thai dang nhap neu dang nhap xoa trang thai dang nhap
    unset($_SESSION['id_tkuv']);
}
//echo "shshsh";
// sau khi logout chuyen ve trang login
header('location: ../index.php');
