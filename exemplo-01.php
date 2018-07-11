<?php 

// Exemplo de como criar uma imagem a partir do zero
header("Content-type: image/png");

$img = imagecreate(256, 256);

$blck = imagecolorallocate($img, 0, 0, 0);

$red = imagecolorallocate($img, 255, 0, 0);

//imagestring(image, font, x, y, string, color)
imagestring($img, 5, 60, 120, "Curso de php 7!", $red);

imagepng($img);

imagedestroy($img);

 ?>