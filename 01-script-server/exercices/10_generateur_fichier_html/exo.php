<?php
$filename = "exe_layout.html";
$content = "";
//debut html 
$content .= "<!DOCTYPE html>\n";
$content .= "<html lang='en'>\n";
// debut head
$content .= "<head>\n";
$content .= "\t<meta charset='UTF-8'>\n";
$content .= "\t<title>Title</title>\n";
$content .= "\t <link rel='stylesheet' href='css/style.css'>\n";
$content .= "</head>\n";
// fin head
$content .= "<body>\n";
//----------
// Contenu body debut

$content .= "\t<header class='header'>\n";
$content .= "\t\t<h1>My Website</h1>\n";
$content .= "\t\t<p>Resize the browser window to see the effect.</p>\n";
$content .= "\t</header>\n";

$content .= "\t<nav class='topnav'>\n";
$content .= "\t\t<a href='#'>Link</a>\n";
$content .= "\t\t<a href='#'>Link</a>\n";
$content .= "\t\t<a href='#'>Link</a>\n";
$content .= "\t\t <a href='#' style='float:right'>Link</a>
\n";
$content .= "\t</nav>\n";

$content .= "\t<div class='row'>\n";

$content .= "\t\t<div class='leftcolumn'>\n";
$content .= "\t\t\t<div class='card'>\n";
$content .= "\t\t\t\t<h2>TITLE HEADING</h2>\n";
$content .= "\t\t\t\t<h5>Title description, Dec 7, 2017</h5>\n";
$content .= "\t\t\t\t<div class='fakeimg' style='height:200px;'>Image</div>";
$content .= "\t\t\t\t<p>Some text..</p>";
$content .= "\t\t\t\t <p>Sunt in culpa qui officia deserunt mollit anim id est laborum consectetur adipiscing elit, sed do
                    eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud
                    exercitation ullamco.</p>";
$content .= "\t\t\t</div>\n";
$content .= "\t\t</div>\n";

$content .= "\t\t<div class='rightcolumn'>\n";
$content .= "\t\t\t<div class='card'>\n";

$content .= "\t\t\t\t<h2>About Me</h2>\n";
$content .= "\t\t\t\t<h5>Title description, Dec 7, 2017</h5>\n";
$content .= "\t\t\t\t<div class='fakeimg' style='height:200px;'>Image</div>";
$content .= "\t\t\t\t<p>Some text about me in culpa qui officia deserunt mollit anim..</p>";

$content .= "\t\t\t</div>\n";
$content .= "\t\t</div>\n";

$content .= "\t</div>\n";

$content .= "\t<footer class='footer'>\n";
$content .= "\t\t<h2>Footer</h2>\n";
$content .= "\t</footer>\n";

// Contenu body fin 
//----------
$content .= "</body>\n";
$content .= "</html>\n";
file_put_contents($filename, $content);

$site = array();
// page 1
$site["page"][0]["url"]         = "news.html";
$site["page"][0]["titre"]       = "News";
$site["page"][0]["sous_titre"]  = "News du site";
$site["page"][0]["content"]     = "Voici les news du site";
$site["page"][0]["image"]       = "news.png";
// page 2
$site["page"][1]["url"]         = "contact.html";
$site["page"][1]["titre"]       = "Contact";
$site["page"][1]["sous_titre"]  = "Les personnes à contacter";
$site["page"][1]["content"]     = "Voici la liste des personnes à contacter";
$site["page"][1]["image"]       = "contact.png";
// page 3
$site["page"][2]["url"]         = "shop.html";
$site["page"][2]["titre"]       = "Shop";
$site["page"][2]["sous_titre"]  = "Articles de la boutique proposé";
$site["page"][2]["content"]     = "Voici la liste des articles proposé par notre boutique";
$site["page"][2]["image"]       = "shop.png";


// header
$site["header"]["nom_site"]     = "f1_net";
$site["header"]["slogan"]       = "logo_f1";
// footer
$site["footer"]                 = "f1_coorp";

// colonne de droite
// about
$site["right"]["about"]["titre"]    = "f1_a_propos_titre";
$site["right"]["about"]["img"]      = "f1_image";
$site["right"]["about"]["content"]  = "f1_a_propos_contenu";
// popular
$site["right"]["popular"]["titre"]  = "f1_populaire_titre";
$site["right"]["popular"]["img"][]  = "f1_populaire_image1";
$site["right"]["popular"]["img"][]  = "f1_populaire_image2";
$site["right"]["popular"]["img"][]  = "f1_populaire_image3";
// post
$site["right"]["follow"]["titre"]    = "f1_nous_suivre";
$site["right"]["follow"]["content"]  = "f1_contenu_supplementaire";




?>