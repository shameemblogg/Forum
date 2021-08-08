<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    
<style>
    #ques{

        min-height: 433px;
    }
  
</style>

    <title>WELCOME TO iDisscuss - coding Forum </title>
  </head>
  <body>
    
    <?php include "partials/_dbconnect.php"; ?>
    <?php include "partials/_header.php"; ?>


   <!-- crousal start here -->

   <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img class="d-block w-100" src="https://source.unsplash.com/2400x600/?programmer,coding" alt="First slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="https://source.unsplash.com/2400x600/?android,apple" alt="Second slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="https://source.unsplash.com/2400x600/?php,coding" alt="Third slide">
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
  
  <!-- car start here  -->
 <div class="container" id="ques">
    <h1 class = "text-center my-3"> Online Coding Forum</h1>
    <div class="row ">
                                
      <?php     
        //  select query select all the data which is are in the datbase 

         $sql = "SELECT * FROM categories";
         $result = mysqli_query($conn, $sql);

        // fetching loop for fetdh data from the database 
         while($row = mysqli_fetch_assoc($result)){
              //  echo $row['categories_id'];
              //  echo $row['categories_name'];
               
               $id  = $row['categories_id'];
               $cat = $row['categories_name'];
               $desc = $row['categories_discription'];

             echo   ' <div class="col-md-4 my-2 ">
             <div class="card" style="width: 18rem;">
              <img class="card-img-top" src="https://source.unsplash.com/500x400/? ' .$cat. ',javascript" alt="Card image cap">
              <div class="card-body">
                <h5 class="card-title"><a href="threadlist.php?catid='.$id.'"> ' .$cat. '</a>  </h5>
                <p class="card-text"> ' .substr($desc,0,20). '</p>
                <a href="threadlist.php?catid='.$id.'"  class="btn btn-primary" >View threads</a>
                </div>
              </div>
           </div> ';  
          } 

    ?>

  
    </div>

  
 </div>
   

   
    <?php include "partials/footer.php"; ?>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

  </body>
  </html>