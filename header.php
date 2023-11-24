<?php
session_start();
include("model/config.php");
$id_user = "";
$user_name = "";
$email = "";
$phone = "";
if(isset($_SESSION['tkungvien']) && isset($_SESSION['id_user'])){
    $id_user = $_SESSION['id_user'];
    $sua_sql = "SELECT * FROM tbl_user WHERE id_user = '$id_user'";

    $result = mysqli_query($conn, $sua_sql);

    $row2 = mysqli_fetch_assoc($result);

    if (mysqli_num_rows($result) == 1){
        $user_name = $row2['user_name'];
        $email = $row2['email'];
        $phone = $row2['phone'];
    }
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Tìm việc làm</title>
    <link rel="shortcut icon" href="https://cdn.worldvectorlogo.com/logos/bootstrap-4.svg" type="image/x-icon" />
    <link rel="stylesheet" href="public/plugin/bootstrap/css/bootstrap.min.css" />
    <link rel="stylesheet" href="public/plugin/fontawesome/css/all.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css" />
    <link rel="stylesheet" type="text/css" href="http://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css" />

    <link rel="stylesheet" href="public/css_timviec/css/style_blog.css">
    <link rel="stylesheet" href="public/css/style.css" />
    <link rel="stylesheet" href="public/css_timviec/css/style-menu.css">
    <link rel="stylesheet" href="public/css_timviec/css/t_style.css">
    <link rel="stylesheet" href="public/css_timviec/css/job.css">

    <!-- modal -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</head>

<body>
    <!-- menu -->
    <header class="container" style="display: flex;">
        <a href="index.php"><img class="logo" src="public/css_timviec/images/Logo.png" alt=""></a>
        <nav style="line-height: 40px;">
            <?php
            $menu = "SELECT * FROM menu WHERE trangthaiAH = 'Hiển thị' ORDER BY vitri ASC LIMIT 5";
            $re = mysqli_query($conn, $menu);
            $data = [];

            while ($row = mysqli_fetch_array($re, MYSQLI_ASSOC)) {
                $data[] = array(
                    'tenMenu' => $row['tenMenu'],
                    'link' => $row['link'],
                );
            }
            ?>

            <ul>
                <?php foreach ($data as $row) : ?>
                    <li>
                        <a href="<?php echo $row['link']; ?>"><?php echo $row['tenMenu']; ?> </a>
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
                <li style="margin-left: 10px;font-weight: bold;color: #f38121;"> <?php echo $user_name; ?></li>
                <li>
                    <a href="#" class="menu-buttons"><i class="fas fa-user-tie"></i></a>
                </li>

            </ul>
        </nav>
    </header>