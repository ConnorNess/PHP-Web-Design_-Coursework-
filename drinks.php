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
    $query = mysql_query("select * from drinks")
    ?>
/*
    <table>
        <tr class="header">
            <td>Id</td>
            <td>Title</td>
            <td>Date</td>
        </tr>
        <?php
           $i = 0;
           while ($row = mysql_fetch_array($query)) {
               echo "<td>".$row[drink]."</td>";
               echo "<td>".$row[percentage]."</td>";
               echo "<td>".$row[price]."</td>";
               echo "</tr>";
               $i = ($i==0) ? 1:0;
           }

        ?>
        </tr>
    </table>

    */
    
</body>

</html>