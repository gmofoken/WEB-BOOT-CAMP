#!/usr/bin/php
<?php

if ($argc === 1)
{
    exit(1);
}

function ft_get_photos($url)
{
    $init = curl_init();
    curl_setopt($init, CURLOPT_URL, $url);
    curl_setopt($init, CURLOPT_RETURNTRANSFER, 1);
    $photos = curl_exec($init);
    curl_close($init);
    return $photos;
}

$content = ft_get_photos($argv[1]);
$images = array();
$target = preg_replace('#^https?://#', '', $argv[1]);
$target = explode('/', $target)[0];
if (!@mkdir($target) && !is_dir($target))
{
    exit;
}
preg_match_all('/<img(.*?)src="(.*?)"/', $content, $images);
foreach($images[2] as $url) {
    $image = ft_get_photos($url);
    $name = explode('/', $url);
    $name = $name[count($name) - 1];
    file_put_contents("./" . $target . "/" . $name, $image);
}
?>
