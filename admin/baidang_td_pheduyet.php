<?php
ob_start();
include("header.php");
$job_id = $_GET['sid'];
include('../model/config.php');
$sua_sql = "SELECT trangthaibai,ngay_dang FROM tbl_job WHERE job_id = '$job_id'";
$result = mysqli_query($conn, $sua_sql);
$row = mysqli_fetch_assoc($result);
?>
<div class="page-wrapper">
    <!-- ============================================================== -->
    <!-- nôi dung trang lam việc-->
    <!-- ============================================================== -->
    <div class="page-breadcrumb">
        <div class="row">
            <div class="col-12 d-flex no-block align-items-center">
                <h4 class="page-title">Phê duyệt bài đăng</h4>
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
                            <h4 class="card-title">Phê duyệt bài đăng</h4>
                            <div class="form-group row">
                                <label for="trangthaibai" class="col-sm-3 text-end control-label col-form-label">Trạng thái bài đăng</label>
                                <div class="col-md-9">
                                    <select class="select2 form-select shadow-none" id="trangthaibai" style="width: 100%; height: 36px" name="trangthaibai">
                                        <option value="Phê duyệt">Phê duyệt</option>
                                        <option value="Chờ phê duyệt">Chờ phê duyệt</option>
                                        <option value="Huỷ">Huỷ</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="ngay_dang" class="col-sm-3 text-end control-label col-form-label">Thời gian đăng</label>
                                <div class="col-sm-9">
                                    <input type="date" class="form-control" id="ngay_dang" name="ngay_dang" value="<?php echo $row['ngay_dang'] ?>" required />
                                </div>
                            </div>

                        </div>
                        <div class="border-top">
                            <div class="card-body">
                                <input type="submit" name="capnhat" class="btn btn-primary" value="Phê duyệt">
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <!-- editor -->

    </div>
    <?php
    require_once('footer.php');

    if (isset($_POST['capnhat'])) {

        $trangthaibai = $_POST['trangthaibai'];
        $ngay_dang = $_POST['ngay_dang'];

        $editsql = "UPDATE tbl_job SET trangthaibai = '$trangthaibai',ngay_dang = '$ngay_dang'  WHERE job_id = '$job_id';";
        //echo $editsql; exit();
        mysqli_query($conn, $editsql);
        header("location: ./baidang_td_ds.php");
    }
    ?>