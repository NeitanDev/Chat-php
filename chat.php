<?php
include ("bd_conect.php");
$sql = mysqli_query($mysqli ,"SELECT * FROM chat1");

while($dado = mysqli_fetch_array($sql)){
	echo "<h3>".$dado['nome']."</h3>";
	echo "<h5>".$dado['mensagem']."</h5>";
}

// foreach ($sql->fetchAll() as $key) {
// 	echo "<h3>".$key['nome']."</h3>";
// 	echo "<h5>".$key['mensagem']."</h5>";
// }
?>