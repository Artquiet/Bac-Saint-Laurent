<?php
/*
La fonction "init_tagname" est une fonction qui permet 
d'initialiser et de récupérer des données provenant d'un formulaire
en utilisant une superglobale ($_POST ou $_GET) 
et un array de nom de champs.

- Le premier paramètre, $array_name, est un array associatif 
contenant le nom des champs et le type de données 
attendues pour chaque champ.
- Le deuxième paramètre facultatif, $superglobale, 
définit la superglobale utilisée pour récupérer 
les données (par défaut "POST").
- Le troisième paramètre facultatif, $prefixe, 
est un préfixe ajouté aux noms des variables initialisées 
pour éviter les collisions de noms.

La fonction utilise les filtres de PHP pour nettoyer
et vérifier les données avant de les stocker dans des 
variables globales avec le nom des champs
préfixées avec $prefixe.

La fonction effectue les étapes suivantes :

-   Vérification de la superglobale : La fonction vérifie si 
la superglobale mentionnée en paramètre ($superglobale) 
est valide (soit "POST" ou "GET").
    Si ce n'est pas le cas, elle affiche une erreur et quitte 
    l'exécution du script.

-   Définition de la superglobale et du préfixe :
    En fonction de la superglobale mentionnée, 
    la fonction définit la superglobale utilisée 
    ($_POST ou $_GET) et le préfixe à ajouter aux noms
    des variables initialisées.
    Si le préfixe n'est pas mentionné en paramètre, 
    il est défini par défaut en fonction de la superglobale utilisée.

-   Boucle sur les champs :
    La fonction effectue une boucle sur les entrées 
    du tableau $array_name et initialise des variables 
    pour chaque champ en utilisant
    les filtres de PHP pour nettoyer et vérifier les données.
    Les variables sont initialisées avec le nom du champ préfixé 
    avec le préfixe défini. Si le type de champ est un tableau,
    la fonction utilise :
    *   le filtre FILTER_REQUIRE_ARRAY pour récupérer les données 
    sous forme de tableau.
    *   Sinon, elle utilise un filtre spécifique en fonction 
    du type de champ attendu 
    (FILTER_SANITIZE_SPECIAL_CHARS pour "string",
        FILTER_SANITIZE_NUMBER_INT pour "int" 
        et FILTER_SANITIZE_NUMBER_FLOAT pour "float").
*/
function init_tagname($array_name, $superglobale = "POST", $prefixe = ""){
    // la valeur de $superglobale est mise en 
    // majuscules au cas où elle aurait été déclarée en minuscules
    $superglobale = strtoupper($superglobale);
    // un tableau comprenant les superglobales autorisées 
    // dans le cas de cette fonction
    $sg = ["POST", "GET"];
    // on vérifie si la superglobale spécifiée 
    // fait bien partie des superglobales autorisée 
    // sinon on arrête le script et affiche une erreur
    if(!in_array($superglobale, $sg)){
        exit("Erreur d'initialisation ! La superglobale que vous mentionnez ne peut être traitée ...");
    }
    switch($superglobale){
        case "POST":
            $prefixe = empty($prefixe) ? "post_" : $prefixe;
            define("CONST_INPUT", INPUT_POST);
            $superglobale = $_POST;
            break;
        case "GET":
            $prefixe = empty($prefixe) ? "get_" : $prefixe;
            define("CONST_INPUT", INPUT_GET);
            $superglobale = $_GET;
            break;
    }

    foreach($array_name as $key_name => $value){
        $type_array = false;
        $value_filter = $value[0];
        $value_default = $value[1];

        if(substr($value_filter,0, 6) == "array_"){
            $value_filter = substr($value_filter,6);
            $type_array = true;
        }
        switch($value_filter){
            case "string":
                $filter = FILTER_SANITIZE_SPECIAL_CHARS;
                break;
            case "int":
                $filter = FILTER_SANITIZE_NUMBER_INT;
                break;
            case "float":
                $filter = FILTER_SANITIZE_NUMBER_FLOAT;
                break;
        }
        // on définit une variable globale de façon 
        // à ce qu'elle puisse être utilisée en dehors 
        // de la fonction (cf: la portée des variables)
        global ${$prefixe."".$key_name};
        if(!$type_array){
            ${$prefixe."".$key_name} = isset($superglobale["$key_name"]) ? filter_input(CONST_INPUT, "$key_name", $filter) : $value_default;
        }else{
            ${$prefixe."".$key_name} = isset($superglobale["$key_name"]) ? filter_input(CONST_INPUT, "$key_name", $filter, FILTER_REQUIRE_ARRAY) : $value_default;
        }
        /*
         La notation utilisée ici est celle d'une variable variable.
        Cela signifie qu'une variable est créée ou modifiée 
        en utilisant une chaîne de caractères comme nom.
        Dans ce cas, ${$prefixe."".$key_name} est une 
        variable variable qui est créée à chaque itération 
        de la boucle foreach.
        Le nom de la variable est créé en concaténant 
        la valeur de "$prefixe" avec la valeur actuelle de $key_name.
        Par exemple, si la première itération de la 
        boucle est "nom" et que la valeur de $prefix 
        est "test", alors la variable créée sera "test_nom".
        L'avantage de cette méthode est que l'on peut 
        créer des variables dynamiquement sans avoir à 
        les déclarer explicitement.
        */
    }
}

