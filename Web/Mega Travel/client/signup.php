
<?php
session_start();  // Start the session for user login

// Include the database configuration
require '../config.php';



// Handle Sign Up
if (isset($_POST['signup'])) {
    // Sanitize and get the user input
    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    // Check if the email already exists
    $stmt = $pdo->prepare("SELECT * FROM users WHERE email = :email");
    $stmt->execute([':email' => $email]);
    $user = $stmt->fetch(PDO::FETCH_ASSOC);

    if ($user) {
        echo "<h3>Email already registered!</h3><br>";
    } else {
        // Hash the password before storing it
        $hashedPassword = password_hash($password, PASSWORD_DEFAULT);

        // Insert new user into the database
        $stmt = $pdo->prepare("INSERT INTO users (name, email, password) VALUES (:name, :email, :password)");
        if ($stmt->execute([':name' => $name, ':email' => $email, ':password' => $hashedPassword])) {
            echo "<h3>Sign-up Successful</h3><br>";
        } else {
            echo "<h3>Error during sign-up!</h3><br>";
        }
    }
}

// Handle Sign In
if (isset($_POST['signin'])) {
    // Sanitize and get the user input
    $email = $_POST['email'];
    $password = $_POST['password'];

    // Fetch user data by email
    $stmt = $pdo->prepare("SELECT * FROM users WHERE email = :email");
    $stmt->execute([':email' => $email]);
    $user = $stmt->fetch(PDO::FETCH_ASSOC);

    if ($user && password_verify($password, $user['password'])) {
        // Valid user, create session variables
        $_SESSION['user_id'] = $user['id'];
        $_SESSION['user_name'] = $user['name'];
        echo "Welcome, " . $user['name'] . "!";
        header("Location: ../index.php");
        exit();
    } else {
        echo "<h3>Invalid email or password!</h3><br>";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <link rel="stylesheet" href="styles.css">
</head>
<body>
<div class="container" id="container">
    
    <!-- Sign Up Form -->
    <div class="form-container sign-up">
        <form method="POST">
            <span>or use your email for registration</span>
            <input type="text" name="name" placeholder="Name" required>
            <input type="email" name="email" placeholder="Email" required>
            <input type="password" name="password" placeholder="Password" required>
            <button type="submit" name="signup">Sign Up</button>
        </form>
    </div>

    <!-- Sign In Form -->
    <div class="form-container sign-in">
        <form method="POST">
            <h1>Sign In</h1>
            <span>or use your email and password</span>
            <input type="email" name="email" placeholder="Email" required>
            <input type="password" name="password" placeholder="Password" required>
            <a href="#">Forgot Your Password?</a>
            <button type="submit" name="signin">Sign In</button>
        </form>
    </div>

    <!-- Toggle between Sign In and Sign Up -->
    <div class="toggle-container">
        <div class="toggle">
            <div class="toggle-panel toggle-left">
                <h1>Welcome Back!</h1>
                <p>Enter your personal details to use all of the site's features.</p>
                <button class="hidden" id="login">Sign In</button>
            </div>
            <div class="toggle-panel toggle-right">
                <h1>Sign Up to Mega Travel</h1>
                <p>Register with your personal details to use all of the site's features.</p>
                <button class="hidden" id="register">Sign Up</button>
            </div>
        </div>
    </div>
</div>

<script src="script.js"></script>
</body>
</html>
