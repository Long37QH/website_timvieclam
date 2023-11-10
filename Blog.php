<?php
include("header.php");
?>
<!-- END nav -->
<section class="ftco-section ftco-degree-bg">
    <div class="container">
        <div class="container-blog-header">
            <div class="blog-text-header">
                <h3> GÓC NGHỀ NGHIỆP</h3>
            </div>
        </div>
        <div class="row">
            <div class="col-md-9 ftco">
                <table class="table table-bordered table-hover">
                    <div class="td-block-title-wrap">
                        <h4 class="td-block-title">
                            <a href="Blog.html" class="td-pulldown-size">BÀI VIẾT ĐƯỢC QUAN TÂM</a>
                        </h4>
                    </div>
                    <class class="row d-flex">
                        <?php
                        $blog = "SELECT baiviet_id,tieude,hinhanh,tomtatbv FROM tbl_post where trangthaibv = 'Hiển thị' ORDER BY ttbaiviet ASC LIMIT 8";
                        $re = mysqli_query($conn, $blog);
                        $data = [];
                        while ($row = mysqli_fetch_array($re, MYSQLI_ASSOC)) {
                            $data[] = array(
                                "baiviet_id" => $row["baiviet_id"],
                                'tieude' => $row['tieude'],
                                'hinhanh' => $row['hinhanh'],
                                'tomtatbv' => $row['tomtatbv'],
                            );
                        }

                        ?>
                        <?php foreach ($data as $row) :
                            $baiviet_id = $row['baiviet_id']; // Lấy ID bài viết từ dữ liệu
                            // Mã hóa ID bài viết bằng base64_encode
                            $encoded_id = base64_encode($baiviet_id);
                            // Tạo liên kết sử dụng ID đã mã hóa
                            $link = "Blog_detail.php?sid=" . urlencode($encoded_id);
                        ?>
                            <div class="col-md-6   d-flex ftco">
                                <div class="entry align-self-stretch">

                                    <a href="<?php echo $link; ?>" class="block-20 " style="background-image: url( 'public/css_timviec/images/blog/<?php echo $row['hinhanh']; ?>'); " title="Những nghề “hot” nhất trong kỷ nguyên 4.0">
                                    </a>
                                    <div class="text mt-3 ">
                                        <h3 class="heading "><a href="<?php echo $link; ?>" title="Những nghề “hot” nhất trong kỷ nguyên 4.0 "><?php echo $row['tieude']; ?> </a></h3>
                                    </div>
                                    <div class="content">
                                        <?php echo $row['tomtatbv']; ?>
                                    </div>
                                    <div class="view-more">
                                        <a href="<?php echo $link; ?>">Xem thêm</a>
                                    </div>
                                </div>
                            </div>
                        <?php endforeach; ?>

                    </class>
            </div>
            </table>
            <div class="row mt-5 ">
                <div class="col text-center ">
                    <div class="block-27 ">
                        <ul>
                            <li><a href="# ">&lt;</a></li>
                            <li><a href="Blog.html">1</a></li>
                            <li><a href="Blog_2.html">2</a></li>
                            <li><a href="# ">3</a></li>

                            <li><a href="# ">&gt;</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>

        <!-- .col-md-3 -->
        <div class="col-md-3 pl-md-9 sidebar ftco ">

            <div class="sidebar-box ftco ">
                <div class="categories ">
                    <div class="slide-bar-header">
                        <h3 class="heading-3 card-header">CẨM NANG </h3>
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
            $list_blog = "SELECT * FROM tbl_post WHERE trangthaibv = 'Hiển thị' ORDER BY ttbaiviet DESC LIMIT 6";
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
</section>

<?php include('footer.php'); ?>