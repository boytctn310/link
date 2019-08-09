<?php
$url = $_GET['url'];
$html = file_get_contents("$url");
$dom = new domDocument;
libxml_use_internal_errors (true);
$dom->loadHTML($html);
$images = $dom->getElementsByTagName('img');
foreach($images as $image){
        $img = $image->getAttribute('src');
        echo "<img src='".$img."'></br>";
}
?>