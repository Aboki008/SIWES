<?php include('includes/header.php'); ?>
<?php include('includes/sidebar.php'); ?>
<?php include('includes/navbar.php'); ?>
<?php 

$user = $_SESSION["matno"];
          $query_sql1 = "SELECT COUNT(cat) AS cat FROM it_records where user = '$user'";
          $query_result1 = mysqli_query($con, $query_sql1);

          
          while($row = mysqli_fetch_array($query_result1)){
            $total_task = $row['cat'];
            //echo $row['cat'] .', ';      
          
        }   
        $query_sql = "SELECT COUNT(cat) AS cat FROM it_records where user = '$user' GROUP BY created_at";
        $query_result = mysqli_query($con, $query_sql);

        
        while($row = mysqli_fetch_array($query_result)){
          $task = $row['cat'];
          $days = 80 - $task;
          $grade = ($task * 100) / 80;
          $total_grade = number_format($grade, 2);
          //echo $row['cat'] .', ';          
       
    }
?>
<div class="dashboard-content px-3 pt-3">
  <h2 class="fs-5">SIWES REPORT ANALYSIS</h2>
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
              <h3 class="display-5"><?php echo $total_task;?></h3>
              <h5>Tasks</h5>
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
              <h3 class="display-5"><?php echo $days;?></h3>
              <h5>Days to go</h5>
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
              <h3 class="display-5"><?php echo $total_grade."%";?></h3>
              <h5>Grade</h5>
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
  <a href="add_post.php" class="btn btn-dark text-white mb-3 mt-5">Add activity</a>
  <table class="table table-hover">
  <thead class=" table-dark">
    <tr>
      <th scope="col">SN</th>
      <th scope="col">Activity</th>
      <th scope="col" class="align-items-end">Action</th>
    </tr>
  </thead>
  <tbody>

  <?php 
  $i=0;
  $sql = "SELECT * FROM it_records WHERE user = '$user' LIMIT 5";
  $result = mysqli_query($con, $sql);
  while($row = mysqli_fetch_assoc($result)){
    $i++;
    ?>

        <tr>
          <th scope="row"><?php echo $i;?></th>
          <td><?php echo $row['activity'];?></td>
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