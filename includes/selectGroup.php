<?php
include('./includes/db.inc.php');


$groupstable = "SELECT * FROM groups;";
$groups_result = $connect->query($groupstable);

while ($group_row = $groups_result->fetch_assoc()) {
    echo "<div class ='d-flex gap-5'>
            <input type='checkbox' name='brands[]' value='" . $group_row['group_id'] . "'>
            <strong style='font-size: 18px;' class='group-name-style'>" . $group_row['group_name'] . "</strong>
        </div>";
}

?>