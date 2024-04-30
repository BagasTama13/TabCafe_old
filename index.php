<?php
include "input/header.php"
?>


<!-- Navbar End -->
<!-- Section: Design Block -->
<section class="text-center">
  <!-- Background image -->
  <div class="p-5 " style="
        background-color:gray;
        height: 200px;
        "></div>
  <!-- Background image -->

  <div class="card mx-4 mx-md-5 shadow-5-strong" style="
        margin-top: -100px;
        backdrop-filter: blur(30px);
        
        ">



    <div class="card-body py-4 px-md-4" style="
        height : 80vh;
        background-image: url('bg1.jpg');
        background-size : cover;
        background-position: top;
        ">
      <div class="row d-flex justify-content-center">
        <div class="col-lg-8">
          <h2 class="fw-bold mb-5 text-white">Login Admin</h2>
          <form action="proses.php" method="POST">
            <!-- Email input -->
            <div class="form-outline mb-4">
            
              <input type="username" name="username" class="form-control text-center" placeholder="username" />
              </div>

            <!-- Password input -->
            <div class="form-outline mb-4">
              <?php $massage?>
              <input type="password" name="password" class="form-control text-center" placeholder="password" />

            </div>

            <!-- Submit button -->
            <button type="submit" name="login" class="btn btn-primary btn-block mb-4">
              Login
            </button>
          </form>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- Section: Design Block -->