<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Payments History</title>
    <!--Font-->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Inter:wght@400;700&display=swap"
      rel="stylesheet"
    />
    <!-- Use styles -->
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" /> <!--javascript animation-->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/normalize.css" />
    <link rel="stylesheet" href="../css/styles.css" />
    
    
  </head>
  <body>
    <div class="sidebar">
      <a class="home" href="tenant.php"> Home </a>
      <a class="payments" href="tenantPayments.php"> Payments History</a>
      <a class="maintenance" href="maintenance.php"> Maintenance </a>
      <a class="property" href=""> Property Details</a>
      <a class="Account Profile" href=""> Account Profile </a>
      <!-- TEMPORARY BUTTON, must be replaced with proper log out! -->
      <a class="logout" href="index.php"> Logout </a>
    </div>
    <div class="block" style="min-height: 100vh">
     
      


      <div class="container">    
        <div class="blob">
          <h1 style="text-align: center;">Account Details</h1>
          <form method="post">
            <div class="row">
              <div class="col-sm">
                  <label for="firstName">First Name</label>
                  <input type="text" id="firstName" name="firstName" placeholder="First Name" value="John" required>
              </div>

              <div class="col-sm">
                  <label for="lastName">Last Name</label>
                  <input type="text" id="lastName" name="lastName" placeholder="Last Name" value="Doe" required>
              </div>
            </div>

            <label for="email">Email</label>
            <input type="email" id="email" name="email" placeholder="Email" value="example@example.com" required>

            <label for="phone">Phone Number</label>
            <input type="tel" id="phone" name="phone" pattern="[0-9]{3}-[0-9]{3}-[0-9]{4}" placeholder="123-456-7890" value="123-456-7890">
            <p style="margin-bottom: -8px;">Required format: <span style="color: var(--color-primary);">xxx-xxx-xxxx</span></p>

            <div style="margin-top: 32px;"><a href="forgotPassword.php">Reset Password</a></div>
              
            <input type="submit" class="btn-login" value="Update" style="margin-top: 32px">
          </form>
        </div>
      </div>

  </div>

  </body>
</html>
