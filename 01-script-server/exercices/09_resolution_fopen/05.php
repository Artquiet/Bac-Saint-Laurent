<?php
$filename = "exe_01.php";
$content = "";
$content .= "<?php\n";
$content .= "echo \"Bonjour\";\n";
$content .= "?>";
file_put_contents($filename, $content);
?>