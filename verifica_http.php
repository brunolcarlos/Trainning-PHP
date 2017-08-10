<?php 



$string = "http://casalenew.com.br";
$string2 = "Meu site é este http://www.carsalenew.com www.carsalenew.com https://www.carsalenew.com";



$replace1 = str_replace("http://www.","www.", $string2);
$replace2 = str_replace("https://www.","www.", $replace1);
$replace3 = str_replace("http://","www.", $replace2);
$replace4 = str_replace("https://","www.", $replace3);


$replace5 = preg_replace("#([www\.]+[a-z0-9_\.\-]*[a-z]\.+[a-z]{2,4})#","<a target='_blank'href='http://\\1'>\\1</a>" , $replace4);




// $replace2 = preg_replace("#([www\.][a-z0-9_\.\-]*[a-z]\.+[a-z]{2,4})#","<a target='_blank' href='http:\/\/\\1'>\\1</a>" , $string2);


$replace = preg_match("/^http(a)?:\/\/[a-z0-9_\.\-]*[a-z]\.+[a-z]{2,4}$/",$string);


if($replace) {
	echo 'Url válida';
}else{
	echo "url não válida";
}
echo "<br>";
echo "<br>";
echo "----------------------------";
echo "<br>";
echo "<br>";

if($replace5) {
	echo $replace5;
}else{
	echo "url não válida";
}