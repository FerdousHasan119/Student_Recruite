<?php
    $email="company@gmail.com";
        try{
            $conn=new PDO('mysql:host=localhost:3306;dbname=studentrecruit;','root','');
            $conn->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
            
            
            $sqlquerystring="SELECT name,address,phone
                             FROM companyfaculty
                             WHERE email='$email'";
            $returnobj=$conn->query($sqlquerystring);
            $tabledata=$returnobj->fetchAll();
            foreach($tabledata AS $row){
                $name=$row ['name'];
                $address=$row ['address'];
                $phone=$row ['phone'];
            }
            
        }
        catch (PDOException $ex){
            ?>
                <script>location.assign('companyprofile.php')</script>
            <?php
        }
?>
<!DOCTYPE html>
<html>
<head>
    <title>Update Company Profile</title>
    <style>

           body{
                background-image:url(bgpic5.jpg);
                background-position:center;
                background-size:cover;
                display: flex;
                justify-content: center;
                align-items: center;
                height: 100vh;
            
            }
                form{
                    width: 576px;
                    border: 2px solid #d9d2d2cf;
                    padding: 68px;
                    background: #863b18a6;
                    border-radius: 21px;
                }
                .button{
                    width: 150px;
                    padding: 15px 0;
                    text-align: center;
                    text-shadow: black;
                    margin: 20px 10px;
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
<body><center>
         <input type="button" class="button" value="Back"  onclick="backfn();">
                    <script>
                        function backfn(){
                            location.assign('companyprofile.php');
                        }
            </script>
      <form action="updatecompanyprocess.php"method="POST">
          <h1><p> <font color="White"> Here You Can Update Your Information </font> </p></h1>
          <br>
          <label for="name"><b><font color="White">Name:</font></b></label>
          <input type="text" value="<?php echo $name ?>" id="name" name="name" style="height:30px; width:260px" />
          <br>
          <br>
          
          <label for="address"><b><font color="White">Address:</font></b></label>
          <input type="text" value="<?php echo $address ?>" id="address" name="address" style="height:30px; width:260px" />
          <br>
          <br>
           
          <label for="phone"><b><font color="White">Phone:</font></b></label>
          <input type="text" value="<?php echo $phone ?>" id="phone" name="phone" style="height:30px; width:260px" />
          <br>
          <br>
          <label for="email"><b><font color="White">Email:</font></b></label>
          <input type="text" value="<?php echo $email ?>" id="email" name="email" readonly style="height:30px; width:260px" />
          <br>
          <br>
         <input type="submit" value="Enter" style="height:30px; width:200px" />
         <br>
    </form>
    </center>
</body>
</html>