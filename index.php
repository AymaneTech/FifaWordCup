<?php
include "./includes/db.inc.php";
include "./includes/selectData.inc.php"
    ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <link rel="stylesheet" href="./assets/css/style.css">

    <title>Document</title>
</head>


<body>
    <nav class="navbar navbar-expand-lg navbar-light position-absolute w-100">
        <div class="container">
            <a class="navbar-brand text-white fw-bold" href="#"><img src="./assets/images/logo.avif" alt="logo"> Fifa
                World Cup</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-end" id="navbarSupportedContent">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link active" href="#">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Teams</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link" href="#">Groups</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">About</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <section class="hero-section d-flex align-items-center text-white">
        <div class="container d-flex flex-column gap-3">
            <h1 class="main-heading">
                FIFA WORLD CUP 26™ <br> QUALIFIERS
            </h1>
            <p class="hero-desc">
                All the latest from the FIFA World Cup 26™ qualifiers,<br> including news, videos, features and live
                data.
            </p>
            <button class="hero-btn fw-bold text-black bg-white">Discover</button>
        </div>
    </section>
    <section class="groups">
        <h2 class="text-center py-5">Morocco 2030 Groups</h2>
        <?php

        function display_groups($index, $connect)
        {
            $sql = "SELECT * FROM teams order by group_id;";
            $result = $connect->query($sql);
        
            echo "<div class='container-fluid groups-cards d-flex justify-content-between flex-wrap'>";
            for ($i = 0; $i < 8; $i++) {
                for ($j = 0; $j < 4; $j++) {
                    $row = $result->fetch_assoc();
                    echo "
                        <div class='card p-3 my-2'>
                            <h3 class='text-center'> Group {$row["group_id"]}</h3>
                            <div class='groups-team d-flex flex-column gap-4 py-2'>
                                ";
    }
}

                echo "
                <div class='card p-3 my-2'>
                    <h3 class='text-center'> Group {$row["group_id"]}</h3>
                    <div class='groups-team d-flex flex-column gap-4 py-2'>


                    ";

                print_r($team_result);
                for ($i = 0; $i < count($team_result); $i++) {
                    print_r($team_result[$i]);
                }
                echo "
                        <div class='single-team d-flex justify-content-around border-bottom'>
                            <img src='./assets/images/flags/algerie.png' alt='country flag'>
                            <h4 class='team-name'>{$row["team_name"]}</h4>
                        </div>
                        <div class='single-team d-flex justify-content-around border-bottom'>
                            <img src='./assets/images/flags/algerie.png' alt='country flag'>
                            <h4 class='team-name'>{$row["team_name"]}</h4>
                        </div>
                        <div class='single-team d-flex justify-content-around border-bottom'>
                            <img src='./assets/images/flags/algerie.png' alt='country flag'>
                            <h4 class='team-name'>{$row["team_name"]}</h4>
                        </div>
                        <div class='single-team d-flex justify-content-around border-bottom'>
                            <img src='./assets/images/flags/algerie.png' alt='country flag'>
                            <h4 class='team-name'>{$row["team_name"]}</h4>
                        </div>
                    </div>
                </div>
                ";


                $index++;
            }
            echo "</div>";
        }


        display_groups($index, $connect);

        ?>

    </section>
</body>

</html>