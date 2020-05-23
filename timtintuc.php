<?php
	 include "config.php";
	 $tieude =  $_GET['s'];
	 

	$data = $connect->query(" select * from tintuc where tieude LIKE '%{$tieude}%' or noidung LIKE '%{$tieude}%'");
	
	$result = $data->fetchAll(); 
	
	if($result)
		echo json_encode(array_values($result));
	else echo "Không tìm thấy tiều đề: ".$tieude;

	

?>