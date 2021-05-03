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
<!-- start main container -->
<div class="container mb-5">
    <h2 class="text-center my-4">Payment Status</h2>
    <form action="" method="post">
        <div class="form-group d-flex">
            <label class="offset-sm-3 col-form-label">Order ID:</label>
            <div>
                <input type="text" class="form-control mx-3">
            </div>
            <div>

                <input type="button" class="btn btn-primary mx-4" value="View">
            </div>
        </div>
    </form>
</div>


<!-- end main container -->

<!-- start contact us -->

  <?php
  include('./contact.php');
  ?>


<!-- end contact us -->


