<?php
 if($_SERVER['REQUEST_METHOD']=="GET")
   {
    if(
            isset($_GET['applyno'])
        && !empty($_GET['applyno'])
    ){
        
        $applyno=$_GET['applyno'];
        
        try{
            $conn=new PDO('mysql:host=localhost:3306;dbname=studentrecruit;','root','');
            $conn->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
            
          
            $sqlquerystring="DELETE FROM applylist WHERE applyno='$applyno'";
            
            $conn->exec($sqlquerystring);
          
            
            ?>
                <script>location.assign('applylistview.php')</script>
            <?php
        }
        catch (PDOException $ex){
            ?>
                <script>location.assign('applylistview.php')</script>
            <?php
        }
        
    }
    else{
         ?>
            <script>location.assign('applylistview.php')</script>
        <?php
    }
 }
else{
         ?>
            <script>location.assign('applylistview.php')</script>
        <?php
    }


?>
