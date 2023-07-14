<?php
   $email="company@gmail.com";
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
            background-image :linear-gradient(rgba(0,0,0,0.30),rgba(0,0,0,0.30)),url('homepage.jpg');
            background-size: 100%;
            background-repeat: no-repeat;

        }
         
    .button{
                    width: 120px;
                    padding: 10px 0;
                    text-align: center;
                    text-shadow: black;
                    margin: 15px 10px;
                    border-radius: 25px;
                    font-weight: bold;
                    border: 4px solid #8000ff;
                    background: #2330f7a3;
                    color: white;
                    cursor: pointer;
                    position: relative;
                    overflow: hidden;
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
            background: #e1dddd82;
            color: black;
            cursor: pointer;
            position: relative;
            overflow: hidden;
                }
        .button3{
                    width: 130px;
                    padding: 10px 0;
                    text-align: center;
                    text-shadow: black;
                    margin: 15px 10px;
                    border-radius: 25px;
                    font-weight: bold;
                    border: 4px solid aqua;
                    background: #0000009c;
                    color: white;
                    cursor: pointer;
                    position: relative;
                    overflow: hidden;
                }
    </style>
        
    </head>
    <body>
        <div class="box">
        <p style="text-align:center;"></p>
        <h1><font color="Navy"> Create Post</font></h1>
        
            <input type="button" class="button3"  value="Home" onclick="homefn();" >
                                <script> function homefn(){
                                     location.assign('company_homepage.php');
                                }</script>
        <form action="jobpostprocess.php" method="POST">
            
            <lable for="uname" ><b> Job Type:</b> </lable>
            <input type="text" placeholder="type of job" id="uname" name="uname" style="height:25px; width:200px" />
            <br>
            <br>
            <lable for="usalary" > <b>Salary: </b>   </lable>
            <input type="text" placeholder="amount of salary" id="usalary" name="usalary" style="height:25px; width:200px" />
            <br>
            <br>
            <lable for="udetails" ><b> Job Details:</b> </lable>
            <textarea placeholder="type job details here" id="udetails" name="udetails" style="height:100px; width:300px"> </textarea>
            <br>
            <br>
            
            <lable for="udate" ><b> Last Date of Apply:</b> </lable>
            <input type="date" id="udate" name="udate" style="height:25px; width:200px" />
             <br>
            <br>
            <lable for="uemail" ><b> Email:</b> </lable>
            <input type="text" value="<?php echo $email ?>" readonly id="uemai" name="uemail" style="height:25px; width:200px" />
            <br>
            <br>
            <lable for="ulocation" ><b>Location:</b> </lable>
            <input type="text"  placeholder="type job location here" id="ulocation" name="ulocation" style="height:25px; width:200px" />
            
           
            <input type="submit"  class="button" value="Post Job" >         
            
        
        </form>
    
        </div>
    </body>
        

</html>