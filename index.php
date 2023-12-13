<?php
include __DIR__ . "/functions.php";

$mail_convalidation_mex = email_control($_POST['email']);

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Newsletter</title>

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>

<body>
    <main class="container mt-5">
        <h1 class="text-center">INSERISCI LA TUA MAIL</h1>
        <form class="d-flex flex-column align-items-center " action="index.php" method="POST">
            <label for="mail" class="form-label">Email address</label>
            <input type="text" class="form-control-lg" id="mail" name="email" placeholder="name@example.com">
            <button class="btn btn-primary mt-4" type="submit">LOGIN</button>
        </form>
        <h2 class="text-center mt-5 alert <?= $mail_convalidation_mex ? 'alert-success' : 'alert-danger' ?>"><?= $mail_convalidation_mex ? 'Email valida' : 'Email NON valida' ?></h2>
    </main>
</body>

</html>