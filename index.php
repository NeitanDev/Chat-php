<?php
include("bd_conect.php");
?>
<!DOCTYPE html>
<html>
<head>
	<title>Chat-Simples</title>
	<script type="text/javascript">
		function ajax(){
			var req = new XMLHttpRequest();
			req.onreadystatechange = function(){
				if (req.readyState == 4 && req.status == 200) {
						document.getElementById('chat').innerHTML = req.responseText;
				}
			}
			req.open('GET', 'chat.php', true);
			req.send();
		}
	
		setInterval(function(){ajax();}, 1000);

 
	</script>
</head>
<body onload="ajax();">
	<div id="chat">

		
	</div>
	<form method="post" action="index.php">
		<input type="text" name="nome" placeholder="Insere o seu nome: ">
		<input type="text" name="mensagem" placeholder="mensagem">
		<input type="submit" value="Enviar">
		
	</form>
    <?php
    if($_POST){
		
        $nome = $_POST['nome'];
        //echo $nome;
		$mensagem = $_POST['mensagem'];
        $sql = "INSERT INTO chat1 SET nome= '$nome', mensagem= '$mensagem'";
        //echo $sql;
        mysqli_query($mysqli, $sql);
    }

	?>

</body>
</html>