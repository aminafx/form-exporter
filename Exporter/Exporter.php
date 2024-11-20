<?php
include '../vendor/autoload.php';

interface Exportable
{

}

abstract class Exporter implements Exportable
{
    protected $data;
    protected $format;


    public function __construct($data)
    {
        $this->data = $data;
    }


    /**
     * @param $title
     * @param $content
     * @return void
     */
    public static function is_valid()
    {
        foreach ($this->data as $field) {
            if (empty($field)) {
                return false;
            }
        }
        return true;

    }

    public abstract function export();
}