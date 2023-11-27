<?php
    session_start();
    if (isset($_SESSION['tktuyendung']) && isset($_SESSION['id_tktd'])) {
        unset($_SESSION['tktuyendung']);  //kiem tra trang thai dang nhap neu dang nhap xoa trang thai dang nhap
        unset($_SESSION['id_tktd']);
    }
    //echo "shshsh";
    // sau khi logout chuyen ve trang login
    header('location: ../index.php');
?>