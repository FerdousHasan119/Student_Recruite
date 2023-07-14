<?php
if($_SERVER['REQUEST_METHOD']=="POST"){
    if(
        isset($_POST['name']) &&
        isset($_POST['institution']) &&
        isset($_POST['address']) &&
        isset($_POST['year']) &&
        isset($_POST['phone']) && 
        isset($_POST['email']) 
        
        && !empty($_POST['name']) &&
        !empty($_POST['institution']) &&
        !empty($_POST['address']) &&
        !empty($_POST['year']) &&
        !empty($_POST['phone']) &&
        !empty($_POST['email'])   
    )
    { 
        $name=$_POST['name'];
        $email=$_POST['email'];
        $institution=$_POST['institution'];
        $address=$_POST['address'];
        $year=$_POST['year'];
        $phone=$_POST['phone'];


        try{
            $conn= new PDO('mysql:host=localhost:3306;dbname=studentrecruit','root','');
            $conn->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);

           $sqlquerystring="UPDATE student
                            SET name='$name', institution='$institution', address='$address', year='$year', phone='$phone'
                            WHERE email='$email'";
            $conn->exec($sqlquerystring);

            ?>
              <script>location.assign('studentprofile.php')</script>
            <?php
        }
        catch(PDOException $ex){
            ?>
                <script>location.assign('updatestudentprofile.php')</script>
            <?php
        }
    }
    else{
        ?>
            <script>location.assign('updatestudentprofile.php')</script>
        <?php
    }
}
else{
    ?>
     <script>location.assign('updatestudentprofile.php')</script>;
     <?php
}
?>