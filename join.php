<h2 align="center">запчасти</h2>

<?php
try {
    $conn = new PDO("mysql:host=localhost;charset=utf8;dbname=zxc", "root", "");
    $sql = "SELECT firma_postav.firma, postavshik.city_postavshika, postavshik.street_postavshika from postavshik JOIN firma_postav ON postavshik.id_firmi=firma_postav.id_firmi";
    $result = $conn->query($sql);

    echo "<table  align = center cellpadding-7 border=3;><tr><th>Фирма</th><th>Город</th><th>Улица</th></tr>";
    while($row = $result->fetch(PDO::FETCH_ASSOC)){
        echo "<tr>";
        echo "<td>" . $row["firma"] . "</td>";
        echo "<td>" . $row["city_postavshika"] . "</td>";
        echo "<td>" . $row["street_postavshika"] . "</td>";
            echo "</tr>";
    }
    echo "</table>";
}
catch (PDOException $e) {
    echo "Database error: " . $e->getMessage();
}
?>
</p>
