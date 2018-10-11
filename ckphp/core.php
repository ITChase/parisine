<?php

class Core
{
  public function run()
  {
    $this->setReporting();
    $this->clean();
    $this->route();
  }

  private function setReporting()
  {
    if (APP_DEBUG === TRUE)
    {
      error_reporting(E_ALL);
      ini_set('display_errors', 1);
      ini_set('display_startup_errors', 1);
    }
    else
    {
      error_reporting(E_ALL);
      ini_set('display_errors', 0);
      ini_set('log_errors', TRUE);
      ini_set('error_log', RUNTIME_PATH . 'error.log');
    }
  }

  private function clean()
  {
    function stripSlashesDeep($value)
    {
      if (is_array($value))
      {
        array_map('stripSlashesDeep', $value);
      }
      else
      {
        $value = implode("", explode("\\", $value));
        stripslashes(trim($value));
        strip_tags($value);
      }

      return $value;
    }

    function stripSlashesSimple($value)
    {
      if (is_array($value))
      {
        array_map('stripSlashesSimple', $value);
      }
      else
      {
        $value = implode("", explode("\\", $value));
        stripslashes(trim($value));
      }

      return $value;
    }

    if (get_magic_quotes_gpc())
    {
      $_POST    = isset($_POST) ? stripSlashesDeep($_POST) : '';
      $_COOKIE  = isset($_COOKIE) ? stripSlashesSimple($_COOKIE) : '';
      $_SESSION = isset($_SESSION) ? stripSlashesSimple($_SESSION) : '';
    }
  }

  private function route()
  {
    if (isset($_GET['url']))
    {
      $urlArray = explode('/', $_GET['url']);
      $urlArray = array_filter($urlArray);
      $language = $urlArray ? array_shift($urlArray) : 'EN';
      $name     = $urlArray ? array_shift($urlArray) : 'index';
      $action   = $urlArray ? array_shift($urlArray) : 'index';
      $param    = $urlArray ? $urlArray : array();
    }
    else
    {
      $language = BASE_LANG;
      $name     = 'index';
      $action   = 'index';
      $param    = array();
    }

    include FRAME_PATH . 'controller.class.php';
    include FRAME_PATH . 'model.class.php';
    include FRAME_PATH . 'view.class.php';
    $controllerPath = APP_PATH . $name . '/controller.php';
    if (file_exists($controllerPath))
    {
      include $controllerPath;
      $controllerName = $name . 'Controller';
      $controller     = new $controllerName($name, $action, $language);

      if (method_exists($controller, $action))
      {
        $controller->$action($param);
      }
      else
      {
        echo "<script>window.location = \"/" . $this->_language . "/test.parisine.com/EN/notFound/notFound404\";</script>";
        exit();
      }
    }
    else
    {
      echo "<script>window.location = \"/" . $this->_language . "/test.parisine.com/EN/notFound/notFound404\";</script>";
      exit();
    }
  }
}