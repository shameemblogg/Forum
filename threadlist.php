<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <style>
    #ques {
        min-height: 433px;
    }
    </style>

    <title>WELCOME TO iDisscuss - coding Forum </title>
</head>

<body>

    <?php include "partials/_dbconnect.php"; ?>
    <?php include "partials/_header.php"; ?>
    <?php

      $id = $_GET['catid'];
      $sql = "SELECT * FROM categories WHERE categories_id=$id";
      $result = mysqli_query($conn,$sql);
      while($row = mysqli_fetch_assoc($result)){
              $catname = $row['categories_name'];
              $catdesc = $row['categories_discription'];
             
              

      }
       
     
      ?>

    <?php
           $showAlert = false;          
           $method = $_SERVER['REQUEST_METHOD'];
            if($method == 'POST'){
                $sno = $_POST['sno'];
                $th_title = $_POST['title'];
                $th_desc = $_POST['desc'];

                $th_title = str_replace("<", "&lt;",   $th_title);
                $th_title = str_replace(">","&gt;" ,   $th_title);
                 $th_desc = str_replace("<", "&lt;",  $th_desc);
                 $th_desc = str_replace(">","&gt;" ,  $th_desc);
              
                

                $sql = "INSERT INTO threads ( `thread_title`, `thread_desc`, `thread_cat_id`, `thread_user_id`, `dt`) VALUES ( ' $th_title', '  $th_desc', '$id', '  $sno', current_timestamp())";
                $result = mysqli_query($conn,$sql);
                $showAlert = true;
                if($showAlert){
                    echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
                    <strong>Success!</strong> Your thread has been added! please wait for community to respond.
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                  </div>';
              }
                
            } 
        
         ?>

    <!-- crousal start here -->


    <!-- car start here  -->
    <div class="container my-5">

        <div class="jumbotron">
            <h1 class="display-4">welcome to <?php echo $catname; ?> Forum </h1>
            <p class="lead"><?php echo $catdesc; ?></p>
            <hr class="my-4">
            <p>It uses utility classes for typography and spacing to space content out within the larger container.</p>
            <p class="lead">
                <a class="btn btn-success btn-lg" href="#" role="button">Learn more</a>
            </p>
        </div>

    </div>
    <!-- thread are start here  -->
    <?php
    if(isset($_SESSION['loggedin']) && $_SESSION['loggedin']==true){
    echo '<div class="container">
        <h1 class="py-2"> star a discussion </h1>

        <form action=" ' . $_SERVER['REQUEST_URI'] .' " method="post">
            <div class="form-group">
                <label for="title">problem title</label>
                <input type="text" class="form-control" id="title" name="title" aria-describedby="emailHelp"
                    placeholder="write your title">
                <small id="emailHelp" class="form-text text-muted">keep your title as short and crisp as possible
                </small>
                </div>
                <input type="hidden" name="sno" value="'. $_SESSION["sno"]. '">
            <div class="form-group">
                <label for="exampleFormControlTextarea1">Ellaborate your concern</label>
                <textarea class="form-control" id="desc" name="desc" rows="3"></textarea>
            </div>
            <button type="submit" class="btn btn-success">Submit</button>
        </form>

    </div>';

    }
      else{
           
     echo   '<div class="container">   
              <h1 class="py-2"> Start iDiscussion </h1>
               <p class="lead"> you are not logged in </p>
            </div>';
         
    }
  ?>


    <div class="container my-4 mb-5 " id="ques">
        <h1 class="py-2"> Browse Question </h1>

        <?php 
      $id = $_GET['catid'];
      $sql = "SELECT * FROM threads WHERE thread_cat_id= $id";
      $result = mysqli_query($conn,$sql);
      $noResult = true;
     while($row = mysqli_fetch_assoc($result)){
         $noResult = false;
        $id = $row['thread_id'];
        $title = $row['thread_title'];
        $desc = $row['thread_desc']; 

       

        $thread_time = $row['dt']; 
        $thread_user_id = $row['thread_user_id']; 
        $sql2 = "SELECT user_email FROM users WHERE sno='$thread_user_id'";
        $result2 = mysqli_query($conn, $sql2);
        $row2 = mysqli_fetch_assoc($result2);

        echo '<div class="media my-3">
        <img src="img/user_default.jpg" width="54px" class="mr-3" alt="...">
        <div class="media-body">'.
         '<h5 class="mt-0"> <a class="text-dark" href="thread.php?threadid=' . $id. '">'. $title . ' </a></h5>
            '. $desc . ' </div>'.'<div class="font-weight-bold my-0"> Asked by: '. $row2['user_email'] . ' at '. $thread_time. '</div>'.
    '</div>';
        }

        // echo var_dump( $noResult);
         
        if($noResult)
          {
           
            echo '<div class="jumbotron jumbotron-fluid">
            <div class="container">
              <h1 class="display-4">No Result Found</h1>
              <p class="lead">Be the first person to ask a question.</p>
            </div>
          </div>';

          }
    
 ?>





        <!-- <div class="media my-3">
            <img class="mr-3" src="img/user_default.jpg" width="54px" alt="Generic placeholder image">
            <div class="media-body">
                <h5 class="mt-0">Unable to store java idle</h5>
                Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin. Cras purus
                odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate
                fringilla. Donec lacinia congue felis in faucibus.
            </div>
        </div> -->





        <!-- Optional JavaScript -->
        <!-- jQuery first, then Popper.js, then Bootstrap JS -->
        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
            integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous">
        </script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
            integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous">
        </script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
            integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous">
        </script>

        <?php include "partials/footer.php"; ?>
</body>

</html>