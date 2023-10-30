<?php
include("header.php");
?>
<!-- body -->
<div class="banner-ntd">
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
        <a href="#" class="">
          <button type="button" class="el-button btn-block mb-n mt-10 post-news">
            <span>Đăng Tin tuyển dụng</span>
          </button></a>
      </div>
      <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
        <a href="service-file.html" class=""><button type="button" class="el-button btn-block mb-n mt-10 el-button--primary selective-uv">
            <span>Lọc hồ sơ ứng viên</span>
          </button></a>
      </div>

    </div>
  </div>
</div>
<!-- Tìm Kiếm Việc Làm -->
<form class="background-search-job" action="" method="get">
  <div class="container">
    <div class="row search-job ml-1">
      <div class="col-4 mt-3 my-0 px-1">
        <span class="ctn-icon1"> <i class="fa fa-briefcase" aria-hidden="true"></i></span>
        <input class="form-control search-job__input-name ui-autocomplete-input" value="" placeholder="Tên công việc, vị trí bạn muốn..." id="keyword" autocomplete="off">
      </div>
      <div class="col-3 mt-3 px-1">
        <span class="ctn-icon"><i class="fa fa-map-marker" aria-hidden="true"></i></span>

        <select class="form-control search-job__input-location" id="select-state">
          <option value="">Tất cả địa điểm</option>
          <option value="1">Hà Nội</option>
          <option value="2">Hồ Chí Minh</option>
          <option value="3">Bình Dương</option>
          <option value="4">Bắc Ninh</option>
          <option value="5">Đồng Nai</option>
          <option value="6">Hưng Yên</option>
          <option value="7">Hải Dương</option>
          <option value="8">Đà Nẵng</option>
          <option value="9">Hải Phòng</option>
          <option value="10">An Giang</option>
          <option value="11">Bà Rịa-Vũng Tàu</option>
          <option value="12">Bắc Giang</option>
          <option value="13">Bắc Kạn</option>
          <option value="14">Bạc Liêu</option>
          <option value="15">Bến Tre</option>
          <option value="16">Bình Định</option>
          <option value="17">Bình Phước</option>
          <option value="18">Bình Thuận</option>
          <option value="19">Cà Mau</option>
          <option value="20">Cần Thơ</option>
          <option value="21">Cao Bằng</option>
          <option value="22">Cửu Long</option>
          <option value="23">Đắc Lắc</option>
          <option value="24">Đắc Nông</option>
          <option value="25">Điện Biên</option>
          <option value="26">Đồng Tháp</option>
          <option value="27">Gia Lai</option>
          <option value="28">Hà Giang</option>
          <option value="29">Hà Nam</option>
          <option value="30">Hà Tĩnh</option>
          <option value="31">Hậu Giang</option>
          <option value="32">Hoà Bình</option>
          <option value="33">Khánh Hoà</option>
          <option value="34">Kiên Giang</option>
          <option value="35">Kon Tum</option>
          <option value="36">Lai Châu</option>
          <option value="37">Lâm Đồng</option>
          <option value="38">Lạng Sơn</option>
          <option value="39">Lào Cai</option>
          <option value="40">Long An</option>
          <option value="41">Miền Bắc</option>
          <option value="42">Miền Nam</option>
          <option value="43">Miền Trung</option>
          <option value="44">Nam Định</option>
          <option value="45">Nghệ An</option>
          <option value="46">Ninh Bình</option>
          <option value="47">Ninh Thuận</option>
          <option value="48">Phú Thọ</option>
          <option value="49">Phú Yên</option>
          <option value="50">Quảng Bình</option>
          <option value="51">Quảng Nam</option>
          <option value="52">Quảng Ngãi</option>
          <option value="53">Quảng Ninh</option>
          <option value="54">Quảng Trị</option>
          <option value="55">Sóc Trăng</option>
          <option value="56">Sơn La</option>
          <option value="57">Tây Ninh</option>
          <option value="58">Thái Bình</option>
          <option value="59">Thái Nguyên</option>
          <option value="60">Thanh Hoá</option>
          <option value="61">Thừa Thiên Huế</option>
          <option value="62">Tiền Giang</option>
          <option value="63">Toàn Quốc</option>
          <option value="64">Trà Vinh</option>
          <option value="65">Tuyên Quang</option>
          <option value="66">Vĩnh Long</option>
          <option value="67">Vĩnh Phúc</option>
          <option value="68">Yên Bái</option>
          <option value="100">Nước Ngoài</option>
        </select>
      </div>
      <div class="col-3 mt-3 px-1">
        <span class="ctn-icon"><i class="fa fa-wrench" aria-hidden="true"></i></span>
        <select class="form-control search-job__input-categories">
          <option value="">Tất cả ngành nghề</option>
          <option value="10101">An toàn lao động</option>
          <option value="10102">Bán hàng kỹ thuật</option>
          <option value="10103">Bán lẻ / bán sỉ</option>
          <option value="10004">Báo chí / Truyền hình</option>
        </select>
      </div>
      <div class="col-2 mt-3 px-1">
        <span class="ctn-icon text-white pl-2 search-job--input"><i class="fa fa-search" aria-hidden="true"></i></span>
        <button type="submit" style="background-color:#f38121 ;" class="form-control search-job__input-submit btn btn-block btn-warning">Tìm
          Kiếm</button>
      </div>
    </div>
  </div>

  <!-- Tìm Kiếm Nâng Cao -->
  <div class="tittle-search">
    <span id="btn-show-advanced-search" data-toggle="collapse" data-target="#emoji">
      <i class="fa fa-angle-down"></i>
      Chọn tìm kiếm nâng cao
    </span>
  </div>
  <div class="box collapse container" id="emoji" style="background-color: #47a6dd;">
    <div class="row search-job ml-1">
      <div class="col-3 mt-2 mb-3 px-1">
        <span class="ctn-icon"><i class="fas fa-money-bill"></i></span>
        <select class="form-control search-job__input-location">
          <option value="">Tất cả mức lương</option>
          <option value="1">Dưới 3 triệu</option>
          <option value="2">3 - 5 triệu</option>
          <option value="3">5 - 7 Triệu</option>
          <option value="4">7 - 10 Triệu</option>
          <option value="5">12 - 15 Triệu</option>
          <option value="6">15 - 20 Triệu</option>
          <option value="7">20 - 30 Triệu</option>
          <option value="8">Trên 30 Triệu</option>
          <option value="9">Thỏa thuận</option>
        </select>
      </div>
      <div class="col-3 mt-2 mb-3 px-1">
        <span class="ctn-icon"><i class="far fa-chart-bar"></i></span>
        <select class="form-control search-job__input-location">
          <option value="">Tất cả kinh nghiệm</option>
          <option value="1">Chưa có</option>
          <option value="2">Dưới 1 năm</option>
          <option value="3"> 1 năm </option>
          <option value="4"> 2 năm </option>
          <option value="5"> 3 năm </option>
          <option value="6"> 4 năm </option>
          <option value="7"> 5 năm </option>
          <option value="8"> Trên 5 năm </option>
        </select>
      </div>
      <div class="col-3 mt-2 mb-3 px-1">
        <span class="ctn-icon"><i class="fas fa-user-clock"></i></span>
        <select class="form-control search-job__input-categories">
          <option value="">Hình thức làm việc</option>
          <option value="10101"> Toàn thời gian </option>
          <option value="10102"> Bán thời gian </option>
          <option value="10103"> Thực tập sinh </option>
          <option value="10004"> Remote - Làm việc từ xa </option>
        </select>
      </div>
      <div class="col-3 mt-2 mb-3 px-1">
        <span class="ctn-icon"><i class="fas fa-city"></i></span>
        <select class="form-control search-job__input-categories">
          <option value="">Tất cả lĩnh vực</option>
          <option value="10101"> Agency (Design/Development) </option>
          <option value="10102"> Agency (Marketing/Advertising) </option>
          <option value="10103"> Bán lẻ - Hàng tiêu dùng - FMCG </option>
          <option value="10004"> Bât động sản </option>
        </select>
      </div>
    </div>
  </div>
