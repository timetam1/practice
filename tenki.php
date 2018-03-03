<?php
//秩父の気温情報アプリ
$a = "http://weather.livedoor.com/forecast/webservice/json/v1?city=110030";
$b = file_get_contents($a);
$b = mb_convert_encoding($b,'UTF-8');
$c = json_decode($b,true);
$max = $c['forecasts'][0]['temperature']['max']['celsius'];
print "最高".$max."ど";
print "<br>";
print "<br>";
if($max>25){
print "暑い";
}elseif($max>15){
	print "普通";
}else{
print "寒い";
}
?>
