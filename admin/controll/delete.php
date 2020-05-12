<?php
include "../../config.php";
$ma = isset($_GET['m'])?$_GET['m']:'';
$sql="delete from tintuc where tintuc_id= ? ";
$stm = $connect->prepare($sql);
$stm->execute(array($ma));
$n = $stm->rowCount();
header("location:../jqgrid.php");
?>
