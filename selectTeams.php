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
            <td class='d-flex justify-content-end align-items-start p-4'>
            <button type='button' class='btn btn-primary' data-bs-toggle='modal' data-bs-target='#exampleModal'>
                See more
            </button>
            </td>
        </tr>

        <div class='modal fade' id='exampleModal' tabindex='-1' aria-labelledby='exampleModalLabel' aria-hidden='true'>
            <div class='modal-dialog modal-dialog-centered'>
                <div class='modal-content'>
                    <div class='modal-header'>
                        <h5 class='modal-title' id='exampleModalLabel'>{$row["team_name"]}</h5>
                        <button type='button' class='btn-close' data-bs-dismiss='modal' aria-label='Close'></button>
                    </div>
                    <div class='modal-body'>
                        ...
                    </div>
                    <div class='modal-footer'>
                        <button type='button' class='btn btn-secondary' data-bs-dismiss='modal'>Close</button>
                        <button type='button' class='btn btn-primary'>Save changes</button>
                    </div>
                </div>
            </div>
        </div>
        ";
        
    }
}
?>