<?php
/**
 * Created by PhpStorm.
 * User: thoss
 * Date: 3/11/2019
 * Time: 7:26 PM
 */
    class CSV
    {
        public static function openCSV(String $name)
        {
            return $file = fopen($name, "r");
        }
        public static function createArray(String $file): array
        {
            while(($row = fgetcsv($file, 0, ",")) !== FALSE)
            {
                $records[] = $row;
            }
            return $records;
        }
        public static function printArray(Array $records)
        {
            $result = print_r($records);
            return $result;
        }
    }
    final class midterm
    {
        public function project()
        {
            $name = "SacramentocrimeJanuary2006.csv";
            csv::openCSV($name);
            csv::createArray($name);
            csv::printArray(csv::createArray($name));
            fclose(csv::openCSV($name));
        }
    }