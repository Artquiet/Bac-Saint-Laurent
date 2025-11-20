<?php
$filename = "exe_03.txt";
file_put_contents($filename, $_SERVER["REMOTE_ADDR"]."\n", FILE_APPEND);
?>