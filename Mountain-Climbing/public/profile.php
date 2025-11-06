<?php
include '../includes/header.php';
if (!isset($_SESSION['user'])) {
    header("Location: login.php");
    exit;
}
?>

<h2>Bienvenido, <?= $_SESSION['user']['username']; ?>!</h2>
<p>Tu correo: <?= $_SESSION['user']['email']; ?></p>

<?php include '../includes/footer.php'; ?>
