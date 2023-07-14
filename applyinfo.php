<?php 
if($_SERVER['REQUEST_METHOD']=="POST"){


    if(
        isset($_POST['upost']) &&
        isset($_FILES['ucv'])  &&
        isset($_POST['uemail']) &&
        
        !empty($_POST['upost']) &&
        !empty($_POST['uemail']) &&
        !empty($_FILES['ucv'])
    )
    {
        $received_file=$_FILES['ucv'];
        $filename=$received_file['name'];

        $tmp_file_path=$received_file['tmp_name'];
        $cv="upload_cv/$filename";

        $email=$_POST['uemail'];
        $jobpostno=$_POST['upost'];

        try{
            $conn=new PDO('mysql:host=localhost:3306;dbname=studentrecruit;','root','');
            $conn->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);

            $sqlquerystring="INSERT INTO candidatelist VALUES(NUll,NOW(),'$cv','student@gmail.com','company@gmail.com','$jobpostno','pending')";
             move_uploaded_file($tmp_file_path,$cv);

            $conn->exec($sqlquerystring);
            $sqlquerystring2="INSERT INTO applylist VALUES(NUll,NOW(),'student@gmail.com','$jobpostno')";

            $conn->exec($sqlquerystring2);
            

            ?>
            <script>location.assign('student_homepage.php')</script>
            <?php
        }
        catch (PDOException $ex){
            ?>
            <script>location.assign('applyjob.php')</script>
            <?php
        }
    }
    else{
        ?>
        <script>location.assign('applyjob.php')</script>
        <?php
    }
}
else{

    echo "<script>location.assign(applyjob.php')</script>";
}
?>
