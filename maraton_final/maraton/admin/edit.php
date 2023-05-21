<!doctype html>
<?php
include('../inc/head.php');
include('adminHeader.php');

if (isset($_POST['update'])) {

    var_dump($_POST);

    $id = $_POST['id'];

    $name = $_POST['name'];
    $surname = $_POST['surname'];
    $email = $_POST['email'];
    $address = $_POST['address'];


    $result = mysqli_query($conn, "UPDATE runner SET name='$name',surname='$surname',email='$email',address='$address' WHERE id=$id");

    header("Location: dashboard.php");
}


$id = $_GET['id'];

$result = mysqli_query($conn, "SELECT * FROM runner WHERE id = $id");

while ($runner_data = mysqli_fetch_array($result)) {
    $name = $runner_data['name'];
    $surname = $runner_data['surname'];
    $email = $runner_data['email'];
    $address = $runner_data['address'];
}


?>


<div class="container">

    <div class="card shadow-lg">
        <h5 class="card-header">Editacia bežca</h5>
        <div class="card-body">
            <form name="update_runner" action="<?php $_SERVER['PHP_SELF']; ?>" method="post">
                <div class="mb-3">
                    <label for="email" class="form-label">Meno</label>
                    <input type="text" name="name" value="<?php echo $name; ?>" class="form-control" id="name">
                </div>

                <div class="mb-3">
                    <label for="email" class="form-label">Priezvisko</label>
                    <input type="text" name="surname" value="<?php echo $surname; ?>" class="form-control" id="surname">
                </div>

                <div class="mb-3">
                    <label for="email" class="form-label">Email</label>
                    <input name="email" value="<?php echo $email; ?>" type="email" class="form-control" id="email">
                </div>


                <div class="mb-3">
                    <label for="email" class="form-label">Adresa</label>
                    <input name="address" value="<?php echo $address; ?>" type="text" class="form-control" id="address">
                </div>
                <input type="hidden" name="id" value="<?php echo $_GET['id']; ?>">

                <button name="update" type="submit" class="btn btn-primary">Update</button>
            </form>
        </div>
    </div>
</div>



