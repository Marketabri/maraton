<?php
include('../inc/head.php');
include('adminHeader.php');
?>




    <div class="col-lg-8 mx-auto p-4 py-md-5">

        <main>
            <h1 class="text-body-emphasis">Správy</h1>
            <p class="fs-5 col-md-8">
                <?php

                $sql = "SELECT * from contact ORDER BY datetime desc  ";

                $result = mysqli_query($conn, $sql) or die("query failed.");

                if (mysqli_num_rows($result) > 0) {
                while ($row = mysqli_fetch_assoc($result)) {
                ?>
            <div class="card">
                <div class="card-header">
                    <?php echo $row['email']; ?>
                </div>
                <div class="card-body">
                    <h5 class="card-title">  <?php echo $row['message']; ?></h5>

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
</div>



