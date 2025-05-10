<?php
include "connection.php";
if(isset($_POST['send']))
{
    $fname=$_POST['firstname'];
    $lname=$_POST['lastname'];
    $email=$_POST['email'];
    $message=$_POST['message'];
    $insert="INSERT INTO `inquiry` (`firstname`,`lastname`,`email`,`message`)VALUE('$fname','$lname','$email','$message')";
    $result=mysqli_query($con,$insert);
    if($result)
    {
		echo "<script> alert('Your message is sent')</script>";
		echo "<script> window.loction='contact.php'</script>";
	}
	else
	{
		echo "<script> alert('Try again')</script>";
		echo "<script> window.loction='contact.php'</script>";
	}
}
?>
<!doctype html>
<html lang="en">

<?php
include "header.php";
?>
<body data-bs-spy="scroll" data-bs-target=".navbar" data-bs-offset="70">


    


    <!-- BOTTOM NAV -->
    

    <section id="team">
        <div class="container">
        
            <div class="row justify-content-center">
                
            <div class="modal-content">
            <div class="modal-body p-0">
                    <div class="container-fluid">
                        <div class="row gy-4">
                            <div class="col-lg-4 col-sm-12 bg-cover"
                                style="background-image: url(img1/contact-us-g987709d73_1280.png); min-height:300px;">
                                <div>

                                </div>
                            </div>
                            <div class="col-lg-8">
                                <form class="p-lg-5 col-12 row g-3" method="POST">
                                    <div>
                                        <h1>Get in touch</h1>
                                        <p>Fell free to contact us and we will get back to you as soon as possible</p>
                                    </div>
                                    <div class="col-lg-6">
                                        <label for="userName" class="form-label">First name</label>
                                        <input type="text" class="form-control" pattern="[A-Za-z]+" title="letters only" name="firstname" placeholder="First Name" id="userName"
                                            aria-describedby="emailHelp" required>
                                    </div>
                                    <div class="col-lg-6">
                                        <label for="userName" class="form-label">Last name</label>
                                        <input type="text" class="form-control" pattern="[A-Za-z]+" title="letters only" name="lastname" placeholder="Last Name" id="userName"
                                            aria-describedby="emailHelp" required>
                                    </div>
                                    <div class="col-12">
                                        <label for="userName" class="form-label">Email address</label>
                                        <input type="email" class="form-control" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+.[a-z]{2,4}$" title="xyz@something.com" name="email" placeholder="xyz@gmail.com"
                                            id="userName" aria-describedby="emailHelp" required>
                                    </div>
                                    <div class="col-12">
                                        <label for="exampleInputEmail1" class="form-label">Enter Message</label>
                                        <textarea type="text" placeholder="Message." name="message"
                                            class="form-control" id="" rows="4" required></textarea>
                                    </div>

                                    <div class="col-12">
                                        <button type="submit" name="send" class="btn btn-brand">Send Message</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
              </div>
           </div>
        </div>
    </section>
    
    
</body>
<?php
    include "footer.php";
?>
</html>