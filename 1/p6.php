<?php
$file = 'count.txt';
$count = strval(file_get_contents($file));
$count = $count + 1;
file_put_contents($count);
echo "You are visitor number". $count;

?>
