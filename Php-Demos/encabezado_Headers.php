<?php
$url = 'http://www.google.com';

print_r(get_headers($url));
print("<br>Encabezado con su nombre<br>");

print_r(get_headers($url, 1));
?>