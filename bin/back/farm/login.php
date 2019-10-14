<?php

$name = $_POST['name'];
$passwd = $_POST['passwd'];

$dbh = new PDO('mysql:host=localhost;dbname=farm', 'root');

$stmt = $dbh->prepare("SELECT id, name, passwd, v FROM users WHERE name=:name"); 
$stmt->execute(array(':name' => $name));
$user = $stmt->fetch();

if (!empty($user))
{
	if (password_verify($passwd, $user['passwd']))
	{
		session_start();
		$_SESSION['id'] = $user['id'];

		if ($user['v'])
		{
			$stmt = $dbh->prepare("UPDATE users SET v = :v WHERE id = :id");
			$stmt->execute(array(':v' => '0', ':id' => $_SESSION['id']));

			header('Location: /learn.php');
		}
		else
		{
			header('Location: /info.php');			
		}
	}
	else
	{
		header('Location: /login.php');	
	}
}
else
{
	header('Location: /');
}

?>