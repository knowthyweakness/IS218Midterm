<?php
/**
 * Created by PhpStorm.
 * User: thoss
 * Date: 3/11/2019
 * Time: 7:26 PM
 */
public function readCSV(String $name) :array
{
    $file = fopen($name, "r");
    $fileArray = fgetcsv($file);
    print_r($fileArray);
    fclose($file);
}