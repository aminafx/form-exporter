<?php
include "autoload.php";

if ($_SERVER['REQUEST_METHOD'] != "POST") {
    // echo "Not Submitted";
    return;
}


//$params = $_POST;
[$title, $content, $format] = [$_POST['title'], $_POST['content'], $_POST['format']];
$whitelist = ['Text', 'Pdf', 'Json', 'Csv'];
if (!in_array($format, $whitelist)) {
    echo "Invalid Format !!!";
    return;
}
$className = "\Exporter\\{$format}Exporter";
$exporter = new $className(['title' => $title, 'content' => $content]);
$exporter->export();

