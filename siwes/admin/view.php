<?php include('includes/header.php'); ?>
<?php include('includes/sidebar.php'); ?>
<?php include('includes/navbar.php'); ?>
<?php 
 
 $matno=$_GET['matno'];

        $query_sql = "SELECT COUNT(cat) AS cat FROM it_records where user = '$matno' GROUP BY created_at";
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
  <h2 class="fs-6 text-center mt-2">PERFORMANCE BREAKDOWN FOR STUDENT <?php echo "<label class='text-bold fs-3 text-primary' >".$matno."</label>"; ?></h2>
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
              <h3 class="display-5"><?php echo $task;?></h3>
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

<div class="container mt-5">

<?php 
    if(!$con){
        echo "Disconnected: ";
    }else{
        $sql = "SELECT COUNT(cat) as cat1, cat FROM it_records where user = '$matno'  GROUP BY created_at ORDER BY 2 DESC";
        $result = mysqli_query($con, $sql);
        
        $sql2 = "SELECT cat FROM it_records where user = '123' GROUP BY cat";
        $result2 = mysqli_query($con, $sql2);

        while($row = mysqli_fetch_array($result2)){
              //$cat = $row['cat'];
              //echo $row['cat'] .', ';
           
        }
        
        while($row = mysqli_fetch_array($result)){
          $cat1 = $row['cat1'];
          $cat = $row['cat'];
          //echo $row['cat'] .', ';
          
          //echo $cat.', ';
          //echo $cat1.', ';
          ?>
          <label for=""><?php echo $cat;?></label>
            <div class="progress mb-2" style="height: 50px;">
            <div class="progress-bar" role="progressbar" style="width: <?php echo $cat1."%"?>" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"><?php echo $cat1."%";?></div>
            </div>
          <?php 
       
    }
    }
?>
</div>


</div>
</div>
<!-- <script src="../assets/js/script.js"></script> -->
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<script  src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/4.3.3/chart.min.js"></script>

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

<script>

  const ctx = document.getElementById('myChart');
  new Chart(ctx, {
    type: 'bar',
    data: {
      labels: [<?php echo json_encode($cat);?>],
      datasets: [{
        backgroundColor: [
            "#198754",
            "#dc3545",
            "#fd7e14",
            "#6f42c1",
            "#0d6efd",
            "#198754",
        ],
        label: 'Performance evaluation',
        data: <?php echo json_encode($cat1);?>,
        borderWidth: 1
      }]
    },
    options: {
      scales: {
        y: {
          beginAtZero: true
        }
      }
    }
  });

  
</script>

<?php include('../includes/footer.php'); ?>