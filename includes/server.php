
<?php
session_start();

// initializing variables
$username = "";

$errors = array(); 

// connect to the database
$db = mysqli_connect('localhost', 'root', '', 'learnxtra');


// REGISTER USER
if (isset($_POST['reg_user'])) {
  // receive all input values from the form
  $username = mysqli_real_escape_string($db, $_POST['username']);
  $email = mysqli_real_escape_string($db, $_POST['email']);
  $password_1 = mysqli_real_escape_string($db, $_POST['password_1']);
  $password_2 = mysqli_real_escape_string($db, $_POST['password_2']);

  $password = md5($password_1);//encrypt the password before saving in the database

    $query = "INSERT INTO `student`(  `username`,`email`,`password`)VALUES ('$username','$email','$password')";
    mysqli_query($db, $query);
    $_SESSION['user'] = $username;
    $_SESSION['success'] = "You are now logged in";
    echo 'Congratulations, you are logged in!';
    header('location: ../login/register.php');
}
// LOGIN USER
if (isset($_POST['login_user'])) {
  $username = mysqli_real_escape_string($db, $_POST['username']);
  $password = mysqli_real_escape_string($db, $_POST['password']);

  if (empty($username)) {
    array_push($errors, "Username is required");
  }
  if (empty($password)) {
    array_push($errors, "Password is required");
  }

  if (count($errors) == 0) {
    $password = md5($password);
    $query = "SELECT * FROM student WHERE username='$username' AND password='$password'";
    $results = mysqli_query($db, $query);
    if (mysqli_num_rows($results) == 1) {
      $_SESSION['user'] = $username;
      $_SESSION['success'] = "You are now logged in";
      header('location: user/index.php');
    }else {
      array_push($errors, "Wrong username/password combination");
    }
  }
}