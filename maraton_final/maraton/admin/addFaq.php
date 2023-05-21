<?php
include('../inc/head.php');
include('adminHeader.php');

if (isset($_POST['addFaq'])) {

    $ask = $_POST['ask'];
    $question = $_POST['question'];
    $user_id = (int)$_SESSION['id'];
    $sql = "INSERT INTO faq(ask,question,user) VALUES('$ask','$question','$user_id')";
    $result = mysqli_query($conn, $sql);
    echo "FAQ bola pridána ";

    header("Location: dashboard.php");
}


?>


<div class="col-lg-8 mx-auto p-4 py-md-5">

    <div class="card shadow-lg">
        <h5 class="card-header">Pridať FAQ</h5>
        <div class="card-body">
            <form name="update_runner" action="<?php $_SERVER['PHP_SELF']; ?>" method="post">
                <div class="mb-3">
                    <label for="new" class="form-label">Otázka</label>
                    <input type="text" name="ask" class="form-control" id="ask">
                </div>

                <div class="mb-3">
                    <label for="new" class="form-label">Odpoveď</label>
                    <input type="text" name="question" class="form-control" id="question">
                </div>


                <button name="addFaq" type="submit" class="btn btn-primary">Pridať FAQ</button>
            </form>
        </div>
    </div>
</div>



