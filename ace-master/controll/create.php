<?php
include "../../config.php";

$ma = isset($_POST['m'])?$_POST['m']:'';
$ten = isset($_POST['t'])?$_POST['t']:'';
$noidung = isset($_POST['nd'])?$_POST['nd']:'';
$ngaythang = isset($_POST['nt'])?$_POST['nt']:'';
$filehinh=array();
$file='';
if(isset($_FILES['file']))
{
        //if($_FILES['hinh']['error'] ==0) {
            foreach ($_FILES['file']['name'] as $key => $value) {
                $filehinh[$key] = "../../images/".$_FILES['file']['name'][$key];
                $file=$_FILES['file']['name'][$key];
            move_uploaded_file($_FILES['file']['tmp_name'][$key], $filehinh[$key]);

            }
        //}
}
$sql="insert into tintuc(tintuc_id, tieude, noidung, ngaythang, hinhanh) values(?, ?, ?, ?, ?) ";
$arr = array($ma, $ten, $noidung, $ngaythang,$file);
$stm = $connect->prepare($sql);
$stm->execute($arr);
$n = $stm->rowCount();
header("location:../jqgrid.php");
?>