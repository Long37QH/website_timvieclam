<?php
ob_start();
include("header.php");
if (isset($_POST["btn_themtk"])) {
    $tentk = $_POST['tentk'];
    $pass = $_POST['pass'];
    $loaitk = 0;

    $sql = "INSERT INTO tbl_taikhoan (tentk, pass, loaitk ) VALUES ('$tentk','$pass','$loaitk')";
    mysqli_query($conn, $sql);
    //echo $themsql; exit();
    header("location: taikhoan_ds.php");
}
?>
<div class="page-wrapper">
    <!-- ============================================================== -->
    <!-- nôi dung trang lam việc-->
    <!-- ============================================================== -->
    <div class="page-breadcrumb">
        <div class="row">
            <div class="col-12 d-flex no-block align-items-center">
                <h4 class="page-title">Danh sách tài khoản</h4>
                <div class="ms-auto text-end">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
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
        <!-- <a href="taikhoan_them.php" class="btn btn-primary mb-2"><i class="fas fa-table"></i>Thêm mới</a> -->
        <!-- Button trigger modal -->
        <button type="button" class="btn btn-primary mb-2" data-bs-toggle="modal" data-bs-target="#exampleModal">
            <i class="fas fa-table"></i> Thêm mới
        </button>

        <!-- Modal -->
        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Thêm tài khoản quản trị</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <form action="" method="post">
                            <div class="form-group">
                                <label for="name">Tên tài khoản</label>
                                <input type="text" class="form-control" id="name" name="tentk" placeholder="Nhập tên">
                            </div>
                            <div class="form-group">
                                <label for="pass">mật khẩu</label>
                                <input type="pass" class="form-control" id="text" name="pass" placeholder="Nhập pass">
                            </div>

                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Đóng</button>
                        <button type="submit" name="btn_themtk" class="btn btn-primary">Thêm mới</button>
                    </div>
                    </form>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Danh sách tài khoản</h5>
                        <div class="table-responsive">
                            <?php
                            include('../model/config.php');
                            $taikhoan = "SELECT * FROM tbl_taikhoan";

                            $re = mysqli_query($conn, $taikhoan);

                            $data = [];

                            $TT = 1;
                            while ($row = mysqli_fetch_array($re, MYSQLI_ASSOC)) {
                                $data[] = array(
                                    //'TT' => $TT,
                                    'id_tk' => $row['id_tk'],
                                    'tentk' => $row['tentk'],
                                    'pass' => $row['pass'],
                                    'loaitk' => $row['loaitk'],
                                );
                                //$TT++;
                            }
                            ?>
                            <table id="zero_config" class="table table-striped table-bordered">
                                <thead>
                                    <tr>
                                        <th><strong>TT</strong></th>
                                        <th><strong>Tên tài khoản</strong></th>
                                        <th><strong>Mật khẩu</strong></th>
                                        <th><strong>Loại tài khoản</strong></th>
                                        <th><strong>Tác vụ</strong></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php foreach ($data as $row) : ?>
                                        <tr>
                                            <td><?php echo $row['id_tk']; ?></td>
                                            <td><?php echo $row['tentk']; ?></td>
                                            <td><?php echo $row['pass']; ?></td>
                                            <td><?php echo $row['loaitk']; ?></td>
                                            <td>
                                                <a href="taikhoan_sua.php?sid=<?php echo $row['id_tk'];?>" class="btn btn-info"> <i class="mdi mdi-pencil"></i> Sửa</a>
                                                <a onclick="return confirm('bạn có muốn xoá không ?');" class="btn btn-danger" href="taikhoan_xoa.php?sid=<?php echo $row['id_tk']; ?>"> <i class="fas fa-trash-alt"></i> Xoá</a>
                                            </td>
                                        </tr>
                                    <?php endforeach; ?>
                                    </tfoot>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- footer -->
    <?php
    include("footer.php");
    ?>