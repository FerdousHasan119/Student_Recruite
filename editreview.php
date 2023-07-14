<?php
    $email="student@gmail.com";
    $id=$_GET['id'];
        try{
            $conn=new PDO('mysql:host=localhost:3306;dbname=studentrecruit;','root','');
            $conn->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
            
            
            $sqlquerystring="SELECT description,Company_Name
                             FROM Review
                             WHERE id=$id";
            $returnobj=$conn->query($sqlquerystring);
            $tabledata=$returnobj->fetchAll();
            foreach($tabledata AS $row){
                $review=$row ['description'];
                $companyname=$row ['Company_Name'];
            }
            
        }
        catch (PDOException $ex){
            ?>
                <script>location.assign('myreview.php')</script>
            <?php
        }
?>
<!DOCTYPE html>
<html>
<head>
    <title>Edit Review</title>
    <style>

           body{
                background-image:url(bgpic3.jpg);
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
                    background: #286149a6;
                    border-radius: 21px;
                }
                .button2{
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
      <form action="editreviewprocess.php"method="POST">
          <h1><p><font color="White"> Here You Can Edit Your Review </font> </p></h1>
          <br>
          <label for="id"><b><font color="White">ID:</font></b></label>
          <input type="text" value="<?php echo $id ?>" id="id" name="id" readonly style="height:30px; width:260px" />
          <br>
          <br>
          <label for="name"><b><font color="White">Company Name:</font></b></label>
          <input type="text" value="<?php echo $companyname ?>" id="name" name="name" style="height:30px; width:260px" />
          <br>
          <br>
          <label for="review"><b><font color="White">Review:</font></b></label>
          <input type="text" value="<?php echo $review ?>" id="review" name="review" style="height:30px; width:260px" />
          <br>
          <br>
           <label for="uemail"><b><font color="White">Email:</font></b></label>
          <input type="text" value="<?php echo $email ?>" id="uemail" name="uemail" readonly style="height:30px; width:260px" />
          <br>
          <br>
         <input type="submit" value="Enter" style="height:30px; width:200px" />
         <br>
         <input type="button" class="button2" value="Home"  onclick="homefn();">
                    <script>
                        function homefn(){
                            location.assign('student_homepage.php');
                        }
            </script>
          
          <input type="button" class="button2" value="Back"  onclick="reviewfn();">
                    <script>
                        function reviewfn(){
                            location.assign('myreview.php');
                        }
            </script>
    </form>
    </center>
</body>
</html>