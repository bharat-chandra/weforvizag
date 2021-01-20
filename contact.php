<!DOCTYPE html>
<html>
    <head>
         <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    </head>
    <body>
        <?php
            $con = mysqli_connect("localhost", "root", "", "wfv")
            or die(mysqli_error($con));
            if(!isset($_SESSION)){
              session_start();
            }
        
        
        $name = $_POST['name'];
        $name = mysqli_real_escape_string($con, $name);

        $email = $_POST['email'];
        $email = mysqli_real_escape_string($con, $email);

        $subject = $_POST['subject'];
        $subject = mysqli_real_escape_string($con, $subject);
        
        $message = trim($_POST['message']);

        $regex_email = "/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$/";

        $query = "INSERT INTO contact(name, email,subject, message)VALUES('" . $name . "','" . $email . "','" . $subject . "','" . $message . "')";
        mysqli_query($con, $query) or die(mysqli_error($con));
      ?>
        <script>alert("Message sent successfully !! ")</script>
    </body>
</html> 
