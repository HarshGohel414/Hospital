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
      $con=mysqli_connect("localhost","root","","hospital");
if(isset($_POST['submit'])){
 $name=$_POST['patientname'];
 $date=$_POST['date'];
 $mobile=$_POST['mobile'];
 $time=$_POST['time'];
 $email=$_POST['email'];
 $message=$_POST['message'];
 $status="panding";
 $insert="INSERT INTO `appointment`(`patientname`, `date`, `mobile`, `time`, `email`, `message`,`status`) VALUES ('$name','$date','$mobile','$time','$email','$message','$status')";
 $result=mysqli_query($con,$insert);
if($result){
	echo "<script>alert('insert  done')</script>";
    echo "<script>window.location='index.php'</script>";
}
else{
	echo "<script>alert('insert not  done')<script>";
}
}
?>

    <section id="appointment">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <form class="p-lg-5 col-12 row g-3" id="form1" method="POST">
                        <div>
                            <h1>Appointment</h1>
                            <!-- <p>Fell free to contact us and we will get back to you as soon as possible</p> -->
                        </div>
                        <div class="col-lg-6">
                            <label for="userName" class="form-label">Patient Name</label>
                            <input type="text" class="form-control" placeholder="Name" name="patientname" id="userName"
                                aria-describedby="emailHelp">
                        </div>
                        <div class="col-lg-6">
                            <label for="userName" class="form-label">Select Date</label>
                            <input type="date" class="form-control" placeholder="" name="date" id="userName"
                                aria-describedby="emailHelp">
                        </div>
                        <div class="col-lg-6">
                            <label for="userName" class="form-label">Mobile Number</label>
                            <input type="text" class="form-control" placeholder="Mobile Number" name="mobile" id="userName"
                                aria-describedby="emailHelp">
                        </div>
                        <div class="col-lg-6">
                            <label for="userName" class="form-label">Select time</label>
                            <input type="time" class="form-control" placeholder="Select Time" name="time" id="userName"
                                aria-describedby="emailHelp">
                        </div>
                        <div class="col-12">
                            <label for="userName" class="form-label">Email address</label>
                            <input type="email" class="form-control" placeholder="xyz@example.com" name="email" value="<?php echo $_SESSION['email'];?>" id="userName"
                                aria-describedby="emailHelp"  readonly>
                        </div>
                        <div class="col-12">
                            <label for="exampleInputEmail1" class="form-label">Enter Message</label>
                            <textarea name="message" placeholder="" class="form-control" id="" rows="4"></textarea>
                        </div>

                        <div class="col-12">
                            <button type="submit" class="btn btn-brand" name="submit">Book Appointment</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
</div>
    </section>
    
    <section id="table">

    <div class="card" style="margin-top:5%; background:#ff4d29;">
                  <div class="card-body">
                    <h4 class="card-title">Appointment Status</h4>
                    <p class="card-description"> YOU SEE<code>VIEW</code>
                    </p>
                    <div class="table-responsive">
                <h1></h1>
<table class="table table-light table-hover">
                                       <tr>
                                           <th>Id Number</th>
                                           <th>Patient Name</th>
                                           <th>Select Date</th>
                                           <th>Mobile Number</th>
                                           <th>Select time</th>
                                           <th>Email address</th>
                                           <th>Status</th>
                                           <th>Resposed Message</th>
                                       </tr>
                         <?php
                                      include "connection.php";
                                      $email= $_SESSION['email'];
                                    //   $_GET = $id;
                                    //   $select= "SELECT * FROM `appointment`";
                                    $select = "SELECT * FROM `appointment` WHERE email ='$email'";
                                      $result=mysqli_query($con,$select);
                                      if($result ->num_rows>0)
                                      {
                                          while($row=$result->fetch_assoc())
                                          {
                                      ?>
                                           <tr>
                                               <td><?php echo $row['id'];?></td>
                                               <td><?php echo $row['patientname'];?></td>
                                               <td><?php echo $row['date'];?></td>
                                               <td><?php echo $row['mobile'];?></td>
                                               <td><?php echo $row['time'];?></td>
                                               <td><?php echo $row['email'];?></td>
                                               <td style="color:green;"><?php echo $row['status'];?></td>
                                               <td><?php echo $row['sendmessage'];?></td>
                                           </tr>
                          <?php }} ?>
</table>
            </div>
            </div>
         </div> 
            </section>

    
</body>
<?php
    include "footer.php";
?>
</html>