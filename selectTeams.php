<?php
include_once('./includes/db.inc.php');

// $selected = [];
if (isset($_GET["submit"])) {
    foreach ($_GET as $key) {
        if ($key == "Search") {
            break;
        } else {
            echo $key;
            // array_push($selected, $key);
            // print_r($selected);
            $sql = "SELECT * FROM teams WHERE group_id IN ($key) ORDER BY group_id;";

        }
    }
    // $result = $connect->query($sql);
    header("Location: ./test.php?data changed ; ");
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

} else {
    // var_dump($_GET);
    $sql = "SELECT * FROM teams;";
}
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