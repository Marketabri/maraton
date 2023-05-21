<?php
include('inc/head.php');

$active = "kontakt";
include('inc/menu.php');

// If the form is submitted
if (isset($_POST['submit'])) {
    // Get form data
    $name = mysqli_real_escape_string($conn, $_POST['name']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $message = mysqli_real_escape_string($conn, $_POST['message']);

    // Insert data into database
    $sql = "INSERT INTO contact (name, email, message) VALUES ('$name', '$email', '$message')";
    if (mysqli_query($conn, $sql)) {
        ?>
        <div class="alert alert-primary" role="alert">
            Správa bola odoslaná.
        </div>
        <?php
    } else {
        ?>
        <div class="alert alert-danger" role="alert">
            Problem: <?php echo mysqli_error($conn); ?>
        </div>
        <?php
    }

}
?>

    <div class="col-lg-8 mx-auto p-4 py-md-5">

        <main>
            <h1 class="text-body-emphasis">Kontakt</h1>
            <p class="fs-5 col-md-8">
                Napíšte nám
            </p>


            <form method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
                <div class="mb-3">
                    <label for="inputMeno" class="form-label">Meno</label>
                    <input type="text" name="name" required class="form-control" id="inputMeno">
                </div>

                <div class="mb-3">
                    <label for="inputEmail" class="form-label">Email</label>
                    <input type="email" name="email" required class="form-control" id="inputEmail">
                </div>

                <div class="mb-3">
                    <label for="inputText" class="form-label">Správa</label>
                    <textarea name="message" class="form-control" id="inputMessage"> </textarea>
                </div>


                <button name="submit" type="submit" class="btn btn-primary">Submit</button>
            </form>


        </main>

    </div>


<?php
include('inc/footer.php');
?>