 <?php
	 require "global.php";
	 require TPL."header.php";
	 require CLASSDIR."Database.php";
 ?>





<?php

	$req = "SELECT * FROM robes";
	$reponse = $db->query($req);
	while($donne = $reponse->fetch()){
		echo "<p style='color:red;'>".$donne['id'].$donne['nom'].$donne['description'].$donne['prix']."</p>";
		echo "<img src=./images/".$donne['image'].">";
		}
?>
 
<?php 
 	require TPL."footer.php";
 ?>