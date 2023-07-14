<?php
 if($_SERVER['REQUEST_METHOD']=="GET")
   {
    if(
            isset($_GET['candidateno'])
        && !empty($_GET['candidateno'])
    ){
        
        $candidateno=$_GET['candidateno'];
        $status="Reject";
        
        try{
            $conn=new PDO('mysql:host=localhost:3306;dbname=studentrecruit;','root','');
            $conn->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
            
          
            $sqlquerystring="UPDATE candidatelist SET status ='$status' WHERE candidateno='$candidateno'";
            
            $conn->exec($sqlquerystring);
          
            
            ?>
                <script>location.assign('candidate_list_view.php')</script>
            <?php
        }
        catch (PDOException $ex){
            ?>
                <script>location.assign('candidate_list_view.php')</script>
            <?php
        }
        
    }
    else{
         ?>
            <script>location.assign('candidate_list_view.php')</script>
        <?php
    }
 }
else{
         ?>
            <script>location.assign('candidate_list_view.php')</script>
        <?php
    }


?>
