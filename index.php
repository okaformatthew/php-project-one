<?php
include "db.php";
//Insert Data Into Database
if(isset($_POST['adduser'])){
    $username =  $_POST['username'];
    $firstname = $_POST['firstname'];
    $lastname =  $_POST['lastname'];
    $email =     $_POST['email'];
    $phone  =    $_POST['phone'];

    $query = "INSERT INTO users (username, firstname, lastname, email, phone) VALUES 
             ('$username', '$firstname', '$lastname', '$email', '$phone')";
    $result = mysqli_query($connect, $query);
    if($result){
        echo "<p>User Added Successfully</p>";
        return;
    }
}

?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Simple User Form</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<body>
<nav class="navbar navbar-dark bg-dark mb-3">
    <div class="container">
        <a href="index.php" class="navbar-brand">Sample Project</a>
        <ul class="navbar-nav">
            <li class="nav-item">
                <a href="#" class="nav-link">Home</a>
            </li>
        </ul>
    </div>
</nav>
<div class="container">
    <div class="row">
        <div class="col-md-4"></div>
        <div class="col-md-4 bg-dark text-white">
            <form action="index.php" method="post" class="mb-3">
                <div class="form-group">
                    <label for="user">Username</label>
                    <input type="text" class="form-control" id="user" placeholder="Username" name="username">
                </div>
                <div class="form-group">
                    <label for="firstname">FirstName:</label>
                    <input type="text" class="form-control" id="firstname" placeholder="First Name" name="firstname">
                </div>
                <div class="form-group">
                    <label for="lastname">LastName</label>
                    <input type="text" class="form-control" id="lastname" placeholder="Last Name" name="lastname">
                </div>
                <div class="form-group">
                    <label for="email">Email:</label>
                    <input type="email" class="form-control" id="email" placeholder="Enter Email" name="email">
                </div>
                <div class="form-group">
                    <label for="phone">Phone</label>
                    <input type="text" class="form-control" placeholder="Enter Phone" name="phone">
                </div>
                <input type="submit" name="adduser" value="Add User" class="btn btn-outline-primary btn-block">
            </form>
        </div>
        <div class="col-md-4"></div>
    </div>
</div>

<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>
