<?php
session_start();
require_once "./assets/layout/header.php";

// Liste der Benutzer
$users = [
    ['username' => 'admin', 'password' => password_hash('admin123', PASSWORD_DEFAULT)],
    ['username' => 'user1', 'password' => password_hash('pass123', PASSWORD_DEFAULT)],
    ['username' => 'user2', 'password' => password_hash('secret456', PASSWORD_DEFAULT)]
];

// Funktion zur Überprüfung der Anmeldedaten
function checkCredentials($username, $password)
{
    global $users;
    foreach ($users as $user) {
        if ($user['username'] === $username && password_verify($password, $user['password'])) {
            return true;
        }
    }
    return false;
}

$error = '';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = $_POST['username'] ?? '';
    $password = $_POST['password'] ?? '';

    if (checkCredentials($username, $password)) {
        $_SESSION['user'] = $username;
        header("Location: secret.php");
        exit();
    } else {
        $error = "Ungültige Anmeldedaten!";
    }
}
?>

<div class="container mt-4">
    <h1>Login</h1>
    <?php if ($error): ?>
        <div class="alert alert-danger" role="alert">
            <?php echo htmlspecialchars($error); ?>
        </div>
    <?php endif; ?>
    <form method="post">
        <div class="mb-3">
            <label for="username" class="form-label">Benutzername:</label>
            <input type="text" class="form-control" id="username" name="username" required placeholder="admin">
        </div>
        <div class="mb-3">
            <label for="password" class="form-label">Passwort:</label>
            <input type="password" class="form-control" id="password" name="password" required placeholder="admin123">
        </div>
        <button type="submit" class="btn btn-primary">Einloggen</button>
        <button class="btn btn-secondary ml-2" type="reset">Zurücksetzen</button>
    </form>
</div>
</section>


<?php require_once "./assets/layout/footer.php"; ?>