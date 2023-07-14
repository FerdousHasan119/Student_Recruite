 <!DOCTYPE html>
    <html>
        <head>
            <meta charset="utf-8">
            <title> Candidate List </title>
            <style>
                    
        body{
                background-image:url(candidatelist.jpg);
                background-position:center;
                background-size:cover;
                height: 100vh;
                padding: 120px;
             }
                #ptable{
                      position: center;
                      left: 50%;
                      top: 60%;
                      border-collapse: collapse;
                      width: 1150px;
                      height: 200px;
                      border: 1px solid #bdc3c7;
                      box-shadow: 2px 2px 12px rgba(0, 0, 0, 0.2), -1px -1px 8px rgba(0, 0, 0, 0.2);
                      background:#d6d6d6c9;
                      table-layout: fixed;
                    
                }
                #ptable th, #ptable td{
                    border: 1px solid gray;
                    border-collapse: collapse;
                    height:100px;
                    width: 120px;
                    font-family: sans-serif;
                    position: sticky;
                    top: -1px;
                }
                tr {
                    transition: all .2s ease-in;
                    cursor: pointer;
                    font-family: calibri;
                    }
                #ptable tr:hover{
                     background-color: #f5f5f5;
                    box-shadow: 2px 2px 12px rgba(0, 0, 0, 0.2), -1px -1px 8px rgba(0, 0, 0, 0.2);
                }
                
                 th{
                    padding: 5px;
                    text-align: center;
                    border-bottom: 1px solid #ddd;
                    background: #00bcd4;
                    color: #fff;
                    box-sizing: border-box;
                    
                    position: sticky;
                    top: 2px;
                     font-size: 16px;
                     text-transform: uppercase;
                     box-shadow: 0 15px 20px black;
                    }
                td{
                     padding: 5px;
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
                .button3{
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
                
                
            </style> 
        </head>
        <body>  
           <center><h1> <u>Candidate List</u> </h1>
             <input type="button" class="button3"  value="Home" onclick="homefn();" >
                                <script> function homefn(){
                                     location.assign('company_homepage.php');
                                }</script>
               </center>
             <?php
        $email="company@gmail.com";
?>
   
            <table id="ptable">
                <thead>
                    <tr>
                        <th>Candidate No</th>
                        <th>Apply Date</th>
                        <th>CV</th>
                        <th>Student Email</th>
                        <th>Job Post No</th>
                        <th>Status</th>
                        <th>Download CV</th>
                        <th> Select/Reject</th>

                    </tr>
                </thead>
                <tbody>
                    
                    <?php
            try{
                
                $conn=new PDO('mysql:host=localhost:3306;dbname=studentrecruit;','root','');
                $conn->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);

                //database code execute, default : warning generate
                $sqlquerystring="SELECT candidateno,applydate,cv,Studentemail,Jobpostjobpostno,status  FROM candidatelist WHERE Companyfacultyemail='$email'";
                $returnobj=$conn->query($sqlquerystring); 

                if($returnobj->rowCount()==0){
                            ///no data found here
                      ?>
                                <tr>
                                    <td colspan="7">No data found try</td>
                                </tr>
                   <?php
                        } 

                         
              else{
                    ///user data found
                    $tabledata=$returnobj->fetchAll();
                     
                   foreach($tabledata AS $row){
                   ?>   
                        
                        <tr>
                        <td><?php echo $row['candidateno']; ?></td>
                        <td><?php echo $row['applydate']; ?></td>
                        <td><?php echo $row['cv']; ?></td>
                        <td><?php echo $row['Studentemail']; ?></td>
                        <td><?php echo $row['Jobpostjobpostno']; ?></td>
                        <td><?php echo $row['status']; ?></td>
                        <td> <a href='<?php echo $row['cv'];?>' download= true> Download</a></td>
                        <td>
                
                         <form action="select_candidate.php" method="GET">
                        <input type="button" class="button" value="Select" 
                               onclick="selectfn('<?php echo $row['candidateno']; ?>');" >

                        <script>  function selectfn(candidateno){
                                location.assign('select_candidate.php?candidateno='+candidateno);
                           }
                        </script>
                        </form>

                        <form action="reject_candidate.php" method="GET">
                        <input type="button" class="button2"  value="Reject" 
                               onclick="rejectfn('<?php echo $row['candidateno']; ?>');">
                        <script> function rejectfn(candidateno){
                                location.assign('reject_candidate.php?candidateno='+candidateno);

                                }
                        </script>

                        </form>
                   
                        </td>

                        </tr>
                    <?php
                    }
                ?>   
                  </tbody>
                </table>
                
            </body>
    </html>           
             <?php    
              }
                
            }
            
            catch (PDOException $ex){
           ?>
                    <tr>
                        <td colspan="7">No data found catch</td>
                    </tr>
                    
                    
          <?php
      }

?>