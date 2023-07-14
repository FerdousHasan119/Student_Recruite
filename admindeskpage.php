<!DOCTYPE html>

    <html>
        <head>
            <meta charset="utf-8">
            <title> Admin Desk </title>

            <style>

        body{
                background-image:linear-gradient(rgba(0,0,0,0.35),rgba(0,0,0,0.35)),url('admindesk.jpg');
                background-position:center;
                background-size:cover;
                background-attachment: fixed;
                height: 100vh;
        }

                #ptable{
                      position: absolute;
                      left: 50%;
                      top: 50%;
                      transform: translate(-50%,-50%);
                      border-collapse: collapse;
                      width: 1050px;
                      height: 200px;
                      border: 1px solid #bdc3c7;
                      box-shadow: 2px 2px 12px rgba(0, 0, 0, 0.2), -1px -1px 8px rgba(0, 0, 0, 0.2);
                      background:#d6d6d6c9;
                }

                #ptable th, #ptable td{
                    border: 1px solid gray;
                    border-collapse: collapse;
                }
                tr {
                    transition: all .2s ease-in;
                    cursor: pointer;
                    font-family: calibri;
                    }
                #ptable tr:hover{
                     background-color: #f5f5f5;
                    transform: scale(1.02);
                    box-shadow: 2px 2px 12px rgba(0, 0, 0, 0.2), -1px -1px 8px rgba(0, 0, 0, 0.2);
                }

                 th, td {
                      padding: 12px;
                      text-align: center;
                      border-bottom: 1px solid #ddd;
                    }
                .button{
                        width: 100px;
                        padding: 7px 0;
                        text-align: center;
                        text-shadow: black;
                        margin: 20px 10px;
                        border-radius: 15px;
                        font-weight: bold;
                        border: 4px solid #127709;
                        background: #09ce1ebd;
                        color: black;
                        cursor: pointer;
                        position: relative;
                }

            </style>

        </head>
        <br>
        <br>
        <br>
        <body>
          <center>
            <h1><font color="lightgrey"> Admin Desk </font></h1>
          </center>

        <br>
            <table id="ptable">
                <thead>
                    <tr>
                        <th>Complain ID</th>
                        <th>Description</th>
                        <th>Date</th>
                        <th>Solution</th>
                        <th> </th>
                    </tr>
                </thead>
                <tbody>

        <?php
            try{

                $conn=new PDO('mysql:host=localhost:3306;dbname=studentrecruit;','root','');
                $conn->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);


                $sqlquerystring="SELECT id,description,date,solution FROM complain";
                $returnobj=$conn->query($sqlquerystring);

                if($returnobj->rowCount()==0){
                            ///no data found here
          ?>
                    <tr>
                     <td colspan="4">No data found try</td>
                    </tr>
          <?php
                }


              else{
                    $tabledata=$returnobj->fetchAll();

                   foreach($tabledata AS $row){
                   ?>

                      <tr>
                        <td><?php echo $row['id']; ?></td>
                        <td><?php echo $row['description']; ?></td>
                        <td><?php echo $row['date']; ?></td>
                        <td><?php echo $row['solution']; ?></td>
                        <td>
                          <form action="givesolution.php" method="GET">
                          <input type="button" class="button" value="Resolve"
                               onclick="selectfn('<?php echo $row['id']; ?>');" >

                          <script>  function selectfn(id){
                                location.assign('givesolution.php?id='+id);
                          }
                          </script>
                          </form>

                        <br>
                        </td>

                      </tr>
                    <?php
                    }

              }

            }

            catch (PDOException $ex){
           ?>
                    <tr>
                        <td colspan="4">No data found catch</td>
                    </tr>


          <?php
      }

?>
</tbody>
</table>

</body>
</html>
