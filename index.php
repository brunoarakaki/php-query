<?php
// Get html and display it, replacing selected items from db
$html_index = file_get_contents(__DIR__ . '/query.html');
echo($html_index);

?>
