<?php
$file = fopen("test.html","r",);

//output a line of the file until the end is rached
$line = fgets($file);
while (! feof($file))
{
    echo $line . "<br>";
    $line = fgets($file);
}
fclose($file);
print_r(file("test.html"));
echo file_exists("test.html");


?>