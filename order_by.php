
<h2 align="center">запчасти</h2>

<?php

try {
    $conn = new PDO("mysql:host=localhost;charset=utf8;dbname=zxc", "root", "");
    $sql = "SELECT * FROM spares order by price desc";
    $result = $conn->query($sql);

    echo "<table  align = center cellpadding-7 border=3;><tr><th>Название запчасти</th><th>Цена</th><th>Кол-во</th></tr>";
    while($row = $result->fetch()){
        echo "<tr>";
            echo "<td>" . $row["zapchast_name"] . "</td>";
            echo "<td>" . $row["Price"] . "</td>";
            echo "<td>" . $row["kolichestvo"] . "</td>";
            echo "</tr>";
    }
    echo "</table>";
}
catch (PDOException $e) {
    echo "Database error: " . $e->getMessage();
}
?>
</p>
