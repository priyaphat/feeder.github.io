<!DOCTYPE html>
<html lang="en">
<title>เครื่องให้อาหารกระต่าย</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.6/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js"></script>


<head>
	<!-- script -->
	<? include('Script.php'); ?> 

	<style>
	@font-face {
		font-family: f2005;
		src: url(font-awesome/fonts/2005_iannnnnTKO.ttf);
	}
	@font-face{
		font-family: f2547;
		src:url(font-awesome/fonts/Superspace.ttf);
	}

	.button {
		border: none;
		color: white;
		padding: 16px 32px;
		text-align: center;
		text-decoration: none;
		display: inline-block;
		font-size: 16px;
		margin: 4px 2px;
		-webkit-transition-duration: 0.4s; /* Safari */
		transition-duration: 0.4s;
		cursor: pointer;
	}
	.button5 {
		background-color: white;
		color: black;
		border: 2px solid #555555;
	}
	.button5:hover {
		background-color: #555555;
		color: white;
	}
	.button span {
		cursor: pointer;
		display: inline-block;
		position: relative;
		transition: 0.5s;
	}

	.button span:after {
		content: '\00bb';
		position: absolute;
		opacity: 0;
		top: 0;
		right: -20px;
		transition: 0.5s;
	}

	.button:hover span {
		padding-right: 25px;
	}

	.button:hover span:after {
		opacity: 1;
		right: 0;
	}

</style>

</head>
<body>
	<div class="container">
		<br><br>
		<center>
			<h1>เครื่องให้อาหารกระต่าย</h1>
			<hr>

			
			<div class="container">
				<div class="row">
					<div class="col-md-6">

						<!-- ประมวลผลค่า json -->
						<h1 class="center">อาหารในถาดอาหาร</h1>
						<?
						if ($Food_Downs->value==0){?>
						<img style="height: auto; width: 300;" src="Pic/cooking.png"> <?
					}
					if ($Food_Downs->value==1){?>
					<img style="height: auto; width: 300;" src="Pic/cook.png"><?
				}
				?>
				<!-- หมดการประมวลผล -->
			</div>
			<div class="col-md-6">

				<!-- ประมวลผลค่า json -->
				<h1 class="center">อาหารในถังอาหาร</h1>
				<?
				if ($Food_Tanks->value==0){?>
				<img style="height: auto; width: 300;" src="Pic/cooking.png"> <?
			}
			if ($Food_Tanks->value==1){?>
			<img style="height: auto; width: 300;" src="Pic/cook.png"><?
		}
		?>
		<!-- หมดการประมวลผล -->

	</div>
</div>
</div>

<hr>
<div id="animal-info"></div>
<div class="container">
	
	<div class="row">
		
		<div class="col-md-6">
			<!-- ส่งค่า system 2 -->
			<button class="button button5" id="btn1" style="vertical-align:middle"><span>ให้อาหาร</span></button>

		</div>

		<dir class="col-md-6">
			<!-- ส่งค่า system 1 -->
			<button style="margin-top: -10px" id="btn2" type="submit" class="button button5" style="vertical-align:middle"><span>ทำงานอัตโนมัติ</span></button>

		</dir>

	</div>

</div>
<!-- ส่งค่า system 3 และเวลา -->
<div class="container">
	ตั้งเวลาให้อาหาร &nbsp;<input type="text" id="in_timer" size="5" name="txt1" value="">
	&nbsp;<button id="btn_timer" class="btn btn-info">ตั้งเวลา</button>

</div>


</div>
</center>

</body>
</html>