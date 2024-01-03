<?php
include("header.php");
$proFile = 'SELECT * FROM tbl_user2 WHERE id_user = ' . '"' . $id_tktd . '"';
$re = mysqli_query($conn, $proFile);
$data = [];

while ($row = mysqli_fetch_array($re, MYSQLI_ASSOC)) {
    $data[] = array(
        'user_name' => $row['user_name'],
        'phone' => $row['phone'],
        'email' => $row['email'],
        'diachi' => $row['diachi'],
        'id_user' => $row['id_user'],
    );
}

?>

<div class="main-container">
    <div class="pd-ltr-20 xs-pd-20-10">
        <div class="min-height-200px">
            <div class="page-header">
                <div class="row">
                    <div class="col-md-12 col-sm-12">
                        <div class="title">
                            <h4>Trang Cá Nhân</h4>
                        </div>
                        <nav aria-label="breadcrumb" role="navigation">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="index.php">Bảng điều khiển</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Profile</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-xl-12 col-lg-4 col-md-4 col-sm-12 mb-30">
                    <div class="pd-20 card-box height-100-p">
                        <div class="profile-photo">
                            <a href="modal" data-toggle="modal" data-target="#modal" class="edit-avatar"><i class="fa fa-pencil"></i></a>
                            <img src="vendors/images/photo1.jpg" alt="" class="avatar-photo">

                        </div>
                        <h5 class="text-center h5 mb-0"></h5>
                        <p class="text-center text-muted font-14"> PHP Developer</p>
                        <div class="profile-info">
                            <h5 class="mb-20 h5 text-blue">Thông Tin Nhà Tuyển Dụng</h5>
                        </div>
                        <form action="">
                            <?php foreach ($data as $row) : ?>
                                <div class="row">
                                    <div class="col-md-4 col-sm-12">
                                        <div class="form-group">
                                            <label>Tên doanh nghiệp</label>
                                            <input type="text" class="form-control" value="<?php echo $row['user_name']; ?>" readonly>
                                        </div>
                                    </div>
                                    <div class="col-md-4 col-sm-12">
                                        <div class="form-group">
                                            <label>Số điện thoại</label>
                                            <input type="text" class="form-control" value="<?php echo $row['phone']; ?>" readonly>
                                        </div>
                                    </div>
                                    <div class="col-md-4 col-sm-12">
                                        <div class="form-group">
                                            <label>Email</label>
                                            <input type="text" class="form-control" value="<?php echo $row['email']; ?>" readonly>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-4 col-sm-12">
                                        <div class="form-group">
                                            <label>Mã doanh nghiệp</label>
                                            <input type="text" class="form-control" value="<?php echo $row['id_user']; ?>" readonly>
                                        </div>
                                    </div>
                                    <div class="col-md-4 col-sm-12">
                                        <div class="form-group">
                                            <label>Địa Chỉ</label>
                                            <input type="text" class="form-control" value="<?php echo $row['diachi']; ?>" readonly>
                                        </div>
                                    </div>
                                    <!-- <div class="col-md-4 col-sm-12">
                                        <div class="form-group">
                                            <label>Sở thích</label>
                                            <input type="text" class="form-control" value="Xem phim, Chơi games" readonly>
                                        </div>
                                    </div> -->
                                </div>
                            <?php endforeach;  ?>
                        </form>
                    </div>

                </div>

                <!-- <div class="col-xl-8 col-lg-8 col-md-8 col-sm-12 mb-30">
					<div class="pd-20 card-box height-100-p">
						<h4 class="fw-bold text-center text-uppercase pt-4">Cập Nhật Thông Tin Ứng Viên</h4>
						<form action="" method="post" >

						</form>
					</div>
				</div> -->
                <!--  -->
            </div>
        </div>

        <?php include("footer.php") ?>