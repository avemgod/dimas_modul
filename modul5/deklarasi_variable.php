<!DOCTYPE html>
<html>
<head>
    <title>Volume Tabung Dimas</title>
</head>
<body>
    <?php
        $r = 7; 
        $t = 10; 
        $phi = 3.14;

        $volume = $phi * $r * $r * $t;

        echo "Jari-jari tabung (r): " . $r . " cm<br>";
        echo "Tinggi tabung (t): " . $t . " cm<br>";
        echo "Volume tabung adalah: " . $volume . " cm³<br>";
    ?>
</body>
</html>
