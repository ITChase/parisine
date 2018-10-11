<?php


if(isset($_SESSION['loginchecker']))
{
    if( $_SESSION['loginchecker'] === true)
        echo '<div class= "loggedMsg"> You have been logged in. <br> <a href="/EN/account/dashBoard">View Your Account </a> </div>';
    exit();
}

$langauge_used = $this->_language;
$first_name_error = $last_name_error = $username_error = $gender_error = $address_1_error
    = $city_error = $country_error = $state_error = $zip_code_error = $birthday_error
    = $email_error = $contact_number_error = $password_error = $confirm_password_error =  "";

if($_SERVER['REQUEST_METHOD'] == 'POST')
{
    if (isset($_POST['register'])) {


        require 'register.php';
       //header( "Location: /$langauge_used/login/index");
    }
    else
    {
        require 'message.php';
    }
}

?>

<div class="registration">
<h3><span class = "title_Underline">Registration</span></h3>

        <form action = "#" method = "post" autocomplete="off">
            <div class = "register_form">
                <div class = "left_col">

                    <div class = "first_name">
                        First Name*&nbsp&nbsp<span class="error"><?= $first_name_error ?></span><br>
                        <input class="register_first_name" placeholder="First Name" required autocomplete="off" type="text" name="first_name">
                    </div>

                    <div class = "email">
                        Email*&nbsp&nbsp<span class="error"><?= $email_error ?></span><br>
                        <input class="register_email" placeholder="Email" required autocomplete="off" type="text" name="email">
                    </div>

                    <div class = "password">
                        Password*&nbsp&nbsp<span class="error"><?= $password_error ?></span><br>
                        <input class="register_password" placeholder="Password" required autocomplete="off" type="text" name="password">
                    </div>

                    <div class = "company">
                        company&nbsp&nbsp<br>
                        <input class="register_company" placeholder="company" autocomplete="off" type="text" name="company">
                    </div>

                    <div class = "contact_number">
                        contact number*<br><span class="error"><?= $contact_number_error ?></span><br>
                        <input class="register_contact_number" placeholder="Contact number" required autocomplete="off" type="text" name="contact_number">
                    </div>

                    <div class = "address_1">
                        Address 1*&nbsp&nbsp<span class="error"><?= $address_1_error ?></span><br>
                        <input class="register_address_1" placeholder="Address 1" required autocomplete="off" type="text" name="address_1">
                    </div>

                    <div class = "address_2">
                        Address 2&nbsp&nbsp<br>
                        <input class="register_address_2" placeholder="Address 2"  autocomplete="off" type="text" name="address_2">
                    </div>



                </div>

                <div class = "right_col">

                    <div class = "last_name">
                        Last Name*&nbsp&nbsp<span class="error"><?= $last_name_error ?></span><br>
                        <input class="register_last_name" placeholder="Last Name" required autocomplete="off" type="text" name="last_name">
                    </div>


                    <div class = "username">
                        Username*&nbsp&nbsp<span class="error"><?= $username_error ?></span><br>
                        <input class="register_username" placeholder="username" required autocomplete="off" type="text" name="username">
                    </div>

                    <div class = "confirm-password">
                        Confirm Password*&nbsp&nbsp<span class="error"><?= $confirm_password_error ?></span><br>
                        <input class="register_password" placeholder="Password" required autocomplete="off" type="text" name="confirm-password">
                    </div>

                    <div class = "gender">
                        gender*&nbsp&nbsp<span class="error"><?= $gender_error ?></span><br>
                        <input class="user_gender" placeholder="gender" required autocomplete="off" type="text" name="gender">
                    </div>

                    <div class = "birthday">
                        birthday*&nbsp&nbsp<span class="error"><?= $birthday_error ?></span><br>
                        <input class="user_birthday" placeholder="birthday" required autocomplete="off" type="date"  max="2017-10-30"  min="1917-10-30"name="birthday">
                    </div>


                    <div class = "city">
                        city*&nbsp&nbsp<span class="error"><?= $city_error ?></span><br>
                        <input class="register_city" placeholder="city" required autocomplete="off" type="text" name="city">
                    </div>

                    <div class = "country">
                        country*&nbsp&nbsp<span class="error"><?= $country_error ?></span><br>
                        <input class="register_country" placeholder="country" required autocomplete="off" type="text" name="country">
                    </div>

                    <div class = "state">
                        state/province*&nbsp&nbsp<span class="error"><?= $state_error ?></span><br>
                        <input class="register_state/province" placeholder="state/province" required autocomplete="off" type="text" name="state">
                    </div>


                    <div class = "zip_code">
                        ZIP/portal code*&nbsp&nbsp<span class="error"><?= $zip_code_error ?></span><br>
                        <input class="register_zip_codee" placeholder="ZIP/portal code" autocomplete="N/A" type="text" name="zip_code">
                    </div>

                </div>
            </div>

            <div class = "submit_btn">
            <button id="register_btn" name="register">
                Register
            </button>
            </div>
        </form>
</div>
