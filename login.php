<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet"href="css/style.css">
    <title>login</title>
  </head>
  <body>
    <section class="Form my-4 mx-5">
        <div class="container">
            <div class="row no-guttters">
            <div class="row">
                <div class="col-lg-5">
                    <img src="img/flight.gif"class="img-fluid" alt="">
                </div>
                <div class="col-lg-7 px-5 pt-5">
                    <h1 class="font-weight-bold py-3">Login your account</h1>
<form method="post">
                    <div class="form-row">
                        <div class="col=lg-7">
                            <input type="email" placeholder="Enter email" class="form-control my-3 p-3" name="email" 
                            value="<?php
                            if(isset($_COOKIE['un']))
                                {
                                    echo $_COOKIE['un'];
                                }
                            else
                                {
                                    echo "";
                                }

                            ?>">
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="col=lg-7">
                            <input type="password" placeholder="Enter password" class="form-control my-3 p-3" name="password">
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="col=lg-7">
                           

                            <button type="submit" class="btn mt-3 mb-5" name="btn">Login</button>
                        </div>
                    </div>
                    <a href="#">Forgot password</a>
                    <p> Don't have you an account? <a href="register.php">Create an Account</a></p>
                   </form>
                   
                        <?php
                        if(isset($_POST["btn"]))
                        {
                            $u="demo@gmail.com";
                            $p="123";
                        
                        if($_POST["email"]==$u && $_POST["password"]==$p)
                          {
                               setcookie("un","",time()-1); // for delete cookie
                               setcookie("up","",time()-1);
                          }
                        
                            header("Location:index.php");
                          }
                          else
                          {
                           echo " ";
                          }
                        
                        
                        ?>

                </div>
            </div>
        </div>  
    </div>

    </section>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>
