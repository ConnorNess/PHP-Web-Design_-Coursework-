<form action="<?php $_SERVER['PHP_SELF']?>" method="post">

<table>
    <td>
        <label for="registerusername"><h2>Username</h2></label>
        <input name="registerusername">
        <p>
        <?php
        if (isRegisterUserValid() != true){
            displayRegisterUserWarning();
        }
        ?>
        </p>
    </td>
    <td>
        <label for="registerpassword"><h2>Password</h2></label>
        <input name="registerpassword" type="password">
        <p>
        <?php
        if (isRegisterPassValid() != true){
            displayRegisterPassWarning();
        }
        ?>
        </p>
    </td>
    <tr><td>
        <input name="registersubmit" Value="Register" type="submit"/>
    </tr></td>
</table>