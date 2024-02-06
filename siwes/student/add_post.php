<?php include('includes/header.php'); ?>
<?php include('includes/sidebar.php'); ?>
<?php include('includes/navbar.php'); ?>

<div class="dashboard-content mt-2 px-3 pt-3">
  <h2 class="fs-5 mb-3">DOCUMENT SIWES REPORT</h2>
</div>

  <div class="container">
  <?php 
  if(isset($_GET['msg'])){
    $msg = $_GET['msg'];

        echo ' <div class="alert alert-warning alert-dismissible fade show" role="alert">  <i class="bx bx-error-circle"></i> 
        '.$msg.'
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
      </div> ';
  }
  ?>
    <div class="row">
      <div class="col-12 col-sm-8 col-md-6 m-auto mt-4">
          <div class="card border-0 rounded shadow">
              <h4 class="card-title text-center mt-2">Describe your activitiy</h4>
            <div class="card-body">
              <form action="../function/auth.php" method="POST">
                
              <div class="mb-3">
                    <select class="form-select form-select-sm" name="cat" aria-label=".form-select-sm example">
                    <option selected>Select Study Field</option>
                    <option value="Hardware">Hardware</option>
                    <option value="Software">Software</option>
                    <option value="Networking">Networking</option>
                    <option value="Graphics">Graphics</option>
                    <option value="MSpackages">MSpackages</option>
                    </select>
                </div>

            <textarea class="form-control mb-3" name="activity" rows="6"></textarea>
            <input type="file" class="form-control mb-3" placeholder="Upload pictures">

            <button class="btn btn-primary mt-2 py-2" name="submit">Submit</button>
            <button class="btn btn-warning mt-2 py-2" name="reset">Reset</button>
            </form>
            </div>
          </div>
        </div>
    </div>
</div>

</div>
</div>
<!-- <script src="../assets/js/script.js"></script> -->
<script>
  $(".sidebar ul li").on('click', function () {
    $(".sidebar ul li.active").removeClass('active');
    $(this).addClass('active')
  });

  $('.open-btn').on('click', function () {
    $('.sidebar').addClass('active');
  });


  $('.open-btn').on('click', function () {
    $('.sidebar').removeClass('active');
  });
</script>

<?php include('../includes/footer.php'); ?>