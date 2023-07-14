<?php
if($_SERVER['REQUEST_METHOD']=="POST"){
    if(
        isset($_POST['complain']) &&
        isset($_POST['semail']) &&
        
        !empty($_POST['complain']) &&
        !empty($_POST['semail'])   
    )
    {
        $complain=$_POST['complain'];
        $email=$_POST['semail'];

        try{
            $conn= new PDO('mysql:host=localhost:3306;dbname=studentrecruit','root','');
            $conn->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);

            $sqlquerystring="INSERT INTO complain(id,description,date,Studentemail) VALUES(NULL,'$complain',NOW(),'$email')";

            $conn->exec($sqlquerystring);

            ?>
              <script>location.assign('student_homepage.php')</script>
            <?php
        }
        catch(PDOException $ex){
            ?>
                <script>location.assign('studentcomplain.php')</script>
            <?php
        }
    }
    else{
        ?>
            <script>location.assign('studentcomplain.php')</script>
        <?php
    }
}
else{
    ?>
     <script>location.assign('studentcomplain.php')</script>;
     <?php
}
?>