<!DOCTYPE html>
<head>
	<meta charset="utf-8">

	<title>Notify</title>	<!--Title of the page-->

</head>

<body>
	<style>
    body{
        background-image:url(backpro.jpg);
        background-position:center;
        background-size:cover;
        display: flex;
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
				     width: 125px;
				     padding: 10px 0;
				     text-align: center;
				     text-shadow: black;
				     margin: 15px 10px;
				     border-radius: 15px;
				     font-weight: bold;
				     border: 4px solid #8000ff;
				     background: white;
				     color: #8000ff;
				     cursor: pointer;
				     position: relative;
				     overflow: hidden;
				     }

	.center {						/*to align in the center position of the page*/
		width: 450px;
	  height: 410px;
		background: #d6d6d6e0;
	  border-radius: 6px;
	  position: absolute;
	  top: 50%;
	  left: 50%;
	  transform: translate(-50%, -50%);
	  box-shadow: 0px 1px 10px 1px #000;
	  overflow: hidden;
	  display: inline-block;
		font-family: calibri;
	}
</style>
<div class="center">
	<main style="text-align:center;">
		<form action="noticeinfo.php" method="POST" enctype="multipart/form-data">
          <h2 style="text-align:center;">Notify Candidate</h2>  
		<input type="button" class="button2" value="Home" onclick="deskfn();" >
		<script> function deskfn(){
				 location.assign('company_homepage.php');
		}</script>
                <br>
            <br>
            
			<label for="uemail">From : </label>
			<input type="email" id="uemail" name="uemail" value="<?php echo 'company@gmail.com'; ?>" readonly name="uemail" title="valid email">
			<br>
      <br>
			<label for="pemail">To : </label>
			<input type="email" id="pemail" name="pemail" value="<?php echo 'student@gmail.com'; ?>" title="valid email">
			<br>
      <br>
			<label for="description" style="vertical-align:top">Description : </label>
			<textarea id="description" name="description" rows="4" cols="30"></textarea>
			<br>
			<input type="submit" class="button" value="Notify">
		</form>

	</main>
</div>

</body>
