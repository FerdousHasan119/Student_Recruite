
<?php
if($_SERVER['REQUEST_METHOD']=="POST"){
    if(
        isset($_POST['name']) &&
        isset($_POST['review']) && isset($_POST['uemail'])
        
       
        &&!empty($_POST['name'])
         &&!empty($_POST['review']) &&
        !empty($_POST['uemail'])   
    )
    { 
        $name=$_POST['name'];
        $email=$_POST['uemail'];
        $review=$_POST['review'];


        try{
            $conn= new PDO('mysql:host=localhost:3306;dbname=studentrecruit','root','');
            $conn->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);

           $sql="INSERT INTO review VALUES(NULL,'$name','$review',NOW(),'$email')";
            $conn->exec($sql);

            ?>
              <script>location.assign('student_homepage.php')</script>
            <?php
        }
        catch(PDOException $ex){
            ?>
                <script>location.assign('Give-review.php')</script>
            <?php
        }
    }
    else{
        ?>
            <script>location.assign('Give-review.php')</script>
        <?php
    }
}
else{
    ?>
     <script>location.assign('Give-review.php')</script>;
     <?php
}
?>
