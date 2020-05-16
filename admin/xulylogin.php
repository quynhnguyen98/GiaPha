<?php
    include "../config.php";
    if (!isset($_SESSION)) session_start();
    $login = isset($_POST["login"]) ;
    if(isset($login)){
        $name = $_POST['username'];
        $pass = $_POST['password'];
        $data = $connect->query("select * from admin where username='$name' and password='$pass'");
        $r=$data->fetch();
        if($r != null){
            $_SESSION["admin_login"] = $r[0];
            exit('Login success...');
        }  
        else{
            exit('<font color="red">Username hoặc password không đúng!</font');
        }
        
            
    }


?>