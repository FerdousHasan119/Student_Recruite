<?php
include('connection.php');
$email="student@gmail.com";
$sql="SELECT *
             FROM notice
             Where '$email' LIKE Studentemail";
$returnvalue=$conn->query($sql);
$result=$returnvalue->fetchALL(PDO::FETCH_NUM);
?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title>Job Search</title>
  </head>
  <body>
  <h3>Review Details:</h3>
<?php 
    for($i=0;$i<count($result);$i++){
     ?>
    
    <h5>Id: <?php echo $result[$i][0] ?></h5>
    <h5> Description: <?php echo $result[$i][1] ?></h5>
    <h5> Date: <?php echo $result[$i][2] ?></h5>
    <h5> Company Email: <?php echo $result[$i][4] ?><h5>

<?php 
    }
?>
    
    <a href="student_homepage.php">Back To Home Page</a>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>