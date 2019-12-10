<!DOCTYPE html>
<html>
<head>
    <title> formlaire de contact</title>

    <link rel="stylesheet" href="../css/log.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  <!-- Bootstrap core CSS -->                                                                                                                                                                                                                                   
  <link href="./tmp/css/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Custom fonts for this template -->
  <link href="../tmp/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="../tmp/https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
  <link href='../tmp/https://fonts.googleapis.com/css?family=Kaushan+Script' rel='stylesheet' type='text/css'>
  <link href='../tmp/https://fonts.googleapis.com/css?family=Droid+Serif:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
  <link href='../tmp/https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700' rel='stylesheet' type='text/css'>

  <!-- Custom styles for this template -->
  <link href="./tmp/css/agency.min.css" rel="stylesheet">
</head>
<body>
        <div class="contient">
			<div class="contact">
				<h1>Se connecter</h1>
			</div>            

			<div class="contact-form">
                <form id="contact-form" method="post" action="../users/acceuil.php">
                    <div class="error"></div>
                    <input type="email" name="email" class="form-control" value="" placeholder="Votre email"required>
				
<br>
                    <input type="password" name="mdp" class="form-control" value="" placeholder="Votre mot de passe" required>

  
					<input type="submit" id="envoyer" class="form-control submit" value="ENVOYER">
				</form>
				
			</div>
        </div>
   
       
    </body>
    </html>