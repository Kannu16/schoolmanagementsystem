<!-- Starting header section -->
<?php
include('./mainInclude/header.php')
?>
<!-- ending header section -->

<h1 class="contact text-center mt-3 text-white bg-dark">CONTACT US</h1>
<div class="container-fluid bg-dark pt-5 pb-5" style="width: 100%; height: 100%;">
    <div class="container mb-0 contact-container shadow-lg p-3 bg-dark rounded">
        <div class="row">
            <h6 class="text-center text-white">Feel free to contact us.we are ready to serve you 24/7 hours </h6>
            <div class="col-md-5 my-auto">
                <h4 class="mb-5 ms-5" style="color: #efefef; font-family:sans-serif;"><i class="fas fa-map-marker-alt" style="color: yellow;"></i> 343 XYZ road <br>abcdecountry <br>555000 </h4>
                <h4 class="mb-5 ms-5" style="color: #efefef; font-family:sans-serif;"><i class="fas fa-envelope-open" style="color: yellow;"></i><a href="" style="text-decoration: none; color:#efefef;"> abcd34@gmail.com</a></h4>
                <h4 class="mb-5 ms-5" style="color: #efefef; font-family:sans-serif;"><i class="fas fa-mobile-alt" style="color: yellow;"></i> 12345678</h4>
            </div>
            <div class="col-md-6 text-white">
                <h3 class="text-white">Massage Us</h3>
                <div class="form-group mt-4">
                    <lavel class="contact-name">Name</lavel>
                    <input type="text" class="form-control bg-dark text-white contact-form-control" id="">
                </div>

                <div class="form-group mt-4">
                    <lavel class="contact-name">Email</lavel>
                    <input type="text" class="form-control bg-dark text-white contact-form-control" id="">
                </div>

                <div class="form-group mt-4">
                    <lavel class="contact-name">Massage</lavel>
                    <textarea class="form-control bg-dark text-white  contact-form-control" rows="5"></textarea>
                </div>

                <div class="form-group mt-4 text-center">
                    <button class="btn btn-success" style="width: 50%; font-size: 1.1rem ;"> Submit</button>
                </div>


            </div>
        </div>
    </div>
 </div>

<!-- social media section -->
<?php
include('./socialmedia.php');
?>
<!-- end social media section -->

<!-- start footer section --->
<?php
include('./mainInclude/footer.php');
?>
<!-- End footer section -->