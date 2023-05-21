<?php
include('../inc/head.php');
include('userHeader.php');
?>

<style>
        body {
            background-image: url('../img3.png');
            background-repeat: no-repeat;
            background-size: cover;
        }
    </style>
<div class="col-lg-8 mx-auto p-4 py-md-5">


    <main>
        <h1 class="text-body-emphasis">Informácie o bežcovi</h1>
        <p class="fs-5 col-md-8">
            <?php
            $id = $_SESSION['id'];
            $sql = "SELECT * from runner  WHERE user_id=$id";

            $result = mysqli_query($conn, $sql) or die("query failed.");
            $row = mysqli_fetch_assoc($result);
            ?>
        <div class="card text-center">
            <div class="card-header">
                <?php echo $row['name'] . "  " . $row['surname']; ?>
            </div>
            <div class="card-body">
                <h1 class="card-title"> Vaše číslo je: <?php echo $row['id']; ?></h1>

            </div>
            <div class="card-footer text-muted">
                <?php
                $date = date_create($row['datetime']);
                echo "Datum registrácie:" . date_format($date, "d.m.Y H:i:s"); ?>
            </div>
        </div>
        <br>

        </p>
            

    </main>

</div>

<?php
include('adminFooter.php');
?>