</form>
<!-- tim việc -->
<div class="test">
  <div class="list-title">
    <h3>Việc làm đang tuyển</h3>
  </div>
  <?php
  $list_job = "SELECT job.job_id, u.user_name,job.tencv,job.hinhanh,job.khuvuc,job.muc_luong,job.hinhthuc_lv,job.ngay_het  FROM tbl_job as job
                    INNER JOIN tbl_user as u ON u.id_user = job.id_user
                    WHERE trangthaibai = 'Hiển thị' ORDER BY job_id  DESC LIMIT 6";
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
  ?>
  <div class="job-list d-flex">
    <?php foreach ($data as $row) : ?>
      <div class="job d-flex">
        <div class="job-top">
          <a class="" href=""><img src="public/images/<?php echo $row['hinhanh']; ?>" alt=""></a>
        </div>
        <div class="job-content">
          <div class="job-title">
            <a href=""><?php echo $row['tencv']; ?></a>
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
        </div>
      </div>
    <?php endforeach; ?>
  
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
<!--  -->
<div class="row-list-pr bgGray">
  <div class="container">
    <div class="row relative">
      <div class="col-xs-12 col-sm-5">
        <h2 class="section-title-ntd">Đăng tin tuyển dụng Miễn phí</h2>
        <ul class="note-list-char list-char-pr">
          <li>
            <span class="cycle-green">1</span>
            <span class="text-note-char">Nhiều ứng viên xem tin</span>
          </li>
          <li>
            <span class="cycle-green marginTop0">2</span>
            <span class="text-note-char">Đăng tin nhanh chóng và nhận được nhiều hồ sơ ứng tuyển</span>
          </li>
          <li>
            <span class="cycle-green">3</span>
            <span class="text-note-char">Quản lý hồ sơ ứng viên thuận tiện</span>
          </li>
        </ul>
        <div>
          <a target="_blank" href="#" class="btn btn-orange-48">ĐĂNG TUYỂN NGAY
            <i class="fas fa-arrow-right icon-sprite-new icon-next-white"></i></a>
        </div>
      </div>
      <div class="col-xs-12 col-sm-7">
        <h4><img src="public/images/home-offer.png" class="pst-img-big" /></h4>
      </div>
    </div>
  </div>
