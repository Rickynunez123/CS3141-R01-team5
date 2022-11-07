<!DOCTYPE html>
<html lang="en">

<?php

function alert($message)
{
  echo "<script>alert('$message');</script>";
}

//post method for login 
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $email = $_POST['email'];
  $password = $_POST['password'];


  $postRequest = array(
    'email' => $email,
    'password' => $password
  );

  //Initializes a new session and return a cURL handle
  $cURLConnection = curl_init('https://obscure-ridge-22477.herokuapp.com/api/smartments/users/auth');

  //convert into JSON format 
  $json_encoded_data = json_encode($postRequest);


  /*
  CURLOPT_POSTFIELDS - data to POST to server
  If value is an array, the Content-Type header will be set to form
  Converted into JSON format to send it to data instead of form

  CURLOPT_RETURNTRANSFER to return the transfer as a string

  CURLOPT_HTTPHEADER to return an array of HTTP header fields to set, in the 
  format array('Content-type: text/plain', 'Content-length: 100')

  curl_exec to grab URL and pass it to the browser

  curl_getinfo To get the cookies for a curl handle. 

  */
  curl_setopt($cURLConnection, CURLOPT_POSTFIELDS, $json_encoded_data);
  curl_setopt($cURLConnection, CURLOPT_RETURNTRANSFER, true);

  curl_setopt($cURLConnection, CURLOPT_HTTPHEADER, array("Content-Type: application/json"));

  $apiResponse = curl_exec($cURLConnection);

  $status_code = curl_getinfo($cURLConnection, CURLINFO_RESPONSE_CODE);
  curl_close($cURLConnection);


  if ($status_code == 200) {
    header("Location: tenant.php");
  }
}
?>

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Login</title>
  <!--Font-->
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;700&display=swap" rel="stylesheet" />
  <!-- Use styles -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <link rel="stylesheet" href="/css/normalize.css" />
  <link rel="stylesheet" href="/css/styles.css" />
  <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
  <!--javascript animation-->

</head>

<body>
  <div class="block" style="min-height: 100vh">
    <div class="container" style="max-width: 640px;">
      <div class="blob">
        <h2 style="text-align: center;">Welcome to Smartments!</h2>
        <h5 style="text-align: center;">Login to continue or <a href="createAccount.php" style="text-align: center;">create account</a></h5>
        <h3><?php

            if (isset($status_code) && $status_code == 400) {
              echo "invalid username or password";
            }


            ?></h3>
        <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
          <label for="email">Email</label>
          <input type="text" id="email" name="email" placeholder="Email" required>

          <label for="password">Password</label>
          <input type="password" id="password" name="password" placeholder="Password" required>

          <input type="submit" class="btn-login" value="Login">
        </form><br>
        <div style="margin-top: 24px;"><a href="forgotPassword.php" style="margin-top: 16px">Forgot password?</a></div>
      </div>
    </div>
  </div>

  <?php
  $status_code = 0;
  ?>


</body>

</html>