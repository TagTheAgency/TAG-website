<?php


$config = array(
    "paths" => array(
        "resources" => "/../resources",
    )
);

defined("LIBRARY_PATH")
    or define("LIBRARY_PATH", realpath(dirname(__FILE__) . '/library'));

defined("TEMPLATES_PATH")
    or define("TEMPLATES_PATH", realpath(dirname(__FILE__) . '/templates'));

/*
    Error reporting.
*/
ini_set("error_reporting", "true");
error_reporting(E_ALL|E_STRCT);

function endsWith($haystack, $needle) {
    $length = strlen($needle);

    return $length === 0 ||
    (substr($haystack, -$length) === $needle);
}

?>
