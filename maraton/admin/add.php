<?php
include('../inc/head.php');
include('adminHeader.php');


if (isset($_POST['add'])) {

    $name = $_POST['name'];
    $surname = $_POST['surname'];
    $email = $_POST['email'];
    $address = $_POST['address'];

    $result = mysqli_query($conn, "INSERT INTO runner(name,surname,email, address) VALUES('$name','$surname','$email','$address')");

    echo "Bežec s číslom" . $result . "bol pridaný";

    header("Location: dashboard.php");
}


?>


<div class="col-lg-8 mx-auto p-4 py-md-5">

    <div class="card shadow-lg">
        <h5 class="card-header">Pridať bežca</h5>
        <div class="card-body">
            <form name="update_runner" action="<?php $_SERVER['PHP_SELF']; ?>" method="post">
                <div class="mb-3">
                    <label for="email" class="form-label">Meno</label>
                    <input type="text" name="name" class="form-control" id="name">
                </div>

                <div class="mb-3">
                    <label for="email" class="form-label">Priezvisko</label>
                    <input type="text" name="surname" class="form-control" id="surname">
                </div>

                <div class="mb-3">
                    <label for="email" class="form-label">Email</label>
                    <input name="email" type="email" class="form-control" id="email">
                </div>


                <div class="mb-3">
                    <label for="email" class="form-label">Adresa</label>
                    <input name="address" type="text" class="form-control" id="address">
                </div>

                <button name="add" type="submit" class="btn btn-primary">Pridať bežca</button>
            </form>
        </div>
    </div>
</div>



