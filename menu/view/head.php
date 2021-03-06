<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="renderer" content="webkit">
<meta name="viewport"
      content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1, user-scalable=no">
<title><?php echo $title ?></title>
<link rel="shortcut icon" href="">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Libre+Baskerville|Raleway:500,600">
<link rel="stylesheet" href="/library/bootstrap/bootstrap.min.css">
<link rel="stylesheet" href="/library/bootstrap/bootstrap-theme.min.css">
<link rel="stylesheet" href="/library/jquery-ui/jquery-ui.min.css">
<link rel="stylesheet" href="/library/jquery-ui/jquery-ui.structure.min.css">
<link rel="stylesheet" href="/library/jquery-ui/jquery-ui.theme.min.css">
<link rel="stylesheet" href="https://code.jquery.com/ui/1.10.3/themes/smoothness/jquery-ui.css">
<script src="/library/jquery-ui/jquery-ui-1.12.1.js"></script>
<script src="/library/ajax/jquery-2.2.0.min.js"></script>
<script src="/library/jquery/jquery-3.1.1.min.js" defer></script>
<script src="/library/jquery-ui/jquery-ui.js" defer></script>
<script src="/library/bootstrap/bootstrap.min.js" defer></script>
<script src="/library/touchSwipe/jquery.touchSwipe.min.js" defer></script>
<?php
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
?>