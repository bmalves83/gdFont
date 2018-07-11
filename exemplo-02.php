<?php 
error_reporting(E_ALL);
// Exemplo de como gerar imagem a partir de um modelo base
$img = imagecreatefromjpeg("certificado.jpg");

$titleColor = imagecolorallocate($img, 0, 0, 0);

$gray = imagecolorallocate($img, 120, 120, 120);

imagestring($img, 5, 450, 150, "Certificado", $titleColor);

imagestring($img, 5, 440, 350, "Bruno Alves", $titleColor);

imagestring($img, 3, 420, 370, utf8_decode("Concluído em: ").date("d/m/Y"), $gray);

header("Content-type: image/jpeg");

// Aqui se adicionar parametros além da variável, a imagem não será exibida na tela
// Ela será salva no local selecionado e o último para define a qualidade da imagem
// Para "printar" a imagem na tela basta usar só o primeiro parametro que no caso é a imagem a ser exibida
imagejpeg($img);

imagedestroy($img);

 ?>