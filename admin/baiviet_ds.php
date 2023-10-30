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
                <h4 class="page-title">Quan lý bài viết</h4>
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

    <!-- bảng danh sách bài viết -->
    <div class="container-fluid">
        <!-- ============================================================== -->
        <!-- Start Page Content -->
        <!-- ============================================================== -->
        <a href="baiviet_them.php" class="btn btn-primary mb-2"><i class="fas fa-table"></i> Thêm mới</a>
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Danh sách bài viết</h5>
                        <div class="table-responsive">
                            <?php
                            include('../model/config.php');
                            $list_blog = "SELECT * FROM tbl_post";

                            $re = mysqli_query($conn, $list_blog);

                            $data = [];

                            $TT = 1;
                            while ($row = mysqli_fetch_array($re, MYSQLI_ASSOC)) {
                                $data[] = array(
                                    //'TT' => $TT,
                                    'baiviet_id' => $row['baiviet_id'],
                                    'tieude' => $row['tieude'],
                                    'tomtatbv' => $row['tomtatbv'],
                                    'hinhanh' => $row['hinhanh'],
                                    'loaibv' => $row['loaibv'],
                                    'trangthaibv' => $row['trangthaibv'],
                                    'tacgia' => $row['tacgia'],
                                    'ngaydang' => $row['ngaydang'],
                                );
                                //$TT++;
                            }
                            ?>
                            <table id="zero_config" class="table table-striped table-bordered">
                                <thead>
                                    <tr>
                                        <th style="width: 15px;"><strong>TT</strong></th>
                                        <th style="width: 100px;"><strong>Tên bài viết</strong></th>
                                        <th style="width: 150px;"><strong>Tóm tắt</strong></th>
                                        <th><strong>Hình ảnh</strong></th>
                                        <th><strong>Phân loại</strong></th>
                                        <th><strong>Trạng thái</strong></th>
                                        <th><strong>Chức năng</strong></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php foreach ($data as $row) : ?>
                                        <tr>
                                            <td><?php echo $row['baiviet_id']; ?></td>
                                            <td><?php echo $row['tieude']; ?></td>
                                            <td><?php echo $row['tomtatbv']; ?></td>
                                            <td>
                                                <img src="../public/css_timviec/images/blog/<?php echo $row['hinhanh']; ?>" style="width: 100px;" alt="">
                                            </td>
                                            <td><?php echo $row['loaibv']; ?></td>
                                            <td><?php echo $row['trangthaibv']; ?></td>

                                            <td>
                                                <a href="baiviet_sua.php?sid=<?php echo $row['baiviet_id']; ?>" class="btn btn-info"> <i class="mdi mdi-pencil"></i> Sủa</a>
                                                <a onclick="return confirm('bạn có muốn xoá không ?');" class="btn btn-danger" href="baiviet_xoa.php?sid=<?php echo $row['baiviet_id']; ?>"> <i class="fas fa-trash-alt"></i> Xoá</a>
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