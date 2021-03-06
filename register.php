<!-- Code adapted from https://codeshack.io/secure-registration-system-php-mysql/ -->

<?php

$con = mysqli_connect('localhost', 'root', '', '40272321_cw2');
if (mysqli_connect_errno()) {
	exit('Failed to connect to MySQL: ' . mysqli_connect_error());
}

if (!isset($_POST['registerusername'], $_POST['registerpassword'])) {
	exit('Please complete the registration form!');
}
if (empty($_POST['registerusername']) || empty($_POST['registerpassword'])) {
	exit('Please complete the registration form');
}

if ($stmt = $con->prepare('SELECT id, password FROM accounts WHERE username = ?')) {
	$stmt->bind_param('s', $_POST['registerusername']);
	$stmt->execute();
	$stmt->store_result();
	
    if ($stmt->num_rows > 0) {
		echo 'username exists, please choose another!';
	} else {
        if ($stmt = $con->prepare('INSERT INTO accounts (username, password) VALUES (?, ?)')) {
        $stmt->bind_param('ss', $_POST['registerusername'], $_POST['registerpassword']);
        $stmt->execute();
		header('Location: login.php');
        } else {
            header('Location: login.php');
        }
	}
	$stmt->close();
} else {
	header('Location: login.php');
}
$con->close();
?>