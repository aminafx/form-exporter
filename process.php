<?php
include 'Exporter/Exporter.php';
include 'Exporter/TextExporter.php';

//if($_SERVER["REQUEST_METHOD"] == 'POST'){
//    echo 'Submitted';
//    return ;
//}

$params = $_POST;
[$title, $content, $format] = [$_POST['title'], $_POST['content'], $_POST['format']];


//echo "Not Submitted";

if(isset($params) && !empty($params)){
    if($params['format']=='Text'){
        $text = new TextExporter(['title' =>$params['title'],'content'=>$params['content']]);
        $text->export();
    }


}