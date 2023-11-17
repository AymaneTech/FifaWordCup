<?php
include "./includes/db.inc.php";
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

    <section class="groups">
        
<h2 class="text-center py-5">Morocco 2030 Groups</h2>
        <div class="filter d-flex justify-content-center mb-5">
            <ul class="filter-list d-flex justify-content-center list-unstyled gap-2 flex-wrap">
                <li class="filter-item  py-2 px-2"><a class="text-decoration-none active" href="#">View All</a></li>
                <li class="filter-item  py-2 px-2"><a class="text-decoration-none">Group 1</a></li>
                <li class="filter-item  py-2 px-2"><a class="text-decoration-none">Group 2</a></li>
                <li class="filter-item  py-2 px-2"><a class="text-decoration-none">Group 3</a></li>
                <li class="filter-item  py-2 px-2"><a class="text-decoration-none">Group 4</a></li>
                <li class="filter-item  py-2 px-2"><a class="text-decoration-none">Group 5</a></li>
                <li class="filter-item  py-2 px-2"><a class="text-decoration-none">Group 7</a></li>
                <li class="filter-item  py-2 px-2"><a class="text-decoration-none">Group 8</a></li>
            </ul>
        </div>
        <?php
        include "./includes/selectGroups.php";
        ?>
    </section>
    <script src="./assets/js/index.js"></script>
</body>

</html>