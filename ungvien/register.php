<?php
ob_start();
include('../model/config.php');
require("lib/check_error.php");
if (isset($_POST["btn_dk"])) {
    $error = [];
    if (empty($_POST["user_name"])) {
        $error["user_name"] = "Phải nhập tên ứng viên";
    } else {
        $user_name = $_POST["user_name"];
    }
    if (empty($_POST["email"])) {
        $error["email"] = "Phải nhập email";
    } else {
        $email = $_POST["email"];
    }
    if (empty($_POST["phone"])) {
        $error["phone"] = "Phải nhập số điện thoại";
    } else {
        $phone = $_POST["phone"];
    }
    if (empty($_POST["diachi"])) {
        $error["diachi"] = "Phải nhập địa chỉ";
    } else {
        $diachi = $_POST["diachi"];
    }
    if (empty($_POST["gtinh"])) {
        $error["gtinh"] = "Phải điền thông tin giới tính";
    } else {
        $gtinh = $_POST["gtinh"];
    }
    if (empty($_POST["tentk"])) {
        $error["tentk"] = "Phải nhập tên tài khoản";
    } else {
        $tentk = $_POST["tentk"];
    }
    if (empty($_POST["pass"])) {
        $error["pass"] = "Phải nhập mật khẩu";
    } else {
        $pass = md5($_POST["pass"]);
    }


    if (!empty($_POST["user_name"]) && !empty($_POST["email"]) && !empty($_POST["phone"]) && !empty($_POST["diachi"]) && !empty($_POST["gtinh"]) && !empty($_POST["tentk"]) && !empty($_POST["pass"])) {
        $loaitk = 2;

        $themsql = "INSERT INTO tbl_user2 (user_name, email, phone, diachi ,gtinh ) 
                    VALUES ('$user_name','$email','$phone' ,'$diachi','$gtinh')";
        mysqli_query($conn, $themsql);

        $themct = "INSERT INTO tblcongty (congty) VALUES ('$user_name')";
        mysqli_query($conn, $themct);

        $themtk = "INSERT INTO tbl_taikhoan (tentk, pass, loaitk) 
                        VALUES ('$tentk','$pass','$loaitk')";
        mysqli_query($conn, $themtk);

        header("location: login.php");
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
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="48x48" href="../public/images/title_icon.png" />
    <title>Đăng ký tài khoản ứng viên</title>
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
        <div class="auth-wrapper d-flex no-block justify-content-center align-items-center position-relative" style="background:url(admin_css/assets/images/big/auth-bg.jpg) no-repeat center center;">
            <div class="auth-box row text-center">
                <div class="col-lg-7 col-md-5 modal-bg-img" style="background-image: url(admin_css/assets/images/big/bg_job.jpg);">
                </div>
                <div class="col-lg-5 col-md-7 bg-white">
                    <div class="p-3">
                        <div class="text-center mt-3">
                            <img src="../public/css_timviec/images/Logo.png" width="200" alt="wrapkit">
                        </div>
                        <h2 class="mt-3 text-center">Đăng ký tài khoản</h2>
                        <form class="mt-4" action="" method="post">
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="form-group">
                                        <input class="form-control" type="text" name="user_name" placeholder="Tên ứng viên">
                                    </div>
                                    <p style="color:red">
                                        <?php if (!empty($error['user_name'])) echo $error['user_name'] ?>
                                    </p>
                                </div>
                                <div class="col-lg-12">
                                    <div class="form-group">
                                        <input class="form-control" type="email" name="email" placeholder="email">
                                    </div>
                                    <p style="color:red">
                                        <?php if (!empty($error['email'])) echo $error['email'] ?>
                                    </p>
                                </div>
                                <div class="col-lg-12">
                                    <div class="form-group">
                                        <input class="form-control" type="text" name="phone" placeholder="Số điện thoại">
                                    </div>
                                    <p style="color:red">
                                        <?php if (!empty($error['phone'])) echo $error['phone'] ?>
                                    </p>
                                </div>
                                <div class="col-lg-12">
                                    <div class="form-group">
                                        <input class="form-control" type="text" name="diachi" placeholder="Địa chỉ">
                                    </div>
                                    <p style="color:red">
                                        <?php if (!empty($error['diachi'])) echo $error['diachi'] ?>
                                    </p>
                                </div>
                                <div class="col-lg-12">
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="gtinh" id="Nam" value="Nam">
                                        <label class="form-check-label" for="Nam">Nam</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="gtinh" id="Nữ" value="Nữ">
                                        <label class="form-check-label" for="Nữ">Nữ</label>
                                    </div>
                                    <p style="color:red">
                                        <?php if (!empty($error['gtinh'])) echo $error['gtinh'] ?>
                                    </p>
                                </div>
                                <div class="col-lg-12 mt-3">
                                    <div class="form-group">
                                        <input class="form-control" type="text" name="tentk" placeholder="Tên tài khoản">
                                    </div>
                                    <p style="color:red">
                                        <?php if (!empty($error['tentk'])) echo $error['tentk'] ?>
                                    </p>
                                </div>
                                <div class="col-lg-12">
                                    <div class="form-group">
                                        <input class="form-control" type="password" name="pass" placeholder="Mật khẩu">
                                    </div>
                                    <p style="color:red">
                                        <?php if (!empty($error['pass'])) echo $error['pass'] ?>
                                    </p>
                                </div>

                                <div class="col-lg-12 text-center">
                                    <button type="submit" name="btn_dk" class="btn btn-block btn-dark">Đăng ký</button>
                                </div>
                                <div class="col-lg-12 text-center mt-5">
                                    Bạn đã có tài khoản? <a href="login.php" class="text-danger">Đăng nhập</a>
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