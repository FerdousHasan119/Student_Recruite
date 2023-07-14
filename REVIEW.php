
    <!DOCTYPE html>

    <html>
        <head><center>
            <meta charset="utf-8">
            <title>Student Home Page</title>

          </center>
            <style>
             body{
             background-color:aliceblue;
            background-image :url('REVIEW_pic.jpg');
            background-size: 100%;
            background-repeat: no-repeat;

        }
            
                   }
       .box{
            width: 700px;
            padding: 15px 0;
            text-align: center;
            text-shadow: black;
            margin: 20px 10px;
            border-radius: 25px;
            font-weight: bold;
            border: 4px solid #006880;
            background: transparent;
            color: black;
            cursor: pointer;
            position: relative;
            overflow: hidden;
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
                 button {
                float: right;
                background: #2e3a38f2;
                padding: 10px 22px;
                color: #fff;
                border-radius: 8px;
                margin-right: 17px;
                border: none;
            }
            button:hover{
                opacity: .7;
            }
            </style>
        </head>

        <body>
        <center>
        <br>
            <br>
            <br>
    <div class="box">
        <br>
        <br>
            <form action="search_reviewpro.php" method="GET">
            <lable for="usearch" >  </lable>
            <input type="search" placeholder="search review here" id="usearch" name="usearch" style="height:30px; width:200px" />
            
            <input type="submit" class="button" value="search"  style="height:30px; width:100px" />
            </form>
            <br>

            <input type="button" class="button3" value="Review"  onclick="givereviewfn();">
            <script> function givereviewfn(){
                 location.assign('Give-review.php');
            }</script>
            
        <br>
                <input type="button" class="button3"  value="Edit Review" onclick="reviewfn();" >
                <script> function reviewfn(){
                     location.assign('myreview.php');
                }</script>
            <br>
        <input type="button" class="button3"  value="All Review" onclick="allreviewfn();" >
        <script> function allreviewfn(){
             location.assign('review_show.php');
        }</script>
            <br>
                <input type="button" class="button3"  value="Home" onclick="homefn();" >
            <script> function homefn(){
                 location.assign('student_homepage.php');
            }</script>
            </div>
        </center>
            
        </body>
</html>
    