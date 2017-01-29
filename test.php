<?php

/*
 * PHP Country-list - How to get country list in MySql format
 */

//source can be either clrd or icu
$source = "cldr";
$language = "en";
$format = "mysql.sql";

//get the list
$list = file_get_contents("country/".$source."/".$language."/country.".$format);
//display the list
echo $list;
?>
