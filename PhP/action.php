<?php
$email = $nume = $comment = "";
$pattern = "^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$^";
$error = 0;
if(isset($_GET['nume'])){
    $nume = "Numele: ".$_GET['nume']."";
}
if(isset($_GET['email'])){
    $email = "E-mailul: ".$_GET['email']."";
}
if(isset($_GET['comment'])){
    $comment = "Problema: ".$_GET['comment']."";
}
    if(empty($nume)){
        $error++;
    }  
    if(!preg_match($pattern,$email)){
        $error++;
    }
    if(empty($comment)){
        $error++;
    }

    if($error>0){
        echo "Ati introdus datele gresit";
    }
    else{
        $file=fopen("saved.txt", "a");
        fwrite($file,"----------------------------------\n");
        fwrite($file, $nume);
        fwrite($file,"\n");
        fwrite($file, $email);
        fwrite($file,"\n");
        fwrite($file, $comment);
        fwrite($file,"\n");
        fwrite($file,"----------------------------------\n");
        fclose($file);
        echo "Mesajul a fost trimis cu succes";
    }
?>