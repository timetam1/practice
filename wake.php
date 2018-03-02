<?php
$b = explode(",",$_POST["name"]);
$c = count($b);
for($d=0;$d<=$c;$d++){
	$rr = $b[$d];
	$ww = mb_convert_encoding($rr, 'UTF-8');
	print $ww;
	print "<br>";
}
?>
<form action = "" method = "post">
<textarea type = "text" name = "name" rows=30px cols=30px></textarea>
<input type = "submit" value = "押して">
</form>
