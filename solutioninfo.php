<?php

if($_SERVER['REQUEST_METHOD']=="POST"){


    if(
        isset($_POST['uid']) &&
        isset($_POST['usolution'])  &&

        !empty($_POST['uid']) &&
        !empty($_POST['usolution'])
    )
    {
        $uid=$_POST['uid'];
        $solution=$_POST['usolution'];



        try{
            $conn=new PDO('mysql:host=localhost:3306;dbname=studentrecruit;','root','');
            $conn->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);

            $sqlquerystring="UPDATE complain SET solution='$solution' WHERE id=$uid";
            $conn->exec($sqlquerystring);

            ?>
            <script>location.assign('admindeskpage.php')</script>
            <?php
        }
        catch (PDOException $ex){
            ?>
            <script>location.assign('adminerror.php')</script>
            <?php
        }
    }
    else{
        ?>
        <script>location.assign('adminerror.php')</script>
        <?php
    }
}
else{
  ?>
    <script>location.assign('adminerror.php')</script>
    <?php
}
?>
