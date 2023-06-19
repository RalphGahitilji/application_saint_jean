<!DOCTYPE html>
<html lang="fr">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="assets/bootstrap-5.2.3/css/bootstrap.min.css">
	<link rel="stylesheet" href="assets/font-awesome/css/all.css">
	<link rel="stylesheet" href="assets/style.css">
	<title>Document</title>
</head>
<body>
<?php include("controller/header.php");?>

<section id="section-one">
    <div class="container login-modal text-center">
      <!-- <div class="row close-btn">
        <a href="#">&times;</a>
      </div> -->
      <h1>Connexion</h1>
      <form action="include/connexion_admin.php" method="POST">
        <!-- Email -->
        <div class="form-control">
          <input type="email" name="email" class="form-control mise" placeholder="Email" required>
        </div>
        <!-- Password -->
        <div class="form-control">
          <input type="password" name="password" class="form-control mise" placeholder="Mot de passe" id="inputPassword" required>
        </div>
		<a href="#" class="sign-in">Inscription</a>
		<button type="submit" class="btn btn-primary">Connexion</button>
      </form>
    </div>
</section>
<section id="section-two bg-success">
    <div class="container inscription-modal text-center">
      <!-- <div class="row close-btn">
        <a href="#">&times;</a>
      </div> -->
      <h1>Inscription</h1>
      <form action="include/inscription_admin.php" method="POST">
        <!-- username -->
        <div class="form-control">
          <input type="text" name="username" class="form-control mise" placeholder="username" required>
        </div>
        <!-- Email -->
        <div class="form-control">
          <input type="email" name="email" class="form-control mise" placeholder="Email" required>
        </div>
        <!-- Password -->
        <div class="form-control">
          <input type="password" name="pass" class="form-control mise" id="inputPassword" placeholder="Mot de passe">
        </div>
        <!-- Confirm Password -->
        <div class="form-control">
          <input type="password" name="pass2" class="form-control mise" id="inputPassword" placeholder="Confirmer le mot de passe">
        </div>
        <a href="#" class="sign-up">Connexion</a>
        <input type="checkbox" name="checkbox" value="check" id="agree" !> 
        <p>I have read and agree to the Terms and Conditions and Privacy Policy</p>
		<button type="submit" class="btn btn-primary">Inscription</button>
      </form>
    </div>
  </section>
  <?php include("controller/footer.php");?>
  <script src="assets/js/script.js"></script>
  <script src="assets/bootstrap-5.2.3/js/bootstrap.min.js"></script>
</body>
</html>