<?php

$delete = mysql_query("DELETE FROM accounts WHERE id = '$id'", $conn);

if (mysqli_query($con, $sql)) {
    mysqli_close($con);
    header('Location: login.php'); //If book.php is your main page where you list your all records
    exit;
} else {
    echo "Error deleting record";
}
?>