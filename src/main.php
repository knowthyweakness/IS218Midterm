<?php
/**
 * Created by PhpStorm.
 * User: thoss
 * Date: 4/3/2019
 * Time: 3:58 PM
 */
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