<?php

$settings = array(  "handler" => "add-printer", 
              		"location" => "C:\/PrintMapper\/";

$dir = "../db/";

file_put_contents($dir.$settings['name'],serialize($settings));

?>