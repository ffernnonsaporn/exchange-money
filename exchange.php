<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="css/font.css">
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link rel="stylesheet" type="text/css" href="css/animate.css">
	<?php
		session_start();
			if(isset($_SESSION["afterexchange"])&&isset($_SESSION["beforeexchange"])){
				$result =  $_SESSION["beforeexchange"]." : ".$_SESSION["afterexchange"];
			}
		session_destroy();
	?>
	<script type="text/javascript">

	</script>
</head>
<body>
	<form action="api.php" method="GET">
	<div class="wallpaper">
		<div class="wap1">
			<div class="title-text">
				<h2>CURRENCY<small>BAHT</small></h2>
			</div>
			
		<input type="number"  placeholder="money" name="money" class="input_1">

		<select name="value1" class="input_2">
			<option value="PHP">PHP</option> <!-- เปโซฟิลิปปินส์ -->
			<option value="IDR">IDR</option> <!-- รูเปียอินโดนีเซีย -->
			<option value="MYR">MYR</option> <!-- ริงกิตมาเลเซีย -->
			<option value="THB">THB</option> <!-- ริงกิตมาเลเซีย -->
		</select>

		<select name="value2" class="input_2">
			<option value="PHP">PHP</option>
			<option value="IDR">IDR</option>
			<option value="MYR">MYR</option>
			<option value="THB">THB</option>

		</select>
		<input type="submit" value="Exchange" class="input_3" >

		<div class="show">

			<?php  
				if(isset($result)){
					echo $result;	
				}
				  
			?>
		</div>
	</form>
		</div>
	</div> <!-- wallpaper -->



	


</body>
</html>


