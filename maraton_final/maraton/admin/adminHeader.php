<?php
session_start();
if (!isset($_SESSION['loggedin'])) {
    $_SESSION['msg'] = "Najskor sa musis prihlasiť";
    header('location: login.php');
}

if ($_SESSION["type"]!="admin") {
    header('location: user.php');
}

?>




<header class="navbar navbar-dark sticky-top bg-dark flex-md-nowrap p-0 shadow">
    <a class="navbar-brand col-md-3 col-lg-2 me-0 px-3 fs-6" href="#">Administrácia - Maratón</a>
    <button class="navbar-toggler position-absolute d-md-none collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#sidebarMenu" aria-controls="sidebarMenu" aria-expanded="false"
            aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="navbar-nav">
        <div class="nav-item text-nowrap">
            <a class="nav-link px-3" href="logout.php">Odhlásiť</a>
        </div>
    </div>
</header>


<div class="container-fluid">
    <div class="row">
        <nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-body-tertiary sidebar collapse">
            <div class="position-sticky pt-3 sidebar-sticky">
                <ul class="nav flex-column">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="dashboard.php">
                            <span data-feather="home" class="align-text-bottom"></span>
                            Dashboard
                        </a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="add.php">
                            <span data-feather="home" class="align-text-bottom"></span>
                            Pridať bežca
                        </a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="addNews.php">
                            <span data-feather="home" class="align-text-bottom"></span>
                            Pridať novinku
                        </a>
                    </li>


                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="addFaq.php">
                            <span data-feather="home" class="align-text-bottom"></span>
                            Pridať FAQ
                        </a>
                    </li>


                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="viewContact.php">
                            <span data-feather="home" class="align-text-bottom"></span>
                            Zobraz správy
                        </a>
                    </li>

                </ul>
            </div>
        </nav>