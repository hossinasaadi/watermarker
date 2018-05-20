# watermarker
simple PHP code to add watermark on your pictrues.

```php
require_once('watermarker.class.php');

$image = "images/basic.jpg";
$stamp = "images/watermark.png";
$save = "basic_with_watermark.jpg";

echo WaterMarker($image,$stamp,$save,"left","bottom");

```

output :

![alt WaterMarker](https://raw.githubusercontent.com/hossin277/watermarker/master/basic_with_watermark.jpg)