</div>
<div class="box-number-system-candidate bg-white mt-4">
  <div class="container">
    <div class="row">
      <div class="col-md-4">
        <div class="col-section3-data">
          <div class="cycle-white"><i class="icon-hs-ntd"></i></div>
          <div class="col-section3-title">
            <strong class="col-section3-font">1.000.000+</strong><br /><span>Hồ sơ ứng tuyển</span>
          </div>
        </div>
      </div>
      <div class="col-md-4">
        <div class="col-section3-data">
          <div class="cycle-white"><i class="icon-ntv-ntd"></i></div>
          <div class="col-section3-title">
            <strong class="col-section3-font">500.000+</strong><br /><span>Ứng viên tiềm năng</span>
          </div>
        </div>
      </div>
      <div class="col-md-4">
        <div class="col-section3-data">
          <div class="cycle-white"><i class="icon-num-ut"></i></div>
          <div class="col-section3-title">
            <strong class="col-section3-font">12.000.000+</strong><br /><span>Lượt ứng tuyển</span>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<div class="row-list-pr bgGray">
  <div class="container">
    <div class="row">
      <div class="col-xs-12 col-sm-7">
        <h4><img src="public/images/home-offer-2.png" class="mar-img" /></h4>
      </div>
      <div class="col-xs-12 col-sm-5">
        <h2 class="section-title-ntd">Lọc hồ sơ</h2>
        <ul class="list-char-pr mt-5">
          <li>
            <span class="cycle-green">1</span>
            <span class="text-note-char">Tìm ứng viên tốt nhất trong thời gian ngắn nhất</span>
          </li>
          <li>
            <span class="cycle-green">2</span>
            <span class="text-note-char">Truy cập không giới hạn, dữ liệu hồ sơ người tìm việc chi
              tiết, chất lượng</span>
          </li>
          <li>
            <span class="cycle-green">3</span>
            <span class="text-note-char">Chủ động tìm ứng viên ngay hôm nay</span>
          </li>
        </ul>
        <div class="paddingTop10">
          <a target="_blank" href="service-file.html" class="btn btn-orange-48">LỌC HỒ SƠ ỨNG VIÊN NGAY
            <i class="fas fa-arrow-right icon-sprite-new icon-next-white"></i></a>
        </div>
      </div>
    </div>
  </div>
</div>
<div class="row-list-pr-hotline mt-4">
  <div class="container">
    <div class="row relative">
      <div class="div-dky-tv">
        <div class="row">
          <div class="col-xs-12 col-sm-4">
            <a href="#" class="btn btn-orange-52">ĐĂNG KÝ TƯ VẤN NGAY</a>
          </div>

          <div class="col-xs-12 col-sm-8">
            <div class="fontSize16 txt-36 txc-mb">
              hoặc vui lòng liên hệ với chúng tôi qua Hotline Hỗ trợ:
            </div>
            <div class="fontSize24 text-red txc-mb">
              (028) 7109 1111 <span class="hidden-xs">|</span>
              <br class="visible-xs" />(024) 7308 3879
            </div>
          </div>
          <div class="icon-telephone-ntd div-icon-gd">
            <i class="icon-goi-dien"></i>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<!--  -->
<!--  -->
<?php
include("footer.php");
?>