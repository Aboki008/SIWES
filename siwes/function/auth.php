<?php
session_start();
include ('../db_con/db_con.php');

if(isset($_POST['submit'])){
    //$matno = $_SESSION['matno'];
    $activity = $_POST['activity'];
    $cat = $_POST['cat'];
    $user = $_SESSION["matno"];
    //$diagram = $_POST['disgram'];

    $query_insert = "INSERT INTO `it_records` (`id`, `user`, `cat`, `activity`, `image`, `created_at`) VALUES (NULL, '$user' , '$cat', '$activity', 'pic', CURRENT_TIMESTAMP)";

    $result = mysqli_query($con, $query_insert);

    if($result){
        header("Location: ../student/add_post.php?msg=New record added");
    }
    else{
        echo "failed to add: " . mysqli_error($con);
    }

}

if(isset($_POST['add_cat'])){
    $study = $_POST['study'];
    $department = $_POST['department'];

    $query_insert = "INSERT INTO `cat` (`id`, `study`, `department`) VALUES (NULL, '$study', '$department');";

    $result = mysqli_query($con, $query_insert);

    if($result){
        header("Location: ../admin/add_cat.php?msg=New record added");
    }
    else{
        echo "failed to add: " . mysqli_error($con);
    }

}

if(isset($_POST['add_student'])){
    $surname = $_POST['surname'];
    $firstname = $_POST['firstname'];
    $matno = $_POST['matno'];
    $department = $_POST['department'];

    $query_insert = "INSERT INTO `student` (`id`, `matno`, `firstname`, `surname`, `department`) VALUES (NULL, '$matno', '$firstname', '$surname', '$department')";

    $result = mysqli_query($con, $query_insert);

    if($result){
        header("Location: ../admin/add_student.php?msg=New record added");
    }
    else{
        echo "failed to add: " . mysqli_error($con);
    }

}

    if(isset($_POST['login'])){
        $matno = $_POST['matno'];
        $surname = $_POST['surname'];

        $query = mysqli_query($con, "SELECT * FROM student WHERE matno = '$matno' AND surname = '$surname' ");
        $row = mysqli_fetch_array($query);

        if(is_array($row)){
            $_SESSION["matno"] = $row['matno'];
            $_SESSION["surname"] = $row['surname'];
        }
        else{
            echo 'Invalid Details';
        }
    }
    if(isset($_SESSION["matno"])){
        header("Location:../student/index.php");
    }

    if(isset($_POST['staff_login'])){
        $username = $_POST['username'];
        $password = $_POST['password'];

        $staff_query = mysqli_query($con, "SELECT * FROM users WHERE username = '$username' AND password = '$password' ") or die(mysqli_error($con));
        $row = mysqli_fetch_array($staff_query);
            
        //$_SESSION = true;

        if(is_array($row)){
            $_SESSION["username"] = $row['username'];
            $_SESSION["password"] = $row['password'];
        }
        else{
            echo 'Invalid Details';
        }
    }
    if(isset($_SESSION["username"])){
        //echo $_SESSION["username"];
        header("Location:../admin/index.php");
    }


?>