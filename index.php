<?

if (isset($_COOKIE['Mortal'])) $cnt=$_COOKIE['Mortal']+1;
else $cnt=0;

setcookie("Mortal",$cnt,0x6FFFFFFF);

echo "<p>Изображение показано <b>".@$_COOKIE['Mortal']."</b> раз</p>";

?>

<img src="image.php" />