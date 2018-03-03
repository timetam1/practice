<?php
$a =$_POST["a"];
$b = explode(" ", $a);
$c = count($b);
for($d=0;$d<=$c;$d++){
	print $b[$d];
	print "<br>";
}
?>

<form action = "" method ="post">
<input type = "text" name ="a">
<input type = "submit" value = "おくる">  
</form>
