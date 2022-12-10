<?php

$title = "This is a page title";
$heading = "This is a page heading";
$year = date("Y");

$templateContent = file_get_contents("template.html");

$templateContent = str_replace("{{ title }}", $title, $templateContent);
$templateContent = str_replace("{{ heading }}", $heading, $templateContent);
$templateContent = str_replace("{{ year }}", $year, $templateContent);

echo $templateContent;
