<?php
   $id=$_GET['id'];
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">

	<title>Resolve</title>	<!--Title of the page-->

</head>

<body>
	<style>
    body{
        background-image:linear-gradient(rgba(0,0,0,0.35),rgba(0,0,0,0.35)), url(admindesk.jpg);
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
    	.center {
          		width: 450px;
          	  height: 370px;
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
	<h2 style="text-align:center;">Give Solution</h2>
  <br>

	<main style="text-align:center;">
		<form action="solutioninfo.php" method="POST" enctype="multipart/form-data">

			<label for="uid">Complain ID : </label>
			<input type="number" id="uid" value="<?php echo $id; ?>"id="uid"  readonly name="uid">
			<br>
      <br>
			<label for="usolution" style="vertical-align:top">Solution : </label>
			<textarea id="usolution" name="usolution" rows="4" cols="30"></textarea>
			<br>
			<input type="submit" class="button" value="Submit">
		</form>

    <br>

    <input type="button" class="button2" value="My Desk" onclick="deskfn();" >
    <script> function deskfn(){
         location.assign('admindeskpage.php');
    }</script>

	</main>
</div>


</body>
</html>
