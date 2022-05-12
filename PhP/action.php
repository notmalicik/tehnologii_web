<?php
$Nume = $Email = $Comment ="";
$numeErr = $mailErr = $comErr ="";
$pattern = "^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$^";
if(isset($_POST['submit'])){
    $Nume = "Numele: ".$_POST['nume']."";
    $Email = "E-mailul: ".$_POST['email']."";
    $Comment = "Problema: ".$_POST['comment']."";
    if(empty($Nume)){
        $numeErr = "* Introduceti numele";
    }  
    if(!preg_match($pattern,$Email)){
        $mailErr = "* Email-ul nu este valid!";
    }
    if(empty($Comment)){
        $comErr = "* Introduceti problema cu care v-ati confruntat";
    }
    $file=fopen("saved.txt", "a");
    fwrite($file,"----------------------------------\n");
    fwrite($file, $Nume);
    fwrite($file,"\n");
    fwrite($file, $Email);
    fwrite($file,"\n");
    fwrite($file, $Comment);
    fwrite($file,"\n");
    fwrite($file,"----------------------------------\n");
    fclose($file);
    echo "Mesajul a fost trimis cu succes";
}
?>