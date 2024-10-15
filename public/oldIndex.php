<?php

include_once '../app/helpers.php';

//print_pre($_SERVER);

//if(!is_dir('files')){
//    mkdir('files');
//    echo "Files folder created successfully.";
//}else{
//    echo "Files already exists.";
//}
//
//$files = scandir('./');
//
//print_pre($files);
//
//foreach($files as $file){
//    if(is_file($file)){
//        echo "This is a file: ". $file . "<br>";
//        echo "Boyut: " . filesize($file) . "bayt" . "<br>";
//    };
//    if(is_dir($file)) echo "This is a dir: ". $file . "<br>";
//}
//echo "<br>";
//$tes = @fopen('test.txt', 'w+');
//
//writeToFile('test.txt', 'Bu bir yeni setirdir');
//
//$tes = @fopen('test.txt', 'r');
//
//while (!feof($tes)) {
//    echo fgets($tes) . "<br>";
//}

//if(file_exists('test.txt')){
//    echo filesize('test.txt') . "<br>";
//
//    file_put_contents('test.txt', 'Hello PHP!');
//
//    clearstatcache();
//
//    echo filesize('test.txt') . "<br>";
//}
