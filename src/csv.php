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
            return $file = fopen($name, "r");
        }
        public function createArray(String $file): array
        {
            return $records[] = str_getcsv($file);
        }
        public function printArray(ArrayObject $records): string
        {
            return print_r($records);
        }
    }
    final class midterm extends csv
    {
        public function project()
        {
            $name = "SacramentocrimeJanuary2006.csv";
            readCSV($name);
            createArray($name);
            printArray($records);
            fclose($name);
        }
    }