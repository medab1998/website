
<form method="post">

<button type="submit" name="logout">logout</button>

</form>

<?php

session_start();


  if(!isset($_SESSION['email'])){
	
  	header("Location: index.php");
  	exit();
  }

 echo 'welcome ' . $_SESSION['email'];

if(isset($_POST['logout'])){
	unset($_SESSION['email']);
	header("Location: http://localhost/code-main/index.php");
	exit();
}
?>


