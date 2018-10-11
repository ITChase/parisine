<body>
<?php
$langauge_used = $this->_language;

if(isset($_SESSION['loginchecker']))
{
    if( $_SESSION['loginchecker'] === true)
    echo '<div class= "loggedMsg"> You have been logged in. <br> <a href="/EN/account/dashBoard">View Your Account </a> </div>';
    exit();
}
if($_SERVER['REQUEST_METHOD'] == 'POST')
{
    if (isset($_POST['login'])) {
     //  header("Location: /$langauge_used/login/logina");
        require 'logina.php';
    }
    else
    {
        echo "asdasdasd";
    }
}
echo APP_PATH;
echo WEB_PATH;
?>


<p class="loginTitle">
  login or create an account
</p>

<form action = "#" method = "post" autocomplete="off">
    <div class="loginDiv">
      <div>
        <div class="loginDivTitle">
          New customers
        </div>

        <div class="loginDivDescription">
          By creating an account with our store, you will be able to move through the checkout process faster, store
          multiple shipping addresses, view and track your orders in your account and more.
        </div>

        <div class="loginDivAddition">
          <a href="<?php echo '/' . $this->_language . '/login/registration'; ?>">
            Create an account
          </a>
        </div>
      </div>



          <div>
            <div class="loginDivTitle">
              Registered customers
            </div>

            <div class="loginDivDescription">
              If you have an account with us, please log in.




                      <label class="loginDivInputName" for="loginEmail">
                        Email address

                        <span>
                          *
                        </span>
                      </label>
                      <input class="loginDivInput" required autocomplete="off" id="loginEmail" type="email" name="email">


                      <label class="loginDivInputName" for="loginPassword">
                        Password

                        <span>
                          *
                        </span>
                      </label>
                      <input class="loginDivInput" id="loginPassword" type="password" name="password" required autocomplete="off">



                        <p class="loginDivPS">
                        <span>
                          *
                        </span>

                        Required Fields
                      </p>
                    </div>

                    <div class="loginDivAddition">
                      <button class ="login-Btn" name="login" onclick="manageData('addNew')">
                        Login
                      </button>
                        <a class ="login-Btn" >
                            Forgot Your Password?
                        </a>
                    </div>
              <div id = "alertMessage"></div>

          </div>

    </div>
</form>

</body>
