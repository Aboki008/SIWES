<?php include('includes/header.php'); ?>
   <Section>
        <div class="container mt-5 pt-5">
            <div class="row">
                <div class="col-12 col-sm-8 col-md-6 m-auto">
                    <div class="card  border-0 shadow rounded">
                        <div class="card-body">
                        <center>
                            <svg xmlns="http://www.w3.org/2000/svg" width="100" height="100" fill="currentColor" class="bi bi-person-circle mx-auto my-3" viewBox="0 0 16 16">
                            <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0z"/>
                            <path fill-rule="evenodd" d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8zm8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1z"/>
                            </svg>
                        </center>
                            <form action="function/auth.php" method="POST">                              
                                <input type="text" id="" name="matno" class="form-control my-4 py-2" placeholder="Username">
                                <input type="password" id="" name="surname" class="form-control my-4 py-2" placeholder="Password">
                                <div class="text-center mt-3">
                                    <button class="btn btn-primary mt-1 mb-3" name="login">Login</button>
                                    <p><a href="staff_login.php" class="mt-2 text-decoration-none fs-5" >STAFF LOGIN</a></p>
                                </div>
                            </form>

                        </div>
                    </div>
                </div>
            </div>
        </div>
   </Section>

   <?php include('includes/footer.php'); ?>