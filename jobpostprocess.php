<?php
    
   if($_SERVER['REQUEST_METHOD']=="POST")
   {
     
       if(
           isset($_POST['uname']) && isset($_POST['usalary'])
           && isset($_POST['udetails']) && isset($_POST['udate'])
           && isset($_POST['uemail'])&& isset($_POST['ulocation'])
           
           && !empty($_POST['uname']) && !empty ($_POST['usalary'])
           && !empty ($_POST['udetails']) && !empty ($_POST['udate'])
           && !empty ($_POST['uemail'])&& !empty ($_POST['ulocation'])
        
          ){
               $jobtype=$_POST['uname'];
               $salary=$_POST['usalary'];
               $details=$_POST['udetails'];
               $date=$_POST['udate'];
               $email=$_POST['uemail'];
               $location=$_POST['ulocation'];
              
           
               try{
                   $conn=new PDO('mysql:host=localhost:3306;dbname=studentrecruit;','root','');
                   $conn->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
                   
                   $sqlquerystring="INSERT INTO jobpost  VALUES(NULL,'$jobtype','$salary','$details','$date','$location','$email')";
                   $conn->exec($sqlquerystring);
                   echo $sqlquerystring;
                   
                   ?>
                   <script>location.assign('company_homepage.php')</script>
                
                   <?php
                   
               }catch(PDOException $ex){
                   echo $sqlquerystring;
                
               }
               
           } else{
               
                 ?>
                <script>location.assign('editpost.php')</script>
                
                <?php
               
           }
       
   }
    
  else{
      
      echo"<script>location.assign('homepage.php')</script>";
  }
    
 ?>