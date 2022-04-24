<html>
    <head>
        <title>signup</title>
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
                  <li class="breadcrumb-item"><a href="login.html">login</a></li>
                  <li class="breadcrumb-item active" aria-current="page">signup</li>
                </ol>
              </nav>
        </div>
        <div class="container bg-secondary" style=" height:500px; width:400px;">
            <h4 style="padding-left: 90px;padding-top: 10px;">signup with PGLife</h4>
            
            <form action="signup_submit.php" method="POST">
                <div class="input-group mb-3">
                  <span class="input-group-text fa fa-user"></span>
                  <input type="text" class="form-control" placeholder="fullname" name="full_name">
                </div>
            
                
                <div class="input-group mb-3">
                    <span class="input-group-text fa fa-phone"></span>
                    <input type="text" class="form-control" placeholder="enter your ph number" name="phone">
                    
                </div>

                <div class="input-group mb-3">
                    <span class="input-group-text fa fa-envelope"></span>
                    <input type="text" class="form-control" placeholder="email" name="email">
                    
                </div>

                <div class="input-group mb-3">
                    <span class="input-group-text fa fa-lock"></span>
                    <input type="text" class="form-control" placeholder="password" name="password">
                  
                </div>

                <div class="input-group mb-3">
                    <span class="input-group-text fa fa-university"></span>
                    <input type="text" class="form-control" placeholder="collage name" name="college_name">
                   
                </div>
            
                <div class="form-group">
                    <span>I'm a</span>
                    <input type="radio" class="ml-3" id="gender-male" name="gender" value="male" /> Male
                    <label for="gender-male">
                    </label>
                    <input type="radio" class="ml-3" id="gender-female" name="gender" value="female" />
                    <label for="gender-female">
                        Female
                    </label>
                </div>

                <div class="form-group">
                    <button type="submit" class="btn btn-block btn-primary" style="width: 38 0px;">Create Account</button>
                </div>
            </form>
        
        <hr>

        <div class="footer">
           <p style="padding-left: 100px;">Already have an account?<a href="login.html"><i style="color: aliceblue;">login</i></a></p>
        </div>
            </form>
        
        </div>
    

        </div>   
    </body>
</html>