function addInput($label, $properties, $required = false, $div_class = ""){
    // vérification d'une propriété name. Si non spécifié, 
    // le script s'arrête et génère une erreur
    if(!isset($properties["name"])){
        exit("Erreur lors de la génération de votre input $label : name non spécifié dans le tableau des propriétés !");
    }
    // vérification : le type est-il définit ? 
    // sinon l'attribut "text" est attribué par défaut
    if(!isset($properties["type"]) || empty($properties["type"])){
        $properties["type"] = "text";
    }
    // initialisation de la variable check qui va 
    // servir lors de la vérification du champ
    // initialisation à true (est valide) => passera 
    // à false si le champ doit être vérifié et qu'il est vide
    $check  = true;
    // initialisation de la variable error qui 
    // contiendra le message d'erreur éventuel
    $error  = "";
    // afin d'éviter les doublons et/ou les erreurs, 
    // un nom d'id sera généré automatiquement à partir du nom du label
    $id     = $label;
    // suppression des caractères spéciaux pour éviter tout problème
    $id     = removeSpecialChar($id);

    // si le paramètre $required vaut true, vérification 
    // du contenu de la value du champ
    if($required){
        // si le champ est empty check vaudra 
        // false sinon check vaudra true
        $check  = isset($properties["value"]) && !empty($properties["value"]) ? true : false;
        // cette information sera renvoyée à la fin 
        // de l'exécution de la fonction
    }

    // création du html de l'input en rapport avec les 
    // informations collectées
    $input = "\n";
    $input .= "\t<div".(!empty($div_class) ? " class=\"".$div_class."\"" : "").">\n";
    $input .= "\t\t<label for=\"".$id."\">\n";
    // si la variable need vaut true alors affichage 
    // d'une * pour marquer le champ comme obligatoire
    $input .= "\t\t\t".$label." ".($required ? "<span class=\"missingstar\">&#10036;</span>" : "")."\n";
    $input .= "\t\t</label>\n";

    $s = "";
    // il faut boucler sur le tableau properties pour 
    // en extraire toutes les informations
    foreach($properties as $key => $value){
        $s .= " ".$key."=\"".$value."\"";
    }
    // définition de l'input et attribution des propriétés
    $input .= "\t\t<input id=\"".$id."\"".$s.">\n";
    // fin de la création de l'input

    // un tableau est retourné
    /*
     * input => code html généré
     * check => le champ est-il correctement rempli (true/false)
     * label => label correspondant
     * error => une erreur doit-elle être affichée ?
     *
     */
    return array("input" => $input, "check" => $check, "label" => $label, "error" => $error);
}



/*
Cette fonction, addSubmit, est utilisée pour ajouter 
un bouton "soumettre" (submit) à un formulaire HTML.
La fonction prend en entrée les propriétés du bouton 
(spécifiées dans un tableau associatif) et éventuellement 
une classe CSS pour la balise DIV
qui englobe le bouton. Les propriétés incluent 
des attributs HTML tels que la valeur (value) 
ou un identifiant (id).
La fonction renvoie un tableau associatif contenant 
l'HTML généré pour le bouton, ainsi qu'une vérification 
booléenne indiquant que la fonction
a correctement fonctionné (cette vérification est 
toujours vraie dans ce cas particulier).
*/
function addSubmit($properties, $div_class=""){
    $input = "\n";

    $s = "";
    foreach($properties as $key => $value){
        $s .= " ".$key."=\"".$value."\"";
    }

    $input .= "\t<div".(!empty($div_class) ? " class=\"".$div_class."\"" : "").">\n";
    $input .= "\t\t<input type=\"submit\"".$s.">\n";

    return array("input" => $input, "check" => true);
}


