<form action="<?php $_SERVER['PHP_SELF']?>" method="post">

<table>
    <td>
        <label for="username"><h2>Username</h2></label>
        <input name="username">
        <p>
        <?php
        if (isUserValid() != true){
            displayUserWarning();
        }
        ?>
        </p>
    </td>
    <td>
        <label for="password"><h2>Password</h2></label>
        <input name="password">
        <p>
        <?php
        if (isPassValid() != true){
            displayPassWarning();
        }
        ?>
        </p>
    </td>
    <tr><td>
        <input name="submit" Value="Login" type="submit"/>
    </tr></td>
</table>