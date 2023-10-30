<?php
ob_start();
include("header.php");
$mabaiviet = $_GET['sid'];
include('../model/config.php');
$sua_sql = "SELECT * FROM tbl_post WHERE baiviet_id = '$mabaiviet'";
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
                <h4 class="page-title">Sửa nội dung bài viết</h4>
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
                            <h4 class="card-title">Nhập thông tin bài viết</h4>
                            <div class="form-group row">
                                <label for="tieude" class="col-sm-3 text-end control-label col-form-label">Tên bài viết</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" id="tieude" name="tieude" value="<?php echo $row['tieude'] ?>" required />
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="tomtatbv" class="col-sm-3 text-end control-label col-form-label">Tóm tắt</label>
                                <div class="col-sm-9">
                                    <textarea class="form-control" id="tomtatbv" name="tomtatbv" required><?php echo $row['tomtatbv'] ?></textarea>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="noidung" class="col-sm-3 text-end control-label col-form-label">Nội dung</label>
                                <div class="col-sm-9">
                                    <textarea class="form-control" id="noidung" name="noidung" required><?php echo $row['noidung'] ?></textarea>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-3 text-end control-label col-form-label" for="hinhanh">Chọn ảnh</label>
                                <div class="col-md-9">
                                    <div class="custom-file">
                                        <input type="file" class="custom-file-input" id="hinhanh" name="hinhanh" />
                                        <div class="invalid-feedback">
                                            Example invalid custom file feedback
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="ttbaiviet" class="col-sm-3 text-end control-label col-form-label">Thứ tự bài viết</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" id="ttbaiviet" name="ttbaiviet" value="<?php echo $row['ttbaiviet'] ?>" required />
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="loaibv" class="col-sm-3 text-end control-label col-form-label">Loại bài viết</label>
                                <div class="col-md-9">
                                    <select class="select2 form-select shadow-none" id="loaibv" style="width: 100%; height: 36px" name="loaibv">
                                        <option value="Thị trường lao động">Thị trường lao động</option>
                                        <option value="Phỏng vấn thành công">Phỏng vấn thành công</option>
                                        <option value="Báo cáo khảo sát">Báo cáo khảo sát</option>
                                        <option value="Con đường sự nghiệp">Con đường sự nghiệp</option>
                                        <option value="Phát triển bản thân">Phát triển bản thân</option>
                                        <option value="Thư giãn">Thư giãn</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="tacgia" class="col-sm-3 text-end control-label col-form-label">Tác giả</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" id="tacgia" name="tacgia" value="<?php echo $row['tacgia'] ?>" required />
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="link_bvchitiet" class="col-sm-3 text-end control-label col-form-label">Đường link bài viết</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" id="link_bvchitiet" name="link_bvchitiet" value="<?php echo $row['link_bvchitiet'] ?>" required />
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="trangthaibv" class="col-sm-3 text-end control-label col-form-label">Trạng thái bài viết</label>
                                <div class="col-md-9">
                                    <select class="select2 form-select shadow-none" id="trangthaibv" style="width: 100%; height: 36px" name="trangthaibv">
                                        <option value="Hiển thị">Hiện thị</option>
                                        <option value="Ẩn">Ẩn</option>
                                    </select>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="ngaydang" class="col-sm-3 text-end control-label col-form-label">Thời gian đăng</label>
                                <div class="col-sm-9">
                                    <input type="date" class="form-control" id="ngaydang" name="ngaydang" value="<?php echo $row['ngaydang'] ?>" required />
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

    </div>
    <?php
    require_once('footer.php');

    if (isset($_POST['capnhat'])) {
        $tieude = $_POST['tieude'];
        $tomtatbv = $_POST['tomtatbv'];
        $noidung = $_POST['noidung'];
        $hinhanh = $_POST['hinhanh'];
        $link_bvchitiet = $_POST['link_bvchitiet'];
        $ttbaiviet = $_POST['ttbaiviet'];
        $loaibv = $_POST['loaibv'];
        $trangthaibv = $_POST['trangthaibv'];
        $tacgia = $_POST['tacgia'];
        $ngaydang = $_POST['ngaydang'];
        
        $editsql = "UPDATE tbl_post SET tieude = '$tieude' , tomtatbv = '$tomtatbv' ,noidung = '$noidung',link_bvchitiet = '$link_bvchitiet',ttbaiviet = '$ttbaiviet',loaibv = '$loaibv',trangthaibv = '$trangthaibv',tacgia = '$tacgia',ngaydang = '$ngaydang'  WHERE baiviet_id = '$mabaiviet';";
        
        //echo $editsql; exit();
        mysqli_query($conn, $editsql);  
        header("location: ./baiviet_ds.php");
    }
    ?>