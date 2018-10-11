<?php

class mailController extends Controller
{
  function test()
  {
    $status = $this->process('test');
    $this->assign('status', $status);

    $this->render(FALSE, FALSE);
  }

  function scentBarAPP()
  {
    date_default_timezone_set("Asia/Hong_Kong");

    $data['firstName']   = $_POST["firstName"] ? $_POST["firstName"] : " ";
    $data['lastName']    = $_POST["lastName"] ? $_POST["lastName"] : " ";
    $data['gender']      = $_POST["gender"] ? $_POST["gender"] : " ";
    $data['age']         = $_POST["age"] ? $_POST["age"] : 0;
    $data['email']       = $_POST["email"];
    $data['date']        = date("Y-m-d H:i:s");
    $data['productName'] = $_POST["productName"];
    $data['case']        = $_POST["case"];

    $status = $this->process('scentBarAPP', $data);

    $this->assign('status', $status);

    $this->render(FALSE, FALSE);
  }

  function newsLetter()
  {
    date_default_timezone_set("Asia/Hong_Kong");

    $status = $this->process('newsLetter', $_POST['email']);

    $this->assign('status', $status);
    $this->assign('urlJump', "<script>window.location = \"/" . $this->_language . "\";</script>");

    $this->render();
  }
}