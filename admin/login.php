<?php
session_start(); //kiem tra neu dax dang nhap tai khoan tif khong phai dang nhap lai
require("lib/check_error.php");
include('../model/config.php');
if (isset($_SESSION['tkadmin'])) {
    header('location:index.php');
}
if (isset($_POST["login"])) {
    $error = [];
    if (empty($_POST["username"])) {
        $error["username"] = "Phải nhap username";
    } else {
        $tkadmin = $_POST["username"];
    }
    if (empty($_POST["pass"])) {
        $error["pass"] = "Phải nhập mật khẩu";
    } else {
        $pass = md5($_POST["pass"]);
    }
    // Truy vấn kiểm tra thông tin đăng nhập
    $role = 0;
    $query = "SELECT * FROM tbl_taikhoan WHERE tentk='$tkadmin' AND pass='$pass'AND loaitk ='$role'";
    //echo $query;exit;
    $result = mysqli_query($conn, $query);

    $row = mysqli_fetch_assoc($result);

    if (mysqli_num_rows($result) == 1) {
        $_SESSION['tkadmin'] = $tkadmin;
        $_SESSION['id_user'] = $row['id_tk'];
        header("Location: index.php");
    } else {
        $error["errorLogin"] = "Tài khoản mật khẩu không đúng";
    }
}
?>

<!DOCTYPE html>
<html dir="ltr">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" type="image/png" sizes="48x48" href="../public/images/title_icon.png" />
    <!-- Favicon icon -->
    <!-- <link rel="icon" type="image/png" sizes="16x16" href="admin_css/assets/images/favicon.png"> -->
    <title>Đăng nhập trang quản trị</title>
    <!-- Custom CSS -->
    <link href="admin_css/dist/css/style.min.css" rel="stylesheet">

</head>

<body>
    <div class="main-wrapper">
        <!-- ============================================================== -->
        <!-- Preloader - style you can find in spinners.css -->
        <!-- ============================================================== -->
        <div class="preloader">
            <div class="lds-ripple">
                <div class="lds-pos"></div>
                <div class="lds-pos"></div>
            </div>
        </div>
        <!-- ============================================================== -->
        <!-- Preloader - style you can find in spinners.css -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Login box.scss -->
        <!-- ============================================================== -->
        <div class="auth-wrapper d-flex no-block justify-content-center align-items-center position-relative" style="background:url(admin_css/assets/images/big/auth-bg.jpg) no-repeat center center;">
            <div class="auth-box row">
                <div class="col-lg-7 col-md-5 modal-bg-img" style="background-image: url(admin_css/assets/images/big/bg_job.jpg);">
                </div>
                <div class="col-lg-5 col-md-7 bg-white">
                    <div class="p-3">
                        <div class="text-center mt-3">
                            <img src="../public/css_timviec/images/Logo.png" width="200" alt="wrapkit">
                        </div>
                        <h3 class="mt-3 text-center">Đăng Nhập trang Admin</h3>
                        <!-- <p class="text-center">Enter your email address and password to access admin panel.</p> -->
                        <form class="mt-4" action="" method="post">
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="form-group">
                                        <label class="text-dark" for="username">Username</label>
                                        <input class="form-control" id="username" name="username" type="text" placeholder="enter your username">
                                    </div>
                                    <p style="color:red">
                                        <?php echo formError('username') ?>
                                    </p>
                                </div>

                                <div class="col-lg-12">
                                    <div class="form-group">
                                        <label class="text-dark" for="pass">Password</label>
                                        <input class="form-control" id="pass" name="pass" type="password" placeholder="enter your password">
                                    </div>
                                    <p style="color: red;">
                                        <?php
                                        if (!empty($error["pass"])) echo "" . $error["pass"] . "";
                                        ?>
                                    </p>
                                    <p style="color:red">
                                        <?php echo formError('errorLogin') ?>
                                    </p>
                                </div>

                                <div class="col-lg-12 text-center">
                                    <input type="submit" class="btn btn-block btn-dark" value="Đăng nhập" name="login">
                                    <!-- <button type="submit" name="btn_login" class="btn btn-block btn-dark">Đăng Nhập</button> -->
                                </div>
                                <div class="col-lg-12 text-center mt-5">
                                    <!-- Bạn chưa có tài khoản? <a href="register.php" class="text-danger">Đăng ký</a> -->
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!-- ============================================================== -->
        <!-- Login box.scss -->
        <!-- ============================================================== -->
    </div>
    <!-- ============================================================== -->
    <!-- All Required js -->
    <!-- ============================================================== -->
    <script src="admin_css/assets/libs/jquery/dist/jquery.min.js "></script>
    <!-- Bootstrap tether Core JavaScript -->
    <script src="admin_css/assets/libs/popper.js/dist/umd/popper.min.js "></script>
    <script src="admin_css/assets/libs/bootstrap/dist/js/bootstrap.min.js "></script>
    <!-- ============================================================== -->
    <!-- This page plugin js -->
    <!-- ============================================================== -->
    <script>
        $(".preloader ").fadeOut();
    </script>
</body>

</html>