<!DOCTYPE html>
<html lang="en">
<head>
	<title>Rabbit Machine Food</title>
	<meta charset="utf-8">

	<meta name="viewport" content="width=device-width, initial-scale=1">

	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css">

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.6/umd/popper.min.js"></script>

	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js"></script>

	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css">

	<link rel="stylesheet" href="font-awesome/css/font-awesome.min.css">

	<link rel="shortcut icon" type="image/x-icon" href="pic/rabbit_nav.png" />

	<? include('Script.php'); ?>
	<? include('modal.php'); ?>
	<style type="text/css">

	body {background-color: #FAFAFA; font-family: f2547;}

	@font-face {
		font-family: f2005;
		src: url(font-awesome/fonts/2005_iannnnnTKO.ttf);
	}
	@font-face{
		font-family: f2547;
		src:url(font-awesome/fonts/Superspace.ttf);
	}
	@font-face{
		font-family: Sri;
		src:url(font-awesome/fonts/TH Srisakdi_0.ttf);
	}
	.nav-link{
		font-family: f2005;
		font-size: 30px;
	}
	#line{
		border: 0px solid #909497;
		border-radius: 10px;
		background-color: gray;
	}</style>

	<script>
		function Realtime(){
			$.ajax({url:"time.php",
				async:false,
				cache:false,
				global:false,
				type:"POST",
				data:"",
				dataType:"html",
				success: function(result){
					$('#divDetail').html(result);
					setTimeout("Real();",1000);	
				}
			});
		}
		function Real(){
			Realtime();	
		}
	</script>

