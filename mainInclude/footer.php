<!-- Footer -->
<div class="my-footer shadow-lg p-3 mb-5 bg-body rounded">
<footer class="page-footer font-small blue pt-4">

  <!-- Footer Links -->
  <div class="container-fluid text-center text-md-left">

    <!-- Grid row -->
    <div class="row">

      <!-- Grid column -->
      <div class="col-md-6 mt-md-0 mt-3">

        <!-- Content -->
        <h5 class="text-uppercase text-white">About us</h5>
        <p class="text-white">"Lorem ipsum dolor sit amet  consectetur, adipisicing elit
        . Praesentium, cupiditate ducimus ex voluptatum n
        on modi quo aut sit dignissimos nostrum e
        t delectus necessitatibus beatae illum 
        blanditiis."</p>

      </div>
      <!-- Grid column -->

      <hr class="clearfix w-100 d-md-none pb-3">

    
      
      <!-- Grid column -->

      <!-- Grid column -->
      <div class="col-md-4 mb-md-0 mb-3">

        <!-- Links -->

        <ul class="list-unstyled">
          <li>
            <a href="#" class="text-white">Terms and condition</a>
          </li>
          <li>
            <a href="#" class="text-white" >Feedback</a>
          </li>
          <li>
            <a href="#" class="text-white" >Privacy policy</a>
          </li>
          <li>
            <a href="contact.php" class="text-white">Contact US</a>
          </li>
          <li>
            <a href="image/1st.jpg" download="image/1st.jpg" class="text-white">Download our prospectus</a>
          </li>
        </ul>

      </div>
      <!-- Grid column -->

    </div>
    <!-- Grid row -->

  </div>
  <!-- Footer Links -->

  <!-- Copyright -->
  <div class="footer footer-copyright text-center bg-dark" style="color: white;">©2021 Copyright all right reserved by :
    <a>KSchool/ <a href="#" data-bs-toggle="modal"
             data-bs-target="#stuAdminModalCenter">admin_login</a></a>
  </div>
  <!-- Copyright -->

</footer>
<!-- Footer -->
  <!-- end footer section -->
  </div>
  <!-- modal section -->

 <!-- Button trigger modal -->

<!-- Modal -->
<!-- student registration form -->
<div class="modal fade" id="stuRegModalCenter" tabindex="-1" aria-labelledby="stuRegModalCenterLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="stuRegModalCenterLabel">Student Registration</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
      <form class="form-control" id="stuRegForm">
      <div class="mb-3">
      <i class="fas fa-user"></i> <label for="stuRegName" class="form-label font-weight-bold">Name</label>
    <input type="text" class="form-control" name="stuRegName" id="stuRegName">  
      </div>
  <div class="mb-3">
   <i class="fas fa-envelope"></i> <label for="stuRegEmail1" class="form-label font-weight-bold">Email address</label>
    <input type="email" class="form-control" id="stuRegEmail" name="stuRegEmail" aria-describedby="emailHelp">
    <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
  </div>
  <div class="mb-3">
   <i class="fas fa-key"></i><label for="exampleInputPassword1" class="form-label font-weight-bold">Choose Password</label>
    <input type="password" class="form-control" name="stuRegPass" id="stuRegPass">
  </div>
</form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary"  id="stuRegBtn" onclick="addRegStu()">Sign Up</button>
      </div>
    </div>
  </div>
</div>
<!-- student registration form end -->
<!-- student login form -->

<div class="modal fade" id="stuLoginModalCenter" tabindex="-1" aria-labelledby="stuLoginModalCenterLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="stuLoginModalCenterLabel">Student Login</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
      <form class="form-control">
  <div class="mb-3">
   <i class="fas fa-envelope"></i> <label for="stuLogEmail" class="form-label font-weight-bold">Email address</label>
    <input type="email" class="form-control" name="stuLogEmail" id="stuLogEmail" aria-describedby="emailHelp">
  </div>
  <div class="mb-3">
   <i class="fas fa-key"></i><label for="stuLogPass" class="form-label font-weight-bold"> Password</label>
    <input type="password" class="form-control" name="stuLogPass" id="stuLogPass">
  </div>
</form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">cancel</button>
        <button type="button" class="btn btn-primary" id="stuLoginBtn">Login</button>
      </div>
    </div>
  </div>
</div>

<!-- end student login form -->

<!-- student admin login form -->

<div class="modal fade" id="stuAdminModalCenter" tabindex="-1" aria-labelledby="stuAdminModalCenterLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="stuAdminModalCenterLabel">Admin Login</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
      <form class="form-control">
  <div class="mb-3">
   <i class="fas fa-envelope"></i> <label for="stuAdminEmail" class="form-label font-weight-bold">Email address</label>
    <input type="email" class="form-control" name="stuAdminEmail" id="stuAdminEmail" aria-describedby="emailHelp">
  </div>
  <div class="mb-3">
   <i class="fas fa-key"></i><label for="stuAdminPass" class="form-label font-weight-bold"> Password</label>
    <input type="password" class="form-control" name="stuAdminPass" id="stuAdminPass">
  </div>
</form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">cancel</button>
        <button type="button" class="btn btn-primary" id="stuLoginBtn">Login</button>
      </div>
    </div>
  </div>
</div>

<!-- end admin login form -->
  <!-- end modal section -->
 



   <script src="js/ajaxrequest.js"></script>
  <script src="js/all.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/popper.js"></script>
  <script src="js/jquery.min.js"></script>
  </body>
  </html>