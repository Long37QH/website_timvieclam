<?php 

// check lỗi error form
function isUserName($username){
    $parten = "/^[A-Za-z0-9_\.]{6,32}$/"; // biêu thưc chính quy chỉ cho phép nhập chữ và số không cho nhập ký tự đặc biệt
    if (!preg_match($parten, $username, $matchs)) {
       return false;
    } else {
        return true;
    }
}

function isPassword($passwword){
    $pattern = "/^(?=.*[A-Z])(?=.*[a-z])(?=.*[!@#\$%^&*()-_+=])[A-Za-z\d!@#\$%^&*()-_+=]{8,}$/"; // biểu thức chính quy
    if (!preg_match($pattern, $passwword)){
        return false;
    }
    return true;
}

function isEmail($email){
    $pattern = "/^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/"; // biểu thức chính quy
    if (!preg_match($pattern, $email)) {
        return false;
    }
    return true;
}

//thông báo error form

function setDataError($dataError){
    if(!empty($dataError)){
       return $dataError;
    }
}

function formError($label_field){
    global $error;
    if (!empty($error["$label_field"])) return "<p style='color:red'>".$error["$label_field"]."</p>";
    // if (!empty($error["$label_field"])) return  "" . $error["$label_field"] . "";
}

// tạo hamg lưu vêt đã nhập
function set_value($label_field){
    global $$label_field;
    if (!empty($$label_field)) return $$label_field;
}