<!doctype html>
<html lang="en">

<?php
include "header.php";
?>
<body data-bs-spy="scroll" data-bs-target=".navbar" data-bs-offset="70">


    


    <!-- BOTTOM NAV -->
    

    <section id="team">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="intro">
                        <h6>Gallery</h6>
                        <h1>View of the Hospital</h1>
                        <p class="mx-auto">What a multispeciality hospital looks like from the inside and the view of the services provided</p>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center">
                <?php
                    include "connection.php";
                    $select="SELECT * FROM `gallery`";

                    $result=mysqli_query($con,$select);

                    if($result->num_rows>0)
                    {      
                        while($row=$result->fetch_assoc())
                        {                            
                ?>
                <div class="col-lg-4 col-md-8">
                    <div class="team-member">
                        <div class="image">
                            <img src="admin/template/upload/gallery/<?php echo $row['Image'] ?>" height="405px" alt="">
                            <!-- <div class="social-icons">
                                <a href="#"><i class='bx bxl-facebook'></i></a>
                                <a href="#"><i class='bx bxl-twitter'></i></a>
                                <a href="#"><i class='bx bxl-instagram'></i></a>
                                <a href="#"><i class='bx bxl-pinterest'></i></a>
                            </div>
                            <div class="overlay"></div> -->
                        </div>
                        <br>
                        <!-- <h5>Marvin McKinney</h5>
                        <p>Marketing Coordinator</p> -->
                    </div>
                </div>
                <?php               
                        }
                    } 
                ?>
                
        </div>
    </section>
    
    
</body>
<?php
    include "footer.php";
?>
</html>