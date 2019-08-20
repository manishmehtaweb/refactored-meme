<?php
error_reporting(0);
include('simple_html_dom.php');

$html = new simple_html_dom();
$url=$_POST['web'];
// Create DOM from URL or file
$html = file_get_html($url);
?>