<?php
include('../inc/head.php');
include('adminHeader.php');


if (isset($_POST['addNews'])) {

    $new = $_POST['new'];
    $user_id = (int)$_SESSION['id'];
    $sql = "INSERT INTO new(new,user) VALUES('$new','$user_id')";
    $result = mysqli_query($conn, $sql);
    echo "Novinka bola pridána ";

    header("Location: dashboard.php");
}


?>


<div class="col-lg-8 mx-auto p-4 py-md-5">

    <div class="card shadow-lg">
        <h5 class="card-header">Pridať novinku</h5>
        <div class="card-body">
            <form name="update_runner" action="<?php $_SERVER['PHP_SELF']; ?>" method="post">
                <div class="mb-3">
                    <label for="new" class="form-label">Text novinky</label>
                    <input type="text" name="new" class="form-control" id="new">
                </div>


                <button name="addNews" type="submit" class="btn btn-primary">Pridať novinku</button>
            </form>
        </div>
    </div>
</div>



