<?php
ob_start();
include("header.php");
include('../model/config.php');
?>
<div class="page-wrapper">
    <!-- ============================================================== -->
    <!-- nôi dung trang lam việc-->
    <!-- ============================================================== -->
    <div class="page-breadcrumb">
        <div class="row">
            <div class="col-12 d-flex no-block align-items-center">
                <h4 class="page-title">Danh sách nhà tuyển dụng</h4>
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

        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Danh sách nhà tuyển dụng</h5>
                        <div class="table-responsive">
                            <?php

                            $sql = "SELECT * FROM tbl_user2
                                    INNER JOIN tbl_taikhoan ON tbl_taikhoan.id_user = tbl_user2.id_user
                                    WHERE tbl_taikhoan.loaitk = 1";

                            $re = mysqli_query($conn, $sql);

                            $data = [];

                            $TT = 1;
                            while ($row = mysqli_fetch_array($re, MYSQLI_ASSOC)) {
                                $data[] = array(
                                    'TT' => $TT,
                                    'id_user' => $row['id_user'],
                                    'user_name' => $row['user_name'],
                                    'phone' => $row['phone'],
                                    'email' => $row['email'],
                                    'diachi' => $row['diachi'],
                                );
                                $TT++;
                            }
                            ?>
                            <table id="zero_config" class="table table-striped table-bordered">
                                <thead>
                                    <tr>
                                        <th><strong>TT</strong></th>
                                        <th><strong>Tên nhà tuyển dụng</strong></th>
                                        <th><strong>Số điện thoại</strong></th>
                                        <th><strong>email</strong></th>
                                        <th><strong>Địa chỉ</strong></th>
                                        <th><strong>Tác vụ</strong></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php foreach ($data as $row) : ?>
                                        <tr>
                                            <td><?php echo $row['TT']; ?></td>
                                            <td><?php echo $row['user_name']; ?></td>
                                            <td><?php echo $row['phone']; ?></td>
                                            <td><?php echo $row['email']; ?></td>
                                            <td><?php echo $row['diachi']; ?></td>
                                            <td>   
                                                <a onclick="return confirm('bạn có muốn xoá không ?');" class="btn btn-danger" href="#?sid=<?php echo $row['id_user']; ?>"> <i class="fas fa-trash-alt"></i> Xoá</a>
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