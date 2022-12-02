<?php 

require_once "../config.php";

if(is_int($_POST['phone'])){
    $sql = "INSERT INTO contact VALUES(:fname,:lname,:email,:phone,:obj,:msg)";
    $dataBinded=array(
        ':fname'   => $_POST['fname'],
        ':lname'   => $_POST['lname'],
        ':email'   => $_POST['email'],
        ':phone'   => $_POST['phone'],
        ':obj'   => $_POST['object'],
        ':msg'   => $_POST['message'],
    );
    $sql = $sql.";";
    $pre = $pdo->prepare($sql);
    $pre->execute($dataBinded);
    
    $email = $_POST['email'];
    $objet = $_POST['object'];
    $content = $_POST['message'];
    $headers = array('MIME-Version: 1.0','Content-type: text/html; charset=utf8');

    if(mail($email,$objet,$content,$headers)){
        //le mail est bien parti ! Pas d'erreur
    }else{
     //on a une erreur quelque part
    }

}else{
    //header('Location:../index.php');
    exit();
}

//header('Location:../index.php');
exit();

?>