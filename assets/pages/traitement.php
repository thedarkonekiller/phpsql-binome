<?php

$db = new PDO('mysql:host=localhost;dbname=peche;charset=utf8','root','');


if(!empty($db) && $_POST["add"]){
    $fishingType = $_POST["fishingType"];
    $fishingDescription = $_POST["fishingDescription"];
    $techPicture = $_POST["techPicture"];
    $techVideo = $_POST["techVideo"];
    $fishingMaterial = $_POST["fishingMaterial"];
    $fishingBaits = $_POST["fishingBaits"];

    $req = "INSERT INTO techniques (type,description,image,video,materiel,appats) VALUES ('$fishingType','$fishingDescription','$techPicture','$techVideo','$fishingMaterial','$fishingBaits')";

    $exec = $db->query($req);

    header('Location: ./dashboard.php');
    $db = null;

}
if (!empty($db) && $_POST["suppr"]) {
    $req = "SELECT id FROM techni"
}

?>