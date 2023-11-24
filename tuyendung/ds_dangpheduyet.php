<?php
include("header.php")
?>
<div class="mobile-menu-overlay"></div>
<!-- bat dâu phân mên làm việc -->
<div class="main-container">
    <div class="pd-ltr-20">

        <div class="page-header">
            <div class="row">
                <div class="col-md-12 col-sm-12">
                    <div class="title">
                        <h4>Danh sách bài đăng</h4>
                    </div>
                    <nav aria-label="breadcrumb" role="navigation">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="index.php">Trang Chủ</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Thống kê bài đăng đang chờ phê duyệt</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
        <?php
        $sql = 'SELECT job_id,user_name, tencv,hinhthuc_lv,hinhanh,khuvuc,trangthaibai FROM tbl_job j 
        INNER JOIN tbl_user u ON j.id_user = u.id_user
         WHERE trangthaibai = "Chờ phê duyệt" AND u.id_user=' . '"' . $id_user . '"';

        $re = mysqli_query($conn, $sql);

        $data = [];

        $TT = 0;
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
            $TT++;
        }
        ?>

        <div class="card-box mb-30">
            <!-- <h2 class="h4 pd-20">Bảng dịch vụ</h2> -->
            <div class="pd-10"></div>
            <table class="data-table table nowrap">
                <thead>
                    <tr>
                        <th class="table-plus datatable-nosort">TT</th>
                        <th>Tên Công ty</th>
                        <th>Vị trí</th>
                        <th>Hình ảnh</th>
                        <!-- <th>Mức lương</th> -->
                        <th>Khu vực</th>
                        <th>Hình thức </th>
                        <th>Trạng thái</th>
                        <th class="datatable-nosort">Hành động</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($data as $row) :
                        $job_id = $row['job_id']; // Lấy ID bài viết từ dữ liệu
                        // Mã hóa ID bài viết bằng base64_encode
                       
                    ?>
                        <tr>
                            <td class="table-plus"><?php echo $TT; ?></td>
                            <td style="width: 60px;"><?php echo $row['user_name']; ?></td>
                            <td style="width: 80px;"><?php echo $row['tencv']; ?></td>
                            <td>
                                <img src="../public/images/<?php echo $row['hinhanh']; ?>" style="width: 100px;" alt="">
                            </td>
                            <td><?php echo $row['khuvuc']; ?></td>
                            <td><?php echo $row['hinhthuc_lv']; ?></td>
                            <td><?php echo $row['trangthaibai']; ?></td>
                            <td>
                                <div class="dropdown">
                                    <a class="btn btn-link font-24 p-0 line-height-1 no-arrow dropdown-toggle" href="#" role="button" data-toggle="dropdown">
                                        <i class="dw dw-more"></i>
                                    </a>
                                    <div class="dropdown-menu dropdown-menu-right dropdown-menu-icon-list">
                                    <a onclick="return confirm('bạn có muốn xoá không ?');" class="dropdown-item" href="ds_baidang_xoa.php?sid=<?php echo $row['job_id']; ?>"><i class="dw dw-delete-3"></i> Xoá bài</a>
                                    </div>
                                </div>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>

        <?php
        include("footer.php");
        ?>