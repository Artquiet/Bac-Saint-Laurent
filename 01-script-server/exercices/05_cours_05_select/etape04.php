<?php
$mois   = array("janvier" => 31, "fevrier" => 28, "mars" => 31, "avril" => 30, "mai" => 31, "juin" => 30, "juillet" => 31, "aout" => 31, "septembre" => 30, "octobre" => 31, "novembre" => 30, "décembre" => 31);
$jour   = array("lundi", "mardi", "mercredi", "jeudi", "vendredi", "samedi", "dimanche");

$aff = "";

$position = 5;

foreach($mois as $m_key => $m_value){
	$max_jour = $m_value;
	$aff .= "<div class='container-month'>";
	$aff .= "<h2>".ucfirst($m_key)."</h2>";
	
	$aff .= "<table>";
	$cpt = 0;
	$aff .=  "<tr>";
	foreach($jour as $j_value){
		$aff .=  "<th>".substr($j_value, 0, 2)."</th>";
	}
	$aff .=  "</tr>";
	
	$cpt_tr = 0;
	for($num = 1; $num <= $max_jour; $num++){
		// affichage du <tr>
		if($cpt_tr == 0){
			$aff .= "<tr>";
		}
		if($num == 1){
			for($cpt_position = 0; $cpt_position < $position; $cpt_position++){
				$aff .= "<td> - </td>";
				$cpt_tr++;
			}
		}
		$aff .= "<td>".$num."</td>";
		
		if($cpt_tr == 6){
			$aff .= "</tr>";
			$cpt_tr = -1;
		}
		$cpt_tr++;
	}
	$position = $cpt_tr;
	
	$aff .= "</table>";
	$aff .= "</div>";
}
?>
<!DOCTYPE html>
<html>
    <head>
        <title></title>
        <meta charset="utf-8">
		<style>
			body {
				font-size: 1.5em;
				line-height: 1.6;
				font-weight: 400;
				font-family: Verdana, Helvetica, Arial, sans-serif;
				color: #222; 
			}
			h1, h2 {
				margin-top: 0;
				margin-bottom: 2rem;
				font-weight: 300; 
			}
			h1 { font-size: 4.0rem; line-height: 1.2;  letter-spacing: -.1rem;}
			h2 { font-size: 3.6rem; line-height: 1.25; letter-spacing: -.1rem; }
			table{
				margin-bottom: 2.5rem; 
			}
			th, td {
				padding: 12px 15px;
				text-align: left;
				border-bottom: 1px solid #E1E1E1; 
			}
			th:first-child,
			td:first-child {
				padding-left: 0; 
			}
			th:last-child,
			td:last-child {
				padding-right: 0; 
			}
			.container-month{
				display: inline-block;
				padding: 30px;
			}
		</style>
	</head>
    <body>
		<?php
		echo $aff;
		?>
    </body>
</html>

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