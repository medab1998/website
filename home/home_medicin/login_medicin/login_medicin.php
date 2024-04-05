<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Lato:wght@300;700&display=swap" rel="stylesheet">
    <title>Document</title>
    <link rel="stylesheet" href="login_medicin.css">
</head>
<body>
    <div class="login-box">
        
        <form class="login-boxx" action="login_medicin.php" method="post">
            <h1>Connexion</h1>
            <label>Email</label>
            <input type="email" placeholder="nom d'utilisateur ou email" required name="email">
            <label>Mot de passe</label>
            <input type="password" placeholder="mot de passe" required name="password">
            <!-- <a class="text" href="http://localhost/code-main/recover_psw.php" > Mot de passe oublié ?</a> -->
            <input type="submit" id="submit" name="login"  value="Connexion">
           
        </form>

    </div>
    
</body>
</html>


<?php


$con=mysqli_connect("localhost","root","","iotbd");
if(mysqli_connect_errno()){
	echo 'Échec de la connexion à la base de données';
}



session_start();


if(isset($_POST['login'])){
	
	$e = $_POST['email'];
	$pass = $_POST['password'];
	
	
	$qu = "select * from medecin where email = '".$e."' && password = '".$pass."'";
	
	if(mysqli_num_rows(mysqli_query($con, $qu)) > 0){
		
		$_SESSION['email'] = $e;
		
		header("Location:cpp.php");
	} else {
		
		echo '<div class="alert" role="alert ">
		Nom utilisateur ou mot de passe erroné
	</div>';
	}
	
	
}
?>
