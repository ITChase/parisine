<?php

class Model
{
  protected $_name;
  protected $_action;
  protected $_language;

  public function __construct($name, $action, $language)
  {
    $this->_name     = $name;
    $this->_action   = $action;
    $this->_language = $language;

    if (HOST_ISSET === TRUE)
    {
      if ($this->_conn = mysqli_connect(HOST_NAME, HOST_AC, HOST_PW, HOST_DB))
      {
        mysqli_set_charset($this->_conn, 'utf8');
      }
      else
      {
        die("Connection failed: " . mysqli_connect_error());
      }

      try
      {
        $this->_pdo = new PDO(HOST_TYPE . ":host=" . HOST_NAME . ";dbname=" . HOST_DB, HOST_AC, HOST_PW, array
        (PDO::ATTR_PERSISTENT => TRUE));
        $this->_pdo->query("set names utf8");
        $this->_pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
      } catch (PDOException $e)
      {
        echo 'Connection failed: ' . $e->getMessage();
      }
    }
  }
}