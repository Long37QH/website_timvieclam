<?php
session_start();
include("model/config.php");
$id_user = "2";
$user_name = "";
$email = "";
$phone = "";
if (isset($_SESSION['tkungvien']) && isset($_SESSION['id_tkuv'])) {
    $id_user = $_SESSION['id_tkuv'];
    $sua_sql = "SELECT * FROM tbl_user2
                INNER JOIN tbl_taikhoan ON tbl_taikhoan.id_user = tbl_user2.id_user
                WHERE tbl_user2.id_user = '$id_user'";

    $result = mysqli_query($conn, $sua_sql);

    $row2 = mysqli_fetch_assoc($result);

    if (mysqli_num_rows($result) == 1) {
        $user_name = $row2['tentk'];
        $email = $row2['email'];
        $phone = $row2['phone'];
    }
    //lấy menu khi ở phien ứng viên
    $menu = "SELECT * FROM menu 
					WHERE trangthaiAH = 'Hiển thị' AND loaimenu = '0' OR loaimenu = '1'
					ORDER BY vitri ASC LIMIT 5";
    $re = mysqli_query($conn, $menu);
    $data = [];

    while ($row = mysqli_fetch_array($re, MYSQLI_ASSOC)) {
        $data[] = array(
            'tenMenu' => $row['tenMenu'],
            'link' => $row['link'],
        );
    }
}
if (isset($_SESSION['tktuyendung']) && isset($_SESSION['id_tktd'])) {
    $id_user = $_SESSION['id_tktd'];
    $sql = "SELECT * FROM tbl_user2
                INNER JOIN tbl_taikhoan ON tbl_taikhoan.id_user = tbl_user2.id_user
                WHERE tbl_user2.id_user = '$id_user'";

    $result = mysqli_query($conn, $sql);

    $row2 = mysqli_fetch_assoc($result);

    if (mysqli_num_rows($result) == 1) {
        $user_name = $row2['tentk'];
        $email = $row2['email'];
        $phone = $row2['phone'];
    }

    //lấy menu khi ở phien nhà tuyển dụng
    $menu = "SELECT * FROM menu 
            WHERE trangthaiAH = 'Hiển thị' AND loaimenu = '0' OR loaimenu = '2'
            ORDER BY vitri ASC LIMIT 5";
    $re = mysqli_query($conn, $menu);
    $data = [];

    while ($row = mysqli_fetch_array($re, MYSQLI_ASSOC)) {
        $data[] = array(
            'tenMenu' => $row['tenMenu'],
            'link' => $row['link'],
        );
    }
}

//lây menu khi chưa đăng nhập tài khoản
if ((!isset($_SESSION['tktuyendung']) && !isset($_SESSION['id_tktd'])) && (!isset($_SESSION['tkungvien']) && !isset($_SESSION['id_tkuv']))) {
    $menu = "SELECT * FROM menu WHERE trangthaiAH = 'Hiển thị' ORDER BY vitri ASC LIMIT 5";
    $re = mysqli_query($conn, $menu);
    $data = [];

    while ($row = mysqli_fetch_array($re, MYSQLI_ASSOC)) {
        $data[] = array(
            'tenMenu' => $row['tenMenu'],
            'link' => $row['link'],
        );
    }
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Tìm việc làm</title>
    <!-- <link rel="shortcut icon" href="https://cdn.worldvectorlogo.com/logos/bootstrap-4.svg" type="image/x-icon" /> -->
    <link rel="icon" type="image/png" sizes="48x48" href="public/images/title_icon.png" />
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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">

    <!-- modal -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

    <link rel="stylesheet" href="public/page_css/page.css">

</head>

<body>
    <!-- menu -->
    <header class="container" style="display: flex;">
        <a href="index.php"><img class="logo" src="public/css_timviec/images/Logo.png" alt=""></a>
        <nav style="line-height: 40px;">
            <ul>
                <?php foreach ($data as $row) : ?>
                    <li>
                        <a href="<?php echo $row['link']; ?>"><?php echo $row['tenMenu']; ?> </a>
                    </li>
                <?php endforeach; ?>
                <li>
                    <a href="admin" class="menu-buttons" style="margin-left: 10px;font-weight: bold;color: #f38121;"><i class="fas fa-user-tie"></i> <?php echo $user_name; ?></a>
                </li>
                <!-- <li style="margin-left: 10px;font-weight: bold;color: #f38121;"> <?php //echo $user_name; 
                                                                                        ?></li> -->
            </ul>
        </nav>
    </header>