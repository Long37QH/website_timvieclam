<?php
ob_start();
include("header.php");
$job_id = $_GET['sid'];
include('../model/config.php');
$sua_sql = "SELECT trangthaicv,phanhoi FROM tbl_apply WHERE job_id = '$job_id'";
$result = mysqli_query($conn, $sua_sql);
$row = mysqli_fetch_assoc($result);
?>
<div class="main-container">
    <div class="pd-ltr-20 xs-pd-20-10">
        <div class="min-height-200px">

            <!-- Default Basic Forms Start -->
            <div class="pd-20 card-box mb-30">
                <div class="clearfix">
                    <div class="pull-left">
                        <h4 class="text-blue h3">Phê duyệt ứng viên mới</h4>

                    </div>

                </div>

                <form action="" method="post">
                    <div class="row">
                        <div class="col-md-6 col-sm-12">
                            <div class="form-group">
                                <label for="trangthaicv">Trạng thái</label>
                                <select class="custom-select col-12" name="trangthaicv" id="trangthaicv">
                                    <option selected="">-- Trạng thái --</option>
                                    <option value="Phê duyệt">Phê duyệt</option>
                                    <option value="Từ chối">Từ chối CV</option>


                                </select>
                            </div>
                        </div>

                    </div>
                    <div class="form-group">
                        <label for="phanhoi">Phản hồi</label>
                        <textarea class="form-control" name="phanhoi" id="phanhoi"></textarea>
                    </div>
                    <div class="form-group d-grid gap-2 col-4 mx-auto">
                        <!-- <button name="btnSave" class="btn btn-danger "><i class="bi bi-save2 "></i> Lưu dữ liệu</button> -->
                        <input onclick="return confirm('Bạn có đồng ý phê duyệt ứng viên không ?');" type="submit" name="them" class="btn btn-danger " value="Phê duyệt ứng viên">
                    </div>
                </form>



            </div>


        </div>

    </div>

</div>



<?php

include('../model/config.php');
if (isset($_POST['them'])) {

    $trangthaicv = $_POST['trangthaicv'];
    $phanhoi = $_POST['phanhoi'];

    $editsql = "UPDATE tbl_apply SET trangthaicv = '$trangthaicv',phanhoi = '$phanhoi'  WHERE job_id = '$job_id';";
    //echo $editsql; exit();
    mysqli_query($conn, $editsql);
    header("location: ./ds_dapheduyet_uv.php");
}

?>
<?php include("footer.php") ?>