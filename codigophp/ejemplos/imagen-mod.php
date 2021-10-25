<?php
    $im = imagecreatefromjpeg("dog.jpg");

    header('Content-Type: image/jpeg');

    imagestring($im, 1, 10, 10, "Hola, soy yo", 1);

    imagejpeg($im);
    imagedestroy($im);
?>
