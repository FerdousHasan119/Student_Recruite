<?php
   $jobpostno=$_GET['jobpostno'];
?>
<!DOCTYPE html>

    <html>
        <head><center>
            <meta charset="utf-8">
            <title>Details</title>
        
          </center>  
            <style>
        body{
                background-image:url(bgpic2.jpg);
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
                    background: #ad8d8d78;
                    color: white;
                    cursor: pointer;
                    position: relative;
                    overflow: hidden;
                }
                form{
                    width: 509px;
                    border: 2px solid #d9d2d2cf;
                    padding: 49px;
                    background: #be2020ab;
                    border-radius: 21px;
                }
                span{
                    background: black;
                    height: 100%;
                    width: 100%;
                    border-radius: 25px;
                    position: absolute;
                    left: 0;
                    bottom: 0;
                    z-index: -1;
                    transition: 0.5s;
                }
                button:hover{
                opacity: .7;
                }
                #jtable{
                    width: 80%;
                    border: 3px solid #2df0ff;
                    border-collapse: collapse;
                                    
                    text-align: center;
                    text-color: white;
                }
                                
                #jtable th, #jtable td{
                    border: 3px solid #2df0ff;
                    border-collapse: collapse;
                }
           
            </style>
        </head>
        
        <body>
            <form>
            <center><h1><font color="Aqua">Job Details: </font></h1><br>
            <br>
            <table id='jtable'>
                    <thead>
                        <tr>
                            <th><font color="white">Job type</font></th>
                            <th><font color="white">Salary</font></th>
                            <th><font color="white">Details</font></th>
                            <th><font color="white">Location</font></th>
                            <th><font color="white">Last date of apply</font></th>

                        </tr>
                    </thead>
                    <tbody>
                    <?php
                    try{
                        $conn=new PDO('mysql:host=localhost:3306;dbname=studentrecruit;','root','');
                        $conn->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
                        
                    
                        $sqlquerystring="SELECT jobpostno,jobtype,salary,details,location,date,Companyfacultyemail
                                        FROM jobpost
                                        WHERE jobpostno=$jobpostno";
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
                                    <td><font color="white"><?php echo $row ['jobtype']?></font></td>
                                    <td><font color="white"><?php echo $row ['salary']?></font></td>
                                    <td><font color="white"><?php echo $row ['details']?></font></td>
                                    <td><font color="white"><?php echo $row ['location']?></font></td>
                                    <td><font color="white"><?php echo $row ['date']?></font></td>
                                </tr>
                                <?php
                            }
                        }
                    }
                    catch(PDOExeption $ex){
                            ?>
                            <tr>
                                <td colspan="6">No data found</td>
                            </tr>
                            <?php
                    }
                    ?>
                    </tbody>
                </table>
                <h3><font color="White">If you want to apply then send your CV through <?php echo $row['Companyfacultyemail']; ?> </font></h3>
                 <h3><font color="White">Or</font> </h3>
                <input type="button" class="button" value="Apply online"  onclick="applyfn(<?php echo $row['jobpostno']; ?>);">
                
                <script>
                    function applyfn(jobpostno){
                        location.assign('applyjob.php?jobpostno='+jobpostno);
                    }
                </script>
               
                </center>
            <br>
            </form>
        </body>
    </html>