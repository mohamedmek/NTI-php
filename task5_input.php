<?php 

$jsonData =   file_get_contents("http://shopping.marwaradwan.org/api/Products/1/1/0/100/atoz");

$dataArray = json_decode($jsonData,true);

$file =  fopen("info.txt","w")  or die("Can't open File");

$counter=1;

foreach ($dataArray as $key => $value) {
    //echo $key;
    foreach ($value as $k => $v) {

        fwrite($file,"product number: ".$counter."\n");

        $text_id = "id: ".$v['products_id']."\n";
        fwrite($file,$text_id);


        $text_n= "name: ".$v['products_name']."\n";
        fwrite($file,$text_n);

        $text_des= "products_description: ".$v['products_description']."\n";
        fwrite($file,$text_des);

        $text_quan= "products_quantity: ".$v['products_quantity']."\n";
        fwrite($file,$text_quan);

        $text_mod= "products_model: ".$v['products_model']."\n";
        fwrite($file,$text_mod);

        $text_img= "products_image: ".$v['products_image']."\n";
        fwrite($file,$text_img);

        $text_date= "products_date_added: ".$v['products_date_added']."\n";
        fwrite($file,$text_date);

        $text_like= "products_liked: ".$v['products_liked']."\n";
        fwrite($file,$text_like);
        
        $counter+=1;
        echo $counter;
        $texts= "\n"."*********"."\n";
        fwrite($file,$texts);



        
    }
}

fclose($file);


?>
