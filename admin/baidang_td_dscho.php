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
                <h4 class="page-title">Danh sách bài đang chờ phê duyệt</h4>
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

        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Danh sách bài đăng</h5>
                        <div class="table-responsive">
                            <?php
                            include('../model/config.php');
                            $list_ds = "SELECT job_id,user_name, tencv,hinhthuc_lv,hinhanh,khuvuc,trangthaibai 
                            FROM tbl_job j INNER JOIN tbl_user2 u ON j.id_user = u.id_user 
                            WHERE trangthaibai = 'Chờ phê duyệt';";

                            $re = mysqli_query($conn, $list_ds);

                            $data = [];

                            $TT = 1;
                            while ($row = mysqli_fetch_array($re, MYSQLI_ASSOC)) {
                                $data[] = array(
                                    //'TT' => $TT,
                                    'job_id' => $row['job_id'],
                                    'user_name' => $row['user_name'],
                                    'tencv' => $row['tencv'],
                                    'hinhanh' => $row['hinhanh'],
                                    'hinhthuc_lv' => $row['hinhthuc_lv'],
                                    'khuvuc' => $row['khuvuc'],
                                    'trangthaibai' => $row['trangthaibai'],

                                );
                                //$TT++;
                            }
                            ?>
                            <table id="zero_config" class="table table-striped table-bordered">
                                <thead>
                                    <tr>
                                        <th style="width: 15px;"><strong>TT</strong></th>
                                        <th style="width: 100px;"><strong>Tên Công ty</strong></th>
                                        <th style="width: 100px;"><strong>Vị trí</strong></th>
                                        <th style="width: 80px;"><strong>Hình ảnh</strong></th>
                                        <th style="width: 90px;"><strong>Khu vực</strong></th>
                                        <th style="width: 70px;"><strong>Hình thức </strong></th>
                                        <th style="width: 80px;"><strong>Trạng thái</strong></th>
                                        <th ><strong>Chức năng</strong></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php foreach ($data as $row) : ?>
                                        <tr>
                                            <td><?php echo $row['job_id']; ?></td>
                                            <td><?php echo $row['user_name']; ?></td>
                                            <td><?php echo $row['tencv']; ?></td>
                                            <td>
                                                <img src="../public/images/<?php echo $row['hinhanh']; ?>" style="width: 100px;" alt="">
                                            </td>
                                            <td><?php echo $row['khuvuc']; ?></td>
                                            <td><?php echo $row['hinhthuc_lv']; ?></td>
                                            <td><?php echo $row['trangthaibai']; ?></td>
                                            <td>
                                                <a href="baidang_td_pheduyet.php?sid=<?php echo $row['job_id']; ?>" class="btn btn-info"> <i class="mdi mdi-pencil"></i> phê duyệt</a>
                                                <a onclick="return confirm('bạn có muốn xoá không ?');" class="btn btn-danger" href="baidang_td_xoa.php?sid=<?php echo $row['job_id']; ?>"> <i class="fas fa-trash-alt"></i> Từ chối</a>
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