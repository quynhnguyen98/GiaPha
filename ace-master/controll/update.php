<?php
include "../../config.php";
$ma = isset($_POST['m'])?$_POST['m']:'';
$ten = isset($_POST['t'])?$_POST['t']:'';
$noidung = isset($_POST['nd'])?$_POST['nd']:'';
$ngaythang = isset($_POST['nt'])?$_POST['nt']:'';
$sql="update tintuc set tieude=?, noidung=?, ngaythang=? where tintuc_id= ? ";
$arr = array($ten, $noidung, $ngaythang,$ma);
$stm = $connect->prepare($sql);
$stm->execute($arr);
$n = $stm->rowCount();
header("location:../jqgrid.php");
