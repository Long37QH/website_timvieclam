<?php
include("header.php");
$encoded_id = $_GET['sid'];
// echo '' . $encoded_id . '';
$mabaiviet = base64_decode(urldecode($encoded_id));
// echo '' . $mabaiviet . '';
$sua_sql = "SELECT * FROM tbl_post WHERE baiviet_id = '$mabaiviet'";
$result = mysqli_query($conn, $sua_sql);
$row = mysqli_fetch_assoc($result);
?>

<section class="ftco-section ftco-degree-bg">
    <div class="container">
        <div class="row">
            <div class="col-md-9 ftco">
                <div class="blogtext-center">
                    <div class="blog-title-text-center ">
                        <div class="grid">
                            <ul class="breadcrumb">
                                <li><a href="Blog.html">Góc nghề nghiệp</a></li>
                                <li>
                                    <a href="Blog-con-duong-su-nghiep.html"><?php echo $row['loaibv'] ?></a>
                                </li>
                            </ul>
                        </div>
                        <h2 class="mb-3 "><?php echo $row['tieude'] ?>
                        </h2>
                    </div>
                    <div class="fas-blog-detail">
                        <i class="fas fa-user-edit"> <?php echo $row['tacgia'] ?> &nbsp; <?php echo $row['ngaydang'] ?></i>
                    </div>
                    <div class="view-number">
                        <p>Lượt xem:
                            <spam>284</spam>
                        </p>
                    </div>
                    <hr>
                    <div class="blog-detail-text">
                        <p><?php echo $row['noidung'] ?></p>
                        <br>
                        <center> <img src="public/css_timviec/images/blog/<?php echo $row['hinhanh'] ?>" alt="" class="img-fluid"></center> <br>
                        <!-- <p style="text-align: center; font-size: 13px;"><em> Định hình phát triển doanh nghiệp trong tương lai </em></p> -->
                        <figcaption itemprop="description">
                            <p class="Image">Tìm hiểu 5 bước cần thiết để tạo nên chiến lược nội dung </p>
                        </figcaption>
                        <!-- doan 2 -->
                        <p><?php echo $row['noidung'] ?></p>

                    </div>
                </div>
                <div class="tags">
                    <div class="title">
                        <h4>Tags:</h4>
                    </div>
                    <ul class="list-tags">
                        <li><a href="blog-tag">Doanh nghiệp</a></li>
                        <li><a href="Blog-tag-cong-ty.html">Công ty </a></li>
                        <li>
                            <a href="Blog-tag-co-hoi.html">Cơ hội</a>
                        </li>
                    </ul>
                </div>
            </div>
            <!-- .col-md-8 -->
            <div class="col-md-3 pl-md-9 sidebar ftco ">
                <div class="col-md-3-left">
                    <div class="sidebar-box ftco ">
                        <div class="categories ">
                            <div class="slide-bar-header ">
                                <h3 class="heading-3 card-header ">CẨM NANG </h3>
                            </div>
                            <div class="categories-detail">
                                <li><a href="Blog-phong-van-thanh-cong.html">Phỏng vấn thành công <span>(3)</span></a></li>
                                <li><a href="Blog-thi-truong-lao-dong.html">Thị trường lao động <span>(5)</span></a></li>
                                <li><a href="Blog-bao-cao-khao-sat.html">Báo cáo - Khảo sát<span>(3)</span></a></li>
                                <li><a href="Blog-con-duong-su-nghiep.html">Con đường sự nghiệp<span>(7)</span></a></li>
                                <li><a href="Blog-phat-trien-ban-than.html">Phát triển bản thân <span>(9)</span></a></li>
                                <li><a href="Blog-thu-gian.html">Thư giản <span>(9)</span></a></li>
                            </div>
                        </div>
                    </div>
                    <?php
                    $list_blog = "SELECT * FROM tbl_post WHERE trangthaibv = 'Hiển thị' ORDER BY ttbaiviet DESC LIMIT 4";
                    $re = mysqli_query($conn, $list_blog);
                    $data = [];

                    $TT = 1;
                    while ($row2 = mysqli_fetch_array($re, MYSQLI_ASSOC)) {
                        $data[] = array(
                            //'TT' => $TT,
                            'baiviet_id' => $row2['baiviet_id'],
                            'tieude' => $row2['tieude'],
                            'hinhanh' => $row2['hinhanh'],
                            'loaibv' => $row2['loaibv'],
                            'ngaydang' => $row2['ngaydang'],
                        );
                        //$TT++;
                    }
                    ?>

                    <div class="sidebar-box ftco ">
                        <div class="categories ">
                            <h3 class="heading-3 card-header ">BÀI MỚI CẬP NHẬT</h3>
                            <div class="categories-detail ">
                                <?php foreach ($data as $row2) :
                                    $baiviet_id = $row2['baiviet_id']; // Lấy ID bài viết từ dữ liệu
                                    // Mã hóa ID bài viết bằng base64_encode
                                    $encoded_id = base64_encode($baiviet_id);
                                    // Tạo liên kết sử dụng ID đã mã hóa
                                    $link2 = "Blog_detail.php?sid=" . urlencode($encoded_id);
                                ?>
                                    <div class="block-21 mb-3 d-flex ">
                                        <a class="img mr-3 " href="<?php echo $link2; ?>" style="background-image: url(public/css_timviec/images/blog/<?php echo $row2['hinhanh']; ?>); "></a>
                                        <div class="text ">
                                            <h3 class="heading "><a href="<?php echo $link2; ?>" title="5 bước để doanh nghiệp phát triển chiến lược nội dung. "><?php echo $row2['tieude']; ?></a></h3>
                                            <div class="meta ">
                                                <div>
                                                    <i class="fa fa-calendar "></i> <?php echo $row2['ngaydang']; ?></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <hr>
                                <?php endforeach; ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


<section class="ftco-section bg-light ">
    <div class="container ">
        <div class="row justify-content-center mb-5 pb-3 ">
            <div class="col-md-7 heading-section text-center ftco ">
                <span class="subheading ">Mới cập nhật</span>
                <h2><span>Thông Tin</span> Liên Quan</h2>
            </div>
        </div>
        <div class="row d-flex ">
            <?php foreach ($data as $row2) :
                $baiviet_id = $row2['baiviet_id']; // Lấy ID bài viết từ dữ liệu
                // Mã hóa ID bài viết bằng base64_encode
                $encoded_id = base64_encode($baiviet_id);
                // Tạo liên kết sử dụng ID đã mã hóa
                $link2 = "Blog_detail.php?sid=" . urlencode($encoded_id);
            ?>
                <div class="col-md-3 d-flex ftco ">
                    <div class="entry align-self-stretch ">
                        <a href="<?php echo $link2; ?> " class="block-20 " style="background-image: url( 'public/css_timviec/images/blog/<?php echo $row2['hinhanh']; ?>'); ">
                        </a>
                        <div class="text mt-3 ">
                            <div class="meta mb-2 ">
                                <div>
                                    <i class="fa fa-calendar"></i> <?php echo $row2['ngaydang']; ?>
                                </div>
                                <div class="div"> <?php echo $row2['loaibv']; ?></div>

                            </div>
                            <h3 class="heading "><a href="<?php echo $link2; ?> " title="5 bước để doanh nghiệp phát triển chiến lược nội dung nhân sự"><?php echo $row2['tieude']; ?></a></h3>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<?php include('footer.php'); ?>