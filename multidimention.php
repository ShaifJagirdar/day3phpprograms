<?php

$products = [
    ["Product ID", "Name", "Price", "Quantity"],
    ["P001", "Laptop", 1200.00, 10],
    ["P002", "Mouse", 25.00, 50],
    ["P003", "Keyboard", 75.00, 30],
    ["P004", "Monitor", 300.00, 15]
];

?>

<table border="1">
    <tbody>
        <tr>
            <?php
            foreach($products as $row){
                echo "<tr>";
                foreach($row as $eachdata){
                    echo "<td>" . $eachdata ."</td>";
                }
                echo "</tr>";
            }
            ?>
        </tr>
    </tbody>
</table>