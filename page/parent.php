<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../style/style.css">
    <link rel="stylesheet" href="../style/bootstrap-5.2.3-dist/css/bootstrap.min.css">
    <title>gestion des notes</title>
</head>

<body>
    <?php
    include 'header.php';
    ?>

    <div class="container ">
        <table class="table table-striped table-bordered pad text-center tableau">
            <thead class="table-dark">
                <tr>
                    <th scope="col">N°</th>
                    <th scope="col">NOM</th>
                    <th scope="col">PRENOM</th>
                    <th scope="col">Moyenne</th>

                </tr>
            </thead>
            <tbody>

                <?php
                require 'bd.php';
                $query = "SELECT * FROM moyenne ORDER BY nom";
                $stmt = $conn->query($query);
                $counter = 1;
                while ($row = $stmt->fetch()) {
                    // code pour afficher chaque ligne de résultats
                    echo "<tr>
          <td>$counter</td>
            <td>$row[nom]</td>
            <td>$row[prenom]</td>
            <td>$row[note]</td>    
            </tr>";
                    $counter++;

                }
                ?>

            </tbody>
        </table>
    </div>

    <?php
    include 'footer.php';
    ?>

    <script src="../script/cdnjs.cloudflare.com_ajax_libs_jquery_3.1.1_jquery.min.js"></script>
    <script src="../style/bootstrap-5.2.3-dist/js/bootstrap.min.js"></script>
    <script src="../script/script.js"></script>
</body>

</html>