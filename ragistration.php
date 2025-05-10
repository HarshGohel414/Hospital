<!doctype html>
<html lang="en">

<?php
include "header.php";
?>
    

  
    <?php
include "connection.php";
session_start();
if(isset($_SESSION["login"]) && $_SESSION["login"] == true)
{
  header("location: index.php");
}
if(isset($_POST['submit']))
{
   $name=$_POST['name'];
   $email=$_POST['email'];
   $number=$_POST['mobile'];
   $password=$_POST['password'];
   $select= "SELECT * FROM `ragistration` WHERE `email`='$email' && `mobile`='$number'";

   $result1=mysqli_query($con,$select);
   if($result1->num_rows>0){
            echo "<script>alert('Email and Mobile number allready register')</script>";
            echo "<script>window.location='ragistration.php'</script>"; 
    }
    else{
        $insert="INSERT INTO `ragistration`(`name`,`email`,`mobile`,`password`)VALUES('$name','$email','$number','$password')";
       $result=mysqli_query($con,$insert);
       if($result){
        $_SESSION["login_main"]=true;
        $_SESSION["email"]=$email;
           echo "<script>alert('Registration success full')</script>";
           echo "<script>window.location='index.php'</script>";
        }
        else{
            echo "insert not done";
       
    }
}
}
    
    ?>


   


    <section id="appointment">
        <div class="container">
            <div class="row">
            <div class="col-lg-3">
</div>
                <div class="col-lg-6">
                    <form class="p-lg-5 col-15 row g-3" id="form1" method="POST">
                        <div>
                            <h1>Ragistration</h1>
                            <!-- <p>Fell free to contact us and we will get back to you as soon as possible</p> -->
                        </div>
                        <div class="col-lg-12">
                            <label for="userName" class="form-label">Name</label>
                            <input type="text" class="form-control" placeholder="Name" name="name" id="userName"
                                aria-describedby="emailHelp" required>
                        </div>

                        <div class="col-lg-12">
                            <label for="userName" class="form-label">Email address</label>
                            <input type="email" class="form-control" placeholder="xyz@example.com" name="email" id="userName"
                                aria-describedby="emailHelp" required>
                        </div>
                        
                        <div class="col-lg-12">
                            <label for="userName" class="form-label">Mobile Number</label>
                            <input type="text" class="form-control" placeholder="" name="mobile" id="userName"
                                aria-describedby="emailHelp" required>
                        </div>

                        <div class="col-lg-12">
                            <label for="userName" class="form-label">Password</label>
                            <input type="password" class="form-control" placeholder="Password" name="password" id="userName"
                                aria-describedby="emailHelp" required>
                        </div>
                       

                        <div class="col-9 raju">
                            <a href="login.php" class="btn btn-brand">Go Back</a>
              
                        </div>
                        <div class="col-3">
                            <button type="submit" class="btn btn-brand" name="submit">Ragistration</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        
    </section>

    <footer>
        <div class="footer-top text-center">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-6 text-center">
                        <h4 class="navbar-brand">RkksYTboss<span class="dot">.</span></h4>
                        <p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a
                            piece of
                            classical Latin literature from</p>
                        <div class="col-auto social-icons">
                            <a href="#"><i class='bx bxl-facebook'></i></a>
                            <a href="#"><i class='bx bxl-twitter'></i></a>
                            <a href="#"><i class='bx bxl-instagram'></i></a>

                        </div>
                        <div class="col-auto conditions-section">
                            <a href="#">privacy</a>
                            <a href="#">terms</a>
                            <a href="#">disclaimer</i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer-bottom text-center">
            <p class="mb-0">Copyright rkksytboss 2022. All rights Reserved</p> Distributed By <a hrefs="">RkksYTboss</a>
        </div>
    </footer>


    <!-- Modal -->
    









    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.bundle.min.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/app.js"></script>
</body>

</html>