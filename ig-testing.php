<?php


$profile_url = "https://www.instagram.com/cristiano/?__a=1";

$profile_json = file_get_contents($profile_url);


echo '<pre>';
print_r($profile_json);
die();