<?php
include("header.php");
$proFile = 'SELECT * FROM tbl_user2 WHERE id_user = ' . '"' . $id_tkuv . '"';
$re = mysqli_query($conn, $proFile);
$data = [];
$rowp = mysqli_fetch_array($re, MYSQLI_ASSOC);
// while ($rowp = mysqli_fetch_array($re, MYSQLI_ASSOC)) {
// 	$data[] = array(
// 		'user_name' => $rowp['user_name'],
// 		'phone' => $rowp['phone'],
// 		'email' => $rowp['email'],
// 		'diachi' => $rowp['diachi'],
// 		'gtinh' => $rowp['gtinh'],
// 		'sothich' => $rowp['sothich'],
// 	);
// }

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
						<h5 class="text-center h5 mb-0"><?php echo $rowp['user_name']; ?></h5>
						<p class="text-center text-muted font-14"> PHP Developer</p>
						<div class="profile-info">
							<h5 class="mb-20 h5 text-blue">Thông Tin ứng viên</h5>
						</div>
						<form action="">

							<div class="row">
								<div class="col-md-4 col-sm-12">
									<div class="form-group">
										<label>Họ và tên</label>
										<input type="text" class="form-control" value="<?php echo $rowp['user_name']; ?>" readonly>
									</div>
								</div>
								<div class="col-md-4 col-sm-12">
									<div class="form-group">
										<label>Số điện thoại</label>
										<input type="text" class="form-control" value="<?php echo $rowp['phone']; ?>" readonly>
									</div>
								</div>
								<div class="col-md-4 col-sm-12">
									<div class="form-group">
										<label>Email</label>
										<input type="text" class="form-control" value="<?php echo $rowp['email']; ?>" readonly>
									</div>
								</div>
							</div>
							<div class="row">
								<div class="col-md-4 col-sm-12">
									<div class="form-group">
										<label>Giới tính</label>
										<input type="text" class="form-control" value="<?php echo $rowp['gtinh']; ?>" readonly>
									</div>
								</div>
								<div class="col-md-4 col-sm-12">
									<div class="form-group">
										<label>Địa Chỉ</label>
										<input type="text" class="form-control" value="<?php echo $rowp['diachi']; ?>" readonly>
									</div>
								</div>
								<div class="col-md-4 col-sm-12">
									<div class="form-group">
										<label>Sở thích</label>
										<input type="text" class="form-control" value="<?php echo $rowp['sothich']; ?>" readonly>
									</div>
								</div>
							</div>

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