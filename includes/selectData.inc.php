<?php
include("db.inc.php");

$sql = "SELECT * FROM teams order by group_id;";
$result = $connect->query($sql);

for ($i = 0; $i < 8; $i++) {
    for ($j = 0; $j < 4; $j++) {
        $row = $result->fetch_assoc();
        echo "{$row["group_id"]}  =  {$row["team_name"]} <br>";
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2 class="text-center py-5">Morocco 2030 Groups</h2>
    <?php
    echo "<div class='container-fluid groups-cards d-flex justify-content-between flex-wrap'>";

for ($i = 1; $i <= 8; $i++) {
    echo "groupe {$i}";

    // Check if there is data available in the result set
    for ($j = 0; $j < 4 && ($row = $result->fetch_assoc()); $j++) {
        echo "
            <div class='single-team d-flex justify-content-around border-bottom'>
                <img src='./assets/images/flags/algerie.png' alt='country flag'>
                <h4 class='team-name'>{$row["group_id"]} {$row["team_name"]}</h4>
            </div>
        ";
    }
}

echo "</div>";

     ?>
</body>
</html>
