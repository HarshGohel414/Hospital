<?php
  session_start();
if(!isset($_SESSION["login"]) && $_SESSION["login"] !== true)
{
  header("location: login.php");

}
$email= $_SESSION['email'];
?>
<!doctype html>
<html lang="en">


<?php
include "header.php";
?>
<body data-bs-spy="scroll" data-bs-target=".navbar" data-bs-offset="70">


    <!-- TOP NAV -->
    

    <!-- BOTTOM NAV -->
    
    

  
   
         <?php
		 
          include "connection.php";
         
          $email= $_SESSION['email'];
          
          $select= "SELECT * FROM `ragistration` WHERE `email`='$email'";
          $result=mysqli_query($con,$select);
          if($result ->num_rows>0)
          {
             
             while($row=$result->fetch_assoc())
             {
                     ?>
        <?php
            include "connection.php";
            $email= $_SESSION['email'];
            if(isset($_POST['update']))
            {
                $name=$_POST['name'];
                $email=$_POST['email'];
                $mobile=$_POST['mobile'];
                $update="UPDATE `ragistration` SET `name`='$name',`email`='$email',`mobile`='$mobile' WHERE `email`='$email'";
                $result=mysqli_query($con,$update);
                if($result)
                {
                    echo "<script> alert('Your data is updated')</script>";
                    echo "<script> window.location='profile.php'</script>";
                }
                else
                {
                    echo "<script> alert('Your data is not updated')</script>";
                    echo "<script> window.location='profile-update.php'</script>";
                }
            }
        ?>
   


    <section id="appointment">
        <div class="container">
            <div class="row">
            <div class="col-lg-3">
</div>

                <div class="col-lg-6">
                    <form class="p-lg-5 col-12 row g-3" id="form1" method="POST">
                        <div>
                            <h1>Edit Profile</h1>
                            <!-- <p>Fell free to contact us and we will get back to you as soon as possible</p> -->
                        </div>
                        <div class="col-lg-12">
                            <label for="userName" class="form-label">Name</label>
                            <input for="userName" class="form-control" type="text" value="<?php echo $row['name'];?>" name="name">
                    
                        </div>

                        <div class="col-lg-12">
                            <label for="userName" class="form-label">Email address</label>
                            <input for="userName" class="form-control" type="email" value="<?php echo $row['email'];?>" name="email">
                        
                        </div>
                        
                        <div class="col-lg-12">
                            <label for="userName" class="form-label">Mobile Number</label>
                            <input for="userName" class="form-control" type="text" value="<?php echo $row['mobile'];?>" name="mobile">
                            
                        </div>

                        <div class="col-lg-12">
                            <label for="userName" class="form-label">Password</label>
                            <input for="userName" class="form-control" type="password" value="<?php echo $row['password'];?>" name="password">
                          
                        </div>
                       

                        <div class="col-9">
                            <a href="profile.php" class="btn btn-brand">Go Back</a>
              
                        </div>
                        <div class="col-3">
                            <button type="submit" class="btn btn-brand" name="update">Update</button>
                        </div>
                    </form>
                    <?php }} ?> 
                </div>
            </div>
        </div>
        
    </section>

    
</body>
<?php
    include "footer.php";
?>
</html>