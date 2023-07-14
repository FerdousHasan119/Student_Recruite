<?php

if($_SERVER['REQUEST_METHOD']=="POST"){


    if(
        isset($_POST['uemail']) &&
        isset($_POST['description'])  &&

        !empty($_POST['uemail']) &&
        !empty($_POST['description'])
    )
    {
        $email=$_POST['uemail'];
        $description=$_POST['description'];
        $status="Selected";


        try{
            $conn=new PDO('mysql:host=localhost:3306;dbname=studentrecruit;','root','');
            $conn->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);

            $sqlquerystring="INSERT INTO notice VALUES(NUll,'$description',NOW(),'student@gmail.com','company@gmail.com')";


            

            $conn->exec($sqlquerystring);

            ?>
            <script>location.assign('company_homepage.php')</script>
            <?php
        }
        catch (PDOException $ex){
            ?>
            <script>location.assign('givenotice.php')</script>
            <?php
        }
    }
    else{
        ?>
        <script>location.assign('givenotice.php')</script>
        <?php
    }
}
else{

    echo "<script>location.assign('givenotice.php')</script>";
}
?>
