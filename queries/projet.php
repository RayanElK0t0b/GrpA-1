<?php 
 include("../config.php");

$sql = "SELECT * FROM textes WHERE id_projet='".$_GET['id']."'"; 
$pre = $pdo->prepare($sql); 
$pre->execute();
$txts = $pre->fetch(PDO::FETCH_ASSOC);

print_r($txts);

foreach($txts as $key => $textess){
    echo $textess[text];
}
?>

<?php
/*
$carList = array(
    'benz' => array(
        'name'=>'Mercedes',
        'country'=>'Germany'
    ),
    'bm' => array(
        'name'=>'BMW',
        'country'=>'Germany'
    ),
    'au' => array(
        'name'=>'Audi',
        'country'=>'Germany'
    )
);


//pour chaque $car se trouvant dans $carList ($car devient un élément du tableau)
//pour faire simple, ça crée une variable (que j'ai nommé $car) 
//pour chaque élément se trouvant dans le tableau
foreach($carList as $key => $car){
    echo $car['name'];
}


Affiche :
Mercedes
BMW
Audi

*/
?>