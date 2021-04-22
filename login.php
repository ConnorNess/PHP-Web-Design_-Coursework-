<!DOCTYPE>
<html>
<head>
    <title>40272321 - Login</title>
    <link rel="stylesheet" href="style.css">
</head>

<header>
    <?php 
        include 'navbar.php';
    ?>
</header>

<body>
<form action="logauthenticate.php" method="post">
    <?php
        include 'logvalidation.php';

        if(isLogFormValid())
            include 'logconfirmation.php';
        else
            include 'logform.php';
    ?>
</form>

<form action = "register.php" method="post">
    <?php
        include 'registervalidation.php';

        if(isRegisterFormValid())
            include 'registerconfirmation.php';
        else
            include 'registerform.php';
    ?>
</form>
</body>
</html>