<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="renderer" content="webkit">
<meta name="viewport"
      content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1, user-scalable=no">
<title><?php echo $title ?></title>
<link rel="shortcut icon" href="<?php echo WEB_PATH . 'runtime/image/logo.png'; ?>">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Libre+Baskerville|Raleway:500,600">
<link rel="stylesheet" href="/library/bootstrap/bootstrap.min.css">
<link rel="stylesheet" href="/library/bootstrap/bootstrap-theme.min.css">
<script src="/library/jquery/jquery-3.1.1.min.js" defer></script>
<script src="/library/bootstrap/bootstrap.min.js" defer></script>
<?php
ob_start();
$pdo = new PDO(HOST_TYPE . ":host=" . HOST_NAME . ";dbname=" . HOST_DB, HOST_AC,HOST_PW);
$pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_OBJ);