<?php 

	header("Content-type: image/png");
	
	$card_base_img = imagecreatefrompng("images/ck.png");
	$fred_img = imagecreatefrompng("images/freddy_crop.png");
	
	$card_base_img_x = imagesx($card_base_img);
	$card_base_img_y = imagesy($card_base_img);
	$fred_img_x = imagesx($fred_img);
	$fred_img_y = imagesy($fred_img);

	$overlay_x = round(($card_base_img_x - $fred_img_x) / 2);
	$overlay_y = round(($card_base_img_y - $fred_img_y) / 2);

	imagecopy($card_base_img, $fred_img, $overlay_x, $overlay_y, 0,0, $fred_img_x, $fred_img_y);

	// imagepng($card_base_img);
	imagepng($card_base_img);
	imagedestroy($card_base_img);
	
	// $string = 'FNAF';
	// $fred_img = imagecreatefrompng("images/freddy_crop.png");
	// $orange = imagecolorallocate($im, 220, 210, 60);
	// $px = (imagesx($im) - 7.5 * strlen($string)) / 2;
	// imagestring($im, 3, $px, 9, $string, $orange);
	// imagepng($im);
	// imagedestroy($im);
