<?php
/**
 * Created by hh.
 * User: hakhagmon
 * Date: 21.02.2018
 * Time: 2:20
 */


class CSV
{
    //private $_csv_file = null;
    public $_csv_file = null;

    public function __construct($csv_file)
    {
        if (file_exists($csv_file)) {
            $this->_csv_file = $csv_file;
        } else throw new Exception('Файл ' . $csv_file . ' не найден');
    }

    public function getCSV()
    {
        $handle = fopen($this->_csv_file, "r");
        $array_line_full = array();
        while (($line = fgetcsv($handle, 0, ";")) !== FALSE) {
            $array_line_full[] = $line;
        }
        fclose($handle);
        return $array_line_full;
    }
}


$csv = new CSV('file.csv');

$get_csv = $csv->getCSV();
foreach ($get_csv as $value) {
    echo $value[5];
}