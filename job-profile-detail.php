<?php include("header.php");
$encoded_id = $_GET['sid'];
$job_id = base64_decode(urldecode($encoded_id));
$sua_sql = "SELECT * FROM tbl_job j INNER JOIN tbl_user u on u.id_user=j.id_user WHERE job_id = '$job_id'";
$result = mysqli_query($conn, $sua_sql);
$row = mysqli_fetch_assoc($result);
?>

<!-- Detail -->
<section class="search-result-list-detail template-2">
    <div class="container">
        <div class="row no-gutters">
            <div class="row">
                <!-- thanh chuyển trang -->
                <div class="col-md-12 col-lg-12">
                    <ul class="breadcrumb">
                        <li>
                            <a href="#">Trang chủ</a>
                        </li>
                        <li>
                            <a href="#">Giới thiệu việc làm</a>
                        </li>
                        <li><a href="#">Công ty cổ phần 1 thành viên</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-8 col-custom-xl-9 bg-white">

                <div class="tab-content ">
                    <div class="tab-pane active" id="profile">
                        <div class="bg-white">
                            <div class="row">

                                <div class="col-lg-4 col-sm-6 item-blue">
                                    <div class="mw-box-item detail-header">
                                        <div class="info">
                                            <div class="info-candidate">
                                                <div style="width:200px" class="picture">
                                                    <div class="image-cover"><img class="lazy-load" src="public/images/<?php echo $row['hinhanh'] ?>" lazy="loaded"></div>
                                                </div>
                                                <div class="info-basic">
                                                    <div class="white">
                                                        <h6 style="font-weight: bold;color:#f38121; margin-top:8px;" class="title capitalize"><?php echo $row['user_name'] ?></h6>
                                                        <h6 class="sub-title capitalize cv-title"><?php echo $row['tencv'] ?></h6>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="bg-half"></div>
                                    </div>
                                </div>

                                <div class="col-lg-4 col-sm-6 item-blue">
                                    <div class="detail-box has-background">

                                        <ul>
                                            <li> <strong><i class="fas fa-calendar-day icon-detail"></i>Trải qua</strong>
                                                <p><?php echo $row['kinh_nghiem'] ?></p>
                                            </li>
                                            <li> <strong><i class="fas fa-business-time icon-detail"></i>Hình thức </strong>
                                                <p><?php echo $row['hinhthuc_lv'] ?></p>
                                            </li>
                                            <li> <strong><i class="fas fa-briefcase icon-detail"></i>Ngày đăng</strong>
                                                <p><?php echo $row['ngay_dang'] ?></p>
                                                </p>
                                            </li>
                                            <li> <strong><i class="fas fa-briefcase icon-detail"></i>Mức lương đề nghị</strong>
                                                <p><?php echo $row['muc_luong'] ?></p>
                                                </p>
                                            </li>

                                        </ul>
                                    </div>
                                </div>


                                <div class="col-lg-4 col-sm-6 item-blue">
                                    <div class="detail-box has-background">
                                        <ul>


                                            <li><strong><i class="fas fa-calendar-check icon-detail"></i></i>Ngày hết hạn</strong>
                                                <p><?php echo $row['ngay_het'] ?></p>
                                            </li>
                                            <li><strong><i class="fas fa-calendar-check icon-detail"></i>Khu vực</strong>
                                                <p><?php echo $row['khuvuc'] ?></p>
                                            </li>
                                            <li>
                                                <strong><i class="fas fa-chart-bar icon-detail"></i>Trình độ học vấn</strong>
                                                <p> <?php echo $row['bang_cap'] ?></p>

                                            </li>
                                            <li>
                                                <strong><i class="fas fa-chart-bar icon-detail"></i>Độ tuổi</strong>
                                                <p> <?php echo $row['do_tuoi'] ?></p>

                                            </li>
                                        </ul>
                                    </div>
                                </div>

                            </div>
                            <div class="alert alert-warning alert-service"><span>
                                    Bạn đang xem hồ sơ công ty đã được phân loại trên TimViecLam.xyz. Hồ sơ có giá trị
                                    <span class="text-danger">5</span> điểm.

                                    <a href="#" target="_blank" class=""> Bấm vào đây </a>để đăng ký dịch vụ.
                                </span>
                                <div class="box-function">
                                    <!-- <button type="button" class="el-button el-button--info is-plain"><span>&nbsp;Lưu hồ sơ
                                        </span></button> -->
                                    <button type="button" style="padding: 10px;" class="el-button btn-call-action el-button--warning"><span>&nbsp;Ứng tuyển ngay
                                        </span></button>
                                </div>
                            </div>
                        </div>

                        <div class="detail-row">

                            <!-- mục tiêu nghề nghiêp -->
                            <div class="detail-row">


                                <div class="common-info item-info pt-n">
                                    <h4 class="head-title"><span class="bg"></span> Mô tả việc làm
                                        </span>
                                        </h3>
                                        <div class="content">
                                            <div class="ort-description">
                                                <article class="pre-line"><?php echo $row['mota_cv'] ?>
                                                    <br>Góp phần xây dựng công ty ngày càng phát triển.
                                                </article>
                                            </div>

                                        </div>
                                </div>
                            </div>
                        </div>
                        <!-- học vấn nghê fnghiejep -->

                        <!-- yêu cầu CV -->

                        <!-- Thông tin khác -->
                        <div class="detail-row">
                            <h3 class="detail-title">Kỹ năng & kinh nghiệm</h3>
                            <div class="content_fck">
                                <ul>
                                    <li> Bạn có ít nhất 3 năm kinh nghiệm làm Nhà thiết kế sản phẩm.
                                    </li>
                                    <li> Bạn có kinh nghiệm sử dụng Sketch và InVision hoặc Framer X
                                    </li>
                                    <li> Bạn đã có một số kinh nghiệm làm việc trước đây trong môi trường linh hoạt - Hãy nghĩ đến các cuộc chạy nước rút trong hai tuần.
                                    </li>
                                    <li> Bạn đã quen với việc sử dụng Jira và Confluence trong quy trình làm việc của mình
                                    </li>
                                    <li> Bạn có ít nhất 3 năm kinh nghiệm làm Nhà thiết kế sản phẩm.
                                    </li>
                                    <li> Bạn có ít nhất 3 năm kinh nghiệm làm Nhà thiết kế sản phẩm.
                                    </li>
                                </ul>
                            </div>
                            <h3 class="detail-title">Trách nhiệm chính</h3>
                            <div class="content_fck">
                                <ul>
                                    <li> Tham gia vào mọi bước của chu trình thiết kế sản phẩm từ khám phá đến bàn giao cho nhà phát triển và thử nghiệm chấp nhận của người dùng.
                                    </li>
                                    <li> Bạn có kinh nghiệm sử dụng Sketch và InVision hoặc Framer X
                                    </li>
                                    <li> Làm việc với BA, quản lý sản phẩm và nhóm công nghệ để lãnh đạo Thiết kế Sản phẩm
                                    </li>
                                    <li>Đóng góp vào các phiên phác thảo có sự tham gia của những người không phải là nhà thiết kếTạo, lặp lại và duy trì các sản phẩm giao diện người dùng bao gồm các tệp phác thảo, hướng dẫn kiểu, nguyên mẫu có độ trung thực cao, thông số kỹ thuật tương tác vi mô và thư viện mẫu.
                                    </li>
                                    <li> Đảm bảo các lựa chọn thiết kế được dẫn dắt bởi dữ liệu bằng cách xác định các giả định để kiểm tra từng lần chạy nước rút và làm việc với các nhà phân tích trong nhóm của bạn để lên kế hoạch cho các phiên kiểm tra khả năng sử dụng được kiểm duyệt.
                                    </li>
                                    <li> Bạn có ít nhất 3 năm kinh nghiệm làm Nhà thiết kế sản phẩm.
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <!-- share -->
                        <!-- Nộp ứng tuyển -->
                        <div class="job-detail-bottom sticky">
                            <div class="job-detail-bottom-wrapper">
                                <div class="apply-now-content">
                                    <div class="job-desc">
                                        <a href="#"><i class="far fa-envelope-open icon-detail"></i><span class="text">Hồ sơ: 3 điểm</span></a>
                                    </div>
                                    <button type="button" class="btn btn-outline-warning"><!----><!---->&nbsp;Xem liên hệ
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class=" tab-pane " id="company ">
                        <section class="company-overview ">
                            <div class="company-introduction ">
                                <div class="company-info ">
                                    <div class="info ">
                                        <div class="img ">
                                            <a class="logo-company " href="#l " title="CÔNG TY TNHH ĐIỆN KHÍ QUỐC QUANG (VIỆT NAM) "><img src="public/css_timviec/images/cty3.png " alt="CÔNG TY TNHH ĐIỆN KHÍ QUỐC QUANG (VIỆT NAM) "></a>
                                            <div class="title-company "><a class="name " title="CÔNG TY TNHH ĐIỆN KHÍ QUỐC QUANG (VIỆT NAM) " href="# ">CÔNG TY TNHH ĐIỆN KHÍ QUỐC QUANG (VIỆT NAM)</a></div>
                                        </div>
                                        <div class="content "> <strong>Địa điểm</strong>Lô số 12 Khu công nghiệp Điện Nam - Điện Ngọc, Phường Điện Nam Bắc, Thị Xã Điện Bàn, Quảng Nam
                                            <hr>
                                            <strong>Thông tin công ty</strong>
                                            <ul>
                                                <li> <span class="fas fa-user icon-company "></span> Người liên hệ: Phòng Nhân Sự</li>
                                                <li> <span class="fas fa-user-friends icon-company "></i></span> Qui mô công ty: 1 000 </li>
                                                <li> <span class="fas fa-gavel icon-company "></span> Hình thức: 100% vốn nước ngoài </li>
                                                <li> <span class="fas fa-link icon-company "></span> Website: www.fb.com </li>
                                            </ul>
                                            <input type="hidden " name="isTS " id="isTS " value="0 ">
                                            <input type="hidden " name="emp_websitets " id="emp_websitets " value=" ">

                                            <div class="company-follow ">
                                                <span id="totalFollowers " class="follower-number "><strong id="countFollowers ">108</strong> followers</span>
                                                <div class="btn-follow icon-follow "><a class="btn-gradient " href="# " id="follow_act " rel="1 " title="Follow "><em class="fa fa-check-circle-o "></em></a></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="company-jobs-opening ">
                                <h3 class="company-heading-title ">Việc làm đang tuyển</h3>
                                <div class="row ">
                                    <div class="col-sm-6 ">
                                        <div class="job-item ">
                                            <div class="figure ">
                                                <div class="figcaption ">
                                                    <div class="timeago "><span> <em class="set_jobnew ">(Mới)</em></span></div>
                                                    <div class="title "> <a href="# " title="Chuyên viên quản lý tài liệu chất lượng - Document Control Center ">Chuyên
                                                            viên quản lý tài liệu chất lượng - Document Control
                                                            Center</a> </div>
                                                    <div class="caption ">
                                                        <p class="company-name ">CÔNG TY TNHH ĐIỆN KHÍ QUỐC QUANG (VIỆT NAM)</p>
                                                        <p class="salary ">$ Cạnh tranh </p>
                                                        <div class="location ">
                                                            <ul>
                                                                <li>Đà Nẵng | Quảng Nam</li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-6 ">
                                        <div class="job-item ">
                                            <div class="figure ">
                                                <div class="figcaption ">
                                                    <div class="timeago "><span> <em class="set_jobnew ">(Mới)</em></span></div>
                                                    <div class="title "> <a href="# " title="Kỹ sư TE - Test Engineer ">Kỹ sư TE - Test
                                                            Engineer</a> </div>
                                                    <div class="caption ">
                                                        <p class="company-name ">CÔNG TY TNHH ĐIỆN KHÍ QUỐC QUANG (VIỆT NAM)</p>
                                                        <p class="salary ">$ Cạnh tranh
                                                        </p>
                                                        <div class="location ">
                                                            <ul>
                                                                <li>Quảng Nam | Đà Nẵng</li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-6 ">
                                        <div class="job-item ">
                                            <div class="figure ">
                                                <div class="figcaption ">
                                                    <div class="timeago "><span></span></div>
                                                    <div class="title "> <a href="# " title="Chủ Quản Kho (Chinese/English Speaking) ">Chủ Quản
                                                            Kho (Chinese/English Speaking)</a> </div>
                                                    <div class="caption ">
                                                        <p class="company-name ">CÔNG TY TNHH ĐIỆN KHÍ QUỐC QUANG (VIỆT NAM)</p>
                                                        <p class="salary ">$ Cạnh tranh
                                                        </p>
                                                        <div class="location ">
                                                            <ul>
                                                                <li>Quảng Nam</li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-6 ">
                                        <div class="job-item ">
                                            <div class="figure ">
                                                <div class="figcaption ">
                                                    <div class="timeago "><span></span></div>
                                                    <div class="title "> <a href="# " title="SMT Engineer ">SMT
                                                            Engineer</a> </div>
                                                    <div class="caption ">
                                                        <p class="company-name ">CÔNG TY TNHH ĐIỆN KHÍ QUỐC QUANG (VIỆT NAM)</p>
                                                        <p class="salary ">$ Cạnh tranh
                                                        </p>
                                                        <div class="location ">
                                                            <ul>
                                                                <li>Đà Nẵng | Quảng Nam</li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-6 ">
                                        <div class="job-item ">
                                            <div class="figure ">
                                                <div class="figcaption ">
                                                    <div class="timeago "><span></span></div>
                                                    <div class="title "> <a href="# " title="Nhân viên kiểm soát thống kê sản xuất ">Nhân viên
                                                            kiểm soát thống kê sản xuất</a> </div>
                                                    <div class="caption ">
                                                        <p class="company-name ">CÔNG TY TNHH ĐIỆN KHÍ QUỐC QUANG (VIỆT NAM)</p>
                                                        <p class="salary ">$ Cạnh tranh
                                                        </p>
                                                        <div class="location ">
                                                            <ul>
                                                                <li>Đà Nẵng | Quảng Nam</li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-6 ">
                                        <div class="job-item ">
                                            <div class="figure ">
                                                <div class="figcaption ">
                                                    <div class="timeago "><span></span></div>
                                                    <div class="title "> <a href="# " title="Kỹ sư cải tiến sản xuất (Industrial Engineer) ">Kỹ
                                                            sư cải tiến sản xuất (Industrial Engineer)</a> </div>
                                                    <div class="caption ">
                                                        <p class="company-name ">CÔNG TY TNHH ĐIỆN KHÍ QUỐC QUANG (VIỆT NAM)</p>
                                                        <p class="salary ">$ Cạnh tranh
                                                        </p>
                                                        <div class="location ">
                                                            <ul>
                                                                <li>Đà Nẵng | Quảng Nam</li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="view-more "> <a class="btn-gradient " href="# " title="CÔNG TY TNHH ĐIỆN KHÍ QUỐC QUANG (VIỆT NAM) ">Xem thêm</a> </div>
                            </div>
                            <div class="company-content ">
                                <h3 class="company-heading-title ">Giới thiệu về công ty</h3>
                                <div class="tittle-detail ">
                                    <p>Công ty TNHH Điện Khí Quốc Quang Việt Nam,&nbsp;Lô số 12 Khu công nghiệp Điện Nam - Điện Ngọc, Phường Điện Nam Bắc, Thị Xã Điện Bàn, Quảng Nam. Chúng tôi là Công ty con của GGEC tại Trung Quốc - chuyên sản xuất
                                        sản phẩm loa, tai nghe cho các công ty nổi tiếng thế giới như&nbsp;Harman/kardon,JBL, BOSE,SONY v.v… với doanh thu hơn 570 triệu USD/năm. Lĩnh vực kinh doanh chính:&nbsp;sản xuất liên quan điện tử, SMT</p>
                                    <br>
                                    <p>Chúng tôi đang tìm kiếm những nhân sự phù hợp đồng hành và&nbsp;phát triển cùng công ty.</p>
                                    <br>
                                    <p>Dự kiến công ty sẽ bắt đầu sản xuất trong quý IV&nbsp;năm 2020.</p>
                                </div>
                            </div>
                        </section>
                    </div>
                </div>


            </div>
            <?php
            $list_job = "SELECT job.job_id, u.user_name,job.tencv,job.hinhanh,job.khuvuc,job.muc_luong,job.hinhthuc_lv,job.ngay_dang  FROM tbl_job as job
                    INNER JOIN tbl_user as u ON u.id_user = job.id_user
                    WHERE trangthaibai = 'Phê duyệt' ORDER BY job_id  DESC LIMIT 6";
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
                    'ngay_dang' => $row['ngay_dang'],
                );
            }
            ?>
            <div class="col-lg-4 col-xl-3- custom ">
                <div class="side-wrapper ">

                    <section class="jobs-side-list ">
                        <div class="similar-jobs ">
                            <div class="title-catalog-top">
                                <p> Danh sách công ty liên quan</p>
                            </div>
                        </div>
                        <div class="jobs-list ">

                            <div class="job-item active " id="job-item-35B4B2E2 ">
                                <?php foreach ($data as $row) :
                                    $job_id = $row['job_id']; // Lấy ID bài viết từ dữ liệu
                                    // Mã hóa ID bài viết bằng base64_encode
                                    $encoded_id = base64_encode($job_id);
                                    // Tạo liên kết sử dụng ID đã mã hóa
                                    $link = "job-profile-detail.php?sid=" . urlencode($encoded_id);
                                ?>
                                    <div class="figure ">
                                        <div class="image ">
                                            <img class="lazy-img " src="public/images/<?php echo $row['hinhanh'] ?> " alt="">
                                        </div>
                                        <div class="figcaption ">
                                            <div class="timeago "> <span class="new ">
                                                    <font color="FF0000 ">(Mới)</font>
                                                </span> </div>
                                            <div class="title ">
                                                <a class="job_link " data-id="35B4B2E2 " href="<?php echo $link; ?>" title=" ">
                                                    <?php echo $row['user_name'] ?>
                                                </a>
                                            </div>
                                            <div class="caption ">
                                                <a class="class-name " href="<?php echo $link; ?>" title=" "><?php echo $row['tencv'] ?></a>
                                                <div class="salary ">
                                                    <span><i class="icon-job fas fa-dollar-sign "></i></i><?php echo $row['muc_luong'] ?></span>
                                                </div>
                                                <div class="location ">
                                                    <span><i class="fas fa-map-marker-alt "></i> <?php echo $row['khuvuc'] ?></span>
                                                </div>
                                                <div class="meta ">
                                                    <i class="fa fa-calendar "></i> <?php echo $row['ngay_dang'] ?>
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                <?php endforeach; ?>
                            </div>



                        </div>

                        <div class="load-more "><a href="# " title="jobs recommend ">Xem tất cả</a></div>
                    </section>
                </div>
            </div>
        </div>
    </div>
</section>
<script>
    $(document).ready(function() {
        $('select').selectize({
            sortField: 'text'
        });
    });
</script>
<?php include("footer.php") ?>
<!-- End -->
<!-- Footer -->