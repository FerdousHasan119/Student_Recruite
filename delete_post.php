<?php
 if($_SERVER['REQUEST_METHOD']=="GET")
   {
    if(
            isset($_GET['jobpostno'])
        && !empty($_GET['jobpostno'])
    ){
        
        $jobpostno=$_GET['jobpostno'];
        
        try{
            $conn=new PDO('mysql:host=localhost:3306;dbname=studentrecruit;','root','');
            $conn->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
            
          
            $sqlquerystring="DELETE FROM jobpost WHERE jobpostno='$jobpostno'";
            
            $conn->exec($sqlquerystring);
          
            
            ?>
                <script>location.assign('mypost.php')</script>
            <?php
        }
        catch (PDOException $ex){
            ?>
                <script>location.assign('mypost.php')</script>
            <?php
        }
        
    }
    else{
         ?>
            <script>location.assign('mypost.php')</script>
        <?php
    }
 }
else{
         ?>
            <script>location.assign('mypost.php')</script>
        <?php
    }


?>
