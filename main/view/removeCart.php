<?php
        $remover = $_POST['removeCart'];
        unset($_SESSION['cartItem'][$remover]);
?>
