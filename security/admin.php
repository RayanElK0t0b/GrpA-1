<?php 
require_once "config.php";

foreach($user as login['id'] => $id){
    if($user['admin']==0){
        header('Location:index.php')
        exit();
    }
}


?>