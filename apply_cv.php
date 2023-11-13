<?php
ob_start();
include("model/config.php");
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $job_id = $_POST['job_id'];
    $id_user = $_POST['id_user'];
    $mess = $_POST['mess'];
    $tg_apply = date('d-m-y');
    $trangthaicv = "Chờ phê duyệt";
    $phanhoi = "";

    if (isset($_FILES["file_cv"]) && $_FILES["file_cv"]["error"] == 0) {
        $file_name = $_FILES["file_cv"]["name"];
        $file_tmp = $_FILES["file_cv"]["tmp_name"];
        $file_ext = pathinfo($file_name, PATHINFO_EXTENSION);

        if ($file_ext === "pdf") {
            $upload_dir = "uploads/";

            if (!is_dir($upload_dir)) {
                mkdir($upload_dir, 0755, true);
            }
            $file_cv = $upload_dir . uniqid() . ".pdf";
            if (move_uploaded_file($file_tmp, $file_cv)) {
                $sql = "INSERT INTO tbl_apply (job_id, id_user, mess, tg_apply, trangthaicv, phanhoi, file_cv) VALUES ('$job_id', '$id_user', '$mess','$tg_apply','$trangthaicv','$phanhoi','$file_cv')";
                if ($conn->query($sql) === TRUE) {
                    header("location: tuyendung");
                } else {
                    echo "Lỗi: " . $conn->error;
                }
                $conn->close();
            }
        } else {
            echo "Chỉ cho phép tải lên tệp PDF.";
        }
    } else {
        echo "Vui lòng chọn một tệp PDF để tải lên.";
    }
}
