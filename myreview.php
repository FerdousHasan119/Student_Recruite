<?php
$email='student@gmail.com';
?>
<!DOCTYPE html>
    <html>
    <head>
        <meta charset="utf-8">
        <title> My Review </title>

        <style>
        body{
              background-image:url(bgpic3.jpg);
              background-position:center;
              background-size:cover;
              background-attachment: fixed;
              justify-content: center;
              align-items: center;
              height: 100vh;
            }
        #ptable{
          position: absolute;
          left: 50%;
          top: 50%;
          transform: translate(-50%,-50%);
          border-collapse: collapse;
          width: 1000px;
          height: 200px;
          border: 1px solid #bdc3c7;
          box-shadow: 2px 2px 12px rgba(0, 0, 0, 0.2), -1px -1px 8px rgba(0, 0, 0, 0.2);
          background: #d6d6d6c9;
        }

        tr {
        transition: all .2s ease-in;
        cursor: pointer;
        font-family: calibri;
        }
        tr:hover {
        background-color: #f5f5f5;
        transform: scale(1.02);
        box-shadow: 2px 2px 12px rgba(0, 0, 0, 0.2), -1px -1px 8px rgba(0, 0, 0, 0.2);
        }

        th, td {
          padding: 12px;
          text-align: center;
          border-bottom: 1px solid #ddd;
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
<body>
    <br>
    <br>
    <h1><center><font color="White">All of my Review </font> </center></h1>
    <br><br>

            <table id="ptable">
                <thead>
                    <tr>
                        <th>Company</th>
                        <th>Review</th>
                        <th>Edit</th>
                    </tr>
                </thead>
                <tbody>

                    <?php
                    try{

                        $conn=new PDO('mysql:host=localhost:3306;dbname=studentrecruit;','root','');
                        $conn->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);

                        $sqlquerystring="SELECT id,Company_Name,description
                                         FROM Review
                                         WHERE Studentemail='$email'";
                        $returnobj=$conn->query($sqlquerystring);

                        if($returnobj->rowCount()==0){
                          ?>
                          <tr>
                            <td colspan="6">No data found</td>
                        </tr>
                        <?php
                    }


                    else{
                        $tabledata=$returnobj->fetchAll();

                        foreach($tabledata AS $row){
                         ?>

                         <tr>
                            <td><?php echo $row['Company_Name']; ?></td>
                            <td><?php echo $row['description']; ?></td>
                            <td><input type="button"  value="Edit"  onclick="editfn(<?php echo $row['id']; ?>);">
                                    <script>
                                        function editfn(id){
                                            location.assign('editreview.php?id='+id);
                                        }
                                    </script></td>

                        </tr>
                        <?php 
                    }
                    ?>
                    <center>
                        <input type="button" class="button2" value="Home"  onclick="homefn();">
                    <script>
                        function homefn(){
                            location.assign('student_homepage.php');
                        }
            </script>
                        <input type="button" class="button2" value="Back"  onclick="reviewfn();">
                    <script>
                        function reviewfn(){
                            location.assign('REVIEW.php');
                        }
                    </script>
                    </center>
             <?php
         }
     }

     catch (PDOException $ex){
         ?>
         <tr>
            <td colspan="6">No data found</td>
        </tr>
        <?php

    }
    ?>

</tbody>
</table>
</body>
</html>