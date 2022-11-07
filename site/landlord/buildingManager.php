<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Building Manager</title>
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
    <div class="block" style="height: 100vh">
     
      


      <div class="container">    
        <div class="blob">
          <h1 style="text-align: center;">Building Manager</h1>
          <table>
            <tr>
              <th>Building</th>
              <th>Available Apartments</th>
              <th>More Details</th>
            </tr>
            <tr>
              <td>Building 1</td>
              <td>5</td>
              <td><a href="buildingDetails.php">Details</a></td>
            </tr>
          </table>
        </div>
      </div>

  </div>

  </body>
</html>
