<?php
/**
 * easy image WaterMarker function
 * @param  $image - basic image
 * @param  $stamp - The image set as watermark
 * @param  $output -  name of the new file (include path if needed)
 * @param  $x - int & String 'left','right'
 * @param  $y - int & String 'top','bottom'
 * @return boolean|resource
 */
function WaterMarker($image,$stamp,$output,$x,$y)
{
	if ( $image === null && $stamp === null ) return false;

	
	$watermark = imagecreatefrompng($stamp); //  watermark 
	$img = imagecreatefromjpeg($image);
	$marge_right = $x;
	$marge_bottom = $y;
	$sx = imagesx($watermark);
	$sy = imagesy($watermark);

	if ($y === "top") 
		$marge_bottom = 0;
	if ($y === "bottom") 
		$marge_bottom =  imagesy($img) - $sy - $marge_bottom ;
	if ($x === "left") 
		$marge_right = 0;
	if ($x === "right") 
		$marge_right = imagesx($img) - $sx - $marge_right;	



	imagecopy($img, $watermark,   $marge_right,  $marge_bottom, 0, 0, imagesx($watermark), imagesy($watermark));


	$save = imagejpeg($img,$output);
	$dest = imagedestroy($img);

	return $output;
  }