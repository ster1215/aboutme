<!DOCTYPE html>
<html lang="zh-TW">
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title>簡介</title>
		<style type="text/css">

		* { font-family:"標楷體"; margin-left:auto; margin-right:auto; }

		h1 {color:blue; font-size:60px;}

		h2 {color:#33ff33; font-size:40px;}


		</style>
		<script>
			function change1() {
	  			document.getElementById("pic").src = "mountain.jpg";
	  			document.getElementById("h2text").innerText = "靜宜資管";
			}

			function change2() {
	  			document.getElementById("pic").src = "cliff.jpg";
	  			document.getElementById("h2text").innerText = "資管4B";
			}
		</script>
	
	</head>
	<body>
		<table width="70%">
			<tr>
				<td>
					<img src="cliff.jpg" width="90%" id="pic" onmouseover="change1()" onmouseout="change2()"></img>
				</td>
				<td>
					<h1>林冠廷</h1>
					<h2 id="h2text"></h2>
				</td>
			</tr>
		</table>
		<table width="70%" border="1">
			<tr>
				<td>
					學校網頁：<a href="https://www.pu.edu.tw/">https://www.pu.edu.tw/</a><br>
					Tel: 0900268522</h3><br>
					E-Mail: cs06431@gmail.com<br>
				</td>
				<td>
					大象席地而坐電影配樂<br>
					<audio controls>
						<source src="elephant.mp3" type="audio/mP3">
					</audio><br>
				</td>
				<td>
					不要去臺灣<br>
					<iframe src="https://www.youtube.com/embed/pW88QFpHXa8" allowfullscreen></iframe>
				</td>
			</tr>
			<tr>
				<td>
					<iframe width="350" height="430" allow="microphone;" src="https://console.dialogflow.com/api-client/demo/embedded/b1ee8325-d0dc-4e52-acdd-5d4865c3fa24"></iframe>

				</td>
				<td>
					<a href="index.html">回到首頁</a> 
				</td>	
			</tr>
		</table>
			<?php echo date("Y-m-d") ?>	
	</body>
</html>