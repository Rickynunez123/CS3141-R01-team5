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
    <div class="block" style="height: 100vh">
     
      


      <div class="container">
        <h2 style="text-align: center; margin-bottom: 32px;">Property Details</h2>
        <div class="row">
          <div class="blob col" style="margin-right: 16px">
            <h4>Address</h4><br>
            <p>Street</p>
            <p>Apt#</p>
            <p>City, State, ZIP</p>
          </div>
          <div class="blob col" style="margin-left: 16px">
            <h4>Contact Info</h4><br>
            <p>Landlord</p>
            <p>Phone</p>
            <p>Email</p>
          </div>
        </div>
      </div>

  </div>

  </body>
</html>
