<div class = marginTemp></div>
<div class = "Message">
<?php
$first_name = $_POST['first_name'];
$last_name = $_POST['last_name'];
$username = $_POST['username'];
$gender = $_POST['gender'];
$address_1 = $_POST['address_1'];
$address_2 = $_POST['address_2'];
$city = $_POST['city'];
$country = $_POST['country'];
$state = $_POST['state'];
$zip_code = $_POST['zip_code'];
$birthday = $_POST['birthday'];
$email = $_POST['email'];
$contact_number = $_POST['contact_number'];
$password = password_hash($_POST['password'], PASSWORD_BCRYPT);
$confirm_password =  $_POST['confirm-password'];
$hash = md5(rand(0,1000));

$sql = 'SELECT * FROM user WHERE email = ?';
$stmt = $pdo->prepare($sql);
$stmt->execute([$email]);
$existCheck = $stmt->rowCount();

if (empty($_POST["first_name"]))
{
    $first_name_error = "! First_name is required";
}
else
{
    $first_name = test_input($_POST["first_name"]);
    if (!preg_match("/^[a-zA-Z ]*$/", $first_name)){
        $first_name_error = "! Only letters and white space allowed";
    }
}

if (empty($_POST["last_name"]))
{
    $last_name_error = "! Last_name is required";
}
else
{
    $last_name = test_input($_POST["last_name"]);
    if (!preg_match("/^[a-zA-Z ]*$/", $last_name)){
        $last_name_error = "! Only letters and white space allowed";
    }
}

if (empty($_POST["email"]))
{
    $email_error = "! Email is required";
} elseif($existCheck > 0)
{
    $email_error = '! Email has already been registered.';
}else{
    $email = test_input($_POST["email"]);
    if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
        $email_error = "! Invalid email format";
    }
}

if (empty($_POST["username"]))
{
    $username_error = "! Username is required";
} elseif($existCheck > 0)
{
    $username_error = '! Username has already been registered';
}else{
    $username = test_input($_POST["username"]);
}

if (empty($_POST["contact_number"]))
{
    $contact_number = "! Contact_number is required";
} elseif($existCheck > 0)
{
    $contact_number_error = '! Contact number has already been registered.';
}else{
    $contact_number = test_input($_POST["contact_number"]);
    if(!preg_match("/^(\d[\s-]?)?[\(\[\s-]{0,2}?\d{3}[\)\]\s-]{0,2}\d{3}[\s-]?\d{4}$/i", $contact_number))
    {
        $contact_number_error = "! Invalid Contact number.";
    }
}

if (empty($_POST["country"]))
{
    $country_error = "! Country is required";
}
else
{
    $country = test_input($_POST["country"]);
    if (!preg_match("/^[a-zA-Z ]*$/", $country)){
        $country_error = "! Only letters and white space allowed";
    }
}

if (empty($_POST["state"]))
{
    $state_error = "! State is required";
}
else
{
    $state = test_input($_POST["state"]);
    if (!preg_match("/^[a-zA-Z ]*$/", $state)){
        $state_error = "! Only letters and white space allowed";
    }
}

if (empty($_POST["city"]))
{
    $city_error = "! City is required";
}
else
{
    $city = test_input($_POST["city"]);
    if (!preg_match("/^[a-zA-Z ]*$/", $city)){
        $city_error = "! Only letters and white space allowed";
    }
}

if (empty($_POST["address_1"]))
{
    $address_1_error = "! Address is required";
}
else
{
    $address_1 = test_input($_POST["address_1"]);
}

if (empty($_POST["gender"]))
{
    $gender_error = "! Gender is required";
}
else
{
    $gender = test_input($_POST["gender"]);
}

if (empty($_POST["password"]))
{
   $password_error = "! Password is required";
}
else
{
    if (strlen($_POST["password"]) > 15 || strlen($_POST["password"]) < 6)
    {
        $password_error = "! Password should be formed within the length of 6-15 characters.";
    }
}

if (empty($_POST["confirm-password"]))
{
    $confirm_password_error = "! Please confirm the password.";
}
else
{
    if ($_POST["confirm-password"] != $_POST["password"])
    {
        $password_error = "! Confirm password does not match.";
    }
}




if($first_name_error == "" && $last_name_error == "" && $username_error == "" && $gender_error == "" && $address_1_error
    == "" && $city_error == "" && $country_error == "" && $state_error == "" &&  $zip_code_error == "" && $birthday_error
    == "" && $email_error == "" && $contact_number_error == "" && $password_error== "" && $confirm_password_error ==  "")
{

    $sql = 'SELECT * FROM user WHERE username = ?';
    $stmt = $pdo->prepare($sql);
    $stmt->execute([$username]);
    $existCheck = $stmt->rowCount();
        $sql = 'INSERT INTO user(first_name, last_name, email, password, hash, username, gender, 
                address_1, address_2, city, country, state, zip_code, birthday, contact_number) 
                  VALUES(:first_name, :last_name, :email, :password, :hash, :username, :gender, :address_1, :address_2,
                   :city, :country, :state, :zip_code, :birthday, :contact_number)';
        $stmt = $pdo->prepare($sql);
        $pdoCheck = $stmt->execute(['first_name' => $first_name,
            'last_name' => $last_name, 'email' => $email, 'password' => $password, 'hash' => $hash,
            'username' => $username, 'gender' => $gender, 'address_1' => $address_1, 'address_2' => $address_2, 'city' => $city,
            'country' => $country, 'state' => $state, 'zip_code' => $zip_code, 'birthday' => $birthday,
            'contact_number' => $contact_number]);

        if ($pdoCheck) {
            echo 'Register successfully';
        } else echo 'Error occured: Register failed.';
}

else
{
    echo "Please correct the following errors.";
}
function test_input($data)
{
    $data = trim($data);
    $data = stripslashes($data);
    $data= htmlspecialchars($data);
    return $data;
}
?>
</div>
