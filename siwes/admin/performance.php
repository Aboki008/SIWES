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
  <h2 class="fs-5">SIWES PERFORMANCE CHECK <?php echo @$_SESSION['username']; ?></h2>
</div>


<div class="container mt-5">
  <?php 
  if(isset($_GET['msg'])){
    $msg = $_GET['msg'];

        echo ' <div class="alert alert-warning alert-dismissible fade show" role="alert">
        '.$msg.'
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
      </div> ';
  }
  ?>
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
          <td><a href="view.php?matno=<?php echo $row['matno'];?>" class="btn btn-dark">View <i class='bx bxs-right-arrow'></i></td>
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