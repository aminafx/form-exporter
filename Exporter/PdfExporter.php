<?php
include "Exporter.php";
class PdfExporter extends Exporter
{
    protected $format = '.pdf';
    public function export()
    {
        $file_name = "text-file-".rand(100,999).$this->format;
        $file_path ="files/$file_name";
        $mpdf = new \Mpdf\Mpdf(['tempDir' => __DIR__ . '/tmp']);
        $mpdf->WriteHTML("<h1>{$this->data['content']}</h1>");
        $mpdf->Output($file_name,"D");
    }
}

$text = new PdfExporter(['title' =>'this is title','content'=>'this is content']);
$text->export();