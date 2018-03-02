<?php
$a = explode(",",$_POST["name"]);
$b = count($a);
for($c=0;$c<=$b;$c++){
	print $a[$c]*3;
	print "<br>";
}
?>
<form action="" method = "post">
<input type = "text" name = "name">
<input type = "submit" value = "送信する">
</form>
