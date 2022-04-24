<html>
    <head>
        <title>PGLife</title>
        <meta name ="viewport" content="width=device-width,initial-scale=1">


        <?php
        include "includes/head_links.php";
        ?>


        <link href="css/style.css"   rel="stylesheet"/> 
    </head>
    <body>

      <?php
      include "includes/header.php";
      ?>


      <div class="container-fluid" id="back" style="height:500px;">
        <div  class="col-md-12" >
          <div class="col"></div>
            <div class="col">
              <h5>HAPPINESS PER SQUARE FOOT</h5><br>
        
            <div  class="input-group container" id="style"> 
             <input type="text" class="form-control" placeholder="Enter your city to search Pglife"><button class="btn btn-secondary " type="submit"><i class="fa fa-search"></i></button>
            </div>
            </div>
          <div class="col"></div>  
        </div>
      </div>
      
      
      
      
      
      
      
      <div class="xyz">
         <h4>Major Cities</h4>
      </div> 





      <div class="contain">
        <div class="con"><a href="mproperty_list.html"><img class="rounded-circle img-thumbnail" src="img/mumbai.png"/></a></div>
        <div class="con"><a href="hproperty_list.html"><img class="rounded-circle img-thumbnail" src="img/hyderabad.png"/></a></div>
        <div class="con"><a href="dproperty_list.html"><img class="rounded-circle img-thumbnail" src="img/delhi.png"/></a></div>
        <div class="con"><a href="cproperty_list.html"><img class="rounded-circle img-thumbnail" src="img/chennai.png"/></a></div>
      </div>    

      <?php
      include "includes/footerr.php";
      ?>

    
    
        </body>
</html>