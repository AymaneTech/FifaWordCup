
<!-- include "./includes/db.inc.php"; -->
<?php
include("./selectTeams.php");
// var_dump($result);


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


<nav class="navbar navbar-expand-lg navbar-light position-absolute w-100">
    <div class="container">
        <a class="navbar-brand text-white fw-bold" href="#"><img src="./assets/images/logo.avif" alt="logo"> Fifa World
            Cup</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse justify-content-end" id="navbarSupportedContent">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" href="#">Home</a>
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

<section class="hero-section d-flex align-items-center text-white mb-5">
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

<section class="teams container">
    <div class="row">
        <h2 class="text-center py-5">Morocco 2030 Teams</h2>
        <div class='col-2 menu d-flex flex-column align_items justify-content-start mt-5'>

        <form action="./selectTeams.php" method="get">
            <?php
            include("./selectGroup.php");
            ?>
            <input type="submit" value="Search" name="submit">
        </form>
        </div>


        <div class="team col-10">
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Flag</th>
                        <th scope="col">Country</th>
                        <th scope="col">Continent</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    display_team_table($result);
                        ?>
                </tbody>
            </table>
        </div>
    </div>
</section>

<script src="./assets/js/index.js"></script>
</body>

</html>