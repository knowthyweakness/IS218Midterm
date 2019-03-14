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
    class html
    {
        public function getArray()
        {
            $array = (array)$this;
            return $array;
        }

        public static function makeTable($records)
        {
            $num = 0;
            foreach ($records as $record) {
                if ($num == 0) {
                    $array = $record->html::getArray();
                    $fields = array_keys($array);
                    $values = array_values($array);
                    print_r($fields);
                    print_r($values);
                } else {
                    $array = $record->html::getArray();
                    $values = array_values($array);
                    print_r($values);
                }
                $num++;
            }
        }
    }

    }
    final class midterm
    {
        public function project()
        {
            $name = "SacramentocrimeJanuary2006.csv";
            csv::openCSV($name);
            html::makeTable(csv::printArray(csv::createArray($name)));
            fclose(csv::openCSV($name));
        }
    }