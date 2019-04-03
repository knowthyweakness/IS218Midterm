<?php
/**
 * Created by PhpStorm.
 * User: thoss
 * Date: 4/3/2019
 * Time: 4:12 PM
 */
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