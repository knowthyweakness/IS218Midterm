<?php
/**
 * Created by PhpStorm.
 * User: thoss
 * Date: 3/11/2019
 * Time: 7:26 PM
 */
    class CSV
    {
        public function openCSV(String $name)
        {
            $file = fopen($name, "r");

        }
        public function createArray(String $file): array
        {
            $records =fgetcsv($file);
        }
        public function printArray(ArrayObject $records): string
        {
            print_r($records);
        }
        public function closeCSV(String $file)
        {
            fclose($file);

        }
    }
