<?php
include('../inc/head.php');
session_start();
if (isset($_SESSION['msg'])) {
    echo '<div class="alert alert-danger" role="alert">';
    echo $_SESSION['msg'];
}

echo "</div>";


if (isset($_POST["login"])) {

    $email = mysqli_real_escape_string($conn, $_POST["email"]);

    $sql = "SELECT * from user where email='$email'";

    $result = mysqli_query($conn, $sql) or die("query failed.");

    if (mysqli_num_rows($result) > 0) {
        while ($row = mysqli_fetch_assoc($result)) {
            if (password_verify($_POST['password'], $row['password'])) {
                $_SESSION['loggedin'] = true;
                $_SESSION['email'] = $row['email'];
                $_SESSION['name'] = $row['name'];
                $_SESSION["type"] = $row['type'];
                $_SESSION["id"] = $row['id'];
                ?>
                <div class="alert alert-primary" role="alert">
                    Príhlasenie bolo úspešne
                </div>
                <?php
                header("Location: dashboard.php");
            } else {
                ?>
                <div class="alert alert-danger" role="alert">
                    Account Invalid
                </div>
                <?php
            }


        }
    } else {
        ?>
        <div class="alert alert-danger" role="alert">
            Meno a heslo nie je správne
        </div>
        <?php
    }

}

?>


<div class="container">

    <div class="d-flex align-items-center justify-content-center vh-100">
        <div class="card shadow-lg">
            <h5 class="card-header">Prihlasenie</h5>
            <div class="card-body">
                <form action="<?php $_SERVER['PHP_SELF']; ?>" method="post">
                    <div class="mb-3">
                        <label for="email" class="form-label">Email</label>
                        <input name="email" type="email" class="form-control" id="email" aria-describedby="emailHelp">
                    </div>
                    <div class="mb-3">
                        <label for="password" class="form-label">Heslo</label>
                        <input name="password" type="password" class="form-control" id="password">
                    </div>

                    <button name="login" type="submit" class="btn btn-primary">Prihlasiť sa</button>
                </form>
            </div>
        </div>
    </div>
</div>


