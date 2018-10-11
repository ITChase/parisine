

<div class = "Message">
<?php
$langauge_used = $this->_language;
$email = $_POST['email'];
$password = $_POST['password'];

/*
if ($result->num_rows == 0)
{
    $_SESSION['message'] = "User with that email doesn't exist!";
    header("location: error.php");
}
else
{
    $user = $result->fetch_assoc();

    if(password_verify($_POST['password'], $user['password']) )
    {

        $_SESSION['email'] = $user['email'];
        $_SESSION['first_name'] = $user['first_name'];
        $_SESSION['last_name'] = $user['last_name'];
        header("location: /$langauge_used/login/logina");
    }
    else
    {
        $_SESSION['message'] = "You have entered wrong password, please try again!";
        header("location:/$langauge_used/login/index");
    }
}
*/

$sql = 'SELECT * FROM user WHERE email = ?';
$stmt = $pdo -> prepare($sql);
$stmt->execute([$email]);
$existCheck = $stmt->rowCount();
$data = $stmt->fetch(PDO::FETCH_ASSOC);
if ($existCheck>0) {
    if (password_verify($_POST['password'], $data['password'])) {
        $_SESSION['email'] = $_POST['email'];
        $_SESSION['loginchecker'] = true;
        header("Location: /$langauge_used");
    } else{
        require 'message.php';
    }
}
else {
   echo 'Email do not exist.';
}
/*
    if (($data['email']== $email)&& ($data['password'] == $password)){
        header("Location: /$langauge_used");
    }

    elseif(($data['email'] != $email) && ($data['password'] != $password))
    {
    require 'message.php';

    }
*/
?>
</div>

<!--
/*
elseif($data->email === $email && $data->password === $password)
{
    $langauge_used = $this->_language;
    header("Location: /$langauge_used");

}
*/
--!>
