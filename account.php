<?php

session_start();

if (!isset($_SESSION['loggedin'])) {
	header('Location: login.php');
	exit;
}

$con = mysqli_connect('localhost', 'root', '', '40272321_cw2');
if (mysqli_connect_errno()) {
	exit('Failed to connect to MySQL: ' . mysqli_connect_error());
}

$stmt = $con->prepare('SELECT password, username FROM accounts WHERE id = ?');

$stmt->bind_param('i', $_SESSION['id']);
$stmt->execute();
$stmt->bind_result($password, $username);
$stmt->fetch();
$stmt->close();
?>

<!DOCTYPE>
<html>
<head>
    <title>40272321 - Account</title>
    <link rel="stylesheet" href="style.css">
</head>

<header>
    <?php 
        include 'navbar.php';
    ?>
</header>

<body>
    <table>
        <tr>
            <td><label for="logusername"><h2>Username</h2></label></td>
            <td><h3><?=$_SESSION['name']?></h3></td>
        </tr>
        <tr>
            <td>
                <form action = "logout.php">
                    <input name="logout" Value="Logout" type="submit"/>
                </form>
            </td>
        </tr>
    </table>
</body>
</html>