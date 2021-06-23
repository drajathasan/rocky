<?php
/**
 * @author Drajat Hasan
 * @email drajathasan20@gmail.com
 * @create date 2021-06-23 13:17:16
 * @modify date 2021-06-23 13:17:16
 * @desc [description]
 */

 class RockyImage
 {
     public function stream(int $width, int $height, string $fileName)
     {
         if (class_exists('Imagick'))
         {
            $file = SB . 'images/docs/' . basename($fileName);

            $image = new Imagick($file);
            $image->stripImage();
            $image->scaleImage($width, $height, true);

            header('Content-type: '.mime_content_type($file));
            echo $image->getImageBlob();
         }
     }
 }