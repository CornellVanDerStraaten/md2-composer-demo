<?php
// Laad de composer autoloader in
require 'vendor/autoload.php';


// Lees de documentatie van de khanamiryan/qrcode-detector-decoder package:
// Zo weet je hoe je deze package kunt gebruiken
// https://github.com/khanamiryan/php-qrcode-detector-decoder/`

use CodeItNow\BarcodeBundle\Utils\QrCode;

$qrCode = new QrCode();
$qrCode
    ->setText('https://www.youtube.com/watch?v=dQw4w9WgXcQ')
    ->setSize(300)
    ->setPadding(10)
    ->setErrorCorrection('high')
    ->setForegroundColor(array('r' => 0, 'g' => 0, 'b' => 0, 'a' => 0))
    ->setBackgroundColor(array('r' => 255, 'g' => 255, 'b' => 255, 'a' => 0))
    ->setLabel('Scan Qr Code')
    ->setLabelFontSize(16)
    ->setImageType(QrCode::IMAGE_TYPE_PNG)
;
$qrCode->save('qrcode.png');
echo '<img src="data:'.$qrCode->getContentType().';base64,'.$qrCode->generate().'" />';

