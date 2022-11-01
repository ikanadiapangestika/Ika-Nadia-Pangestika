<?php
if (isset($_POST['Login'])){
$user = $_POST['un'];
$pass = $_POST["pw"];
if($user == "ikanadiap" && $pass =="231111") {
    header('location:input.php');
//echo "Login Berhasil";
}else {
    echo "Login Gagal";
}
}
?>
