<?php
include("db.inc.php");


function selectTeams($connect){
    $sql = "SELECT * FROM teams;";
    $result = $connect->query($sql);

    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            print_r("{$row["team_name"]} <br>");
        }
    }

}

function selectGRoups ($connect){
    $sql = "SELECT * FROM groups;";
    $result = $connect->query($sql);
    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            print_r("{$row["group_name"]} <br>");
        }
    }
}
