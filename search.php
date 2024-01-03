<?php
include("model/config.php");

// Lấy giá trị tìm kiếm từ yêu cầu GET
$searchTerm = isset($_GET['timkiem']) ? $_GET['timkiem'] : '';

// Truy vấn SQL để tìm kiếm công việc
$list_job = "SELECT job.job_id, u.user_name,job.tencv,job.hinhanh,job.khuvuc,job.muc_luong,job.hinhthuc_lv,job.ngay_het  
            FROM tbl_job as job
            INNER JOIN tbl_user2 as u ON u.id_user = job.id_user
            WHERE trangthaibai = 'Phê duyệt' AND (job.tencv LIKE '%$searchTerm%' OR job.khuvuc LIKE '%$searchTerm%')
            ORDER BY job_id DESC LIMIT 6";

$re = mysqli_query($conn, $list_job);
$data = [];


while ($row = mysqli_fetch_array($re, MYSQLI_ASSOC)) {
    $data[] = array(
        "job_id" => $row["job_id"],
        'tencv' => $row['tencv'],
        'hinhanh' => $row['hinhanh'],
        'user_name' => $row['user_name'],
        'khuvuc' => $row['khuvuc'],
        'muc_luong' => $row['muc_luong'],
        'hinhthuc_lv' => $row['hinhthuc_lv'],
        'ngay_het' => $row['ngay_het'],
    );
}

// Hiển thị kết quả tìm kiếm
foreach ($data as $row) {
  echo '<div class="job d-flex">';
  
  echo '<div class="job-top">';
  $link = "job-profile-detail.php?sid=" . urlencode(base64_encode($row['job_id']));
  echo '<a class="" href="' . $link . '"><img src="public/images/' . $row['hinhanh'] . '" alt=""></a>';
  echo '</div>';

  echo '<div class="job-content">';
  echo '<div class="job-title"><a href="' . $link . '">' . $row['tencv'] . '</a></div>';
  echo '<div class="job-company"><p>' . $row['user_name'] . '</p></div>';
  echo '<div class="job-review d-flex">';
  echo '<div class="job-review-adr"><i class="fas fa-map-marker-alt"></i> <span>' . $row['khuvuc'] . '</span></div>';
  echo '<div class="job-review-price"><i class="fas fa-money-bill-wave"></i> <span>' . $row['muc_luong'] . '</span></div>';
  echo '<div class="job-date"><i class="fas fa-clock"></i> ' . $row['ngay_het'] . '</div>';
  echo '</div>';
  echo '<button class="btn_job"><span>' . $row['hinhthuc_lv'] . '</span></button>';
  echo '<div class="apply"><a style="border:1px solid #666666;border-radius: 20px; float:right; padding: 2px 12px 2px 12px;" href="' . $link . '"><i class="fa-solid fa-paper-plane"></i> Ứng tuyển</a></div>';

  echo '</div>'; // Kết thúc job-content
  echo '</div>'; // Kết thúc job d-flex
}
?>
