<html>
    <head>
        <title>login</title>
        <meta name ="viewport" content="width=device-width,initial-scale=1">
        <link href="css/bootstrap.min.css" rel="stylesheet" />
        <link href="https://use.fontawesome.com/releases/v5.11.2/css/all.css" rel="stylesheet" />
        <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,600;0,700;0,800;1,300;1,400;1,600;1,700;1,800&display=swap" rel="stylesheet" />
        <link href="css/style.css"   rel="stylesheet"/> 
        <style>
            .bg-image{
                background-image: url(img/bgi.jpg);
                background-repeat: no-repeat;
                background-size: cover;
                height: 500px;

            }
        </style>
        
    </head>
    <body>
    <div class="bg-image">
    <?php
    include "includes/header.php";
    ?>
    <div class="container-fluid bg-black">
        
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb" style="margin-top:95px; background-attachment:fixed;">
              <li class="breadcrumb-item"><a href="index.html">Home</a></li>
              <li class="breadcrumb-item active" aria-current="page">login</a></li>
              <li class="breadcrumb-item"> <a href="signup.html">signup</a></li>
            </ol>
          </nav>
    </div>
    <div class="container bg-secondary" style=" height:300px; width: 600px;">
        <h4 style="padding-left: 180px;padding-top: 10px;">login with PGLife</h4>
        <form action="login_submit.php" method="POST">
            <div class="input-group mb-3">
                <span class="input-group-text fa fa-envelope"></span>
                <input type="text" class="form-control" placeholder="email" name="mail">
                
            </div>

            <div class="input-group mb-3">
                <span class="input-group-text fa fa-lock"></span>
                <input type="text" class="form-control" placeholder="password" name="password">
              
            </div>
            <div class="form-check mb-3">
                <label class="form-check-label">
                  <input class="form-check-input" type="checkbox" name="remember"> Remember me
                </label>
              </div>
              <button type="submit" class="btn btn-primary" style="width: 580px">Submit</button>








        </form>

    
    </div>

    </body>
</html>