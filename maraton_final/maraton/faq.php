<?php
include('inc/head.php');

$active = "faq";
include('inc/menu.php');

?>

    <div class="col-lg-8 mx-auto p-4 py-md-5">

        <main>
            <h1 class="text-body-emphasis">FAQ</h1>
            <p class="fs-5 col-md-8">
                <?php

                $sql = "SELECT * from faq ORDER BY datetime desc  ";

                $result = mysqli_query($conn, $sql) or die("query failed.");

                if (mysqli_num_rows($result) > 0) {
                while ($row = mysqli_fetch_assoc($result)) {
                ?>
            <div class="card">
                <div class="card-header">
                    <?php echo $row['ask']; ?>
                </div>
                <div class="card-body">
                    <h5 class="card-title">  <?php echo $row['question']; ?></h5>

                </div>
                <div class="card-footer text-muted">
                    <?php
                    $date = date_create($row['datetime']);
                    echo date_format($date, "d.m.Y H:i:s"); ?>
                </div>
            </div>
            <br>
            <?php

            }
            }
            ?>
            </p>

        </main>

    </div>


<?php
include('inc/footer.php');
?>