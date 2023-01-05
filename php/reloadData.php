<?php
$filename='tableau.data';
if(file_exists($filename)) {
    $data = file_get_contents($filename);
    $array = unserialize($data);
    var_dump($array);
}



