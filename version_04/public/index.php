<!doctype html>
<html lang="de">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">

    <title>Hello, world!</title>
</head>
<body>

<div class="container">

    <div class="mb-3 row">
        <div class="col">

            <nav class="navbar navbar-expand-lg navbar-light bg-light">
                <a class="navbar-brand" href="#">ZLA Portal</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNavDropdown">

                    <!-- Das sind die Navigationspunkte -->
                    <ul class="navbar-nav">
                        <li class="nav-item active">
                            <a class="nav-link" href="index.php?page=start">Startseite</a>
                        </li>

                        <li class="nav-item active">
                            <a class="nav-link" href="index.php?page=customer">Kundenliste</a>
                        </li>

                        <li class="nav-item active">
                            <a class="nav-link" href="index.php?page=new">Neuer Kunde</a>
                        </li>
                    </ul>

                    <!-- Ende der Navigation -->
                </div>
            </nav>
        </div>
    </div>

<?php
    require_once '../app/main.php';
?>

</div>

<script src="js/jquery-3.3.1.min.js"></script>
<script src="js/popper.min.js"></script>
<script src="js/bootstrap.min.js"></script>
</body>
</html>