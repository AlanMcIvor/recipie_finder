<?php
// auth_functions.php

// Register a new user
function register_user($pdo, $username, $email, $password)
{
    $hashed_password = password_hash($password, PASSWORD_DEFAULT); // Hash password
    $stmt = $pdo->prepare("INSERT INTO users (username, email, password_hash) VALUES (?, ?, ?)");
    $stmt->execute([$username, $email, $hashed_password]);
}

// Log a user in
function login_user($pdo, $email, $password)
{
    $stmt = $pdo->prepare("SELECT * FROM users WHERE email = ?");
    $stmt->execute([$email]);
    $user = $stmt->fetch(PDO::FETCH_ASSOC);

    if ($user && password_verify($password, $user['password_hash'])) {
        session_start();
        $_SESSION['user_id'] = $user['user_id']; // Store user ID in session
        $_SESSION['username'] = $user['username']; // Store username in session
        return true;
    }
    return false;
}

// Check if user is logged in
function is_logged_in()
{
    return isset($_SESSION['user_id']);
}

// Log user out
function logout_user()
{
    session_start();
    session_unset();
    session_destroy();
}
