<form action="<?php $_SERVER['PHP_SELF']?>" method="post">

<table>
    <td>
        <label for="logusername"><h2>Username</h2></label>
        <input name="logusername">
        <p>
        <?php
        if (isLogUserValid() != true){
            displayLogUserWarning();
        }
        ?>
        </p>
    </td>
    <td>
        <label for="logpassword"><h2>Password</h2></label>
        <input name="logpassword" type="password">
        <p>
        <?php
        if (isLogPassValid() != true){
            displayLogPassWarning();
        }
        ?>
        </p>
    </td>
    <tr><td>
        <input name="logsubmit" Value="Login" type="submit"/>
    </tr></td>
</table>