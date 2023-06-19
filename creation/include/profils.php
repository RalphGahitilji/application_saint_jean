<?php
	session_start();
?>
<!DOCTYPE html>
<html lang="fr">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="../assets/font-awesome/css/all.css">
	<link rel="stylesheet" href="../assets/style.css">
	<link rel="stylesheet" href="../assets/bootstrap-5.2.3/css/bootstrap.min.css">
	<title>Document</title>
</head>
<body>
<?php include("header.php");?>
<!-- appel -->
<div class="bar">
	<ul>
	  <li><img src="../image/admin.png" alt="" width="80" height="80"><?= $_SESSION["user"]["email"] ?></li>
	  <li><a href="../index.php"><i class="fa fa-home"></i> Home</a></li>
	  <li><a href=""><i class="fa  fa-users"></i> Parents</a></li>
	  <li><a href=""><i class="fa fa-table" aria-hidden="true"></i>Moyennes</a></li>
	  <li><a href=""> <i class="fa fa-user" aria-hidden="true"> </i>  Administrateur adjoint</a></li>
	  <li><a href=""><i class="fa fa-graduation-cap" aria-hidden="true"></i> Elèves</a></li>
	</ul>
  </div>
  <div class="content">
  <h1>Profil de <?= $_SESSION["user"]["email"]  ?></h1>
  </div>
<!-- appel -->
<?php include("footer.php")?>
	<script src="../assets/js/script.js"></script>
	<script src="../assets/bootstrap-5.2.3/js/bootstrap.min.js"></script>
</body>
</html>