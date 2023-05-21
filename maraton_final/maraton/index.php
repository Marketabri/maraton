<?php
include('inc/head.php');

    


$active = "index";
include('inc/menu.php');

?>
<!DOCTYPE html>
<html lang="sk">
<head>
<link rel="stylesheet" href="css/style.css">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div class="col-lg-8 mx-auto p-4 py-md-5">

        <main>
            <h1 class="text-body-emphasis text-center">Maratón 2023 Oravská Lesná</h1>
            <p class="fs-5 col-md-8">
                Poďte si s nami zabehať! <br> Pre všetkých nadšedcov behu.
            </p>

            <div class="mb-5">
                <a href="cennik.php" class="btn btn-primary btn-lg px-4">Info</a>
            </div>

            <hr class="col-3 col-md-2 mb-5">

            <div class="row g-5">
                <div class="col-md-6">
                    <h2 class="text-body-emphasis">Termíny</h2>
                    <p>Beh sa uskutoční dňa 25.8.2023 </p>
                    <ul class="list-unstyled ps-0">
                        <li>
                            Stretneme sa o 10:00 hodine na štadióne v Oravskej Lesnej
                        </li>

                    </ul>
                </div>

                <div class="col-md-6">
                    <h2 class="text-body-emphasis">Registrovaný bežci</h2>
                    <p>Posledných 5 prihlásených</p>
                    <ul class="list-unstyled ps-0">

                        <?php

                        $sql = "SELECT * FROM runner ORDER BY datetime DESC limit 5";

                        $result = mysqli_query($conn, $sql) or die("query failed.");

                        if (mysqli_num_rows($result) > 0) {
                            while ($row = mysqli_fetch_assoc($result)) {
                                echo "
                                <li>
                                     $row[id] -  $row[name]  $row[surname]
                                </li>";
                            }
                        }
                        ?>


                    </ul>
                </div>
            </div>
        </main>

    </div>

    </body>
</html>
<?php
include('inc/footer.php');
?>