<?php
if($_SERVER['REQUEST_METHOD']=="POST"){
    if(
        isset($_POST['id']) &&
        isset($_POST['name']) &&
        isset($_POST['review']) && 
        isset($_POST['uemail']) 
        
        && !empty($_POST['id']) &&
        !empty($_POST['name']) &&
        !empty($_POST['review']) &&
        !empty($_POST['uemail'])   
    )
    { 
        $id=$_POST['id'];
        $name=$_POST['name'];
        $email=$_POST['uemail'];
        $review=$_POST['review'];


        try{
            $conn= new PDO('mysql:host=localhost:3306;dbname=studentrecruit','root','');
            $conn->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);

           $sqlquerystring="UPDATE Review
                            SET Company_Name='$name',description='$review', date=NOW()
                            WHERE id=$id";
            $conn->exec($sqlquerystring);

            ?>
              <script>location.assign('myreview.php')</script>
            <?php
        }
        catch(PDOException $ex){
            ?>
                <script>location.assign('editreview.php')</script>
            <?php
        }
    }
    else{
        ?>
            <script>location.assign('editreview.php')</script>
        <?php
    }
}
else{
    ?>
     <script>location.assign('editreview.php')</script>;
     <?php
}
?>