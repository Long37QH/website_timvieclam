<?php
ob_start();
include('header.php');
?>
<div class="page-wrapper">
    <!-- ============================================================== -->
    <!-- nôi dung trang lam việc-->
    <!-- ============================================================== -->
    <div class="page-breadcrumb">
        <div class="row">
            <div class="col-12 d-flex no-block align-items-center">
                <h4 class="page-title">Thêm mới nhóm ngành</h4>
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
                            <h4 class="card-title">Nhập thông tin ngành</h4>
                            <div class="form-group row">
                                <label for="tennganh" class="col-sm-3 text-end control-label col-form-label">Tên ngành</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" id="tennganh" name="tennganh" required />
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="mota" class="col-sm-3 text-end control-label col-form-label">Mô tả</label>
                                <div class="col-sm-9">
                                    <textarea class="form-control" id="mota" name="mota" required></textarea>
                                </div>
                            </div>
                        </div>
                        <div class="border-top">
                            <div class="card-body">
                                <input type="submit" name="them" class="btn btn-primary" value="Lưu lại">
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <!-- editor -->
        <?php require_once('footer.php') ?>
        <?php
        require_once('footer.php');
        include('../model/config.php');
        if (isset($_POST['them'])) {
            $tennganh = $_POST['tennganh'];
            $mota = $_POST['mota'];

            $themsql = "INSERT INTO tbl_career (tennganh, mota) VALUES ('$tennganh','$mota')";
            mysqli_query($conn, $themsql);
            //echo $themsql; exit();
            header("location: ./nganh_ds.php");
        }
        ?>