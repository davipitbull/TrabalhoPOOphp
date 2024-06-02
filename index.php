<?php
// index.php
require_once 'User.php';
require_once 'Authenticator.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $email = $_POST['email'];
    $password = $_POST['password'];

    $authenticator = new Authenticator();
    $user = $authenticator->login($email, $password);

    if ($user) {
        echo "Login successful! Welcome, " . $user->getName();
    } else {
        echo "Invalid email or password.";
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Login</title>
</head>
<body>
    <form method="POST" action="index.php">
        Email: <input type="email" name="email" required><br>
        Password: <input type="password" name="password" required><br>
        <button type="submit">Login</button>
    </form>
</body>
</html>
