<?php
defined('ROOT_PATH') or define('ROOT_PATH', dirname($_SERVER['SCRIPT_FILENAME']) . '/');
defined('WEB_PATH') or define('WEB_PATH', 'http://' . $_SERVER['HTTP_HOST'] . '/');
defined('APP_PATH') or define('APP_PATH', ROOT_PATH . 'application/');
defined('FRAME_PATH') or define('FRAME_PATH', ROOT_PATH . 'ckphp/');
defined('LIBRARY_PATH') or define('LIBRARY_PATH', ROOT_PATH . 'library/');
defined('RUNTIME_PATH') or define('RUNTIME_PATH', ROOT_PATH . 'runtime/');

if ($_GET['type'] == 'css')
{
  header("Content-Type: text/css; charset=utf-8");

  $files = array(
    APP_PATH . "main/config/css.css",
    APP_PATH . $_GET["name"] . "/config/css.css",
  );
  foreach ($files as $file)
  {
    if (file_exists($file))
    {
      echo file_get_contents($file) . PHP_EOL;
    }
  }
}
elseif ($_GET['type'] == 'js')
{
  header("Content-Type: application/javascript; charset=utf-8");

  $files = array(
    APP_PATH . "main/config/js.js",
    APP_PATH . $_GET["name"] . "/config/js.js",
  );
  foreach ($files as $file)
  {
    if (file_exists($file))
    {
      echo file_get_contents($file) . PHP_EOL;
    }
  }
}
else
{
  require FRAME_PATH . 'config.php';
  require FRAME_PATH . 'core.php';

  $ckphp = new Core;
  $ckphp->run();
}