<?php
    
   if($_SERVER['REQUEST_METHOD']=="POST")
   {
     
       if(
           isset($_POST['uno']) && isset($_POST['uname']) 
           && isset($_POST['usalary'])
           && isset($_POST['udetails']) && isset($_POST['udate'])
           && isset($_POST['uemail'])&& isset($_POST['ulocation'])
           
           && !empty($_POST['uname']) && !empty ($_POST['usalary'])
           && !empty ($_POST['udetails']) && !empty ($_POST['udate'])
           && !empty ($_POST['uemail'])&& !empty ($_POST['ulocation'])
            && !empty($_POST['uno']) 
        
          ){
               $jobpostno=$_POST['uno'];
               $jobtype=$_POST['uname'];
               $salary=$_POST['usalary'];
               $details=$_POST['udetails'];
               $date=$_POST['udate'];
               $email=$_POST['uemail'];
               $location=$_POST['ulocation'];
              
           
               try{
                   $conn=new PDO('mysql:host=localhost:3306;dbname=studentrecruit;','root','');
                   $conn->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
                   
                   $sqlquerystring=" UPDATE jobpost SET jobtype='$jobtype',salary='$salary',details='$details',date='$date',location='$location',Companyfacultyemail='$email' WHERE jobpostno='$jobpostno'";
                   $conn->exec($sqlquerystring);
                  
                   
                   ?>
                   <script>location.assign('mypost.php')</script>
                
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