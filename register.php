<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet"href="css/style.css">
    <title>register</title>
  </head>
  <body>
    <section class="Form my-14 mx-5">
        <div class="container">
            <div class="row no-guttters">
            <div class="row">
                <div class="col-lg-5 my-3 p-7">
                    <img src="img/flight.gif"class="img-fluid" alt="">
                </div>
                <div class="col-lg-7 px-5 pt-7">
                    <h1 class="font-weight-bold py-3">Create an account</h1>
                   <form method="post">
                    <div class="form-row">
                        <div class="col=lg-7">
                            <input type="text" placeholder="Enter name" class="form-control my-3 p-2 required" name="name">
                        </div>
                    </div>
                    
                    <div class="form-row">
                        <div class="col=lg-7">
                            <input type="email" placeholder="Enter email" class="form-control my-3 p-2" name="email">
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="col=lg-7">
                            <input type="password" placeholder="Enter password" class="form-control my-3 p-2" name="password">
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="col=lg-7">
                            <input type="password" placeholder="Confirm password" class="form-control my-3 p-2" name="confirmpassword">
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="col=lg-7">
                            <div class="form-row">
                                <label>
                                    <input id="check_1"name="check_1" type="checkbox"required>
                                    <small><b>I read and agree to Term & Conditions.</b></small>
                                    <div clas="invalid-feedback"><b>You Must check the box</b></div>
                                </label>
                            </div>
    
                            <button type="submit" class="btn mt-2 mb-2" name="btn">Register</button>
                        </div>
                    </div>
                    <a href="#">Forgot password</a>
                    <p text-align="center" >have you an account? <a href="login.html">Login Your Account</a></p>
                
                   </form>
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


<!-- php start -->


<?php
if(isset($_POST["btn"]))
{
$con=mysqli_connect("localhost","root","","flightdata");
        $a=$_POST["name"];
        $b=$_POST["email"];
        $c=$_POST["password"];
        $d=$_POST["confirmpassword"];
if($con)
{
$q="INSERT INTO `register` (`name`, `email`, `password`, `confirmPassword`) VALUES ('$a', '$b', '$c', '$d');";
$r=mysqli_query($con,$q);

if($r)
{
echo "Data added";
}
else
{
echo "Data not added";
}
}
else
{
echo "Not connected";
}

mysqli_close($con);
}

?>



