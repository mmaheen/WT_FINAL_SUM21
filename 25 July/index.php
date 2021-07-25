<html>
	<head>
		
	</head>
	
	<body>
		<form>
			<input id="uname" onkeyup ="getVal(this)" type = "text" placeholder = "username"> <br>
			<span id= "op"> </span> <br>
			<input type ="password" placeholder ="Password"><br>
			
		</form>
		
		<button id= "btn_g" onclick = "viewGoogle()" > login with Google </button>
		<span onmouseover= "viewInfo()" onmouseover= "hideInfo()"> aiub </span>
		<p id ="aiub_info" style = "display:none;">
		American International University - Bangladesh
		</p>
		<form id= "g_form" style = "display:none;">
		<input type = "text" placeholder = "gmail"> <br>
		<input type ="password" placeholder = " Gmail password"> <br>
		</form>
		<script src="myjs.js"> </script>
		
	</body>
</html>