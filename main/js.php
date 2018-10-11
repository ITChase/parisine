<?php
header("Content-Type: application/javascript; charset=utf-8");

$files = array(
  "config/js.js",
  '../' . $_GET["name"] . "/config/js.js",
);

foreach ($files as $file)
{
  if (file_exists($file))
  {
    echo file_get_contents($file) . PHP_EOL;
  }
}
