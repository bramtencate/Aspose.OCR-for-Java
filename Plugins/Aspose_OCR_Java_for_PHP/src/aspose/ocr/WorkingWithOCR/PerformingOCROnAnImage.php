<?php
namespace Aspose\OCR\WorkingWithOCR;

use com\aspose\ocr\OcrEngine as OcrEngine;
use com\aspose\ocr\ImageStream as ImageStream;

class PerformingOCROnAnImage{

    public static function run($dataDir=null){

        # Initialize an instance of OcrEngine

        $ocr_engine = new OcrEngine();

        # Set the Image property by loading the image from file path location

        $imageStream=new ImageStream();
        $ocr_engine->setImage($imageStream->fromFile($dataDir . 'ocr.png'));



        # Process the image
        if ($ocr_engine->process()) {
            # Display the recognized text
            print "Text: " . (string)$ocr_engine->getText() . PHP_EOL;
        }
    }
}
?>