
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My posts</title>
    <style>
        body{
                background-image:url(bgpic2.jpg);
                background-position:center;
                background-size:cover;
                background-attachment: fixed;
                display: flex;
                justify-content: center;
                align-items: center;
              
            }
        .posts {
            display: relative;
            background: linear-gradient(
                to left top,
                rgba(255, 255, 255, 0.8),
                rgba(255, 255, 255, 0.5)
            );
            border-radius: 1rem;
            margin: 2rem 3rem;
            padding: 1rem;
            box-shadow: 6px 6px 20px rgba(122, 122, 122, 0.212);
            justify-content: space-between;
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
        form{
                    width: 800px;
                    border: 2px solid #d9d2d2cf;
                    padding: 49px;
                    background: #be2020ab;
                    border-radius: 21px;
        }
    </style>
</head>
<body>
            <?php
                    $email="company@gmail.com";
                    try{
                        $conn=new PDO('mysql:host=localhost:3306;dbname=studentrecruit;','root','');
                        $conn->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);


                        $sqlquerystring="SELECT jobpostno,jobtype,salary,details,location,date,Companyfacultyemail
                                        FROM jobpost
                                        WHERE Companyfacultyemail='$email'";
                        $returnobj=$conn->query($sqlquerystring);

                        if($returnobj->rowCount()==0){
                            ?>
                              <h3>No Data found.</h3>
                            <?php
                        }
                        else{
                            $tabledata=$returnobj->fetchAll();
                            ?>
                            <form>
                            <center><h1><font color="White">My posts: </font></h1>
                                <input type="button" class="button3"  value="Home" onclick="homefn();" >
                                <script> function homefn(){
                                     location.assign('company_homepage.php');
                                }</script>
                            <?php
                            foreach($tabledata AS $row){
                                ?>
                                <div class="posts">
                                    <div class="post">
                                    <h3>Job type :  <?php echo $row ['jobtype']?></h3>
                                    <h3>Salary :  <?php echo $row ['salary']?></h3>
                                    <h3>Details :  <?php echo $row ['details']?></h3>
                                    <h3>Location :  <?php echo $row ['location']?></h3>

                                         <input type="button" class="button" value="Edit Post"
                                                onclick="updatefn('<?php echo $row['jobpostno']; ?>');">

                                    <script> function updatefn(jobpostno){
                                           location.assign('jobpost_update.php?jobpostno='+jobpostno);

                                        }
                                         </script>


                                    <input type="button" class="button2" value="Delete"  onclick="deletefn(<?php echo $row['jobpostno']; ?>);">
                                    <script>
                                        function deletefn(jobpostno){
                                            location.assign('delete_post.php?jobpostno='+jobpostno);
                                        }
                                    </script>

                                    </div>
                                </div>
                                <?php
                            }
                                ?></center>
                            </form>
                            <?php
                        }
                    }
                    catch(PDOExeption $ex){
                            ?>
                            <H3>No data found</H3>
                            <?php
                    }
                    ?>
</body>
</html>
