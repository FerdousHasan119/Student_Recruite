<?php
   $email="company@gmail.com";
?>
<!DOCTYPE html>
        <html lang="en">
        <head>
            <meta charset="UTF-8">
            <meta http-equiv="X-UA-Compatible" content="IE=edge">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <title>Company Complain</title>
            <style>
                body{
                background-image:url(bgpic1.jpg);
                background-position:center;
                background-size:cover;
                display: flex;
                justify-content: center;
                align-items: center;
                height: 100vh;
                
            }
            *{
                font-family:  sans-serif;
                box-sizing: border-box;
            }
            form{
                border: 2px solid #ccc;
                padding: 92px;
                background: #607b7b8f;
                border-radius: 20px;
            }
            h2{
                text-align: center;
                margin-bottom: 40px;
            }
            input{
                display: block;
                border: 2px solid #ccc;
                width: 95%;
                padding: 10px;
                margin: 10px auto;
                border-radius: 5px;
            }
            label{
                color: rgb(233, 230, 230);
                font-size: 18px;
                padding: 10px;
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
            input:hover{
                opacity: .7;
            }
            </style>
        </head>
        <body>
            <form action="companycomplainprocess.php" method="POST">
                <h2>This page is for complain if you find any difficulties</h2>
                <br> 
                <h3>Enter your complain here: </h3>
               
                <label for="complain">Complain description: </label>
               <p> 
                <input type="textfield" name="complain" id="complain" placeholder="Enter complain">
                <p>
                <label for="email">Email: </label></p>
                <input type="text" name="cemail" id="cemail" value="<?php echo $email ?>" readonly>

                <button type='submit'>Enter</button>

            </form>
        </body>
</html>