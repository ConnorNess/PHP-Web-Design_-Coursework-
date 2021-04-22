<form action="<?php $_SERVER['PHP_SELF']?>" method="post">

<table>
    <td>
        <label for="logusername"><h2>Username</h2></label>
        <input name="logusername">
    </td>
    <td>
        <label for="logpassword"><h2>Password</h2></label>
        <input name="logpassword" type="password">
    </td>
    <tr><td>
        <input name="logsubmit" Value="Login" type="submit"/>
    </tr></td>
    <?php
        if ((isLogPassValid() != true) || (isLogUserValid() != true)){
            echo "<tr>";
            displayWarning();
            echo "</tr>";
        }
    ?>
</table>