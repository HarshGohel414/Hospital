<!doctype html>
<html lang="en">

<?php
include "header.php";
?>
<body data-bs-spy="scroll" data-bs-target=".navbar" data-bs-offset="70">


    <!-- TOP NAV -->
    

    <!-- BOTTOM NAV -->
    <div class="owl-carousel owl-theme hero-slider">
    <?php
        include "connection.php";
        $select= "SELECT * FROM `slide`";
        $result=mysqli_query($con,$select);
        if($result ->num_rows>0)
        {
            while($row=$result->fetch_assoc())
            {
            ?>
    <!-- SLIDER -->
        <div class="slide slide1" style="background: linear-gradient(rgba(0, 0, 0, 0.4), rgba(0, 0, 0, 0.4)), url(admin/template/upload/slider/<?php echo $row['image']; ?>);background-size: cover;  background-position: center;background-repeat: no-repeat; height:100vh;">
            <div class="container">
                <div class="row">
                    <div class="col-12 text-center text-white">
                        <h6 class="text-white text-uppercase"><?php echo $row['firstheading'];?></h6>
                        <h1 class="display-3 my-4"><?php echo $row['secondheading'];?><br />  </h1>
                        <a href="#" class="btn btn-brand">Get Started</a>
                        <a href="#" class="btn btn-outline-light ms-3">Our work</a>
                    </div>
                </div>
            </div>
        </div>
        <?php
            }
        }
        ?>

    </div>

    <!-- ABOUT
    <section id="about">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-5 py-5">
                    <div class="row">

                        <div class="col-12">
                            <div class="info-box">
                                <img src="img/icon6.png" alt="">
                                <div class="ms-4">
                                    <h5>Digital Marketing</h5>
                                    <p>It is a long established fact that a reader will be distracted by the readable
                                        content of a page </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 mt-4">
                            <div class="info-box">
                                <img src="img/icon4.png" alt="">
                                <div class="ms-4">
                                    <h5>E-mail Marketing</h5>
                                    <p>It is a long established fact that a reader will be distracted by the readable
                                        content of a page </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 mt-4">
                            <div class="info-box">
                                <img src="img/icon5.png" alt="">
                                <div class="ms-4">
                                    <h5>Buisness Marketing</h5>
                                    <p>It is a long established fact that a reader will be distracted by the readable
                                        content of a page </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-5">
                    <img src="img/about.png" alt="">
                </div>
            </div>
        </div>
    </section> -->

    <!-- MILESTONE -->

    <section id="services" class="text-center">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="intro">
                        <h6>Our Services</h6>
                        <h1>Our Services</h1>
                        <p class="mx-auto">Contrary to popular belief, Lorem Ipsum is not simply random text. It has
                            roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old</p>
                    </div>
                </div>
            </div>
            <div class="row g-4">
                <div class="col-lg-4 col-md-6">
                    <div class="service">
                        <img src="img1/logo1.jpg" alt="">
                        <h5>24 Hourse Help</h5>
                        <p>24 hours doctor available in emergency time.
                            Doctor are very skilled her profession. Doctor are very helpful.

                        </p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="service">
                        <img src="img1/ambulance-logo-free-vector.jpg" alt="">
                        <h5>Ambulance Service Available</h5>
                        <p>Ambulance service available for the patient. Emergency response system .You can call for over
                            service.</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="service">
                        <img src="img1/logobad.png" alt="">
                        <h5>Beds Service Available</h5>
                        <p>We have main three types of hospital beds are available first manual beds, second
                            semi-electric beds, and fully-electric beds available .</p>
                    </div>
                </div>

            </div>
        </div>
    </section>



    <section class="bg-light" id="reviews">

        <div class="owl-theme owl-carousel reviews-slider container">
            <div class="review">
                <div class="person">
                    <img src="img/team_1.jpg" alt="">
                    <h5>Ralph Edwards</h5>
                    <!-- <small>Market Development Manager</small> -->
                </div>
                <h3>Doctors and staff have good behavior during treatment.
                    Hospital is clean and maintains hygiene.
                    Doctors are punctual and on time during every visit.
                    Food is good and as per the diet plan.
                    Hospital is reasonable and cheaper than most hospitals in terms of fees.
                    Fully satisfied</h3>
                <div class="stars">
                    <i class='bx bxs-star'></i>
                    <i class='bx bxs-star'></i>
                    <i class='bx bxs-star'></i>
                    <i class='bx bxs-star'></i>
                    <i class="bx bxs-star-half"></i>
                </div>
                <i class='bx bxs-quote-alt-left'></i>
            </div>
            <div class="review">
                <div class="person">
                    <img src="img/team_2.jpg" alt="">
                    <h5>Ralph Edwards</h5>
                    <!-- <small>Market Development Manager</small> -->
                </div>
                <h3>amarnathdham Hospital has a great facility and a team of very skilled doctors. One of the best things
                    about the hospital is that the doctors and staff at Aashka hospital explain the treatment very well
                    and help understand the procedure, making it easier for the patients. I have been visiting this
                    hospital for 2.5 years now</h3>
                <div class="stars">
                    <i class='bx bxs-star'></i>
                    <i class='bx bxs-star'></i>
                    <i class='bx bxs-star'></i>
                    <i class='bx bxs-star'></i>
                    <i class="bx bxs-star-half"></i>
                </div>
                <i class='bx bxs-quote-alt-left'></i>
            </div>
            <div class="review">
                <div class="person">
                    <img src="img/team_3.jpg" alt="">
                    <h5>Ralph Edwards</h5>
                    <!-- <small>Market Development Manager</small> -->
                </div>
                <h3>The staff at amarnathdham Hospital were really helpful and are always on their toes to support the
                    patients. It didn’t feel like visiting a hospital. I had a great experience. </h3>
                <div class="stars">
                    <i class='bx bxs-star'></i>
                    <i class='bx bxs-star'></i>
                    <i class='bx bxs-star'></i>
                    <i class='bx bxs-star'></i>
                    <i class="bx bxs-star-half"></i>
                </div>
                <i class='bx bxs-quote-alt-left'></i>
            </div>
        </div>
    </section>





    <section id="blog">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="intro">
                        <h6>Team</h6>
                        <h1>Over Team</h1>
                        <p class="mx-auto">Contrary to popular belief, Lorem Ipsum is not simply random text. It has
                            roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <article class="blog-post">
                        <img src="img1/dr1.jpg" alt="">
                        <a href="#" class="tag">Doctor</a>
                        <div class="content">
                            <small>01 Dec, 2022</small>
                            <h5>Dr. Kishan Kumar Singh</h5>
                            <p>Dr. Kishan Kumar Singh is one of the most reputed Cardiothoracic Surgeons in India.He has
                                a experience of over 25+ years.</p>
                        </div>
                    </article>
                </div>
                <div class="col-md-6">
                    <article class="blog-post">
                        <img src="img1/dr3.jpg" alt="">
                        <a href="#" class="tag">Doctor</a>
                        <div class="content">
                            <small>01 Dec, 2022</small>
                            <h5>Dr. Sunita Singh</h5>
                            <p>Dr. Sunita Singh is one of the most reputed Medical Oncologists in India.He has a
                                experience of over 22+ years.</p>
                        </div>
                    </article>
                </div>
            </div>
        </div>
    </section>

    <?php
      include "connection.php";
