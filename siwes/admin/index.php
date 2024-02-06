<?php include('includes/header.php'); ?>
<?php include('includes/sidebar.php'); ?>
<?php include('includes/navbar.php'); ?>

<?php 
   
        $query_sql = "SELECT COUNT(matno) AS matno FROM student";
        $query_result = mysqli_query($con, $query_sql);

        
        while($row = mysqli_fetch_array($query_result)){
          $matno = $row['matno'];
          //echo $row['matno'] .', ';          
       
    }
?>

<div class="dashboard-content px-3 pt-3">
  <h2 class="fs-5">SIWES ADMIN DASHBOARD <?php echo @$_SESSION['username']; ?></h2>
</div>


<div class="container mt-5">
  <div class="row">
    <div class="col-md-4">
      <div class="card text-center">
        <div class="card-header bg-warning text-white">
          <div class="row align-items-center">
            <div class="col">
              <i class='bx bx-list-ul display-6'></i>
            </div>
            <div class="col">
              <h3 class="display-5"><?php echo $matno;?></h3>
              <h5>Students</h5>
            </div>
          </div>
        </div>

        <div class="card-footer">
          <a href="#" class="text-decoration-none">View details <i class='bx bxs-chevrons-right'></i></a>
        </div>
      </div>      
    </div>
    
    <div class="col-md-4">
      <div class="card text-center">
        <div class="card-header bg-info text-white">
          <div class="row align-items-center">
            <div class="col">
              <i class='bx bx-list-ul display-6'></i>
            </div>
            <div class="col">
              <h3 class="display-5">1</h3>
              <h5>Department</h5>
            </div>
          </div>
        </div>

        <div class="card-footer">
          <a href="#" class="text-decoration-none">View details <i class='bx bxs-chevrons-right'></i></a>
        </div>
      </div>      
    </div>

    
    <div class="col-md-4">
      <div class="card text-center">
        <div class="card-header bg-success text-white">
          <div class="row align-items-center">
            <div class="col">
              <i class='bx bx-list-ul display-6'></i>
            </div>
            <div class="col">
              <h3 class="display-5">100%</h3>
              <h5>Total</h5>
            </div>
          </div>
        </div>

        <div class="card-footer">
          <a href="#" class="text-decoration-none">View details <i class='bx bxs-chevrons-right'></i></a>
        </div>
      </div>      
    </div>
  </div>
</div>

<div class="container mt-2">
  <?php 
  if(isset($_GET['msg'])){
    $msg = $_GET['msg'];

        echo ' <div class="alert alert-warning alert-dismissible fade show" role="alert">
        '.$msg.'
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
      </div> ';
  }
  ?>
  <a href="add_student.php" class="btn btn-dark text-white mb-3 mt-5">Add students</a>
  <table class="table table-hover">
  <thead class=" table-dark">
    <tr>
      <th scope="col">SN</th>
      <th scope="col">Matric No</th>
      <th scope="col">Department</th>
      <th scope="col">Place of IT</th>
      <th scope="col" class="align-items-end">Action</th>
    </tr>
  </thead>
  <tbody>

  <?php 
  $i=0;
  $sql = "SELECT * FROM student";
  $result = mysqli_query($con, $sql);
  while($row = mysqli_fetch_assoc($result)){
    $i++;
    ?>

        <tr>
          <th scope="row"><?php echo $i;?></th>
          <td><?php echo $row['matno'];?></td>
          <td><?php echo $row['department'];?></td>
          <td><?php echo $row['place_it'];?></td>
          <td><a href="edit.php?id=<?php echo $row['id'];?>" class="link-dark"><i class='bx bxs-edit fs-4 me-2'></i></a>
          <a href="delete.php?id=<?php echo $row['id'];?>" class="link-dark"><i class='bx bxs-trash-alt fs-4' ></i></a></td>
        </tr>
    <?php

  }
  ?>
  </tbody>
</table>
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