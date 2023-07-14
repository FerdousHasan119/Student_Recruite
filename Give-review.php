<?php
    $email="student@gmail.com";
?>
<!DOCTYPE html>
<html>
<head>
    <title>Give Review</title>
    <style>

        body{
            background-color:aliceblue;
            background-image :url('review.jpg');
            background-position:center;
            background-size:cover;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;

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
           
      <form action="proccesor.php"method="POST">
          <h1><p> Here You Can Give Review </p></h1>
          <br>
          <label for="name"><b>Company Name:</b></label>
          <input type="text" placeholder="Write company name here" id="name" name="name" style="height:30px; width:260px" />
          <br>
          <br>
          <label for="review"><b>Review:</b></label>
         <input type="text" placeholder="Write your review here" id="review" name="review" style="height:30px; width:260px" />
          <br>
          <br>
           <label for="uemail"><b>Email:</b></label>
          <input type="text" value="<?php echo $email ?>" id="uemail" name="uemail" readonly style="height:30px; width:260px" />
          <br>
          <br>
         <input type="submit" value="Enter" style="height:30px; width:200px" />
          <br>
           <input type="button" class="button" value="Back"  onclick="homefn();">
                    <script>
                        function homefn(){
                            location.assign('REVIEW.php');
                        }
                    </script>
    </form>
    </center>
</body>
</html>
