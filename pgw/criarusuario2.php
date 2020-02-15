<html>
	<head>
	<meta charset="UTF-8">

        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <meta http-equiv="X-UA-Compatible" content="ie=edge">

        <link rel="stylesheet" type="text/css" href="main.css">

	<head>
	<body style="background-image: url('uauuuu.jpg'); height: 100%; overflow-y:hidden; overflow-x:hidden; background-size: cover;background-repeat: no-repeat; block-size: aut;">
		
		<center><big><form action ="criaus2.php" method="post" style="color: white; padding: 0; border: 3px dotted white; width: 300; height: 246px; position: relative; top: 300;border-radius: 20px;" id="form">
		<br/>
			Nome:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<Input id="nome" type="text" name="nome" required>
			<p></p>
			Senha: &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input id="pass" type="password" name="pass" onchange="valide()" required>
			<p></p>
			Confirmação:&nbsp;&nbsp;&nbsp;<input id ="pass2" type="password" name="pass2" onmouseout="valide()" onmouseover="valide()" onfocus="valide()" required>
			<p id="conf"></p>
			Email:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<Input id="email" type="text" name="email" required>
			<p></p>
			<input type="button" value="Enviar" id="btt" style="height:35px;width:75px;border-radius: 20px; border-style: solid"  onclick="submitt()">
            </form></center></big>
            <big><big><a href="projeto3.php" style="position:relative; left: 10px;top:590px;color:white;">Voltar</a></big></big>
		<script>
			function valide(){
				var a = document.getElementById("pass").value;
				var b = document.getElementById("pass2").value;
					if(a != b && b != a) {
						document.getElementById("conf").innerHTML = "As senhas não coincidem.";
						document.getElementById("btt").disabled = true;
					} else {
						document.getElementById("conf").innerHTML = "";
						document.getElementById("btt").disabled = false;
					}
			}
			function submitt(){
				var a = document.getElementById("pass").value;
				var b = document.getElementById("pass2").value;
				if(a == b);
					myButton = document.getElementById("btt");
					myButton.type="submit";
			}
		</script>
	</body>
	
</html>