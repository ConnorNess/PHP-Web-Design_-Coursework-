<!DOCTYPE>
<html>
<head>
    <title>40272321 - Home</title>
    <link rel="stylesheet" href="style.css">
</head>

<header>
    <ul>
        <li><a href="drinks.php">Drinks</a></li>
        <li><a>Social Media</a></li>
        <li><a>Information</a></li>
        <li><a>Account</a></li>
      </ul>
</header>

<body>
    <?php
        include 'logvalidation.php';

        if(isLogFormValid())
            include 'logconfirmation.php';
        else
            include 'logform.php';
    ?>
    <?php
        include 'registervalidation.php';

        if(isRegisterFormValid())
            include 'registerconfirmation.php';
        else
            include 'registerform.php';
    ?>
</body>
</html>