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
        <div class="block" style="min-height: 100vh">
            <div class="container" style="max-width: 640px;">
                <div class="blob">
                    <h2>Email Verified!</h2>
                    <div style="margin-top: 24px;"><a href="login.php">Continue</a></div>
                </div>
            </div>
        </div>
        <?php
        function alert($message) {
	        echo "<script>alert('$message');</script>";
        }
        // collect value of input field
        $otp = $_GET['otp'];
        // TODO ======================================================================
        // Filter input for security!
        // ===========================================================================


        //initialize database connection
	    $mysqli = new mysqli("localhost","smartments","Smartments#2022","Smartments");

        //verify database connection succeeded 
	    if ($mysqli -> connect_errno) {
		    alert("Could Not Connect To Database!");
	    } else {
            //SQL command string
            $queryString = "SELECT user, type FROM OTP WHERE otp='$otp'";
            //execute sql query
		    $result = $mysqli->query($queryString)->fetch_row();

            //check if OTP is valid
            if(isset($result[0]) && $result[1] == 0) {
                $username = $result[0];

                //delete OTP entry
                $deleteString = "DELETE FROM OTP WHERE otp='$otp'";
                $mysqli->query($deleteString);

                //update verification
                $updateString = "UPDATE Users SET verified='1' WHERE username='$username'";
                $mysqli->query($updateString);
            } else {
                //header("Location: login.php");
            }
	    }
        ?>
    </body>
</html>
