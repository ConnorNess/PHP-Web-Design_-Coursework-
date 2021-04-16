<!DOCTYPE>
<html>
<head> 40272321 - Login </head>
<link rel="stylesheet" href="style.css">

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

        if(isFormValid())
            include 'logconfirmation.php';
        else
            include 'logform.php';
    ?>
</body>
</html>