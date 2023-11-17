<?php
include_once('./includes/db.inc.php');

$sql = "SELECT * FROM teams;";
$result = $connect->query($sql);

function display_team_table($result)
{
    while ($row = $result->fetch_assoc()) {
        echo "<tr>
            <th scope='row'>{$row["team_id"]}</th>
            <td>
                <img src='{$row["flag_path"]}' alt=''>
            </td>
            <td>{$row["team_name"]}</td>
            <td>{$row["team_continent"]}</td>
        </tr>";
    }
}
?>