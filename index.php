<?php
 
require_once('watermarker.class.php');

$image = "images/basic.jpg";
$stamp = "images/watermark.png";
$save = "basic_with_watermark.jpg";

echo WaterMarker($image,$stamp,$save,"left","bottom");