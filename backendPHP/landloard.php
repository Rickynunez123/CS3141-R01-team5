<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Landloard</title>
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
    <link rel="stylesheet" href="css/landloardstyles.css" />
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" /> <!--javascript animation-->
    
   <!-- favicon -->
    <link
    rel="icon"
    href="data:image/svg+xml,<svg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 100 100'><text y='.9em' font-size='90'>🏠</text></svg>"
  />

  </head>
  <body>
     
      <div class="sidebar">
          <a class="home" href="landloard.php"> Home </a>
          <a class="tenants" href="tenantManager.php"> Tenant Manager </a>
          <a class="buildings" href=""> Building Manager </a>
          <a class="maintenance" href="maintanenceManager.php"> Maintenance </a>
          <a class="Account Profile" href=""> Account Profile </a>
          <!-- TEMPORARY BUTTON, must be replaced with proper log out! -->
          <a class="logout" href="index.php"> Logout </a>
      </div>

      <div class="block" style="min-height: 100vh">
        <div class="container" style="max-width: 1000px;">
            
            
            <div class="blob-one">
                
                <h1> Tenants Overdue </h1>
               
                <div class = "overdueBlock" >
                    <ol type="1"> 

                        <li> tenant 1 </li>
                        <li> tenant 2 </li>
                        <li> tenant 3 </li>
                        <li> tenant 4 </li>
                        <li> tenant 5 </li>
                    <!-- first 5 tenants names will show if overdue -->
                    </ol>

                    <a class = "viewTenants" href = "tenantManager.php"> View All Tenants </a> 

                </div> 
                
            </div>
            
            <div class = "blob-two">

                <h2>Maintenance Requests </h2>
                <div class = "MaintReq">
                    <ol type="1"> 

                        <li> request 1 </li>
                        <li> request 2 </li>
                        <li> request 3 </li>
                        <li> request 4 </li>
                        <li> request 5 </li>
                    <!-- first 5 requests will show if they exist  -->
                    </ol>
                    <a class = "viewReq" href = "maintanenceManager.php"> View Requests </a> 

                </div>
            </div>
                
        </div>
    </div>
  </body>
</html>