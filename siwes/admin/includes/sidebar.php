<body>

  <div class="main-container d-flex">
    <div class="sidebar" id="side_nav">
      <div class="header-box px-2 pt-3 pb-4 d-flex justify-content-between">
        <h1 class="fs-4"><span class="bg-white text-dark rounded shadow px-2">SIWES</span><span
            class="text-white">Portal
            <?php echo @$_SESSION['surname']; ?>
          </span></h1>
        <button class="btn d-md-none d-block close-btn px-1 py-0 text-white"><i class='bx bx-menu'></i></button>
      </div>
      <ul class="list-unstyled px-2">
        <li class="active"><a href="./index.php" class="text-decoration-none px-3 py-2 d-block"><i class='bx bxs-home'></i>
            Dashboard</a></li>
        <li class=""><a href="./add_cat.php" class="text-decoration-none px-3 py-2 d-block"><i class='bx bx-message-alt-add'></i>
            Add Category</a></li>
        <li class=""><a href="./performance.php" class="text-decoration-none px-3 py-2 d-block"><i class='bx bx-bar-chart-alt'></i>
            Performance</a></li>
        <li class=""><a href="./add_student.php" class="text-decoration-none px-3 py-2 d-block"><i class='bx bx-message-alt-add'></i>
            Add Student</a></li>
        <li class=""><a href="#" class="text-decoration-none px-3 py-2 d-block"><i class='bx bx-help-circle'></i>
            Help</a></li>
        <li class=""><a href="#" class="text-decoration-none px-3 py-2 d-block"><i class='bx bxs-bell-ring'></i>
            Notification</a></li>
      </ul>
      <hr class="h-color mx-2">

      <ul class="list-unstyled px-2">
        <li class=""><a href="#" class="text-decoration-none px-3 py-2 d-block"><i class='bx bx-cog'></i> Settings</a>
        </li>
        <li class=""><a href="../logout.php" class="text-decoration-none px-3 py-2 d-block"><i class='bx bx-log-out'></i> Logout</a>
        </li>
      </ul>


    </div>
