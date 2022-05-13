<?php
$email = $parola = "";
$pattern = "^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$^";
$error = 0;
if(isset($_GET['email'])){
    $email = $_GET['email']."";
}
if(isset($_GET['parola'])){
    $parola = $_GET['parola']."";
}
    if(!preg_match($pattern,$email)){
        $error++;
    }
    if(empty($parola)){
        $error++;
    }

    if($error>0){
        echo "Ati introdus datele gresit";
    }
    else{
        echo "Datele au fost transmise cu succes";
    }
?>