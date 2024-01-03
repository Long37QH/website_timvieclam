<?php
include("header.php");

if (isset($_POST["btn_tim"])) {
  $timkiem = $_POST['timkiem'];
  $khuvuc = $_POST['khuvuc'];
  $id_career = $_POST['id_career'];

  $page = isset($_GET['page']) ? $_GET['page'] : 1;
  $limit = 6;
  $start = ($page - 1) * $limit;

  $list_job = "SELECT job.job_id, u.user_name,job.tencv,job.hinhanh,job.khuvuc,job.muc_luong,job.hinhthuc_lv,job.ngay_het  FROM tbl_job as job
               INNER JOIN tbl_user2 as u ON u.id_user = job.id_user
               WHERE trangthaibai = 'Phê duyệt' AND (job.id_career ='$id_career' OR job.khuvuc = '$khuvuc') ORDER BY job_id DESC LIMIT $start, $limit";
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

  $count_jobs = "SELECT COUNT(*) AS total FROM tbl_job WHERE trangthaibai = 'Phê duyệt'";
  $result = mysqli_query($conn, $count_jobs);
  $row = mysqli_fetch_assoc($result);
  $total_pages = ceil($row["total"] / $limit);
} else {
  $page = isset($_GET['page']) ? $_GET['page'] : 1;
  $limit = 6;
  $start = ($page - 1) * $limit;

  $list_job = "SELECT job.job_id, u.user_name,job.tencv,job.hinhanh,job.khuvuc,job.muc_luong,job.hinhthuc_lv,job.ngay_het  FROM tbl_job as job
               INNER JOIN tbl_user2 as u ON u.id_user = job.id_user
               WHERE trangthaibai = 'Phê duyệt' ORDER BY job_id DESC LIMIT $start, $limit";
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

  $count_jobs = "SELECT COUNT(*) AS total FROM tbl_job WHERE trangthaibai = 'Phê duyệt'";
  $result = mysqli_query($conn, $count_jobs);
  $row = mysqli_fetch_assoc($result);
  $total_pages = ceil($row["total"] / $limit);
}

// select ngành
$nganh = "SELECT * FROM `tbl_career`";
$re2 = mysqli_query($conn, $nganh);
$data2 = [];
while ($row2 = mysqli_fetch_array($re2, MYSQLI_ASSOC)) {
  $data2[] = array(
    'id_career' => $row2['id_career'],
    'tennganh' => $row2['tennganh'],
  );
}
?>
<div class="banner-ntd" style="background-image: url(public/images/banner-job.jpg);">
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-xs-12 hidden-xs col-sm-8 mt-4">
        <h1 class="txc text-white">
          <b>Tuyển dụng nhanh chóng, dễ dàng và hiệu quả hơn cùng Tìm Việc Làm
          </b>
        </h1>
        <div class="row">
          <div class="col-xs-12 col-sm-4 txc text-white">
            <div class="cycle-white">
              <i class="icon-hs-ntd"></i>
            </div>
            <h3>
              <div class="title-note-banner-ntd text-white">300.000 +</div>
              <div class="note-banner-ntd">Hồ sơ ứng tuyển</div>
            </h3>
          </div>
          <div class="col-xs-12 col-sm-4 txc text-white">
            <div class="cycle-white">
              <i class="icon-ntv-ntd"></i>
            </div>
            <h3>
              <div class="title-note-banner-ntd text-white">100.000 +</div>
              <div class="note-banner-ntd">Người tìm việc</div>
            </h3>
          </div>

          <div class="col-xs-12 col-sm-4 txc text-white">
            <div class="cycle-white">
              <i class="icon-num-ut"></i>
            </div>
            <h3>
              <div class="title-note-banner-ntd text-white">
                12.000.000 +
              </div>
              <div class="note-banner-ntd">Lượt ứng tuyển</div>
            </h3>
          </div>
        </div>
      </div>
    </div>
    <div class="row mt-5">
      <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6 txr">
        <a href="tuyendung/goidang.php" class="">
          <button type="button" class="el-button btn-block mb-n mt-10 post-news">
            <span>Đăng Tin tuyển dụng</span>
          </button></a>
      </div>
      <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
        <a href="tuyendung/ds_chopheduyet_uv.php" class=""><button type="button" class="el-button btn-block mb-n mt-10 el-button--primary selective-uv">
            <span>Lọc hồ sơ ứng viên</span>
          </button></a>
      </div>

    </div>
  </div>
</div>
<!-- body -->

