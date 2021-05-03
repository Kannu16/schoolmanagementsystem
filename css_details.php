<!-- Starting header section -->
<?php
include('./mainInclude/header.php')
?>
<!-- ending header section -->
<!-- start course container -->

    <div class="row">
        <img src="./image/school.jpg" alt="Courses" style="height: 500px;">
        <h5 class="education-quote">" Education is not the<br>learning of facts<br>but the training 
        of<br>the mind to think...... "</h5>
    </div>

<!-- end course container -->
<!-- start main content -->
<div class="container-fluid mt-5">
    <div class="row">
        <div class="col-md-4">
            <img src="image/css.jpg" class="card-img-top">
        </div>
        <div class="col-md-8">
            <div class="card-body">
                <h5 class="card-tittle">Course Name: Master in css</h5>
                <p class="card-text">Lorem ipsum dolor si
                    lorem ipsykm text hum t amet consectetur adipisicing elit. Aut, cumque?</p>
                <p class="card-text">Duration: 10 Days</p>
                <form action="" method="post">
                    <p class="card-text d-inline">Price: <small><del>&#8377 2000</del>
                        </small><span style="font-weight: bold;">&#8377 1500</span></p><br>
                    <button type="submit" class="btn btn-primary text-white font-weight-bolder mt-3 " name="buy">
                        Buy Now</button>
                </form>
            </div>
        </div>
    </div>
</div>

<div class="container-fluid">
    <div class="row">

        <table class="table table-bordered table-hover">
            <thead>
                <tr>
                    <th scope="col">Lesson No.</th>
                    <th scope="col">Lesson Name</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <th scope="row">1</th>
                    <td>Introduction</td>
                </tr>
            </tbody>
        </table>
    </div>
</div>
<!-- End main content -->
<!-- social media section -->
<?php
include('./socialmedia.php');

?>
<!-- end social media section -->


<!-- end course container -->
<!-- start footer section --->
<?php
include('./mainInclude/footer.php');
?>
<!-- End footer section -->