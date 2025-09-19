<?php

// formater le prénom suivant : paTriciA => Patricia

$firstName = "paTriciA";

$firstNameFirstLetter = substr($firstName,0,1);
$firstNameRestOfLetter = substr($firstName, 1);

echo strtoupper($firstNameFirstLetter) . strtolower($firstNameRestOfLetter);



?>


