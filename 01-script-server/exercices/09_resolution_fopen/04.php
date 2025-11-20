<?php
$filename = "exe_04.txt";
file_put_contents($filename, date("Y-m-d H:i:s")." : ".$_SERVER["REMOTE_ADDR"]."\n", FILE_APPEND);
?>