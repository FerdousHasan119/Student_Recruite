<?php
if($_SERVER['REQUEST_METHOD']=="GET"){
    ///already logged in
    if(
            isset($_GET['usearch'])
        && !empty($_GET['usearch'])
    ){
        
        $searchreview=$_GET['usearch'];
         ?> 
    <!DOCTYPE html>

    <html>
        <head>
            <meta charset="utf-8">
            <title> Reviews </title>
             <br>
            <br>
             <style>
        body{
           background-color:aliceblue;
            background-image :url('green-leaf.jpg');
            background-size: 100%;
            background-repeat: no-repeat;
            
                }
        
                .button3{
                    width: 130px;
                    padding: 10px 0;
                    text-align: center;
                    text-shadow: black;
                    margin: 20px 10px;
                    border-radius: 25px;
                    font-weight: bold;
                    border: 4px solid green;
                    background: transparent;
                    color: black;
                    cursor: pointer;
                    overflow: hidden;
                }
         .button3:hover{
                    background:#36b036ba;
                    border: 2px;
                    direction:inherit;
                    
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
                
                .button:hover span{
                    width: 100%;
                }
                .button:hover{
                    background:#56e1e19e;
                    border: 2px;
                    direction:inherit;
                    
                }
                .posts {
                    position: relative;
                    display: auto;
                    background: linear-gradient(
                        to left top,
                        rgba(50, 130, 13, 0.9),
                        rgba(255, 255, 255, 0.5)
                    );
                    border-radius: 1rem;
                    margin: 2rem 3rem;
                    padding: 1rem;
                    box-shadow: 6px 6px 20px rgba(122, 122, 122, 0.212);
                    justify-content: space-between;
                }
                form{
                            width: 900px;
                            border: 2px solid #d9d2d2cf;
                            padding: auto;
                            background:#77d95b5e;
                            border-radius: 21px;
                }
           
            </style>
        </head>
        <body>
            <center>
            <form>
            <center><big><h1><font color='Green'>Searching Results</font></h1></big></center>
            <br>
            <center>
                <center>
                        <input type="button" class="button3" value="Home"  onclick="homefn();">
                    <script>
                        function homefn(){
                            location.assign('student_homepage.php');
                        }
            </script>
                <input type="button"  class="button3" value="Back" onclick="reviewfn();"></center>
                    <script>
                        function reviewfn(){
                            location.assign('REVIEW.php'); 
                        }
                    </script>
                
           
           
        <?php
        
        try{
            $conn=new PDO('mysql:host=localhost:3306;dbname=studentrecruit;','root','');
            $conn->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
            
          
            $sqlquerystring="SELECT Company_Name,description,Studentemail,date FROM review WHERE Company_Name='$searchreview'";
            $returnobj=$conn->query($sqlquerystring); 
            
            if($returnobj->rowCount()==0){
                            ///no data found here
                      ?>
                        <script>
                                location.assign('nodatafound.php');
                        
                            </script>
                   <?php
                        } 
             else{
                    ///user data found
                    $tabledata=$returnobj->fetchAll();
                     
                   foreach($tabledata AS $row){
                   ?>   
        
            
             <div class="posts">
                <div class="post">
                   
                <center><p><?php echo $row['Company_Name']; ?></p> 
                        <p><?php echo $row['description']; ?></p> 
                        <p><?php echo $row['Studentemail']; ?></p> 
                        <p><?php echo $row['date']; ?></p> 
                   </center>
                   </div>
                </div>
                    <?php
                    }
                 ?>
                 </form>
                 <?php  
            }
            
             
        }
        catch (PDOException $ex){
             ?>
                <script>location.assign('REVIEW.php')</script>
            <?php
        }
        
        ?>  
                </center>
        </body>
    </html>
             
        <?php
        
    }
    else{
         ?>
            <script>location.assign('home.php')</script>
                   
        <?php
    }

}
else{
         ?>
            <script>location.assign('search_review.php')</script>
                   
        <?php
    }

?>
