<?php
header("Content-Type: text/css; charset=utf-8");

$files = array(
  "config/css.css",
  '../' . $_GET["name"] . "/config/css.css",
);

foreach ($files as $file)
{
  if (file_exists($file))
  {
    echo file_get_contents($file) . PHP_EOL;
  }
}