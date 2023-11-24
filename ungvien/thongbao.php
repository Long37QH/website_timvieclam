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
                        <h4>Thống kê danh sách công ty phản hồi</h4>
                    </div>
                    <nav aria-label="breadcrumb" role="navigation">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="index.php">Trang Chủ</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Thống kê cv đã phản hồi</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
        <?php
        $sql = "SELECT tbl_job.job_id, tbl_job.tencv,tbl_job.vt_tuyendung,tbl_job.muc_luong,tbl_job.ngay_het,tbl_user.user_name,tbl_apply.trangthaicv,tbl_apply.phanhoi
							FROM tbl_apply 
							INNER JOIN tbl_job ON tbl_job.job_id = tbl_apply.job_id
							INNER JOIN tbl_user ON tbl_user.id_user = tbl_job.id_user
                            WHERE tbl_apply.trangthaicv = 'Đã phê duyệt'";

        $re = mysqli_query($conn, $sql);

        $data = [];

        $TT = 1;
        while ($row = mysqli_fetch_array($re, MYSQLI_ASSOC)) {
            $data[] = array(
                'TT' => $TT,
                "job_id" => $row["job_id"],
                'user_name' => $row['user_name'],
                'vt_tuyendung' => $row['vt_tuyendung'],
                'ngay_het' => $row['ngay_het'],
                'trangthaicv' => $row['trangthaicv'],
                'phanhoi' => $row['phanhoi'],
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
                        <th>Công ty</th>
                        <th>Vị trí</th>
                        <th>phản hồi của nhà tuyển dụng</th>
                        <!-- <th>Mức lương</th> -->
                        <th>TG ứng tuyển</th>
                        <th>Trạng thái cv</th>
                        <th class="datatable-nosort">Hành động</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($data as $row) :
                        $job_id = $row['job_id']; // Lấy ID bài viết từ dữ liệu
                        // Mã hóa ID bài viết bằng base64_encode
                        $encoded_id = base64_encode($job_id);
                        // Tạo liên kết sử dụng ID đã mã hóa
                        $link = "job-profile-detail.php?sid=" . urlencode($encoded_id);
                    ?>
                        <tr>
                            <td class="table-plus"><?php echo $row['TT']; ?></td>
                            <td style="width: 150px;"><?php echo $row['user_name']; ?></td>
                            <td><?php echo $row['vt_tuyendung']; ?></td>
                            <td><?php echo $row['phanhoi']; ?></td>
                            <td><?php echo $row['ngay_het']; ?></td>
                            <td><?php echo $row['trangthaicv']; ?></td>
                            <td>
                                <div class="dropdown">
                                    <a class="btn btn-link font-24 p-0 line-height-1 no-arrow dropdown-toggle" href="#" role="button" data-toggle="dropdown">
                                        <i class="dw dw-more"></i>
                                    </a>
                                    <div class="dropdown-menu dropdown-menu-right dropdown-menu-icon-list">
                                        <a class="dropdown-item" href="../<?php echo $link; ?>"><i class="dw dw-eye"></i> View</a>
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