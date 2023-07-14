<?php
   $jobpostno=$_GET['jobpostno'];
?>
<!DOCTYPE html>
<head>
	<meta charset="utf-8">

	<title>Apply!</title>	<!--Title of the page-->

</head>

<body>
	<style>
    body{
        background-image:url(backpro.jpg);
        background-position:center;
        background-size:cover;
        background-attachment: fixed;
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
            margin: 20px 10px;
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
          		width: 550px;
          	  height: 420px;
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
	<br>
	<h2 style="text-align:center;">Apply Now!</h2>
  <br>

	<main style="text-align:center;">
		<form action="applyinfo.php" method="POST" enctype="multipart/form-data">

			<label for="upost">Post No: </label>
			<input type="text"  value="<?php echo $jobpostno; ?>"id="upost"  readonly name="upost">
			<br>
            <br>
            <label for="uemail">Email: </label>
			<input type="email" id="uemail" value="student@gmail.com" readonly name="uemail"  title="valid email">
			<br>
            <br>
			<lable for="ucv" >Curriculum Vitae:</lable>
			<input type="file" id="ucv" name="ucv">
			<br>
      <br>
      <br>
			<input type="submit" class="button" value="Apply">
		</form>

    <br>
		<input type="button" class="button2" value="Home" onclick="deskfn();" >
		<script> function deskfn(){
				 location.assign('student_homepage.php');
		}</script>

	</main>
</div>

</body>
