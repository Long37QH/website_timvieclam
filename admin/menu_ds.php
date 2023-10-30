<?php 
    include('header.php');   
?>
    <div class="page-wrapper">
      <!-- ============================================================== -->
      <!-- nôi dung trang lam việc-->
      <!-- ============================================================== -->
      <div class="page-breadcrumb">
        <div class="row">
          <div class="col-12 d-flex no-block align-items-center">
            <h4 class="page-title">Quản lý menu trang</h4>
            <div class="ms-auto text-end">
              <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                  <li class="breadcrumb-item"><a href="#">Home</a></li>
                  <li class="breadcrumb-item active" aria-current="page">
                    Library
                  </li>
                </ol>
              </nav>
            </div>
          </div>
        </div>
      </div>
      <!-- ============================================================== -->
      <!-- End Bread crumb and right sidebar toggle -->

      <!-- bảng  -->
      <!-- ============================================================== -->
      <div class="container-fluid">
        <!-- ============================================================== -->
        <!-- Start Page Content -->
        <!-- ============================================================== -->
        <a href="menu_them.php" class="btn btn-primary mb-2" ><i class="fas fa-table" ></i> Thêm mới</a>
        <div class="row">
          <div class="col-12">
            <div class="card">
              <div class="card-body">
                <h5 class="card-title">Danh sách menu</h5>
                <div class="table-responsive">
                  <?php
                    include('../model/config.php');
                    $menu = "SELECT * FROM menu";

                    $re = mysqli_query($conn,$menu);

                    $data = [];

                    $TT = 1;
                    while($row = mysqli_fetch_array($re,MYSQLI_ASSOC)){
                        $data[] = array(
                            //'TT' => $TT,
                            'menu_id'=> $row['menu_id'],
                            'tenMenu' => $row['tenMenu'],
                            'vitri' => $row['vitri'],
                            'capmenu' => $row['capmenu'],
                            'trangthaiAH' => $row['trangthaiAH'],
                        );
                        //$TT++;
                    }
                ?>
                  <table id="zero_config" class="table table-striped table-bordered">
                    <thead>
                      <tr>
                        <th><strong>TT</strong></th>
                        <th><strong>Tên menu</strong></th>
                        <th><strong>Vị trí</strong></th>
                        <th><strong>Cấp menu</strong></th>
                        <th><strong>Trạng thái</strong></th>
                        <th><strong>Tác vụ</strong></th>
                      </tr>
                    </thead>
                    <tbody>
                      <?php foreach ($data as $row) : ?>
                      <tr>
                        <td><?php echo $row ['menu_id']; ?></td>
                        <td><?php echo $row ['tenMenu']; ?></td>
                        <td><?php echo $row ['vitri']; ?></td>
                        <td><?php echo $row ['capmenu']; ?></td>
                        <td><?php echo $row ['trangthaiAH']; ?></td>      
                        <td>
                          <a href="menu_sua.php?sid=<?php echo $row['menu_id']; ?>" class="btn btn-info"> <i class="mdi mdi-pencil"></i> Sủa</a>
                          <a onclick="return confirm('bạn có muốn xoá không ?');" class="btn btn-danger" href="menu_xoa.php?sid=<?php echo $row['menu_id']; ?>"> <i class="fas fa-trash-alt"></i> Xoá</a>
                        </td>
                      </tr>
                      <?php endforeach; ?>
                    </tfoot>
                  </table>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

      <!-- footer -->
<?php require_once('footer.php') ?>