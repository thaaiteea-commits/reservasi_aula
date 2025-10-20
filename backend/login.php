<?php
session_start();
require_once '../config/db.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $stmt = $pdo->prepare("SELECT * FROM admin WHERE username = ?");
    $stmt->execute([$_POST['username']]);
    $user = $stmt->fetch();

    if ($user && password_verify($_POST['password'], $user['password'])) {
        $_SESSION['admin'] = $user['username'];
        header("Location: dashboard.php");
    } else {
        $error = "Login gagal!";
    }
}
?>

<!-- Tampilan login -->
<!DOCTYPE html>
<html><head><title>Login Admin</title>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"></head>
<body class="bg-light"><div class="container mt-5">
<h3>Login Admin</h3>
<?php if (!empty($error)) echo "<div class='alert alert-danger'>$error</div>"; ?>
<form method="POST">
    <div class="mb-3"><label>Username</label><input name="username" class="form-control"></div>
    <div class="mb-3"><label>Password</label><input type="password" name="password" class="form-control"></div>
    <button class="btn btn-dark">Login</button>
</form></div></body></html>
