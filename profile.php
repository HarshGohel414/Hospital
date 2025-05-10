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

   


    <section id="appointment">
        <div class="container">
            <div class="row">
            <div class="col-lg-3">
</div>

                <div class="col-lg-6">
                    <form class="p-lg-5 col-12 row g-3" id="form1" method="POST">
                        <div>
                            <h1>Profile</h1>
                            <!-- <p>Fell free to contact us and we will get back to you as soon as possible</p> -->
                        </div>
                        <div class="col-lg-12">
                            <label for="userName" class="form-label">Name</label>
                            <label for="userName" class="form-control"><?php echo $row['name'];?></label>
                    
                        </div>

                        <div class="col-lg-12">
                            <label for="userName" class="form-label">Email address</label>
                            <label for="userName" class="form-control"><?php echo $row['email'];?></label>
                        
                        </div>
                        
                        <div class="col-lg-12">
                            <label for="userName" class="form-label">Mobile Number</label>
                            <label for="userName" class="form-control"><?php echo $row['mobile'];?></label>
                            
                        </div>
                       

                        <div class="col-9">
                            <a href="index.php" class="btn btn-brand">Go Back</a>
              
                        </div>
                        <div class="col-3">
                            <a href="profile-update.php" class="btn btn-brand">Edit Profile</a>
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