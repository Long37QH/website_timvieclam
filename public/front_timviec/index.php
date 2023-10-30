<?php
include("model/config.php"); 
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Tìm việc làm</title>
    <link
      rel="shortcut icon"
      href="https://cdn.worldvectorlogo.com/logos/bootstrap-4.svg"
      type="image/x-icon"
    />
    <link rel="stylesheet" href="plugin/bootstrap/css/bootstrap.min.css" />
    <link rel="stylesheet" href="plugin/fontawesome/css/all.min.css" />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css"
    />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css"
    />
    <link
      rel="stylesheet"
      type="text/css"
      href="http://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css"
    />
    <link rel="stylesheet" href="css/style.css" />
    <link rel="stylesheet" href="css_timviec/css/style-menu.css">
    <link rel="stylesheet" href="css_timviec/css/t_style.css">
   <link rel="stylesheet" href="css_timviec/css/job.css">

  </head>
  <body>
    <!-- menu -->
    <header class="container">
      <a href="index.html"><img class="logo" src="css_timviec/images/Logo.png" alt=""></a>
      <nav>
        <?php 
        $menu = "SELECT * FROM menu where trangthaiAH = 'Hiển thị'";
        $re = mysqli_query($conn,$menu);
        $data = [];
        $TT = 1;
        while($row = mysqli_fetch_array($re,MYSQLI_ASSOC)){
            $data[] = array(
                'tenMenu' => $row['tenMenu'],
                // 'link'=> $row['link'],
            );
        }
        ?>
        
          <ul>
          <?php foreach ($data as $row) : ?>
              <li>
                  <a href="index.html"><?php echo $row ['tenMenu']; ?> </a>
              </li>
            <?php endforeach; ?>
              <!-- <li>
                  <a href="Blog.html">Bài viết</a>
              </li>
              <li>
                  <a href="Blog.html">Tìm việc</a>
              </li>
              <li>
                <a href="Blog.html">Tuyển dụng</a>
              </li>
              <li>
                  <a href="contact.html">Liên hệ</a>
              </li>
              -->
              <li>
                <a href="#" class="menu-buttons"> Đăng nhập </a>
              </li> 
          </ul>
      </nav>
  </header>
    <!-- body -->
    <div class="banner-ntd">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-xs-12 hidden-xs col-sm-8 mt-4">
            <h1 class="txc text-white">
              <b
                >Tuyển dụng nhanh chóng, dễ dàng và hiệu quả hơn cùng Tìm Việc Làm
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
              <button
                type="button"
                class="el-button btn-block mb-n mt-10 post-news"
              >
                <span>Đăng Tin tuyển dụng</span>
              </button></a
            >
          </div>
          <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
            <a href="service-file.html" class=""
              ><button
                type="button"
                class="el-button btn-block mb-n mt-10 el-button--primary selective-uv"
              >
                <span>Lọc hồ sơ ứng viên</span>
              </button></a
            >
          </div>
          
        </div>
      </div>
    </div>
    <!-- Tìm Kiếm Việc Làm -->
    <div class="background-search-job" >
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
                  <span class="ctn-icon text-white pl-2 search-job--input"><i class="fa fa-search"
                          aria-hidden="true"></i></span>
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
  </div>
