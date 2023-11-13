<!DOCTYPE html>
<html>

<head>
    <title>Xem PDF</title>
</head>

<body>
    <!-- <h1>Xem PDF</h1> -->
    <?php
    if (isset($_GET['file'])) {
        $file = $_GET['file'];
        echo '<iframe src="' . $file . '" width="100%" height="740px" style="border: none;"></iframe>';
    } else {
        echo "Không có tệp PDF để hiển thị.";
    }
    ?>
</body>

</html>