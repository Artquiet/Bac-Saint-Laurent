<?php
$filename = "exe_02.php";
$content = "";
$content .= "<?php\n";
$content .= "\$prenom = \"Bob\";\n";
$content .= "echo \"Bonjour \".\$prenom;\n";
$content .= "?>";
file_put_contents($filename, $content);
?>