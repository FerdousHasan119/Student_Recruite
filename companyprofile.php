<!DOCTYPE html>
    <html>
    <head>
        <meta charset="utf-8">
        <title>Company Profile </title>
        <!--<link rel="icon" href="lawicon.png">-->
        <style>
          body{
            background-image:url(backpro.jpg);
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

        <link rel='stylesheet' type="text/css" href="profile.css">


</head>
<body>
    <br>
    <br>

    <br><br>
                    <?php
                    try{

                        $conn=new PDO('mysql:host=localhost:3306;dbname=studentrecruit;','root','');
                        $conn->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);

                        //database code execute, default : warning generate
                        $sqlquerystring="SELECT email,name,usertype,address,phone FROM companyfaculty";
                        $returnobj=$conn->query($sqlquerystring);

                        if($returnobj->rowCount()==0){
                          ///no data found here
                          ?>
                          <tr>
                            <td colspan="5">No data found</td>
                        </tr>
                        <?php
                    }


                    else{
                      ///user data found
                      $tabledata=$returnobj->fetchAll();

                      foreach($tabledata AS $row){
                        ?>

                        

                        <?php
                    }

                    ?>

               <?php
             }
           }

       catch (PDOException $ex){
           ?>
           <tr>
            <td colspan="5">No data found</td>
        </tr>
        <?php

    }
    ?>
    <div class="card-container">
      <div class="upper-container">
        <div class="image-container">
          <img src="company.jpg" />
        </div>
      </div>

      <div class="lower-container">
        <h2> <?php echo $row['name']; ?> </h2>
        <h3> Email : <?php echo $row['email']; ?> </h3>
        <h3> Address : <?php echo $row['address']; ?> </h3>
        <h3> Phone : <?php echo $row['phone']; ?> </h3>
        <input type="button" class="button" value="Update profile" onclick="updatefn('<?php echo $row['email']; ?>');">

            <script> function updatefn(email){
            location.assign('updatecompanyprofile.php?email='+email);

          }
          </script>
          <input type="button" class="button" value="Home"  onclick="homefn();">
                    <script>
                        function homefn(){
                            location.assign('company_homepage.php');
                        }
                    </script>
      </div>

    </div>

</body>
</html>
