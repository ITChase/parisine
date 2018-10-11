<?php

class View
{
  protected $_name;
  protected $_action;
  protected $_variables = array();

  public function __construct($name, $action, $language)
  {
    $this->_name     = $name;
    $this->_action   = $action;
    $this->_language = $language;

    global $dataLanguage, $dataName;
    $dataLanguage = $this->_language;
    $dataName     = $this->_name . 'Data';
  }

  public function assign($data, $value = NULL)
  {
    if (is_array($data))
    {
      $count = count($data) - 1;
      $name  = array_keys($data);

      for ($i = $count; $i >= 0; $i--)
      {
        $this->_variables[$name[$i]] = $data[$name[$i]];
      }
    }
    else
    {
      $this->_variables[$data] = $value;
    }
  }

  public function render($headSwitch, $headerSwitch, $footerSwitch)
  {
    if (WEB_STATUS < "0")
    {
      include RUNTIME_PATH . "preparePage.php";
    }
    else
    {
      function showData($name)
      {
        echo nl2br($GLOBALS[$GLOBALS['dataName']][$GLOBALS['dataLanguage']][$name]);
      }

      $defaultData = APP_PATH . 'main/config/data.php';
      $basicData   = APP_PATH . $this->_name . '/config/data.php';

      if (file_exists($basicData))
      {
        $dataActionName = $this->_name . 'Data';

        global $data, ${$dataActionName};

        include $defaultData;
        include $basicData;
      }
      else
      {
        global $data;

        include $defaultData;
      }

      extract($this->_variables);
      $defaultHead   = APP_PATH . 'main/view/head.php';
      $defaultHeader = APP_PATH . 'main/view/header.php';
      $defaultFooter = APP_PATH . 'main/view/footer.php';
      $defaultLayout = APP_PATH . 'main/view/layout.php';

      $controllerHead   = APP_PATH . $this->_name . '/view/head.php';
      $controllerHeader = APP_PATH . $this->_name . '/view/header.php';
      $controllerFooter = APP_PATH . $this->_name . '/view/footer.php';
      $controllerLayout = APP_PATH . $this->_name . '/view/' . $this->_action . '.php';

      echo '<!DOCTYPE html>' . PHP_EOL;
      echo '<html lang="' . HTML_LANG . '">' . PHP_EOL;
      echo '<head>' . PHP_EOL;

      if ($headSwitch === TRUE)
      {
        if (file_exists($controllerHead))
        {
          include $controllerHead;
        }
        else
        {
          include $defaultHead;
        }
      }

      echo PHP_EOL . "<link rel=\"stylesheet\" href=\"/index.php?type=css&name=$this->_name\" > " . PHP_EOL;
      echo "<script charset = \"UTF-8\" src=\"/index.php?type=js&name=$this->_name\" defer></script>" . PHP_EOL;

      echo '</head>' . PHP_EOL;
      echo '<body>' . PHP_EOL;

      if ($headerSwitch === TRUE)
      {
        if (file_exists($controllerHeader))
        {
          include $controllerHeader;
        }
        else
        {
          include $defaultHeader;
        }
      }

      if (file_exists($controllerLayout))
      {
        include $controllerLayout;
      }
      else
      {
        include $defaultLayout;
      }

      if ($footerSwitch === TRUE)
      {
        if (file_exists($controllerFooter))
        {
          include $controllerFooter;
        }
        else
        {
          include $defaultFooter;
        }
      }

      echo '</body>' . PHP_EOL;
      echo '</html>';
    }
  }
}