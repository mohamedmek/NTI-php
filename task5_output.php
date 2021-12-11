<?php


$file =  fopen("info.txt","r")  or die("Can't open File");
while(!feof($file)){
    
    echo  fgets($file)."<br>";

}


?>

