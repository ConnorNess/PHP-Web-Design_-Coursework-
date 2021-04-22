<html> 
<head>
    <title>40272321 - Drinks</title>
    <link rel="stylesheet" href="style.css">
</head>

<header>
    <?php 
        include 'navbar.php';
    ?>
</header>


<body>
    <?php
        $con = mysqli_connect('localhost', 'root', '', '40272321_cw2');
        if ( mysqli_connect_errno() ) {
            exit('Failed to connect to MySQL: ' . mysqli_connect_error());
        }
        //$query = mysql_query("select * from drinks")

        $sql = "SELECT drink, percentage, price FROM drinks";
        $result = $con->query($sql);

        if ($result->num_rows > 0) {
            echo "<table>";
        // output data of each row
        while($row = $result->fetch_assoc()) {
            echo "<tr>";
            echo "<td>".$row["drink"]."</td>";
            echo "<td>".$row["percentage"]."%</td>";
            echo "<td>£".$row["price"]."</td>";
            echo "<td> <input name=\"addtocart\" Value=\"Add to cart\" type=\"submit\"> </td></tr>";
        }
        echo "</table>";
        } else {
        echo "0 results";
        }
        $con->close();
    ?>
</body>
</html>