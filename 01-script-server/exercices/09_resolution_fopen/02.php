<?php
$filename = "exe_02.txt";
file_put_contents($filename, $_SERVER["REMOTE_ADDR"]);
?>