<?php
    ob_start();
    include("header.php");
?>
        <div class="page-wrapper">
            <!-- ============================================================== -->
            <!-- nôi dung trang lam việc-->
            <!-- ============================================================== -->
            <div class="page-breadcrumb">
                <div class="row">
                    <div class="col-12 d-flex no-block align-items-center">
                        <h4 class="page-title">Thêm mới thanh menu</h4>
                        <div class="ms-auto text-end">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="ds_menu.php">Home</a></li>
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
                
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <form class="form-horizontal" method="post" action="">
                                <div class="card-body">
                                    <h4 class="card-title">Nhập thông tin menu</h4>
                                    <div class="form-group row">
                                        <label for="tenMenu" class="col-sm-3 text-end control-label col-form-label">Tên Menu</label>
                                        <div class="col-sm-9">
                                            <input type="text" class="form-control" id="tenMenu" name="tenMenu" required />
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="vitri" class="col-sm-3 text-end control-label col-form-label">Vị Trí</label>
                                        <div class="col-sm-9">
                                            <input type="text" class="form-control" id="vitri" name="vitri" required />
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="capmenu" class="col-sm-3 text-end control-label col-form-label">Cấp menu</label>
                                        <div class="col-sm-9">
                                            <input type="text" class="form-control" id="capmenu" name="capmenu" required />
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="link" class="col-sm-3 text-end control-label col-form-label">Đường link</label>
                                        <div class="col-sm-9">
                                            <input type="text" class="form-control" id="link" name="link" required />
                                        </div>
                                    </div>
                                    <!-- <div class="form-group row">
                                        <label for="lname" class="col-sm-3 text-end control-label col-form-label">Password</label>
                                        <div class="col-sm-9">
                                            <input type="password" class="form-control" id="lname" placeholder="Password Here" />
                                        </div>
                                    </div> -->
                                    <div class="form-group row">
                                        <label for="trangthaiAH" class="col-sm-3 text-end control-label col-form-label">Trạng thái</label>
                                        <div class="col-md-9">
                                            <select class="select2 form-select shadow-none" id="trangthaiAH" style="width: 100%; height: 36px" name="trangthaiAH">
                                                <option value="Hiển thị">Hiện thị</option>
                                                <option value="Ẩn">Ẩn</option>
                                            </select>
                                        </div>
                                    </div>
                                    <!-- <div class="form-group row">
                                        <label for="cono1" class="col-sm-3 text-end control-label col-form-label">Contact No</label>
                                        <div class="col-sm-9">
                                            <input type="text" class="form-control" id="cono1" placeholder="Contact No Here" />
                                        </div>
                                    </div> -->
                                    <!-- <div class="form-group row">
                                        <label for="cono1" class="col-sm-3 text-end control-label col-form-label">Message</label>
                                        <div class="col-sm-9">
                                            <textarea class="form-control"></textarea>
                                        </div>
                                    </div> -->
                                </div>
                                <div class="border-top">
                                    <div class="card-body">
                                        <input type="submit" name="them" class="btn btn-primary" value="Lưu lại">
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <!-- editor -->

            </div>
<?php 
    require_once('footer.php');
    include('../model/config.php');
    if(isset($_POST['them'])){
            $tenMenu = $_POST['tenMenu'];
            $vitri = $_POST['vitri'];
            $capmenu = $_POST['capmenu'];
            $trangthaiAH = $_POST['trangthaiAH'];
            $link = $_POST['link'];
            $themsql = "INSERT INTO menu (tenMenu, vitri, capmenu, link ,trangthaiAH ) VALUES ('$tenMenu','$vitri','$capmenu' ,'$link','$trangthaiAH')";
            mysqli_query($conn,$themsql);
            //echo $themsql; exit();
            header("location: ./menu_ds.php");
        }       
?>