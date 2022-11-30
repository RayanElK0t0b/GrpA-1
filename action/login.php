<?php 

require_once "../config.php"; 

$sql = "SELECT * FROM user WHERE email='".$_POST['email']."' AND password='".$_POST['password']."'"; 
$pre = $pdo->prepare($sql); 
$pre->execute();
$user = $pre->fetch(PDO::FETCH_ASSOC);
if(empty($user)){
     echo "Utilisateur ou mot de passe incorrect !";
     header('Location:../index.php');
}else{
     $_SESSION['user'] = $user;
     if($_SESSION['user']['admin'] == 1){
          header('Location:../adminoanel.php');
     }else{
          header('Location:../index.php');
     }
}

?>