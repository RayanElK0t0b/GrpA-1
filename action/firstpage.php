<?php     

    $sql = "SELECT * FROM home";     
    $pre = $pdo->prepare($sql);     
    $pre->execute();     
    $data = $pre->fetch(PDO::FETCH_ASSOC);        
    
?>   
  
<form class="" action="php\updatehome_page.php" method="post" enctype="multipart/form-data">       
    <textarea name="h1"> <?php echo $data['h1'] ?></textarea>       
    <textarea name="h2"> <?php echo $data['h2'] ?></textarea>       
    <textarea name="p1"> <?php echo $data['p1'] ?></textarea>       
    <textarea name="p2"> <?php echo $data['p2'] ?></textarea>        
    
    <img src="<?php echo $data['img1'] ?>" width="50px">       
    <input type="file" name="img1">       
    <img src="<?php echo $data['img2'] ?>" width="50px">       
    <input type="file" name="img2">        
    
    <button type="submit" name="button">Modifier</button>