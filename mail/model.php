<?php

class mailModel extends Model
{
  function test()
  {
    require LIBRARY_PATH . 'phpMailer/PHPMailerAutoload.php';

    $mail = new PHPMailer;

    //$mail->SMTPDebug = 3;                               // Enable verbose debug output

    $mail->isSMTP();                                      // Set mailer to use SMTP

    $mail->Host     = 'mail.parisine.com';  // Specify main and backup SMTP servers
    $mail->SMTPAuth = TRUE;                               // Enable SMTP authentication
    $mail->Username = MAIL_AC;                 // SMTP username
    $mail->Password = MAIL_PW;                           // SMTP password

    $mail->setFrom('cs@parisine.com', 'Parisine');
    $mail->addAddress('ck.mo@kmml.hk', 'ck');
    $mail->addAddress('lasthrun@gmail.com', 'ck');
    $mail->addReplyTo('cs@parisine.com', 'Parisine');
    $mail->addBCC('cs@parisine.com');

    $mail->isHTML(TRUE);                                  // Set email format to HTML

    $mail->Subject = 'Here is the subject';
    $mail->Body    = "
<html>
<head>
  <meta http-equiv=\"Content-Type\" content=\"text/html; charset=UTF-8\" />
  <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\"/>
</head>
<body style=\"margin: 0; padding: 0;\">
<table style=\"width: 800px\">
  <tbody style=\"border: 1px;padding: 0;margin: 0;border-collapse: collapse;\">
  	<tr>
  		<td style=\"text-align: center;\">
  			<a href=\"http://www.parisine.com/" . $this->_language . "\">
  				<img src=\"" . WEB_PATH . "runtime/image/scentBarAPP/scentBarAPPMailViewOnlineA.png\">
  			</a>
  		</td>
  	</tr>
  	
  	<tr>
  		<td style=\"text-align: center;background-color: #313233;padding: 30px 0\">
  			<img src=\"" . WEB_PATH . "runtime/image/headerLogo.png\">
  		</td>
  	</tr>
  	
  	<tr>
  		<td>
  			test
  		</td>
  	</tr>
  	
  	<tr>
  		<td style=\"text-align: center;padding-top:50px;padding-bottom: 50px;margin-left: 0; margin-right: 0;background-color: #313233;\">
  			<a href=\"http://www.parisine.com/" . $this->_language . "\">
  			  <img style=\"\" src=\"" . WEB_PATH . "runtime/image/scentBarAPP/scentBarAPPMailLinkB.png\">
  			</a>
  			
  			<a style=\"display: inline-block;\" href=\"https://www.facebook.com/parisinehongkong/\">
  			  <img style=\"width: 35px;height: 35px;\" src=\"" . WEB_PATH . "runtime/image/footerMediaFacebook.png\">
  			</a>
  			
  			<a style=\"display: inline-block;\" href=\"https://www.instagram.com/PARISINE.HONGKONG/\">
  				<img style=\"width: 35px;height: 35px;\" src=\"" . WEB_PATH . "runtime/image/footerMediaInstagram.png\">
  			</a>
  			
  			<a style=\"display: inline-block;\" href=\"https://www.pinterest.com/parisineofficial/\">
  				<img style=\"width: 35px;height: 35px;\" src=\"" . WEB_PATH . "runtime/image/footerMediaPinterest.png\">
  			</a>
  		</td>
  	</tr>
  	
  	<tr>
  		<td style=\"text-align: center;\">
  		  <img src=\"" . WEB_PATH . "runtime/image/scentBarAPP/scentBarAPPMailFooterA.png\"> 
  		</td>
  	</tr>
  </tbody>
</table>
</body>
</html>
    ";
    $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

    if (!$mail->send())
    {
      return 'Message could not be sent. Mailer Error: ' . $mail->ErrorInfo;
    }
    else
    {
      return 'Message has been sent';
    }
  }

  function scentBarAPP($data)
  {
    $case        = $data['case'];
    $productName = $data['productName'];

    $query = "INSERT INTO `scentBarAPP` (`id`, `firstName`, `lastName`, `gender`, `age`, `email`, `date`) VALUES (NULL, :firstName, 
:lastName, :gender, :age, :email, :date)";
    $stmt  = $this->_pdo->prepare($query);
    $stmt->bindParam(":firstName", $data['firstName'], PDO::PARAM_STR);
    $stmt->bindParam(":lastName", $data['lastName'], PDO::PARAM_STR);
    $stmt->bindParam(":gender", $data['gender'], PDO::PARAM_STR);
    $stmt->bindParam(":age", $data['age'], PDO::PARAM_INT);
    $stmt->bindParam(":email", $data['email'], PDO::PARAM_STR);
    $stmt->bindParam(":date", $data['date'], PDO::PARAM_STR);
    $stmt->execute();

