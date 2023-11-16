<?php
include("db.inc.php");

$sql = "SELECT * FROM teams order by group_id;";
$result = $connect->query($sql);

?>

        <h2 class="text-center py-5">Morocco 2030 Groups</h2>
    <?php
    echo "<div class='container-fluid groups-cards d-flex justify-content-between flex-wrap'>";

    for ($i = 1; $i <= 8; $i++) {
        echo "
                <div class='card p-3 my-2'>
                    <h3 class='text-center'> Group {$i}</h3>";
        for ($j = 0; $j < 4; $j++) {
            $row = $result->fetch_assoc();
            // var_dump($row); 
            echo "
            <div class='single-team d-flex align-items-center gap-3  border-bottom'>
                <img class='tex-start' src='{$row["flag_path"]}' alt='country flag'>
                <h4 class='team-name'> {$row["team_name"]}</h4>
            </div>
        ";
        }
        echo "</div>";
    }
    echo "</div>";
    ?>
