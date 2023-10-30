<?php
ob_start();
include("header.php")
?>
<div class="main-container">
	<div class="pd-ltr-20 xs-pd-20-10">
		<div class="min-height-200px">

			<!-- Default Basic Forms Start -->
			<div class="pd-20 card-box mb-30">
				<div class="clearfix">
					<div class="pull-left">
						<h4 class="text-blue h3">Đăng một việc làm mới</h4>
						<p class="mb-30">Đăng việc làm</p>
					</div>

				</div>

				<form action="" method="post">
					<div class="form-group">
						<label for="hinhanh">Hình ảnh nổi bật</label>
						<input type="file" class="form-control-file form-control height-auto col-md-6 " name="hinhanh" id="hinhanh">
					</div>
					<div class="form-group">
						<label for="tencv">Chức vụ</label>
						<input class="form-control" type="text" placeholder="Johnny Brown" name="tencv" id="tencv">
					</div>
					<div class="form-group">
						<label for="mota_cv">Mô tả việc làm</label>
						<textarea class="form-control" name="mota_cv" id="mota_cv"></textarea>
					</div>

					<div class="row">
						<div class="col-md-6 col-sm-12">
							<div class="form-group">
								<label for="id_career">Ngành nghề</label>
								<select class="custom-select col-12" name="id_career" id="id_career">
									<option selected="">Bán hàng...</option>
									<option value="1">Hành chính - thư ký</option>
									<option value="2">IT - Công nghệ thông tin</option>
									<option value="3">Khách sạn - du lịch</option>
									<option value="4">Bán xỉ - bán lẻ - quản lý của hàng</option>
									<option value="5">Marketing</option>
									<option value="6">Kế toán</option>

								</select>
							</div>
						</div>
						<div class="col-md-6 col-sm-12">
							<div class="form-group">
								<label for="hinhthuc_lv">Hình thức làm việc</label>
								<select class="custom-select col-12" name="hinhthuc_lv" id="hinhthuc_lv">
									<option selected="Toàn thời gian">Fulltime...</option>
									<option value="Bán thời gian">Parttime</option>
									<option value="Làm từ xa">Remote</option>
									<option value="Thực tập sinh">Intern</option>

								</select>
							</div>
						</div>
					</div>



					<div class="row">
						<div class="col-md-6 col-sm-12">
							<div class="form-group">
								<label for="kinh_nghiem">Trải qua</label>
								<select class="custom-select col-12" id="kinh_nghiem" name="kinh_nghiem">
									<option selected="">Chưa có kinh nghiệm...</option>
									<option value="1 năm kinh nghiệm">1 năm kinh nghiệm</option>
									<option value="2 năm kinh nghiệm">2 năm kinh nghiệm</option>
									<option value="3 năm kinh nghiệm">3 năm kinh nghiệm</option>
									<option value="4 năm kinh nghiệm">4 năm kinh nghiệm</option>
									<option value="5 năm kinh nghiệm">5 năm kinh nghiệm</option>
									<option value="6 năm kinh nghiệm">6 năm kinh nghiệm</option>

								</select>
							</div>
						</div>
						<div class="col-md-6 col-sm-12">
							<div class="form-group">
								<label for="vt_tuyendung">Cấp độ nghề nghiệp</label>
								<select class="custom-select col-12" id="vt_tuyendung" name="vt_tuyendung">
									<option selected="Trưởng phòng">Trưởng phòng...</option>
									<option value="Nhân viên">Nhân viên</option>
									<option value="Giám đốc">Giám đốc</option>
									<option value="Trưởng chi nhánh">Trưởng chi nhánh</option>
								</select>
							</div>
						</div>
					</div>

					<div class="row">
						<div class="col-md-6 col-sm-12">
							<div class="form-group">
								<label for="ngay_het">Ngày hết hạn</label>
								<input class="form-control " placeholder="Select Date" type="date" id="ngay_het" name="ngay_het">
							</div>
						</div>
						<div class="col-md-6 col-sm-12">
							<div class="form-group">
								<label for="do_tuoi">Độ tuổi</label>
								<input type="text" class="form-control" id="do_tuoi" name="do_tuoi">
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-md-6 col-sm-12">
							<div class="form-group">
								<label for="muc_luong">Lương</label>
								<input type="text" class="form-control" id="muc_luong" name="muc_luong">
								</select>
							</div>
						</div>
						<div class="col-md-6 col-sm-12">
							<div class="form-group">
								<label for="bang_cap">Bằng cấp</label>
								<select class="custom-select col-12" id="bang_cap" name="bang_cap">
									<option selected="Cao đẳng">Cao đẳng...</option>
									<option value="trung cấp">trung cấp</option>
									<option value="đại học">đại học</option>
									<option value="Thạc sĩ">Thạc sĩ</option>
								</select>
							</div>
						</div>
					</div>

					<div class="form-group">
						<label for="khuvuc">Địa điểm</label>
						<input class="form-control" type="text" placeholder="Johnny Brown" id="khuvuc" name="khuvuc">

					</div>
					<div class="form-group d-grid gap-2 col-4 mx-auto">
						<!-- <button name="btnSave" class="btn btn-danger "><i class="bi bi-save2 "></i> Lưu dữ liệu</button> -->
						<input type="submit" name="them"  class="btn btn-danger " value="Đăng ký đăng bài">
					</div>
				</form>
				


			</div>


		</div>

	</div>
	
</div>
<script>
        // Lấy đối tượng button bằng id
        var dangKyButton = document.getElementById("dangKyButton");

        // Thêm sự kiện click vào nút button
        dangKyButton.addEventListener("click", function() {
            // Hiển thị thông báo khi nút được nhấn
            alert("Bạn đã đăng ký đăng bài!");
        });
 </script>


<?php

include('../model/config.php');
if (isset($_POST['them'])) {
	$hinhanh = $_POST['hinhanh'];
	$tencv = $_POST['tencv'];
	$mota_cv = $_POST['mota_cv'];
	$id_career = $_POST['id_career'];
	$hinhthuc_lv = $_POST['hinhthuc_lv'];
	$kinh_nghiem = $_POST['kinh_nghiem'];
	$vt_tuyendung = $_POST['vt_tuyendung'];
	$ngay_het = $_POST['ngay_het'];
	$do_tuoi = $_POST['do_tuoi'];
	$muc_luong = $_POST['muc_luong'];
	$bang_cap = $_POST['bang_cap'];
	$khuvuc = $_POST['khuvuc'];
	$trangthaibai = 'Chờ phê duyệt';
	$themsql = "INSERT INTO tbl_job (hinhanh, tencv, mota_cv, id_career ,hinhthuc_lv,kinh_nghiem,vt_tuyendung,ngay_het,do_tuoi,muc_luong,bang_cap,khuvuc,trangthaibai ) VALUES ('$hinhanh','$tencv','$mota_cv' ,'$id_career','$hinhthuc_lv','$kinh_nghiem','$vt_tuyendung','$ngay_het','$do_tuoi','$muc_luong','$bang_cap','$khuvuc','$trangthaibai')";
	mysqli_query($conn, $themsql);
	//echo $themsql; exit();
	header("location: ./ds_dangpheduyet.php");

}
?>
<?php include("footer.php") ?>