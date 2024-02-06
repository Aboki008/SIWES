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
      <div class="col-md-8 m-auto mt-4 border-0 rounded shadow">
          
              <h4 class="text-center mt-2 fs-5 text-bold">Create study fields</h4>
            
              <form action="../function/auth.php" method="POST">

                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Surname</label>
                    <input type="text" class="form-control" name="surname" id="exampleFormControlInput1" placeholder="e.g software, hardware etc">
                </div>
                
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Firstname</label>
                    <input type="text" class="form-control" name="firstname" id="exampleFormControlInput1" placeholder="e.g software, hardware etc">
                </div>
                
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Matric No.</label>
                    <input type="text" class="form-control" name="matno" id="exampleFormControlInput1" placeholder="e.g software, hardware etc">
                </div>
                                                               

                <div class="mb-3">
                    <select class="form-select form-select-sm" name="department" aria-label=".form-select-sm example">
                    <option selected>Select Department</option>
                    <option value="CS">Computer sicence</option>
                    <option value="AH">Animal Health</option>
                    <option value="AGT">Agric Technology</option>
                    </select>
                </div>


                <button class="btn btn-primary mt-2 py-2 mb-3" name="add_student">Submit</button>
                <button class="btn btn-warning mt-2 py-2 mb-3" name="reset">Reset</button>
            </form>
            
          
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