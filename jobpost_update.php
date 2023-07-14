<?php
   $email="company@gmail.com";

   $jobpostno=$_GET['jobpostno'];
    
    try{
                
                $conn=new PDO('mysql:host=localhost:3306;dbname=studentrecruit;','root','');
                $conn->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);

                //database code execute, default : warning generate
                $sqlquerystring="SELECT*  FROM jobpost WHERE Companyfacultyemail='$email' and jobpostno='$jobpostno' ";
                $returnobj=$conn->query($sqlquerystring); 
                
              
                    $data=$returnobj->fetchAll();
                     $row=$data[0];
                
            
              }catch(PDOException $ex ){
                    ?>
                <script>location.assign('jobpost_update.php')</script>
                
                <?php
    }
            
?>
<!DOCTYPE html>
<html>
    <head><center>
        <br>
        <br>
        <br>
        <br>
        <meta charset="uff-8">
        <title> Job Post</title></center>
        
    <style>
        body{
             background-color:aliceblue;
            background-image :linear-gradient(rgba(0,0,0,0.30),rgba(0,0,0,0.30)),url('jobpost.jpg');
            background-size: 100%;
            background-repeat: no-repeat;

        }
         
     .button {
      background-color:navy;
      border-color:goldenrod;
      color:white;
      }
      .box{
            width: 400px;
            padding: 15px 0;
            text-align: center;
            text-shadow: black;
            margin: 20px 10px;
            border-radius: 25px;
            font-weight: bold;
            border: 4px solid #006880;
            background: transparent;
            color: black;
            cursor: pointer;
            position: relative;
            overflow: hidden;
                }
    </style>
        
    </head>
    <body>
        <div class="box">
        <p style="text-align:center;"></p>
        <h1><font color="Navy"> Update Post</font></h1>
        <br>
        <form action="jobpost_updateprocess.php" method="POST">
            <lable for="uno" ><b> Job Post No:</b> </lable>
            <input type="text" readonly value="<?php echo $row['jobpostno']; ?>" id="uno" name="uno" style="height:25px; width:200px" />
            <br>
            <br>
            <lable for="uname" ><b> Job Type:</b> </lable>
            <input type="text" value="<?php echo $row['jobtype']; ?>" id="uname" name="uname" style="height:25px; width:200px" />
            <br>
            <br>
            <lable for="usalary" > <b>Salary: </b>   </lable>
            <input type="text" value="<?php echo $row['salary']; ?>" id="usalary" name="usalary" style="height:25px; width:200px" />
            <br>
            <br>
            <lable for="udetails" ><b> Job Details:</b> </lable>
            <textarea  id="udetails" name="udetails" style="height:100px; width:300px"> <?php echo $row['details']; ?> 
            </textarea>
            <br>
            <br>
            
            <lable for="udate" ><b> Last Date of Apply:</b> </lable>
            <input type="date" value="<?php echo $row['date']; ?>"id="udate" name="udate" style="height:25px; width:200px" />
             <br>
            <br>
            <lable for="uemail" ><b> Email:</b> </lable>
            <input type="text" value="<?php echo $row['Companyfacultyemail']; ?>" readonly id="uemai" name="uemail" style="height:25px; width:200px" />
            <br>
            <br>
            <lable for="ulocation" ><b>Location:</b> </lable>
            <input type="text" value="<?php echo $row['location']; ?>" id="ulocation" name="ulocation" style="height:25px; width:200px" />
            <br>
            <br>
            <input type="submit"  class="button" value="Update" style="height:30px; width:160px" />   
            <br>
            <br>
        
        </form>
    
        </div>
    </body>
        

</html>