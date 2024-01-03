<?php
include('header.php');

include('../model/config.php');

if (isset($_POST["loc"])) {
    $user_name = $_POST['user_name'];
    $khuvuc = $_POST['khuvuc'];
    $hinhthuc_lv = $_POST['hinhthuc_lv'];
    $list_ds = "SELECT job_id,user_name, tencv,hinhthuc_lv,hinhanh,khuvuc,trangthaibai 
    FROM tbl_job j INNER JOIN tbl_user2 u ON j.id_user = u.id_user 
    WHERE trangthaibai = 'Chờ phê duyệt' and (user_name = '$user_name' or khuvuc = '$khuvuc' or hinhthuc_lv = '$hinhthuc_lv' );";

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
} else {
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
}

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
                            <form action="" method="post">
                                <div class="form-group row">
                                    <div class="col-md-4">
                                        <select class="select2 form-select shadow-none" id="user_name" style="width: 100%; height: 36px" name="user_name">
                                            <option value="">Công ty</option>
                                            <?php foreach ($data as $row) : ?>
                                                <option value="<?php echo $row['user_name']; ?>"><?php echo $row['user_name']; ?></option>
                                            <?php endforeach; ?>
                                        </select>
                                    </div>
                                    <div class="col-md-4">
                                        <select class="select2 form-select shadow-none" id="khuvuc" style="width: 100%; height: 36px" name="khuvuc">
                                            <option value="">Khu vực</option>
                                            <?php foreach ($data as $row) : ?>
                                                <option value="<?php echo $row['khuvuc']; ?>"><?php echo $row['khuvuc']; ?></option>
                                            <?php endforeach; ?>
                                        </select>
                                    </div>
                                    <div class="col-md-2">
                                        <select class="select2 form-select shadow-none" id="hinhthuc_lv" style="width: 100%; height: 36px" name="hinhthuc_lv">
                                            <option value="">Hình thức</option>
                                            <?php foreach ($data as $row) : ?>
                                                <option value="<?php echo $row['hinhthuc_lv']; ?>"><?php echo $row['hinhthuc_lv']; ?></option>
                                            <?php endforeach; ?>
                                        </select>
                                    </div>
                                    <div class="col-md-2">
                                        <button type="submit" name="loc" class="btn btn-primary "><i class="fa-solid fa-filter"></i> Lọc thông tin</button>
                                        <!-- <input type="submit" value="Lọc thông tin" name="loc" class="btn btn-info "> -->
                                    </div>
                            </form>
                            <div style="margin: 5px;"></div>
                            <table id="zero_config" class="table table-striped table-bordered">

                                <thead>
                                    <tr>
                                        <th style="width: 15px;"><strong>TT</strong></th>
                                        <th style="width: 100px;"><strong>Tên Công ty</strong></th>
                                        <th style="width: 100px;"><strong>Vị trí</strong></th>
                                        <th style="width: 80px;"><strong>Hình ảnh</strong></th>
                                        <th style="width: 80px;"><strong>Khu vực</strong></th>
                                        <th style="width: 70px;"><strong>Hình thức </strong></th>
                                        <th style="width: 80px;"><strong>Trạng thái</strong></th>
                                        <th><strong>Chức năng</strong></th>
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