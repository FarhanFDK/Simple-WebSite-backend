<?php
    $file = "example.txt";
    if($handle = fopen($file , 'w')){
        $content = fread($file , filesize($file));
        fclose($handle);
        unlink($file);
    }else{

    }
?>