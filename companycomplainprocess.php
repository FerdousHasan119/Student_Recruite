<?php
if($_SERVER['REQUEST_METHOD']=="POST"){
    if(
        isset($_POST['complain']) &&
        isset($_POST['cemail']) &&
        
        !empty($_POST['complain']) &&
        !empty($_POST['cemail'])   
    )
    {
        $complain=$_POST['complain'];
        $email=$_POST['cemail'];

        try{
            $conn= new PDO('mysql:host=localhost:3306;dbname=studentrecruit','root','');
            $conn->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);

            $sqlquerystring="INSERT INTO complain(id,description,date,Companyfacultyemail) VALUES(NULL,'$complain',NOW(),'$email')";

            $conn->exec($sqlquerystring);

            ?>
              <script>location.assign('company_homepage.php')</script>
            <?php
        }
        catch(PDOException $ex){
            ?>
                <script>location.assign('companycomplain.php')</script>
            <?php
        }
    }
    else{
        ?>
            <script>location.assign('companycomplain.php')</script>
        <?php
    }
}
else{
    ?>
     <script>location.assign('companycomplain.php')</script>;
     <?php
}
?>