    require LIBRARY_PATH . 'phpMailer/PHPMailerAutoload.php';

    $mail = new PHPMailer;

    //$mail->SMTPDebug = 3;                               // Enable verbose debug output

    $mail->isSMTP();                                      // Set mailer to use SMTP

    $mail->Host     = 'mail.parisine.com';  // Specify main and backup SMTP servers
    $mail->SMTPAuth = TRUE;                               // Enable SMTP authentication
    $mail->Username = MAIL_AC;              // SMTP username
    $mail->Password = MAIL_PW;                           // SMTP password

    $mail->setFrom('cs@parisine.com', 'Parisine');
    $mail->addAddress($data['email']);     // Add a recipient
    $mail->addReplyTo('cs@parisine.com', 'Parisine');
    $mail->addBCC('cs@parisine.com');

    $mail->isHTML(TRUE);                                  // Set email format to HTML

    $mail->Subject = 'Your personal perfume';
    $mail->Body    = "
<html>
<head>
  <meta http-equiv=\"Content-Type\" content=\"text/html; charset=UTF-8\" />
  <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\"/>
</head>
<body style=\"margin: 0; padding: 0;\">
<table>
  <tbody style=\"border: 1px;padding: 0;margin: 0;border-collapse: collapse;\">
  	<tr>
  		<td style=\"text-align: center;\">
  			<a href=\"http://www.parisine.com/" . $this->_language . "/scentBarAPP/product/$case\">
  				<img src=\"" . WEB_PATH . "runtime/image/scentBarAPP/scentBarAPPMailViewOnlineA.png\">
  			</a>
  		</td>
  	</tr>
  	
  	<tr>
  		<td>
  			<img src=\"" . WEB_PATH . "runtime/image/scentBarAPP/mail$productName" . $this->_language . ".jpg\">
  		</td>
  	</tr>
  	
  	<tr>
  		<td style=\"text-align: center;padding-top:50px;padding-bottom: 50px;margin-left: 0; margin-right: 0;background-color: #313233;\">
  			<img style=\"\" src=\"" . WEB_PATH . "runtime/image/scentBarAPP/scentBarAPPMailLinkA.png\">
  			
  			<a style=\"display: inline-block;\" href=\"https://www.facebook.com/parisinehongkong/\">
  			  <img style=\"width: 70%;\" src=\"" . WEB_PATH . "runtime/image/footerMediaFacebook.png\">
  			</a>
  			
  			<a style=\"display: inline-block;\" href=\"https://www.instagram.com/PARISINE.HONGKONG/\">
  				<img style=\"width: 70%;\" src=\"" . WEB_PATH . "runtime/image/footerMediaInstagram.png\">
  			</a>
  			
  			<a style=\"display: inline-block;\" href=\"https://www.pinterest.com/parisineofficial/\">
  				<img style=\"width: 70%;\" src=\"" . WEB_PATH . "runtime/image/footerMediaPinterest.png\">
  			</a>
  		</td>
  	</tr>
  	
  	<tr>
  		<td style=\"text-align: center;\">
  		  <img src=\"" . WEB_PATH . "runtime/image/scentBarAPP/scentBarAPPMailFooterA.png\"> 
  		</td>
  	</tr>
  </tbody>
</table>
</body>
</html>
    ";
    $mail->AltBody = "Your personal perfume is $productName";

