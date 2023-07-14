
    <!DOCTYPE html>

    <html>
        <head><center>
            <meta charset="utf-8">
            <title> Company HomePage</title>

          </center>
            <style>
        body{
            background-color:aliceblue;
            background-image :linear-gradient(rgba(0,0,0,0.35),rgba(0,0,0,0.35)),url('home.jpg');
            background-size: 100% 100%;
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
                    background:navy;
                    color: white;
                    cursor: pointer;
                    position: relative;
                    overflow: hidden;
                }
        .box{
                    width: 600px;
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
            </style>
        </head>

        <body><center>
        <br>
        <br>
        <br>
        <b> <big> <h1><font color="navy"> <u>Company Home Page </u></font></h1></big></b>

        <br>
        <div class="box">

           <input type="button" class="button" value="My Profile"  onclick="profilefn();">
           <script> function profilefn(){
               location.assign('companyprofile.php');
           }</script>


          <input type="button" class="button" value="My Posts"  onclick="postfn();">
          <script> function postfn(){
               location.assign('mypost.php');
          }</script>


          <input type="button" class="button" value="Create Post" onclick="jobpostfn();" >
          <script> function jobpostfn(){
               location.assign('jobpost.php');
          }</script>

          <br>

          <input type="button" class="button" value="Candidate List" onclick="listfn();" >
          <script> function listfn(){
               location.assign('candidate_list_view.php');
          }</script>


          <input type="button" class="button" value="Give Notice" onclick="noticefn();" >
          <script> function noticefn(){
               location.assign('givenotice.php');
          }</script>


          <input type="button" class="button" value="Complain" onclick="complainfn();" >
          <script> function complainfn(){
               location.assign('companycomplain.php');
          }</script>


          <input type="button" class="button" value="My Complains" onclick="viewcomplainfn();" >
          <script> function viewcomplainfn(){
               location.assign('companyviewcomplain.php');
          }</script>

        </div>

            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            </center>
        </body>
    </html>
