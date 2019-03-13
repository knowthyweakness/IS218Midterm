<?php
/**
 * Created by PhpStorm.
 * User: thoss
 * Date: 3/12/2019
 * Time: 10:05 PM
 */

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
