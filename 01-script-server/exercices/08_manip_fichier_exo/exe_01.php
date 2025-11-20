<?php 

$file = 'exe_01.txt';
$fileContent = file_get_contents($file);

$fileContent .= "Bonjour";

$fileAddcontent = file_put_contents($file, $fileContent);
echo $fileAddContent;

?>