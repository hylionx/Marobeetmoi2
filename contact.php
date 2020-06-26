<?php 
require "global.php";
require TPL."header.php";

?>

<head>
<title>Contact</title>	</head>

	<div class="contact"> 
		<div class="container">
			<h3 class="agileits-title">Contactez nous</h3> 
			<div class="contact-agileinfo">
				<div class="col-md-7 contact-right">

                  <?php
require('./class/Database.php');



                    //récupération des champs
                  if(isset($_POST['envoyer'])){
                    Session_Start();

                    //reception des données du
                      $nom=$_POST['nom'];
                      $email=$_POST['email'];
                      $telephone=$_POST['telephone'];
                      $message=$_POST['message'];
                      echo "Votre message a bien etait envoyer ";

                      $insert =$db->prepare("INSERT INTO contact (nom,email,telephone,message) VALUE (?,?,?,?)");
                      $insert->execute(array($nom, $email, $telephone, $message));
                    }
                    ?>

                    <form action="#" method="post">
						<input type="text" name="nom" placeholder="nom" required="">
						<input type="text" class="email" name="email" placeholder="email" required="">
						<input type="text" name="telephone" placeholder="telephone" required="">
						<textarea name="message" placeholder="message" required=""></textarea>
						<input type="submit" name="envoyer" value="Envoyer" > 
					</form>
					

				</div>
				<div class="col-md-5 contact-left">
					<div class="adresse">
						<h5>Adresse:</h5>
						<p><i class="glyphicon glyphicon-home"></i> 9 rue Kellermnann, 59200 Tourcoing </p>
					</div>
					<div class="address address-mdl">
						<h5>Phones:</h5>
						<p><i class="glyphicon glyphicon-earphone"></i> 03 20 25 55 80</p>
						<p><i class="glyphicon glyphicon-phone"></i> 07 69 68 50 84</p>
					</div>
					<div class="address">
						<h5>Email:</h5>
						<p><i class="glyphicon glyphicon-envelope"></i> <a href="mailto:info@example.com">hylia.boudahba@gmail.com</a></p>
					</div>
				</div>
				<div class="clearfix"></div>
			</div>
		</div> 
	</div>
	<div class="agileits-w3layouts-map">
		<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2525.34130733589!2d3.154146515276666!3d50.732158274907924!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47c32ed84523f199%3A0xf524a1e16b397ab1!2s9+Rue+Kellerman%2C+59200+Tourcoing!5e0!3m2!1sfr!2sfr!4v1547856193918"allowfullscreen></iframe>
	</div>
	<!-- //contact -->	 
	<!-- w3-agilesale --> 
	<div class="w3-agilesale welcome"> 
		<div class="container">  
			
			<p><a href="contact.php">Contactez nous</a></p>
		</div> 
	</div> 
	<!-- //w3-agilesale -->
<?php require TPL."footer.php";?>