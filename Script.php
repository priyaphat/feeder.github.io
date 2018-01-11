
<?php
$Food_Downs = json_decode(file_get_contents('http://api.anto.io/channel/get/yK4Ek3TqiGWw5r1v52l5GoLiyTYE9S0DZZzr2Oha/Rabbit_Food/Food_Down'));
$Food_Tanks = json_decode(file_get_contents('http://api.anto.io/channel/get/yK4Ek3TqiGWw5r1v52l5GoLiyTYE9S0DZZzr2Oha/Rabbit_Food/Food_Tank'));
?>

<script type="text/javascript">

	
	

	$(function () {

		$('#btn1').click(function () {
			var text ="http://api.anto.io/channel/set/yK4Ek3TqiGWw5r1v52l5GoLiyTYE9S0DZZzr2Oha/Rabbit_Food/System/2";
			var xhttp = new XMLHttpRequest();
			xhttp.onreadystatechange = function() {
				if (this.readyState == 4 && this.status == 200) {
					document.getElementById("animal-info").innerHTML = this.responseText;
				}
			};
			xhttp.open("GET",text, true);
			xhttp.send();
			alert("เสร็จสิ้นคำสั่ง");
		});

		$('#btn2').click(function () {
			var text ="http://api.anto.io/channel/set/yK4Ek3TqiGWw5r1v52l5GoLiyTYE9S0DZZzr2Oha/Rabbit_Food/System/1";
			var xhttp = new XMLHttpRequest();
			xhttp.onreadystatechange = function() {
				if (this.readyState == 4 && this.status == 200) {
					document.getElementById("animal-info").innerHTML = this.responseText;
				}
			};
			xhttp.open("GET",text, true);
			xhttp.send();
			alert("เสร็จสิ้นคำสั่ง");
		});

		$('#btn_timer').click(function () {
			var timer = $('#in_timer').val();

			if (timer > -1 & timer < 24) {

				if (timer!='') { 

					if (isNaN(timer)) {}else{

						var text_timer ="http://api.anto.io/channel/set/yK4Ek3TqiGWw5r1v52l5GoLiyTYE9S0DZZzr2Oha/Rabbit_Food/Hour/"+timer;
						var http_timer = new XMLHttpRequest();
						http_timer.open("GET",text_timer, true);
						http_timer.send();
						var http_System ="http://api.anto.io/channel/set/yK4Ek3TqiGWw5r1v52l5GoLiyTYE9S0DZZzr2Oha/Rabbit_Food/System/3";
						var http = new XMLHttpRequest();
						http.open("GET",http_System, true);
						http.send();
						alert("สั่งงานสำเร็จ");
					}

				}}else{
					alert("กรุณา เช็คเวลาของท่าน !!");
				}




			});

	});
</script>

