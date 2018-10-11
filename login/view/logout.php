<?php
if (!isset($_POST['submit'])){
    echo '
<form action = \'\'  method = "post" autocomplete="off">
    <button type = "submit" name = "submit"> Logout </button>
</form>
';
}
else {
    session_start();
    session_unset();
    session_destroy();
   header( "Location: /$this->_language");
    exit();
}
?>