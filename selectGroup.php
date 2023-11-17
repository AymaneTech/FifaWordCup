<?php
include('./includes/db.inc.php');


$groupstable = "SELECT * FROM groups;";
$groups_result = $connect->query($groupstable);

echo "<div class='d-flex filter-checkbox gap-5 mt-4'>
        <input name='all' type='checkbox' name='brands[]' value='all'>
        <strong style='font-size: 18px;' class='group-name-style'>Veiw all</strong>
    </div>";
while ($group_row = $groups_result->fetch_assoc()) {
    echo "<div class ='d-flex gap-5 mt-4'>
            <input name = " . $group_row["group_id"] . " type='checkbox' name='brands[]' value='" . $group_row['group_id'] . "'>
            <strong style='font-size: 18px;' class='group-name-style'>" . $group_row['group_name'] . "</strong>
        </div>";
}

?>