<?php include("header.php");

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
			<h2 class="h4 pd-20 text-blue">Thống kê ứng viên tuyển dụng</h2>
			<?php
			$sql = 'SELECT tbl_job.job_id, tbl_user.user_name,tbl_job.tencv,tbl_job.vt_tuyendung,tbl_job.muc_luong,tbl_job.ngay_het,tbl_apply.trangthaicv,tbl_apply.file_cv
					FROM tbl_apply 
					INNER JOIN tbl_job ON tbl_job.job_id = tbl_apply.job_id
					INNER JOIN tbl_user ON tbl_user.id_user = tbl_apply.id_user
					WHERE  tbl_job.cty_id =' . '"' . $id_user . '"';
			//echo $sql ;exit();	
			$re = mysqli_query($conn, $sql);

			$data = [];

			$TT = 0;
			while ($row = mysqli_fetch_array($re, MYSQLI_ASSOC)) {
				$data[] = array(
					//'TT' => $TT,
					"job_id" => $row["job_id"],
					'user_name' => $row['user_name'],
					'tencv' => $row['tencv'],
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
						<th>Ứng viên</th>
						<th>Công việc</th>
						<th>Vị trí</th>
						<th>Mức lương</th>
						<th>Hạn tuyển dụng</th>
						<th>Trạng thái </th>
						<th class="datatable-nosort">Hành động</th>
					</tr>
				</thead>
				<tbody>
					<?php foreach ($data as $row) : ?>
						<tr>
							<td class="table-plus"><?php echo $TT; ?></td>
							<td><?php echo $row['user_name']; ?></td>
							<td style="width: 150px;"><?php echo $row['tencv']; ?></td>
							<td><?php echo $row['vt_tuyendung']; ?></td>
							<td><?php echo $row['muc_luong']; ?></td>
							<td><?php echo $row['ngay_het']; ?></td>
							<td><?php echo $row['trangthaicv']; ?></td>
							<td>
								<div class="dropdown">
									<a class="btn btn-link font-24 p-0 line-height-1 no-arrow dropdown-toggle" href="#" role="button" data-toggle="dropdown">
										<i class="dw dw-more"></i>
									</a>
									<div class="dropdown-menu dropdown-menu-right dropdown-menu-icon-list">
										<a class="dropdown-item" href="../<?php echo 'view_cv.php?file=' . urlencode($row['file_cv']) . ' "' ?>"><i class="dw dw-eye"></i> Xem cv</a>
										<a class="dropdown-item" href="#"><i class="dw dw-delete-3"></i> phê duyệt</a>
									</div>
								</div>
							</td>
						</tr>
					<?php endforeach; ?>
				</tbody>
			</table>
		</div>

		<?php include("footer.php") ?>