<?php
require 'include/SimpleImage.php';
$desti = "Keyset/blank.png";
$destid = "new/blank.png";
try {
                // Create a new SimpleImage object
                $image = new \claviska\SimpleImage();
                 // Magic! ✨
                 $image
                 ->fromFile($desti)                     // load image.jpg
                 ->autoOrient()                              // adjust orientation based on exif data
                 ->resize(717, 500)
                 ->overlay($watermarker, 'bottom right')  // add a watermark image                                     // resize large to 320x200 pixel
                 ->toFile($destid);      // convert to PNG and save a copy to new-image.png
                // And much more! 💪
              } catch(Exception $err) {
                // Handle errors
                echo $err->getMessage();
              }

?>