<?php

class Controller
{
  protected $_name;
  protected $_action;
  protected $_language;
  protected $_model;
  protected $_view;

  public function __construct($name, $action, $language)
  {

          $this->_name = $name;
          $this->_action = $action;
          if ($language != 'EN' && $language != 'ZH' && $language != 'CN') {
              $language = 'EN';
          } else {
              $this->_language = $language;
          }
          $this->_language = $language;
          $modelPath = APP_PATH . $name . '/model.php';
          include $modelPath;
          $modelName = $name . 'Model';
          $this->_model = new $modelName($name, $action, $language);
          $this->_view = new View($name, $action, $language);

  }

  protected function process($functionName, ...$param)
  {
    $argument = array();

    foreach ($param as $data)
    {
      array_push($argument, $data);
    }

    return call_user_func_array(array($this->_model, $functionName), $argument);
  }

  protected function assign($data, $value = NULL)
  {
    $this->_view->assign($data, $value);
  }

  protected function render($headSwitch = TRUE, $headerSwitch = TRUE, $footerSwitch = TRUE)
  {
    $this->_view->render($headSwitch, $headerSwitch, $footerSwitch);
  }

  public function __destruct()
  {
    if (HOST_ISSET === TRUE)
    {
      mysqli_close($this->_model->_conn);
      $this->_model->_pdo = NULL;
    }
  }
}