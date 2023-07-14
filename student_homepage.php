
    <!DOCTYPE html>

    <html>
        <head><center>
            <meta charset="utf-8">
            <title>Student Home Page</title>

          </center>
            <style>
        body{
            background-color:aliceblue;
            background-image :linear-gradient(rgba(0,0,0,0.35),rgba(0,0,0,0.35)),url('home.jpg');
            background-size: 101% 100%;
            background-attachment: fixed;


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
                    background: transparent;
                    color: white;
                    cursor: pointer;
                    position: relative;
                    overflow: hidden;
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
                    border: none;

                }
                .posts {
                    position: relative;
                    display: auto;
                    background: linear-gradient(
                        to left top,
                        rgba(13, 130, 98, 0.8),
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
                            padding: 49px;
                            background: #50929d5e;
                            border-radius: 21px;
                }

            </style>
        </head>

        <body>
        <center>
        <br>
           <big> <h1><font color="Aqua"> <u>Student Home Page </u></font></h1></big>
        <br>

        <input type="button" class="button" value="My Profile"  onclick="profilefn();">
        <script> function profilefn(){
             location.assign('studentprofile.php');
        }</script>


        <input type="button" class="button"  value="Apply List" onclick="applylistfn();" >
        <script> function applylistfn(){
             location.assign('applylistview.php');
        }</script>


        <input type="button" class="button"  value="Review" onclick="reviewfn();" >
        <script> function reviewfn(){
             location.assign('REVIEW.php');
        }</script>


        <input type="button" class="button" value="Complain" onclick="complainfn();" >
        <script> function complainfn(){
             location.assign('studentcomplain.php');
        }</script>


        <input type="button" class="button" value="My Complains" onclick="viewcomplainfn();" >
        <script> function viewcomplainfn(){
             location.assign('studentviewcomplain.php');
        }</script>
        
            <input type="button" class="button" value="Notice Board" onclick="noticefn();" >
        <script> function noticefn(){
             location.assign('notification.php');
        }</script>

        <br>
             <form action="search.php" method="get">
                 Job Type: <input type="text" name="jobtype"><br>
               <input type="submit"></form>
        <br>

            <?php
                    try{
                        $conn=new PDO('mysql:host=localhost:3306;dbname=studentrecruit;','root','');
                        $conn->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);


                        $sqlquerystring="SELECT jobpostno,jobtype,salary,details,location,date,Companyfacultyemail
                                        FROM jobpost";
                        $returnobj=$conn->query($sqlquerystring);

                        if($returnobj->rowCount()==0){
                            ?>
                              <h3>No Data found.</h3>
                            <?php
                        }
                        else{
                             ?>
                           <center><h1><font color="White">Job posts: </font></h1>
                            <?php
                            $tabledata=$returnobj->fetchAll();
                             foreach($tabledata AS $row){
                            ?>
                            <form>
                                <div class="posts">
                                    <div class="post">
                                    <h3>Job type : <?php echo $row ['jobtype']?></h3>
                                    <h3>Salary : <?php echo $row ['salary']?></h3>
                                    <h3>Location : <?php echo $row ['location']?></h3>
                                    <input type="button" class="button" value="more Info.."  onclick="selectfn(<?php echo $row['jobpostno']; ?>);">
                                    <script>
                                        function selectfn(jobpostno){
                                            location.assign('jobdetails.php?jobpostno='+jobpostno);
                                        }
                                    </script>

                                     </div>
                                </div>
                               
                                <?php
                            }
                            ?>
                            </form>
                                  </center>
                            <?php
                        }
                    }
                    catch(PDOExeption $ex){
                            ?>
                            <H3>No data found</H3>
                            <?php
                    }
                    ?>
        
            </center>
        </body>
    </html>
