<?php

include __DIR__ . "/functions.php";

session_start();

if (isset($_POST['email'])) {
    $_SESSION['email'] = $_POST['email'];
    $result = email_control($_POST['email']);
}

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
        <h1 class="text-center">ISCRIVITI ALLA NOSTRA NEWSLETTER</h1>
        <form class="d-flex flex-column align-items-center " action="index.php" method="POST">
            <label for="email" class="form-label">Inserisci email</label>
            <input value="<?= $_SESSION['email'] ?? '' ?>" type="text" class="form-control-lg" id="email" name="email" placeholder="name@example.com">
            <button class="btn btn-primary mt-4" type="submit">ISCRIVITI</button>
        </form>
        <?php if (isset($result)) { ?>
            <h2 class="text-center mt-5 alert <?= !$result ? 'alert-danger' : '' ?>"><?= !$result ? 'Email NON valida' : '' ?></h2>
        <?php } ?>
    </main>
</body>

</html>