/*
La fonction form est utilisée pour créer un 
formulaire HTML et pour valider les données saisies 
dans les champs de ce formulaire.

    -   Le paramètre $id est utilisé pour donner un 
    identifiant unique au formulaire.
    -   Le paramètre $action est utilisé pour définir 
    l'URL vers laquelle les données saisies dans le 
    formulaire seront envoyées lors de la soumission.
    -   Le paramètre $method est utilisé pour définir 
    la méthode HTTP utilisée pour envoyer les données (GET ou POST).
    -   Le paramètre $content est un tableau qui contient 
    tous les éléments qui composeront le formulaire, 
    tels que les champs de saisie, les labels,
        les boutons d'envoi, etc.
    -   Le paramètre $class est optionnel et permet 
    de définir une classe CSS pour le formulaire.

La fonction vérifie d'abord si les données ont été 
soumises en utilisant la superglobale $_POST ou $_GET
en fonction de la méthode choisie.
Si aucune donnée n'a été soumise, le formulaire 
est affiché. Sinon, elle parcourt les éléments 
de $content pour construire le formulaire et
vérifie si les champs sont remplis correctement 
en utilisant les fonctions de validation de données 
définies précédemment.
Si un champ est vide et qu'il est requis, ou si 
une donnée saisie est incorrecte, un message d'erreur 
est affiché à côté de ce champ.

Si au moins un champ est vide ou mal rempli, 
le formulaire est réaffiché avec les messages d'erreur. 
Sinon, la fonction renvoie false.
 */

function form($id, $action, $method, $content, $class = ""){
    $superglobale = strtoupper($method) == "POST" ? $_POST : $_GET;

    $show_form      = array();
    // le formulaire doit-il être affiché ?
    // si le formulaire n'a pas encore été soumis alors il faut l'afficher
    $show_form[]    = sizeof($superglobale) == 0 ? true : false;

    // initialisation des variables + construction du formulaire
    $msg            = "";
    $form           = "\n";
    $form_class     = !empty($class) ? " class=\"".$class."\"" : "";
    $form .= "<form action=\"".$action."\" method=\"".$method."\" id=\"".$id."\"".$form_class.">\n";

    // boucle sur les différents éléments constituant le 
    // formulaire mise en forme (html) et champs
    foreach($content as $c){
        if(isset($c["html"])){
            $form .= $c["html"]."\n";
        }else{
            // vérifier l'état du champ (si il est correctement rempli). 
            // Si ce n'est pas spécifié, on considère qu'il l'est
            $required   = isset($c["check"]) ? $c["check"] : true;
            // création du message d'erreur
            $info_msg   = isset($c["label"]) ? "<b>Erreur:</b> ".$c["label"]." est manquant" : "Information manquante";
            // si il y a un message d'erreur, on l'affiche
            $info_msg   = isset($c["error"]) && !empty($c["error"]) ? "<b>Attention:</b> ".$c["error"] : $info_msg;
            // affichage d'une classe différente suivant qu'il 
            // s'agisse d'un champ manquant ou d'un champ mal rempli
            $class_msg  = isset($c["error"]) && !empty($c["error"]) ? "warning" : "error";
            // affichage du champ suivi de l'eventuel message d'erreur
            $form      .= $c["input"].((!$required && !empty($superglobale)) ? "\t<p class=\"missingfield ".$class_msg."\"> ".$info_msg."</p>" : "");
            $form .= "\t</div>\n";
            // si le champ doit être rempli et qu'il ne l'est pas, 
            // on insère true dans le tableau $show_form
            $show_form[] = isset($c["check"]) && $c["check"] == false ? true : false;
        }
    }

    $form .= "</form>\n";

    // si au moins un true est trouvé dans le array 
    // show_form : création d'un message d'erreur général
    $msg = in_array(true, $show_form) && sizeof($superglobale) > 0 ? "\t<p class=\"missingfield notice\"> <b>Attention:</b> Certains champs ont été oubliés ou sont mal remplis. Veuillez corriger.</p>" : "";
    // si au moins un true est trouvé dans le array 
    // show_form : ré-affichage du formulaire MAIS 
    // avec le message d'erreur
    // si aucun true alors return de false et soumission complète du form
    return in_array(true, $show_form) ? $msg.$form : false;
}

/*
Cette fonction, addLayout, est utilisée pour ajouter du 
contenu html à l'intérieur 
du formulaire sans que ce ne soit des champs de formulaire.
Exemple : des images, du texte
 */
function addLayout($content){
    return array("html" => $content, "check" => true);
}

function removeSpecialChar($s){
    // remplace les espace par des tirets
    $s = strtolower(str_replace(' ', '', $s));
    // retourne en enlevant tous les caractères spéciaux
    return preg_replace('/[^A-Za-z0-9\_]/', '_', $s);
}


?>