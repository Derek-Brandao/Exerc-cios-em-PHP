<html>
	<head>
	<meta charset="UTF-8">

        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <meta http-equiv="X-UA-Compatible" content="ie=edge">

        <link rel="stylesheet" type="text/css" href="main.css">

	<head>
	<body style="background-image: url('uauuuu.jpg'); height: 100%; overflow-y:hidden; overflow-x:hidden; background-size: cover;background-repeat: no-repeat;">

		<big><center><big><form action ="validar3.php" method="post" style="color: white; padding: 0; border: 3px dotted white; width: 400; height: 230px; position: relative; top: 300;border-radius: 20px;" id="form">
		<br/>
			Nome: <Input id="nome" type="text" name="nome" onchange="submitt()" required>
			<p></p>
			Senha: <input id="senha" type="password" name="senha" onchange="submitt()" required>
			<p></p>
			<p id="conf"></p>
			&nbsp;&nbsp;<input type="button" value="Login" id="btt" style="height:33px;width:135px;border-radius: 20px; border-style: solid" onclick="submitt()"> &nbsp;&nbsp;
			&nbsp;&nbsp;&nbsp;<input type="button" style="height:35px;width:135px;border-radius: 20px; border-style: solid" value="Criar Novo Usuário" id="btusuario" onclick="criarusuario()">
		</form></big></center></big>
		<form action="redefinirsenha2.php" method="post" style="position relative; top: 500px">
		<?php
		ini_set('display_errors', 0 );
		error_reporting(0);
		session_start();
		?>
		<input style="position: relative; top:224px; left: 880px;height:35px;width:150px;border-radius: 20px; border-style: solid;" type="submit" value="Esqueci Minha senha" id="btsenha"> <br/><br/>
        </form>
        <big><big><a href="index.html" style="position:relative; top:520px;color:white;">Voltar ao Menu</a></big></big>
				<?php
				session_start();
				ini_set('display_errors', 0 );
				error_reporting(0);
				if ($_SESSION["error"]==1) {
					echo "<center><h2 style='color: white; position: relative; top: 250px'>&nbsp;&nbsp;&nbsp;Usuário ou senha incorreta.</h2></center>";
					$_SESSION["error"] = 0;
				}
				else{
					$nick = $_POST['nome'];
					$pass = $_POST['pass'];
					$_SESSION["nick"] = $_POST['nome'];
					$_SESSION["pass"] = $_POST['pass'];
					
                }
                if ($_SESSION["des"]==1) {
                    echo "<center><h2 style='color: white; position: relative; top: 250px'>&nbsp;&nbsp;&nbsp;Acesso negado!! Usuário deslogado.</h2></center>";
                    $_SESSION["des"]=0;
                }
				?>
				<br/>
				<br/>
				<br/>
				<br/>
				<br/>
				<br/>
				<br/>
				<br/>
				<br/>
				<br/>
				<br/>
    			
				
		<script>
			function submitt(){
					myButton = document.getElementById("btt");
					myButton.type="submit";
			}
			function redefinirsen(){
				window.location.href = "redefinirsenha2.php";

			}
			function criarusuario() {
				window.location.href = "criarusuario2.php";
		}
		</script>
	</body>
	
</html>