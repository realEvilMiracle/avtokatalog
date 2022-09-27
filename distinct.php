<h2 align="center">запчасти</h2>

<?php
try {
    $conn = new PDO("mysql:host=localhost;charset=utf8;dbname=zxc", "root", "");
    $sql = "SELECT DISTINCT First_Name from orders order by First_Name desc";
    $result = $conn->query($sql);

    echo "<table  align = center cellpadding-7 border=3;><tr><th>Имя</th></tr>";
    while($row = $result->fetch()){
        echo "<tr>";
            echo "<td>" . $row["First_Name"] . "</td>";
            echo "</tr>";
    }
    echo "</table>";
}
catch (PDOException $e) {
    echo "Database error: " . $e->getMessage();
}
?>
</p>
