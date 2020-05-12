
<?php
//delete.php

include('../../config.php');

if(isset($_POST["image_id"]))
{
 $file_path = '../../images/' . $_POST["image_name"];
 if(unlink($file_path))
 {
  $query = "DELETE FROM hinhanh WHERE image_id = '".$_POST["image_id"]."'";
  $statement = $connect->prepare($query);
  $statement->execute();
 }
}

?>
