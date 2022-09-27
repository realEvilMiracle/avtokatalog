<h2 align="center">запчасти</h2>

<?php
try {
    $conn = new PDO("mysql:host=localhost;charset=utf8;dbname=zxc", "root", "");
    $sql = "SELECT * from postavshik where city_postavshika = 'Ногинск'";
    $result = $conn->query($sql);

    echo "<table  align = center cellpadding-7 border=3;><tr><th>Город</th><th>Улица</th><th>Дом</th></tr>";
    while($row = $result->fetch()){
        echo "<tr>";
        echo "<td>" . $row["city_postavshika"] . "</td>";
        echo "<td>" . $row["street_postavshika"] . "</td>";
        echo "<td>" . $row["House_postavshika"] . "</td>";
            echo "</tr>";
    }
    echo "</table>";
}
catch (PDOException $e) {
    echo "Database error: " . $e->getMessage();
}
?>
</p>
