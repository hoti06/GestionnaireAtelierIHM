<?php
# vendor/barcode/lib/Barcode/Barcode.php

require_once __DIR__.'/src/class/BCGFontFile.php';
require_once __DIR__.'/src/class/BCGColor.php';
require_once __DIR__.'/src/class/BCGDrawing.php';
require_once __DIR__.'/src/class/BCGcode128.barcode.php';

class Barcode_Barcode {
	
	public function generateBarcode($uuid)
    {
		// Font de charactere
//	$font = new BCGFontFile('font/Arial.ttf', 18);
	//Couleur de Barcode
	$color_black = new BCGColor(0, 0, 0);
	$color_white = new BCGColor(255, 255, 255);
	$drawException = null;
	
		try {
			$code = new BCGcode128();
			//$code->setScale(2); 
			//$code->setThickness(30); // L'épaisseur de Barcode
			$code->setForegroundColor($color_black); // Couleur de Barcode
			$code->setBackgroundColor($color_white); // Couleur de gap vide
	//		$code->setFont($font); // 
			//$code->parse($uid); // données de Barcode
			$text = $uuid; //les données pour barcodes
   			$code->parse(array(CODE128_B, $text));
			} catch(Exception $exception) {
			$drawException = $exception;
		}
	
	
	//Dessin les barcodes selon les conditions precedents
	$drawing = new BCGDrawing("img/barcode/".$uuid.'.png', $color_white);
		if($drawException) {
			$drawing->drawException($drawException);
		} else {
			$drawing->setBarcode($code);
			$drawing->draw();
		}
		
		$dim = $code->getDimension(0,0);
		header('Content-Type: image/png');
		$drawing->finish(BCGDrawing::IMG_FORMAT_PNG);
			
	return [$dim[0], $dim[1]];
	}
}
