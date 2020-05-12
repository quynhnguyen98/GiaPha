<?php
include "../config.php";
$tensukien = isset($_POST['tensukien'])?$_POST['tensukien']:'';
$hinhanh = isset($_POST['hinh'])?$_POST['hinh']:'';
print_r($_POST);
$sql="insert into hinhanh(tensukien,hinhanh) values(?,?) ";
$arr = array($tensukien,$hinhanh);
$stm = $obj->prepare($sql);
$stm->execute($arr);
//echo($stm->execute($arr));
header('location:../gallery.php');
//print_r($arr);
?>