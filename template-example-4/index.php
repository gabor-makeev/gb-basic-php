<?php

$content = [
    "title" => "This is a page title",
    "heading" => "This is a page heading",
    "year" => date("Y")
];

$templateContent = file_get_contents("template.html");

foreach ($content as $key => $value) {
    $templateContent = str_replace("{{ $key }}", $value, $templateContent);
}

echo $templateContent;