    if (!$mail->send())
    {
      return 'Message could not be sent. Mailer Error: ' . $mail->ErrorInfo;
    }
    else
    {
      return "<script>window.location = \"http://www.parisine.com/" . $this->_language . "/scentBarAPP/home\";</script>";
    }
  }

  function newsLetter($email)
  {
      /*Check the email is it has subscribed*/
      $sendchecker = 0;
      $query = "SELECT * FROM newsletter WHERE `email` = :email";
      $stmt = $this->_pdo->prepare($query);
      $stmt->bindParam(":email", $email, PDO::PARAM_STR);
      $stmt->execute();

      if (!$stmt->fetch()) {

          /*insert record to the data base*/
          $query = "INSERT INTO `newsletter` (`newsletterId`, `email`, `subscription`, `date`, `language`) VALUES (NULL, :email, \"yes\", :date, :language)";
          $stmt = $this->_pdo->prepare($query);
          $date = date("Y-m-d H:i:s");

          $stmt->bindParam(":email", $email, PDO::PARAM_STR);
          $stmt->bindParam(":date", $date, PDO::PARAM_STR);
          $stmt->bindParam(":language", $this->_language, PDO::PARAM_STR);
          $stmt->execute();
          require LIBRARY_PATH . 'phpMailer/PHPMailerAutoload.php';

          $mail = new PHPMailer;

          //$mail->SMTPDebug = 3;                               // Enable verbose debug output

          $mail->isSMTP();                                      // Set mailer to use SMTP

          $mail->Host = 'mail.parisine.com';  // Specify main and backup SMTP servers
          $mail->SMTPAuth = TRUE;                               // Enable SMTP authentication
          $mail->Username = MAIL_AC;              // SMTP username
          $mail->Password = MAIL_PW;                           // SMTP password

          $mail->setFrom('cs@parisine.com', 'Parisine');
          $mail->addAddress($email);     // Add a recipient
          $mail->addReplyTo('cs@parisine.com', 'Parisine');
          $mail->addBCC('cs@parisine.com');

          $mail->isHTML(TRUE);                                  // Set email format to HTML

          $mail->Subject = 'Thank you for your subscribe';

          $mail->Body = "
<html>
<head>
  <meta http-equiv=\"Content-Type\" content=\"text/html; charset=UTF-8\" />
  <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\"/>
</head>
<body style=\"margin:auto; \">

<table style = \" border-spacing: 0;text-align:center; border-padding: 0;  border-collapse: collapse; margin: auto; width:800px; \" width=\"100%\" border=\"0\" cellspacing=\"0\" cellpadding=\"0\" >
 <tbody style=\"border:0;padding: 0;margin: 0;border-collapse: collapse;\">
<tr>

   <td style = \" text-align:center; margin: auto; width: 800px\">
     <table style = \" border-spacing: 0; border-padding: 0;  border-collapse: collapse; \" width=\"800px\" border=\"0\" cellspacing=\"0\" cellpadding=\"0\" >
      <tbody style=\"border: 1px;padding: 0;margin: 0;border-collapse: collapse;\">
       	<tr>
  		  <td style=\"text-align: center;\">
  			  <a href=\"http://www.parisine.com/" . $this->_language . "/\">
  				  <img style = \" width: 15% ; padding-top:15px; padding-bottom:10px; \" src=\"" . WEB_PATH . "runtime/image/emailHead.png\">
  			  </a>
  		  </td>
    	</tr>
  	 	
 
  	
      <tr style =\"  padding-top: 0; margin-top:0; padding-bottom:50px; margin-bottom:50px ;text-align: center;  background-color: #ffffff; front-family: 'Libre Baskerville', sans-serif; 
  	    background-image:url('" . WEB_PATH . "runtime/image/newsleter_Topnew.jpg'); height: 100%; width:100%; 
        background-position: center; background-repeat: no-repeat; background-size: cover;  \">
  	    <td style= \" height: 535px; width:100%;\">
        </td>
  	  </tr>
  	
  	   <tr style =\" padding-top: 50px; margin-top:50px; text-align: center;  background-color: #ffffff; front-family: 'Libre Baskerville', sans-serif; 
  	    background-image:url('" . WEB_PATH . "runtime/image/emailPicture.png'); height: 100%; width:100%; 
        background-position: center; background-repeat: no-repeat; background-size: cover;  \">
  	   
  	     <td style =\" padding-top: 400px\">
  	     <form >
            <button style = \" top: 88.5%; left: 50% ; background-color:#313233; text-transform: uppercase; text-align: center; 
            font-size: 18px; padding: 15px 32px; border: none; color: #AF9751; display: inline-block; box-shadow: 0 2px 25px #444444; \" 
            formaction=\"www.google.com\">
             <b>discover more</b></button>
         </form>
        </td>
  	    
  	   </tr>
  	   
  	   
  	   
  	   <tr style =\"text-align: center;background-color: #ffffff; front-family: 'Raleway', serif; \" >
  	     <td style=\" display: inline-block; margin-top:70px;  margin-bottom: 60px; padding-bottom: 5px; ;
  	       color: #313233; font-size: 19px; \">
  	       We hope you enjoy spending time on Parisine !
           <br>Contact our Customer Service via <a style=\"text-decoration: none; color: #313233; \" class=\"ourEmail\" href=\"\"><u>email</u></a>, phone on xxxx xxxx,
           <br>or visit <a style=\"text-decoration: none; color:#313233; \" class=\"ourContact\" href=\"\"><u>Contact Us</u></a>.
          </td>
  	   </tr>
        
         <tr style =\"  padding-top: 0; margin-top:0; padding-bottom:50px; margin-bottom:50px ;text-align: center;  background-color: #ffffff; front-family: 'Libre Baskerville', sans-serif; 
                    background-image:url('" . WEB_PATH . "runtime/image/newsletter_Basenew.jpg'); height: 100%; width:100%; 
                    background-position: center; background-repeat: no-repeat; background-size: cover;  \">
                    <td style= \" height: 350px; width:100%;\">
                    </td>
  	      </tr>
  	   
  	    <tr style=\" margin-top: 0px; padding-top:0px; \">
  		  <td style=\"text-align: center; margin-top: 0px; padding-top:30px;padding-bottom: 33px;margin-left: 0; margin-right: 0;background-color: #313233;\">
  			
  			<a style=\"text-decoration:  none;\" href=\"http://test.parisine.com/EN/aboutUs/parisine\">
  			  <img style=\"  width:7.5%;  \" src=\"" . WEB_PATH . "runtime/image/emailAboutt.png\">
  			</a>&nbsp;
  			
  			<a style=\"text-decoration: none; \" href=\"http://cms.parisine.com/EN/ \">
  			  <img style=\"  width:7.5%; \" src=\"" . WEB_PATH . "runtime/image/emailTermss.png\"> 
  			</a> &nbsp;
  			
  			<a style=\"text-decoration: none;\" href=\"http://cms.parisine.com/EN/\">
  			  <img style=\"  width:12.855%; \" src=\"" . WEB_PATH . "runtime/image/emailUlogoo.png\">
  			</a>&nbsp;
  			
            <img style=\"  width:11%; \" src=\"" . WEB_PATH . "runtime/image/emailUnsubscribe_2.png\">
  			<img style=\"  width:11%; \" src=\"" . WEB_PATH . "runtime/image/emailUnsubscribe_2.png\"> 
  			
  			<a style=\"display: inline-block;\" href=\"https://www.facebook.com/parisinehongkong/\">
  			  <img style=\"width: 55%;\" src=\"" . WEB_PATH . "runtime/image/footerMediaFacebook.png\">
  			</a>
  			
  			<a style=\"display: inline-block;\" href=\"https://www.instagram.com/PARISINE.HONGKONG/\">
  				<img style=\"width: 55%;\" src=\"" . WEB_PATH . "runtime/image/footerMediaInstagram.png\">
  			</a>
  			
  			<a style=\"display: inline-block;\" href=\"https://www.pinterest.com/parisineofficial/\">
  				<img style=\"width: 55%;\" src=\"" . WEB_PATH . "runtime/image/footerMediaPinterest.png\">
  			</a>
  		  </td>
  	    </tr>
  	
  	    <tr>
  		  <td style=\"text-align: center; background-color:#f2f2f2; padding-top:20px; padding-bottom:20px; \">
  		    <img style=\"width: 45%;\" src=\"" . WEB_PATH . "runtime/image/emailNewsletter.png\"> 
  		  </td>
  	    </tr>
  	
  	    <tr style =\"text-align: center;background-color: #ffffff; front-family: 'Raleway', sans-serif; \" >
  	      <td style=\" display: inline-block; margin-top:36px;  margin-bottom: 25px; padding-bottom: 5px; ;
  	         color: #828282; font-size: 13px; \">
  	         You are receiving this email because you subscribed to Parisine news and offers from Hong Kong. If you did not receive this<br>
             email as a subscriber but would like to receive it in future, please<a style=\"text-decoration: none; color: #828282 \" class=\"ourContact\" href=\"http://test.parisine.com/EN/login/index\"> <u>sign up here</u></a>.<br>
            <br>Your Parisine newsletter and other related marketing emails are sent from the address of <u>(Our CS email)</u>. Remember to accept<br>
            this email address as sender when configuring your email settings or spam filters.<br>
            <br>Please DO NOT reply this email. If you have any comments or queries, please click &quot;Contact Us&quot; above.
          </td>
  	     </tr>
  	
    </tbody>
   </table>
  </td>

 </tr>
 </tbody>
 </table>
</body>
</html>
    ";
          $mail->send();
          $sendchecker = 1;
      }
          if($sendchecker == 1)
              return "subscribeSuccess";
  else
      /*the email has been subscribed*/
      return "subscribed";
  }


}