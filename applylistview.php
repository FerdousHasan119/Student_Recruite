<!DOCTYPE html>
    <html>
    <head>
        <meta charset="utf-8">
        <title> Applications </title>

        <style>
        body{
              background-image:url(backpro.jpg);
              background-position:center;
              background-size:cover;
              background-attachment: fixed;
              justify-content: center;
              align-items: center;
            height: 100vh;
            }
            .button{
                    width: 120px;
                    padding: 10px 0;
                    text-align: center;
                    text-shadow: black;
                    margin: 15px 10px;
                    border-radius: 15px;
                    font-weight: bold;
                    border: 4px solid #8000ff;
                    background: #2330f7a3;
                    color: white;
                    cursor: pointer;
                    position: relative;
                    overflow: hidden;
                  }
            .button2{
                        width: 100px;
                        padding: 7px 0;
                        text-align: center;
                        text-shadow: black;
                        margin: 20px 10px;
                        border-radius: 15px;
                        font-weight: bold;
                        border: 4px solid #ac0c0c;
                        background: #e61515cc;
                        color: black;
                        cursor: pointer;
                        position: relative;
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

    </style>

</head>
<body>
    <br>
    <br>
    <center>
      <h1>List of Applications </h1>
      <!--<input type="button" value="Home Page" onclick="homefn();">-->
      <br>

        <input type="button" class="button" value="Home" onclick="deskfn();" >
        <script> function deskfn(){
             location.assign('student_homepage.php');
        }</script>
    </center>

            <table id="ptable">
                <thead>
                    <tr>
                        <th>Application No.</th>
                        <th>Apply Date</th>
                        <th>Job Post No.</th>
                        <th>Job Type</th>
                        <th>Location</th>
                        <th>Company Email</th>
                        <th> Delete</th>
                    </tr>
                </thead>
                <tbody>

                    <?php
                    try{

                        $conn=new PDO('mysql:host=localhost:3306;dbname=studentrecruit;','root','');
                        $conn->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);

                        //database code execute, default : warning generate
                        $sqlquerystring="SELECT applylist.applyno,applylist.date,applylist.Jobpostjobpostno,jobpost.jobtype,jobpost.location,jobpost.Companyfacultyemail
                                         FROM applylist
                                         INNER JOIN jobpost ON applylist.Jobpostjobpostno=jobpost.jobpostno";
                        $returnobj=$conn->query($sqlquerystring);

                        if($returnobj->rowCount()==0){
                            ///no data found here
                          ?>
                          <tr>
                            <td colspan="7">No data found</td>
                        </tr>
                        <?php
                    }


                    else{
                    ///user data found
                        $tabledata=$returnobj->fetchAll();

                        foreach($tabledata AS $row){
                         ?>

                         <tr>
                            <td><?php echo $row['applyno']; ?></td>
                            <td><?php echo $row['date']; ?></td>
                            <td><?php echo $row['Jobpostjobpostno']; ?></td>
                            <td><?php echo $row['jobtype']; ?></td>
                            <td><?php echo $row['location']; ?></td>
                            <td><?php echo $row['Companyfacultyemail']; ?></td>
                             <td> 
                             <form action="deletelist.php" method="GET">
                                 <input type="button" class="button2"  value="Delete" 
                                   onclick="deletefn('<?php echo $row['applyno']; ?>');">
                                 <script> function deletefn(applyno){
                                    location.assign('deletelist.php?applyno='+applyno);

                                }
                        </script>
                                 </form>
                             </td>

                        </tr>
                        <?php
                    }

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
