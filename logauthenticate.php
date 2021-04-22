<!-- Code adapted from https://codeshack.io/secure-login-system-php-mysql/ -->

<?php
session_start();

$con = mysqli_connect('localhost', 'root', '', '40272321_cw2');
if ( mysqli_connect_errno() ) {
    exit('Failed to connect to MySQL: ' . mysqli_connect_error());
}

if ( !isset($_POST['logusername'], $_POST['logpassword']) ) {
	exit('Please fill both the username and password fields!');
}

if ($stmt = $con->prepare('SELECT id, password FROM accounts WHERE username = ?')) {
	$stmt->bind_param('s', $_POST['logusername']);
	$stmt->execute();
	$stmt->store_result();

    if ($stmt->num_rows > 0) {
        $stmt->bind_result($id, $password);
        $stmt->fetch();
        if ($_POST['logpassword'] === $password) {
            session_regenerate_id();
            $_SESSION['loggedin'] = TRUE;
            $_SESSION['name'] = $_POST['logusername'];
            $_SESSION['id'] = $id;
            header('Location: account.php'); //Account page is only accessable to logged in users
            exit();
        } else {
            header('Location: account.php'); //Account redirects to the login page if no user is logged in
        }
    } else {
        header('Location: account.php');
    }

	$stmt->close();
}
?>