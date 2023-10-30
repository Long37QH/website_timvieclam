<?php
include('header.php');
?>
<div class="page-wrapper">
    <!-- ============================================================== -->
    <!-- nôi dung trang lam việc-->
    <!-- ============================================================== -->
    <div class="page-breadcrumb">
        <div class="row">
            <div class="col-12 d-flex no-block align-items-center">
                <h4 class="page-title">Quản lý nhóm ngành nghề</h4>
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
        <a href="nganh_them.php" class="btn btn-primary mb-2"><i class="fas fa-table"></i> Thêm mới</a>
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Danh sách các ngành</h5>
                        <div class="table-responsive">
                            <?php
                            include('../model/config.php');
                            $career = "SELECT * FROM tbl_career";

                            $re = mysqli_query($conn, $career);

                            $data = [];

                            $TT = 1;
                            while ($row = mysqli_fetch_array($re, MYSQLI_ASSOC)) {
                                $data[] = array(
                                    //'TT' => $TT,
                                    'id_career' => $row['id_career'],
                                    'tennganh' => $row['tennganh'],
                                    'mota' => $row['mota'],

                                );
                                //$TT++;
                            }
                            ?>
                            <table id="zero_config" class="table table-striped table-bordered">
                                <thead>
                                    <tr>
                                        <th><strong>TT</strong></th>
                                        <th><strong>Tên ngành</strong></th>
                                        <th style="width: 550px;" ><strong>mô tả</strong></th>
                                        <th><strong>Tác vụ</strong></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php foreach ($data as $row) : ?>
                                        <tr>
                                            <td><?php echo $row['id_career']; ?></td>
                                            <td><?php echo $row['tennganh']; ?></td>
                                            <td><?php echo $row['mota']; ?></td>
                                            <td>
                                                <a href="nganh_sua.php?sid=<?php echo $row['id_career']; ?>" class="btn btn-info"> <i class="mdi mdi-pencil"></i> Sủa</a>
                                                <a onclick="return confirm('bạn có muốn xoá không ?');" class="btn btn-danger" href="nganh_xoa.php?sid=<?php echo $row['id_career']; ?>"> <i class="fas fa-trash-alt"></i> Xoá</a>
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
    <?php require_once('footer.php') ?>