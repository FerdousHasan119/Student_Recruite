<?php
if($_SERVER['REQUEST_METHOD']=="POST"){
    if(
        isset($_POST['name']) &&
        isset($_POST['address']) &&
        isset($_POST['phone']) && 
        isset($_POST['email']) 
        
        && !empty($_POST['name']) &&
        !empty($_POST['address']) &&
        !empty($_POST['phone']) &&
        !empty($_POST['email'])   
    )
    { 
        $name=$_POST['name'];
        $email=$_POST['email'];
        $address=$_POST['address'];
        $phone=$_POST['phone'];


        try{
            $conn= new PDO('mysql:host=localhost:3306;dbname=studentrecruit','root','');
            $conn->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);

           $sqlquerystring="UPDATE companyfaculty
                            SET name='$name', address='$address', phone='$phone'
                            WHERE email='$email'";
            $conn->exec($sqlquerystring);

            ?>
              <script>location.assign('companyprofile.php')</script>
            <?php
        }
        catch(PDOException $ex){
            ?>
                <script>location.assign('updatecompanyprofile.php')</script>
            <?php
        }
    }
    else{
        ?>
            <script>location.assign('updatecompanyprofile.php')</script>
        <?php
    }
}
else{
    ?>
     <script>location.assign('updatecompanyprofile.php')</script>;
     <?php
}
?>