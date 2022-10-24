<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>Login</title>
        <!--Font-->
        <link rel="preconnect" href="https://fonts.googleapis.com" />
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
        <link
        href="https://fonts.googleapis.com/css2?family=Inter:wght@400;700&display=swap"
        rel="stylesheet"
        />
        <!-- Use styles -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <link rel="stylesheet" href="css/normalize.css" />
        <link rel="stylesheet" href="css/styles.css" />
        <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" /> <!--javascript animation-->
    
    </head>
    <body>
        <div class="block" style="min-height: 100vh;">
            <div class="container" style="max-width: 640px;">
                <div class="blob">
                    <h2>Forgot your password?</h2>
                    <p style="margin-top: 24px; margin-bottom: -16px;">Enter the email associated with your account, and we'll send you an email with a link to reset your password.</p>
                    <form name="forgotPassword" method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
                        <label for="email">Email</label>
                        <input type="email" id="email" name="email" placeholder="Email" required><br>
                        <input type="submit" class="btn-login" value="Reset">
                    </form><br>
                    <div style="margin-top: 24px;"><a href="login.php" style="margin-top: 16px">Back</a></div>
                </div>
            </div>
        </div>
        <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
          // collect value of input field
          $to = $_POST['email'];

          // TODO: verify email is linked to a valid account

          // TODO: if user account exists, generate link with otp to reset their password
          $resetLink = "https://smartments.rentals";


          //send recovery email
          $subject = "Account Recovery";
          $message = '<p>A password reset has been requested, please click here to change password </p> <a href="' . $resetLink . '">' . $resetLink . '</a>';
          //$message = "A password reset has been requested, please click here to change password " . $resetLink;
          $from = "no-reply@smartments.rentals";
          $headers = 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
          $headers .= "From:" . $from;

          if(mail($to,$subject,$message,$headers))
          {
            header("Location: passwordChangeConfirmation.php");
          }
          else
          {
            echo "Could Not Send Mail!";
          }
        }
        ?>
    </body>
</html>