<!-- Tìm Kiếm Việc Làm -->
<form class="background-search-job " id="searchForm" action="" method="post">
  <div class="container">
    <div class="row search-job ml-1 ">
      <div class="col-4 mt-3 my-0 px-1 mb-3">
        <input name="timkiem" class="form-control search-job__input-name ui-autocomplete-input" value="" placeholder="Tên công việc, vị trí bạn muốn..." id="timkiem" autocomplete="off">
      </div>
      <div class="col-3 mt-3 px-1">
        <!-- <span class="ctn-icon"><i class="fa fa-map-marker" aria-hidden="true"></i></span> -->

        <select class="form-control search-job__input-location" name="khuvuc" id="select-state">
          <option value="">Tất cả địa điểm</option>
          <?php foreach ($data as $row) : ?>
            <option value="<?php echo $row['khuvuc']; ?>"><?php echo $row['khuvuc']; ?></option>
          <?php endforeach; ?>
        </select>
      </div>
      <div class="col-3 mt-3 px-1">
        <!-- <span class="ctn-icon"><i class="fa fa-wrench" aria-hidden="true"></i></span> -->
        <select class="form-control search-job__input-categories" name="id_career">
          <option value="">Tất cả ngành nghề</option>
          <?php foreach ($data2 as $row2) : ?>
            <option value="<?php echo $row2['id_career']; ?>"><?php echo $row2['tennganh']; ?></option>
          <?php endforeach; ?>
        </select>
      </div>
      <div class="col-1 mt-3 px-1 mb-3">
        <button type="submit" name="btn_tim" style="background-color:#f38121 ;" class="form-control search-job__input-submit btn btn-block btn-warning">Tìm Kiếm</button>
      </div>
    </div>
  </div>
</form>

<!-- tim việc -->
<div class="test">
  <div class="list-title">
    <h3>Việc làm đang tuyển</h3>
  </div>

  <div class="job-list d-flex" id="jobList">
    <?php foreach ($data as $row) :
      $job_id = $row['job_id']; // Lấy ID bài viết từ dữ liệu
      // Mã hóa ID bài viết bằng base64_encode
      $encoded_id = base64_encode($job_id);
      // Tạo liên kết sử dụng ID đã mã hóa
      $link = "job-profile-detail.php?sid=" . urlencode($encoded_id);
    ?>
      <div class="job d-flex">
        <div class="job-top">
          <a class="" href="<?php echo $link; ?>"><img src="public/images/<?php echo $row['hinhanh']; ?>" alt=""></a>
        </div>
        <div class="job-content">
          <div class="job-title">
            <a href="<?php echo $link; ?>"><?php echo $row['tencv']; ?></a>
          </div>
          <div class="job-company">
            <p><?php echo $row['user_name']; ?></p>
          </div>
          <div class="job-review d-flex">
            <div class="job-review-adr">
              <i class="fas fa-map-marker-alt"></i> <span><?php echo $row['khuvuc']; ?></span>
            </div>
            <div class="job-review-price">
              <i class="fas fa-money-bill-wave"></i> <span><?php echo $row['muc_luong']; ?></span>
            </div>
            <div class="job-date">
              <i class="fas fa-clock"></i> <?php echo $row['ngay_het']; ?>
            </div>
          </div>
          <button class="btn_job"><span><?php echo $row['hinhthuc_lv']; ?></button>
          <div class="apply">
            <a style="border:1px solid #666666;border-radius: 20px; float:right; padding: 2px 12px 2px 12px;" href="<?php echo $link; ?>"><i class="fa-solid fa-paper-plane"></i> Ứng tuyển</a>
          </div>
        </div>
      </div>
    <?php endforeach; ?>
  </div>
  <!-- nút phân trang -->
  <div class="pagination">
    <a href="#" class="previous">&laquo;</a>
    <?php for ($i = 1; $i <= $total_pages; $i++) : ?>
      <a href="?page=<?php echo $i; ?>" <?php if ($i == $page) echo 'class="active"'; ?>>
        <?php echo $i; ?>
      </a>
    <?php endfor; ?>
    <a href="#" class="next">&raquo;</a>
  </div>
</div>

<div class="container">
  <div class="page-wrapper">
    <div class="post-slider">
      <h1 class="slider-title">Nhà tuyển dụng hàng đầu</h1>
      <i class="fas fa-chevron-left prev"></i>
      <i class="fas fa-chevron-right next"></i>
      <div class="post-wrapper">
        <?php foreach ($data as $row) : ?>
          <div class="post">
            <img src="public/images/<?php echo $row['hinhanh']; ?>" class="slider-image" alt="" />
          </div>
        <?php endforeach; ?>
      </div>
    </div>
  </div>
</div>
<!-- Thêm thư viện jQuery (nếu chưa có) -->
<script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>

<!-- Thêm JavaScript để xử lý AJAX -->
<script>
  // Hàm xử lý tìm kiếm bằng AJAX
  function searchJobs() {
    var searchTerm = $('#timkiem').val();

    // Gửi yêu cầu AJAX đến file xử lý tìm kiếm trên máy chủ
    $.ajax({
      type: 'GET',
      url: 'search.php', // Đường dẫn đến file PHP xử lý tìm kiếm
      data: {
        timkiem: searchTerm
      },
      success: function(data) {
        // Cập nhật nội dung trang với kết quả trả về từ máy chủ
        $('#jobList').html(data);
      },
      error: function() {
        alert('Đã có lỗi xảy ra trong quá trình tìm kiếm.');
      }
    });
  }

  // Gọi hàm searchJobs() khi ô tìm kiếm thay đổi giá trị
  $(document).ready(function() {
    $('#timkiem').on('input', function() {
      searchJobs();
    });
  });
</script>
<?php
include("footer.php");
?>