<!-- tim việc -->
<div class="test">
  <div class="list-title">
    <h3>Việc làm đang tuyển</h3>
  </div>
  <div class="job-list d-flex">
    <div class="job d-flex">
      <div class="job-top">
        <a class="" href=""><img src="images/ct2.jpg" alt=""></a>
      </div>
     <div class="job-content">
      <div class="job-title">
        <a href="">Junior Graphic Designer (Web)</a> 
      </div>
      <div class="job-company">
        <p>Công Ty Cổ Phần Tập Đoàn My House</p>
      </div>
      <div class="job-review d-flex">
        <div class="job-review-adr">
          <i class="fas fa-map-marker-alt"></i> <span> Khánh Hòa</span>
        </div>
        <div class="job-review-price">
          <i class="fas fa-money-bill-wave"></i> <span> 12 triệu - 15 triệu</span>
        </div>
        <div class="job-date">
          <i class="fas fa-clock"></i> 20/11/2023
        </div>
      </div>
      <button class="btn_job">Toàn thời gian</button>
     </div>
    </div>
    <div class="job d-flex">
      <div class="job-top">
        <a class="" href="company-detail.html"><img src="images/ct2.jpg" alt=""></a>
      </div>
     <div class="job-content">
      <div class="job-title">
        <a href="company-detail.html">Junior Graphic Designer (Web)</a> 
      </div>
      <div class="job-company">
        <p>Công Ty Cổ Phần Tập Đoàn My House</p>
      </div>
      <div class="job-review d-flex">
        <div class="job-review-adr">
          <i class="fas fa-map-marker-alt"></i> <span> Khánh Hòa</span>
        </div>
        <div class="job-review-price">
          <i class="fas fa-money-bill-wave"></i> <span> 12 triệu - 15 triệu</span>
        </div>
        <div class="job-date">
          <i class="fas fa-clock"></i> 20/11/2023
        </div>
      </div>
      <button class="btn_job">Toàn thời gian</button>
     </div>
    </div>
    <div class="job d-flex">
      <div class="job-top">
        <a class="" href=""><img src="images/ct2.jpg" alt=""></a>
      </div>
     <div class="job-content">
      <div class="job-title">
        <a href="">Junior Graphic Designer (Web)</a> 
      </div>
      <div class="job-company">
        <p>Công Ty Cổ Phần Tập Đoàn My House</p>
      </div>
      <div class="job-review d-flex">
        <div class="job-review-adr">
          <i class="fas fa-map-marker-alt"></i> <span> Khánh Hòa</span>
        </div>
        <div class="job-review-price">
          <i class="fas fa-money-bill-wave"></i> <span> 12 triệu - 15 triệu</span>
        </div>
        <div class="job-date">
          <i class="fas fa-clock"></i> 20/11/2023
        </div>
      </div>
      <button class="btn_job">Toàn thời gian</button>
     </div>
    </div>
    <div class="job d-flex">
      <div class="job-top">
        <a class="" href="company-detail.html"><img src="images/ct2.jpg" alt=""></a>
      </div>
     <div class="job-content">
      <div class="job-title">
        <a href="company-detail.html">Junior Graphic Designer (Web)</a> 
      </div>
      <div class="job-company">
        <p>Công Ty Cổ Phần Tập Đoàn My House</p>
      </div>
      <div class="job-review d-flex">
        <div class="job-review-adr">
          <i class="fas fa-map-marker-alt"></i> <span> Khánh Hòa</span>
        </div>
        <div class="job-review-price">
          <i class="fas fa-money-bill-wave"></i> <span> 12 triệu - 15 triệu</span>
        </div>
        <div class="job-date">
          <i class="fas fa-clock"></i> 20/11/2023
        </div>
      </div>
      <button class="btn_job">Toàn thời gian</button>
     </div>
    </div>
    <div class="job d-flex">
      <div class="job-top">
        <a class="" href=""><img src="images/ct4.png" alt=""></a>
      </div>
     <div class="job-content">
      <div class="job-title">
        <a href="">Junior Graphic Designer (Web)</a> 
      </div>
      <div class="job-company">
        <p>Công Ty Cổ Phần Tập Đoàn My House</p>
      </div>
      <div class="job-review d-flex">
        <div class="job-review-adr">
          <i class="fas fa-map-marker-alt"></i> <span> Khánh Hòa</span>
        </div>
        <div class="job-review-price">
          <i class="fas fa-money-bill-wave"></i> <span> 12 triệu - 15 triệu</span>
        </div>
        <div class="job-date">
          <i class="fas fa-clock"></i> 20/11/2023
        </div>
      </div>
      <button class="btn_job">Toàn thời gian</button>
     </div>
    </div>
    <div class="job d-flex">
      <div class="job-top">
        <a class="" href=""><img src="images/ct1.png" alt=""></a>
      </div>
     <div class="job-content">
      <div class="job-title">
        <a href="">Junior Graphic Designer (Web)</a> 
      </div>
      <div class="job-company">
        <p>Công Ty Cổ Phần Tập Đoàn My House</p>
      </div>
      <div class="job-review d-flex">
        <div class="job-review-adr">
          <i class="fas fa-map-marker-alt"></i> <span> Khánh Hòa</span>
        </div>
        <div class="job-review-price">
          <i class="fas fa-money-bill-wave"></i> <span> 12 triệu - 15 triệu</span>
        </div>
        <div class="job-date">
          <i class="fas fa-clock"></i> 20/11/2023
        </div>
      </div>
      <button class="btn_job">Toàn thời gian</button>
     </div>
    </div>
  </div>
