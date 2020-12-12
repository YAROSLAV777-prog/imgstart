<?php

header ("Content-type: image/png");
$img = imagecreatetruecolor(320, 240);
for ($i=0;$i<320;$i++)
    for ($j=0;$j<240;$j++) {
        $ink = imagecolorallocate($img, $i*$j, $i*$j, $i*$j);
        imagesetpixel($img,$i,$j,$ink);
        }
imagepng($img);
imagedestroy($img);
?>

<?

if (isset($_COOKIE['Mortal'])) $cnt=$_COOKIE['Mortal']+1;
else $cnt=0;

setcookie("Mortal",$cnt,0x6FFFFFFF);

echo "<p>Вы посещали эту страницу <b>".@$_COOKIE['Mortal']."</b> раз</p>";

?>