<?php
include('../inc/head.php');

if (isset($_POST["register"])) {

    $email = mysqli_real_escape_string($conn, $_POST["email"]);

    $sql = "SELECT * from user where email='$email'";

    $result = mysqli_query($conn, $sql) or die("query failed.");

    if (mysqli_num_rows($result) > 0) {
        ?>
        <div class="alert alert-primary" role="alert">
            Email už existuje prosim <a href="login.php"> prihlaste sa </a>.
        </div>
        <?php
    } else {
        $name = mysqli_real_escape_string($conn, $_POST['name']);
        $email = mysqli_real_escape_string($conn, $_POST['email']);
        $password = mysqli_real_escape_string($conn, $_POST['password']);
        $password_again = mysqli_real_escape_string($conn, $_POST['password_again']);
        if ($password != $password_again) {
            ?>
            <div class="alert alert-primary" role="alert">
                Hesla sa nezhoduju.
            </div>
            <?php
        } else {
            $password_hash = password_hash($password, PASSWORD_DEFAULT);//encrypt the password before saving in the database
            $type = 'user';
            $sql = "INSERT INTO user (name, email, password, type) VALUES('$name', '$email', '$password_hash', 1)";
            $result = mysqli_query($conn, $sql);

            session_start();
            $_SESSION['loggedin'] = true;
            $_SESSION['email'] = $email;
            $_SESSION['name'] = $name;
            $_SESSION["type"] = $type;
            $_SESSION["id"] = mysqli_insert_id($conn);

            header('location: user.php');
        }
    }
}

?>


<div class="container">

    <div class="d-flex align-items-center justify-content-center vh-100">
        <div class="card shadow-lg">
            <h5 class="card-header">Registracia uživateľa</h5>
            <div class="card-body">
                <form action="<?php $_SERVER['PHP_SELF']; ?>" method="post">

                    <div class="mb-3">
                        <label for="name" class="form-label">Meno a Priezvisko</label>
                        <input name="name" type="text" class="form-control" id="name">
                    </div>

                    <div class="mb-3">
                        <label for="email" class="form-label">Email</label>
                        <input name="email" type="email" class="form-control" id="email">
                    </div>
                    <div class="mb-3">
                        <label for="password" class="form-label">Heslo</label>
                        <input name="password" type="password" class="form-control" id="password">
                    </div>
                    <div class="mb-3">
                        <label for="password_again" class="form-label">Heslo znovu</label>
                        <input name="password_again" type="password" class="form-control" id="password_again">
                    </div>
                    <button name="register" type="submit" class="btn btn-primary">Prihlasiť sa</button>
                </form>
            </div>
        </div>
    </div>
</div>


