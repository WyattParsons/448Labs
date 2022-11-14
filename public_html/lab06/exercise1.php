<head>

</head>
<body>

<!-- Create a PHP program that displays a 100x100 multiplication table.  -->
<?php
    echo "<table border='1'>";
    // create the top row of the table
    echo "<tr><td></td>";
    for ($i = 1; $i <= 100; $i++) {
        echo "<td>$i</td>";
    }
    echo "</tr>";
    // create the left column
    for ($i = 1; $i <= 100; $i++) {
        echo "<tr><td>$i</td>";
        // create the rest of the table
        for ($j = 1; $j <= 100; $j++) {
            echo "<td>" . $i * $j . "</td>";
        }
        echo "</tr>";
    }
   echo "</table>";
?>
</body>