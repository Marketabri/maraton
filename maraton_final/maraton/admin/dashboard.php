<?php
include('../inc/head.php');
include('adminHeader.php');
?>


    <div class="col-lg-8 mx-auto p-4 py-md-5">
        <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
            <h2>Zaregistrovaný bežci</h2>
            <div class="table-responsive">
                <table class="table table-striped table-sm">
                    <thead>
                    <tr>
                        <th scope="col">Číslo</th>
                        <th scope="col">Meno</th>
                        <th scope="col">Priezvisko</th>
                        <th scope="col">Email</th>
                        <th scope="col">Adresa</th>
                        <th scope="col">Dátum a čas registrácie</th>
                        <th scope="col">Akcia</th>
                    </tr>
                    </thead>
                    <tbody>

                    <?php

                    $sql = "SELECT * from runner";

                    $result = mysqli_query($conn, $sql) or die("query failed.");

                    if (mysqli_num_rows($result) > 0) {
                        while ($row = mysqli_fetch_assoc($result)) {
                            echo "
                            <tr>
                                <td>" . $row['id'] . "</td>
                                <td>" . $row['name'] . "</th>
                                <td>" . $row['surname'] . "</td>
                   
                                <td>" . $row['email'] . "</td>
                                <td>" . $row['address'] . "</td>
                                <td>" . $row['datetime'] . "</td>";
                            echo "<td><a href='edit.php?id=$row[id]'> Edit | </a>";
                            echo "<a href='delete.php?id=$row[id]'";
                            ?>

                            onclick="return confirm('Naozaj chceš zmazať záznam?')">Delete</a>

                            <?php
                            echo "</td>
                        </tr>";
                        }
                    }
                    ?>

                    </tbody>
                </table>
            </div>
        </main>
    </div>

<?php
include('adminFooter.php');
?>