</div>
  
    <div class="container">
      <div class="page-wrapper">
        <div class="post-slider">
          <h1 class="slider-title">Nhà tuyển dụng hàng đầu</h1>
          <i class="fas fa-chevron-left prev"></i>
          <i class="fas fa-chevron-right next"></i>
          <div class="post-wrapper">
            <div class="post">
              <img src="images/ct5.png" class="slider-image" alt="" />
            </div>
            <div class="post">
              <img src="images/ct5.png" class="slider-image" alt="" />
            </div>
            <div class="post">
              <img src="images/ct5.png" class="slider-image" alt="" />
            </div>
            <div class="post">
              <img src="images/ct5.png" class="slider-image" alt="" />
            </div>
            <div class="post">
              <img src="images/ct5.png" class="slider-image" alt="" />
            </div>
            <div class="post">
              <img src="images/ct5.png" class="slider-image" alt="" />
            </div>
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
                <span class="text-note-char"
                  >Đăng tin nhanh chóng và nhận được nhiều hồ sơ ứng tuyển</span
                >
              </li>
              <li>
                <span class="cycle-green">3</span>
                <span class="text-note-char"
                  >Quản lý hồ sơ ứng viên thuận tiện</span
                >
              </li>
            </ul>
            <div>
              <a target="_blank" href="#" class="btn btn-orange-48"
                >ĐĂNG TUYỂN NGAY
                <i
                  class="fas fa-arrow-right icon-sprite-new icon-next-white"
                ></i
              ></a>
            </div>
          </div>
          <div class="col-xs-12 col-sm-7">
            <h4><img src="images/home-offer.png" class="pst-img-big" /></h4>
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
                <strong class="col-section3-font">1.000.000+</strong><br /><span
                  >Hồ sơ ứng tuyển</span
                >
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="col-section3-data">
              <div class="cycle-white"><i class="icon-ntv-ntd"></i></div>
              <div class="col-section3-title">
                <strong class="col-section3-font">500.000+</strong><br /><span
                  >Ứng viên tiềm năng</span
                >
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="col-section3-data">
              <div class="cycle-white"><i class="icon-num-ut"></i></div>
              <div class="col-section3-title">
                <strong class="col-section3-font">12.000.000+</strong
                ><br /><span>Lượt ứng tuyển</span>
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
            <h4><img src="images/home-offer-2.png" class="mar-img" /></h4>
          </div>
          <div class="col-xs-12 col-sm-5">
            <h2 class="section-title-ntd">Lọc hồ sơ</h2>
            <ul class="list-char-pr mt-5">
              <li>
                <span class="cycle-green">1</span>
                <span class="text-note-char"
                  >Tìm ứng viên tốt nhất trong thời gian ngắn nhất</span
                >
              </li>
              <li>
                <span class="cycle-green">2</span>
                <span class="text-note-char"
                  >Truy cập không giới hạn, dữ liệu hồ sơ người tìm việc chi
                  tiết, chất lượng</span
                >
              </li>
              <li>
                <span class="cycle-green">3</span>
                <span class="text-note-char"
                  >Chủ động tìm ứng viên ngay hôm nay</span
                >
              </li>
            </ul>
            <div class="paddingTop10">
              <a target="_blank" href="service-file.html" class="btn btn-orange-48"
                >LỌC HỒ SƠ ỨNG VIÊN NGAY
                <i
                  class="fas fa-arrow-right icon-sprite-new icon-next-white"
                ></i
              ></a>
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
    <footer class="page-footer font-small mdb-color pt-4">
      <div
        class="container page-footer__bottom text-center text-md-left text-primary"
      >
        <div class="row text-center text-md-left mt-3 pb-3">
          <div class="col-md-3 col-lg-3 col-xl-3 mx-auto mt-3">
            <img src="images/Logo_White.png" alt="" class="footer-img" />
          </div>

          <div class="col-md-2 text__info col-lg-2 col-xl-2 mx-auto mt-3">
            <h6 class="text-uppercase mb-4 font-weight-bold text-white">
              VỀ CHÚNG TÔI
            </h6>
            <div class="text__info--title">
              <p>
                <a href="about.html">Về Timvieclam.xyz</a>
              </p>
              <!-- <p>
                <a href="#!">Quy Chế</a>
              </p> -->
              <p>
                <a href="security.html">Quy Định Bảo Mật</a>
              </p>
              <p>
                <a href="use.html">Thỏa Thuận Sử Dụng</a>
              </p>
              <p>
                <a href="regulations.html">Chính Sách BV Thông Tin Cá Nhân</a>
              </p>
            </div>
          </div>

          <hr class="w-100 clearfix d-md-none" />

          <div class="col-md-3 text__info col-lg-2 col-xl-2 mx-auto mt-3">
            <h6 class="text-uppercase mb-4 font-weight-bold text-white">
              CÔNG CỤ
            </h6>
            <div class="text__info--title">
              <p>
                <a href="#!">Quản Lý Tuyển Dụng</a>
              </p>
              <p>
                <a href="#!">Quản Lý Hồ Sơ</a>
              </p>
              <p>
                <a href="#!">Báo Giá</a>
              </p>
              <p>
                <a href="#!">Liên Hệ Tài Trợ Sự Kiện</a>
              </p>
            </div>
          </div>
          <hr class="w-100 clearfix d-md-none" />
          <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mt-3">
            <h6 class="text-uppercase mb-4 font-weight-bold text-white">
              Liên Hệ
            </h6>
            <div class="text__info--address">
              <p>
                <i class="fas fa-home mr-3"></i>182 Lê Duẩn , Vinh ,Nghệ An
              </p>
              <p><i class="fas fa-envelope mr-3"></i> tuandoan1788@gmail.com</p>
              <p><i class="fas fa-phone mr-3"></i> + 0838 989 945</p>
              <p><i class="fas fa-print mr-3"></i> + 01 234 567 89</p>
            </div>
          </div>
        </div>
        <hr class="w-100 clearfix d-md-none" />

        <div class="row page_footer--category">
          <div class="col-md-3 text__info col-lg-3 col-xl-3 mx-auto mt-3">
            <h6 class="text-uppercase mb-4 font-weight-bold text-white">
              Việc Làm Theo Ngành Nghề
            </h6>
            <div class="text__info--title">
              <p>
                <a href="#!">Việc Làm Kinh Doanh</a>
              </p>
              <p>
                <a href="#!">Việc Làm Bán Hàng</a>
              </p>
              <p>
                <a href="#!">Việc Làm Kế Toán</a>
              </p>
              <p>
                <a href="#!">Chăm Sóc Khách Hàng</a>
              </p>
              <div class="text__info--all">
                <p>
                  <a class="text-primary" href="#!">Xem Tất Cả</a>&nbsp;<i
                    class="fa fa-angle-double-right"
                  ></i>
                </p>
              </div>
            </div>
          </div>
          <hr class="w-100 clearfix d-md-none" />
          <div class="col-md-2 text__info col-lg-2 col-xl-2 mx-auto mt-3">
            <h6 class="text-uppercase mb-4 font-weight-bold text-white">
              Việc Làm Công Ty
            </h6>
            <div class="text__info--title">
              <p>
                <a href="#!">VinFast Tuyển Dụng</a>
              </p>
              <p>
                <a href="#!">Vinhuni Tuyển Dụng</a>
              </p>
              <p>
                <a href="#!">Family Tuyển Dụng</a>
              </p>
              <p>
                <a href="#!">Nhà Tao Tuyển Dụng</a>
              </p>
              <div class="text__info--all">
                <p>
                  <a class="text-primary" href="#!">Xem Tất Cả</a>&nbsp;<i
                    class="fa fa-angle-double-right"
                  ></i>
                </p>
              </div>
            </div>
          </div>
          <hr class="w-100 clearfix d-md-none" />
          <div class="col-md-3 text__info col-lg-2 col-xl-2 mx-auto mt-3">
            <h6 class="text-uppercase mb-4 font-weight-bold text-white">
              VIỆC LÀM THEO TỈNH
            </h6>
            <div class="text__info--title">
              <p>
                <a href="#!">Việc Làm Nghệ An</a>
              </p>
              <p>
                <a href="#!">Việc Làm Hà Nội</a>
              </p>
              <p>
                <a href="#!">Việc Làm Quảng Ngãi</a>
              </p>
              <p>
                <a href="#!">Việc Làm Vũng Tàu</a>
              </p>
              <div class="text__info--all">
                <p>
                  <a class="text-primary" href="#!">Xem Tất Cả</a>&nbsp;<i
                    class="fa fa-angle-double-right"
                  ></i>
                </p>
              </div>
            </div>
          </div>
          <hr class="w-100 clearfix d-md-none" />
          <div class="col-md-4 text__info col-lg-3 col-xl-3 mx-auto mt-3">
            <h6 class="text-uppercase mb-4 font-weight-bold text-white">
              Việc Làm Hấp Dẫn
            </h6>

            <div class="text__info--title">
              <p>
                <a href="#!">Tìm Việc Làm</a>
              </p>
              <p>
                <a href="#!">Việc Làm Thêm</a>
              </p>
              <p>
                <a href="#!">Lao Động Phổ Thong</a>
              </p>
              <p>
                <a href="#!">Thực Tập Sinh</a>
              </p>
              <div class="text__info--all">
                <p>
                  <a class="text-primary" href="#!">Xem Tất Cả</a>&nbsp;<i
                    class="fa fa-angle-double-right"
                  ></i>
                </p>
              </div>
            </div>
          </div>
        </div>
        <hr />
        <div class="row d-flex align-items-center">
          <div class="col-md-7 col-lg-8">
           
          </div>
          <div class="col-md-5 col-lg-4 ml-lg-0">
            <div class="text-center text-md-right">
              <ul class="list-unstyled list-inline">
                <li class="list-inline-item">
                  <a class="btn-floating--fb btn-sm rgba-white-slight mx-1">
                    <i class="fab fa-facebook-f"></i>
                  </a>
                </li>
                <li class="list-inline-item">
                  <a class="btn-floating--tw btn-sm rgba-white-slight mx-1">
                    <i class="fab fa-twitter"></i>
                  </a>
                </li>
                <li class="list-inline-item">
                  <a class="btn-floating--gg btn-sm rgba-white-slight mx-1">
                    <i class="fab fa-google-plus-g"></i>
                  </a>
                </li>
                <li class="list-inline-item">
                  <a class="btn-floating--link btn-sm rgba-white-slight mx-1">
                    <i class="fab fa-linkedin-in"></i>
                  </a>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </footer>
    <!--  -->
    <script src="plugin/jquery/jquery-3.5.1.min.js"></script>
    <script
      type="text/javascript"
      src="http://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"
    ></script>
    <script src="plugin/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
    <script src="js/main.js"></script>
  </body>
</html>