if(isset($_POST['submit'])){
 $name=$_POST['patientname'];
 $date=$_POST['date'];
 $mobile=$_POST['mobile'];
 $time=$_POST['time'];
 $email=$_POST['email'];
 $message=$_POST['message'];
 $insert="INSERT INTO `appointment`(`patientname`, `date`, `mobile`, `time`, `email`, `message`) VALUES ('$name','$date','$mobile','$time','$email','$message')";
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

    


    <section id="milestone">
        <div class="container">
            <div class="row text-center justify-content-center gy-4">
                <div class="col-lg-2 col-sm-6">
                    <h1 class="display-4">90000</h1>
                    <p class="mb-0">Happy Patient </p>
                </div>
                <div class="col-lg-2 col-sm-6">
                    <h1 class="display-4">4500</h1>
                    <p class="mb-0">OPD</p>
                </div>
                <div class="col-lg-2 col-sm-6">
                    <h1 class="display-4">4190</h1>
                    <p class="mb-0">SURGERIES</p>
                </div>
                <div class="col-lg-2 col-sm-6">
                    <h1 class="display-4">81</h1>
                    <p class="mb-0">Expert Doctors</p>
                </div>
            </div>
        </div>
    </section>
    
</body>
<?php
    include "footer.php";
?>

</html>