<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body class="d-flex flex-column align-items-center">
    <h1 class="text-center mt-5">L'ISCRIZIONE E' AVVENUTA CON SUCCESSO</h1>
    <p class="mt-4">Riceverai notizie su <?= $_SESSION['email']; ?></p>
    <a href="return-home.php" class="btn btn-danger mt-4">HOME</a>
</body>
</html>