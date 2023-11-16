<?php
include('./includes/db.inc.php');

$sql = "SELECT * FROM teams;";
$result = $connect->query($sql);

while ($row = $result->fetch_assoc()) {
    echo "<tr>
            <th scope='row'>{$row["team_id"]}</th>
            <td>
                <img src='{$row["flag_path"]}' alt=''>
            </td>
            <td>{$row["team_name"]}</td>
            <td>{$row["team_continent"]}</td>
            <td>
                <input type='checkbox' name='team_checkbox[]' value='{$row["team_id"]}'>
            </td>
        </tr>";
}
?>