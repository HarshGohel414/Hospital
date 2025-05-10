
<?php
include "connection.php";
session_start();
if(isset($_SESSION["login"])&&$_SESSION["login"] == true)
{
  header("location: index.php");
  exit;
}
if(isset($_POST['submit']))
{
    $email=$_POST['email'];
    $password=$_POST['password'];

$select="SELECT*FROM `ragistration` WHERE `email`='$email' && `password`='$password'";
$result=mysqli_query($con,$select);
if($result->num_rows>0)
{
    $_SESSION["login"]=true;
    $_SESSION["email"]=$email;
    
    echo "<script>alert('login done')</script>";
    echo "<script>window.location='index.php'</script>";
}
else{
    echo "login not done";
}
}
?>
<!doctype html>
<html lang="en">


<?php
include "header.php";
?>
<body data-bs-spy="scroll" data-bs-target=".navbar" data-bs-offset="70">


    <!-- TOP NAV -->
    

    <!-- BOTTOM NAV -->
    
    

  


   


    <section id="appointment">
        <div class="container">
            <div class="row">
            <div class="col-lg-3">
</div>
                <div class="col-lg-6">
                    <form class="p-lg-5 col-12 row g-3" id="form1" method="POST">
                        <div>
                            <h1>Login</h1>
                            <!-- <p>Fell free to contact us and we will get back to you as soon as possible</p> -->
                        </div>
                        

                        <div class="col-lg-12">
                            <label for="userName" class="form-label">Email address</label>
                            <input type="email" class="form-control" placeholder="xyz@example.com" name="email" id="userName"
                                aria-describedby="emailHelp" required>
                        </div>
                        
                     

                        <div class="col-lg-12">
                            <label for="userName" class="form-label">Password</label>
                            <input type="password" class="form-control" placeholder="Password" name="password" id="userName"
                                aria-describedby="emailHelp" required>
                        </div>
                       

                        <div class="col-9">
                            <a href="ragistration.php" class="btn btn-brand">Ragistration</a>
              
                        </div>
                        <div class="col-3">
                            <button type="submit" class="btn btn-brand" name="submit">Login</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        
    </section>

    
</body>
<?php
    include "footer.php";
?>
</html>