</head>
<body background="pic/bg.jpg"; onload="Realtime();">
	
	<div class="container-fluid" style="margin-top: 10px;">
		<div id="line" style="background-color: rgba(0,0,0,0);"><br>
			<center><div id="line" class="animated bounce" style="background-color: rgba(231, 76, 60,0.4); padding: 5px; max-width: 1090px;">
				<h3  align="center" style="text-shadow: 2px 2px 5px gray;"><i class="fa fa-caret-square-o-right" aria-hidden="true"></i>&nbsp;Rabbit Machine Food</h3></div>
			</center>

			<div class="row" style="padding: 20px 20px 20px 20px; ">

				<div class="col-md-1 col-xs-1"></div>

				<div class="col-md-3 col-xs-5" style="background-color: rgba(245, 183, 177, 0.6); height: 650px" id="line">
					<hr>
					<h2 style="text-align: center; text-shadow: 2px 2px 5px gray;">STATUS </h2>

					<div class="row" style="margin-left: 70px">
						<h5 >Time Is :</h5>&nbsp;
						<h5  id="divDetail"></h5>
					</div>
					<hr>
					<h4 style="text-shadow: 2px 2px 5px gray;">FOOD DISH</h4>
					<center>
						<?
						if ($Food_Downs->value==0){?>
						<div id="line" style="background-color: rgba(231, 76, 60,0.5);">
							<br>
							<img class="img-fluid animated flipInX" style="height:130px; width: auto;" src="Pic/give.png"> 
							<p style="font-size: 20px;">อาหารหมด !!</p></div><?
						}
						if ($Food_Downs->value==1){?>
						<div id="line" style="background-color: rgba(88, 214, 141,0.5);">
							<br>
							<img class="img-fluid animated flipInY" style="height:130px; width: auto;" src="Pic/eat.png">
							<p style="font-size: 20px;">ในถังยังมีอาหารเหลืออยู่</p></div><?
						}?>
					</center>

					<hr>
					<h4 style="text-shadow: 2px 2px 5px gray;">FOOD TANK</h4>
					<center>
						<?
						if ($Food_Tanks->value==0){?>
						<div id="line" style="background-color: rgba(231, 76, 60,0.5);">
							<br>
							<img class="img-fluid animated flipInX" style="height:130px; width: auto;" src="Pic/give.png"> 
							<p style="font-size: 20px;">อาหารหมด !!</p></div><?
						}
						if ($Food_Tanks->value==1){?>
						<div id="line" style="background-color: rgba(88, 214, 141,0.5);">
							<br><img class="img-fluid animated flipInY" style="height:130px; width: auto;" src="Pic/eat.png">
							<p style="font-size: 20px;">ในจานยังมีอาหารเหลืออยู่</p></div><?
						}?>
					</center>
				</div>

				<div class="col-md-1 col-xs-0 "></div>

				<div class="col-md-6 col-xs-7" style="background-color: rgba(245, 183, 177, 0.6);" id="line">
					<div class="container-fluid" align="center"><hr>

						<h2 style="text-align: center; text-shadow: 2px 2px 5px gray;">MENU</h2><hr>

						<h3 style="text-align: left; text-shadow: 2px 2px 5px gray;">&nbsp;Mode Auto&nbsp;<i class="fa fa-sort-desc" aria-hidden="true"></i></h3>

						<p style="font-size: 18px; text-align: left;">&emsp;โหมดการทำงาน ในโหมดอัตโนมัติ เป็นการสั่งให้เครื่องทำการให้อาหารโดยอัตโมมัติ ในเวลาตามมาตราฐานของการให้อาหาร โดยจะให้อาหารก็ต่อเมื่ออาหารในจานหมด และรายงานสถานะของอาหาร ตามเวลาการให้อาหาร.</p>

						<button data-toggle="modal" data-target="#autos"  class="btn btn-success animated zoomIn"><i class="fa fa-hand-scissors-o" aria-hidden="true"></i>&nbsp;Select Mode Auto</button><hr>

						<h3 style="text-align: left; text-shadow: 2px 2px 5px gray;">&nbsp;Mode Feeding&nbsp;<i class="fa fa-sort-desc" aria-hidden="true"></i></h3>

						<p style="font-size: 18px; text-align: left;">&emsp;โหมดการทำงาน ในโหมดสั่งงานให้อาหาร เป็นการสั่งงานให้เครื่องทำการให้อาหารเมื่อผู้ใช้ได้ทำการเปิดใช้งานโหมด ณ ตอนที่เปิดใช้งานทันที โดยไม่สนใจว่าจะมีอาหารเหลืออยู่หรือไม ในโหมดนี้เครื่องจะทำการให้อาหารเพียงเท่านั้น.</p>

						<button data-toggle="modal" data-target="#feed" class="btn btn-info animated zoomIn";><i class="fa fa-thumbs-up"; aria-hidden="true;"></i>&nbsp;Select Mode Feeding</button><hr>

						<h3 style="text-align: left; text-shadow: 2px 2px 5px gray;">&nbsp;Mode Timer&nbsp;<i class="fa fa-sort-desc" aria-hidden="true"></i></h3>

						<p style="font-size: 18px;text-align: left;">&emsp;โหมดการทำงาน ในโหมดกำหนดเวลา เป็นการสั่งงานเครื่องให้ทำงานตามเวลาที่ผู้ใช้ได้กำหนดไว้ หน่วยเป็น 24 ชั่วโมง โดยโปรแกรมจะทำการให้อาหารก็ต่อเมือถึงเวลาที่กำหนดเท่านั้น และรายงานสถานะทุกๆ ครึ่งชั่วโมง.</p>

						<p style="text-align: center; font-size: 18px;">Ex. 18.30 นาที 5.5 นาที 9.0 นาที</p>

						กรอกเวลา : <input style="text-align: center; border: none;
						border-bottom: 2px solid red;" placeholder="6.0" type="text" id="in_timer" size="7" maxlength="5" name="txt1">&nbsp;นาที<br><br>

						<button data-toggle="modal" data-target="#timer" class="btn btn-dark animated zoomIn"; ><i class="fa fa-hand-o-right"; aria-hidden="true";></i>&nbsp;Select Mode Timer</button>
						<br><br>
					</div>
				</div>
				<div class="col-md-1 col-xs-0"></div>
			</div>
			<div class="footer container-fluid" style="background-color: rgba(231, 76, 60,0.5); display: block; text-align: center;" id="line">
				<p>Creater by: OTAMOS || Contact information: <a href="https://www.facebook.com/priyaphat.sriphueng">FB Priyaphat </a></p>
				<p>Copyright 2017-2018</p>
			</div>
		</div>
	</div>

</body>
</html>