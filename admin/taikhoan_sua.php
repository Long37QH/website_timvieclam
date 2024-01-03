<?php
ob_start();
include("header.php");
$id_tk = $_GET['sid'];
include('../model/config.php');
$sql = "SELECT * FROM tbl_taikhoan WHERE id_tk = '$id_tk'";
$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_assoc($result);
?>

<div class="page-wrapper">
    <!-- ============================================================== -->
    <!-- nôi dung trang lam việc-->
    <!-- ============================================================== -->
    <div class="page-breadcrumb">
        <div class="row">
            <div class="col-12 d-flex no-block align-items-center">
                <h4 class="page-title">Sửa thông tin tài khoản</h4>
                <div class="ms-auto text-end">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="ds_menu.php">Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">
                                Library
                            </li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>
    <!-- ============================================================== -->
    <!-- End Bread crumb and right sidebar toggle -->

    <!-- bảng  -->
    <!-- ============================================================== -->
    <div class="container-fluid">
        <!-- ============================================================== -->
        <!-- Start Page Content -->
        <!-- ============================================================== -->

        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <form class="form-horizontal" method="post" action="">
                        <div class="card-body">
                            <h4 class="card-title">Nhập thông tin tài khoản</h4>
                            <div class="form-group row">
                                <label for="tentk" class="col-sm-3 text-end control-label col-form-label">Tên tài khoản</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" id="tentk" name="tentk" value="<?php echo $row['tentk'] ?>" required />
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="pass" class="col-sm-3 text-end control-label col-form-label">mật khẩu</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" id="pass" name="pass" value="" required />
                                </div>
                            </div>
                        </div>
                        <div class="border-top">
                            <div class="card-body">
                                <input type="submit" name="capnhat" class="btn btn-primary" value="Cập nhật">
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <!-- editor -->
        <?php
        require_once('footer.php');

        if (isset($_POST['capnhat'])) {
            $tentk = $_POST['tentk'];
            $pass = md5($_POST['pass']);

            $editsql = "UPDATE tbl_taikhoan SET tentk = '$tentk' , pass= '$pass'  WHERE id_tk = '$id_tk'";
            mysqli_query($conn, $editsql);
            //echo $themsql; exit();
            header("location: taikhoan_ds.php");
        }
        ?>