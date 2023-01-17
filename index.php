<?php

$link = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https://" : "http://") . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];

echo '<h1>Welcome to API Project</h1>';
echo '<h2>URL : ' . $link . '</h2>';
die;
