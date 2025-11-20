<?php
$mois = array("janvier", "fevrier", "mars", "avril", "mai", "juin", "juillet", "aout", "septembre", "octobre", "novembre", "décembre");

$aff = "";

foreach($mois as $m_value){
	$aff .= "<h2>".ucfirst($m_value)."</h2>";
}

echo $aff;

?>

<!DOCTYPE html>

<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Html Template </title>
</head>
<body>
    
</body>
</html>