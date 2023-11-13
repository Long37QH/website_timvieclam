<?php include("header.php");
		$id_user = "uv01";
		$user_name = "Công Ty TNHH TM DV Tổng Hợp Đăng Khoa";
?>
<div class="main-container">
	<div class="pd-ltr-20">
		<div class="card-box pd-20 height-100-p mb-30">
			<div class="row align-items-center">
				<div class="col-md-4">
					<img src="vendors/images/banner-img.png" alt="">
				</div>
				<div class="col-md-8">
					<h4 class="font-20 weight-500 mb-10 text-capitalize">
						Welcome<div class="weight-600 font-30 text-blue">Johnny Brown!</div>
					</h4>
				</div>
			</div>
		</div>
		<div class="card-box mb-30">
			<h2 class="h4 pd-20 text-blue">Thống kê cv ứng tuyển</h2>
			<?php
			$sql = 'SELECT tbl_job.job_id,tbl_job.tencv,tbl_job.vt_tuyendung,tbl_job.muc_luong,tbl_job.ngay_het,tblcongty.congty,tbl_apply.trangthaicv,tbl_apply.file_cv
					FROM tbl_apply 
					INNER JOIN tbl_job ON tbl_job.job_id = tbl_apply.job_id
					INNER JOIN tblcongty ON tblcongty.cty_id = tbl_job.cty_id
					WHERE tbl_apply.id_user ='.'"'. $id_user.'"';
		
			$re = mysqli_query($conn, $sql);

			$data = [];

			$TT = 0;
			while ($row = mysqli_fetch_array($re, MYSQLI_ASSOC)) {
				$data[] = array(
					//'TT' => $TT,
					"job_id" => $row["job_id"],
					'tencv' => $row['tencv'],
					'congty' => $row['congty'],
					'vt_tuyendung' => $row['vt_tuyendung'],
					'muc_luong' => $row['muc_luong'],
					'ngay_het' => $row['ngay_het'],
					'trangthaicv' => $row['trangthaicv'],
					'file_cv' => $row['file_cv'],
				);
				$TT++;
			}
			?>
			<table class="data-table table nowrap">
				<thead>
					<tr>
						<th class="table-plus datatable-nosort">TT</th>
						<th>Công việc</th>
						<th>Công ty</th>
						<th>Vị trí</th>
						<!-- <th>Mức lương</th> -->
						<th>TG ứng tuyển</th>
						<th>Trạng thái cv</th>
						<th class="datatable-nosort">Hành động</th>
					</tr>
				</thead>
				<tbody>
					<?php foreach ($data as $row) :
						$job_id = $row['job_id']; // Lấy ID bài viết từ dữ liệu
						// Mã hóa ID bài viết bằng base64_encode
						$encoded_id = base64_encode($job_id);
						// Tạo liên kết sử dụng ID đã mã hóa
						$link = "job-profile-detail.php?sid=" . urlencode($encoded_id);
					 ?>
						<tr>
							<td class="table-plus"><?php echo $TT; ?></td>
							<td><?php echo $row['tencv']; ?></td>
							<td style="width: 150px;"><?php echo $row['congty']; ?></td>
							<td><?php echo $row['vt_tuyendung']; ?></td>
							<!-- <td><?php //echo $row['muc_luong']; 
										?></td> -->
							<td><?php echo $row['ngay_het']; ?></td>
							<td><?php echo $row['trangthaicv']; ?></td>
							<td>
								<div class="dropdown">
									<a class="btn btn-link font-24 p-0 line-height-1 no-arrow dropdown-toggle" href="#" role="button" data-toggle="dropdown">
										<i class="dw dw-more"></i>
									</a>
									<div class="dropdown-menu dropdown-menu-right dropdown-menu-icon-list">
										<a class="dropdown-item" href="../<?php echo $link;?>"><i class="dw dw-eye"></i> View</a>
									</div>
								</div>
							</td>
						</tr>
					<?php endforeach; ?>
				</tbody>
			</table>
		</div>

		<?php include("footer.php") ?>