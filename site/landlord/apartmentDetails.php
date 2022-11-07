<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Apartment Details</title>
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
      <a class="home" href="landloard.php"> Home </a>
      <a class="tenants" href="tenantManager.php"> Tenant Manager </a>
      <a class="buildings" href="buildingManager.php"> Building Manager </a>
      <a class="maintenance" href="maintanenceManager.php"> Maintenance </a>
      <a class="Account Profile" href=""> Account Profile </a>
      <!-- TEMPORARY BUTTON, must be replaced with proper log out! -->
      <a class="logout" href="index.php"> Logout </a>
    </div>
    <div class="block" style="min-height: 100vh">
     
      


      <div class="container">
        <h1 style="text-align: center;">Apartment Details</h1>
        <div class="blob" style="text-align: center;">
          <div class="row">
            <div class="col">
              <p>Apartment Number</p>
              <h4>111</h4>
            </div>
            <div class="col">
              <p>Rent</p>
              <h4>$1000</h4>
            </div>
            <div class="col">
              <p>Tenants</p>
              <h4>2</h4>
            </div>
            <div class="col">
              <p>Max Tenants</p>
              <h4>3</h4>
            </div>
          </div><br>
          <a href="rent.php">Change Rent</a>
        </div>
        <h3 style="text-align: center; margin-top: 64px">Tenants</h3>
        <div class="row" style="margin-top: 32px;">
          <div class="col">
            <div class="blob">
              <h4>John Doe</h4><br>
              <p>jhdoe</p>
              <p>john@gmail.com</p>
              <p>123-456-7890</p>
            </div>
          </div>
          <div class="col">
            <div class="blob">
              <h4>Jane Doe</h4><br>
              <p>jndoe</p>
              <p>jane@gmail.com</p>
              <p>123-456-7890</p>
            </div>
          </div>
        </div>
        <form action="addTenant.php" method="post" style="margin: 0px;">
          <button class="btn-login">Add Tenant</button>
        </form>
      </div>
  </div>

  </body>
</html>
