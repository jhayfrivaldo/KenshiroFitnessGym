<?php
    session_start();
    require_once("database.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kenshiro Fitness Login</title>
    <link rel="stylesheet" href="style.css"/>
</head>
<body>
  <div class="main-content">
    <header>
      <h1>Kenshiro Fitness Gym</h1>
      <nav>
        <ul>
          <a href="index.html">HOME</a>
          <a href="login.php">LOGIN</a>
          <a href="register.php">REGISTER</a>
           <button id="theme-toggle">
             <span id="theme-icon">🌙</span>
          </button>
        </ul>
      </nav>
    </header>
    <main>
      <section class="form-section">
        <h2>Login to Your Account</h2>
        <form action="<?php htmlspecialchars($_SERVER["PHP_SELF"]) ?>" method="post">
          <label>Username or Email</label>
          <input type="text" name="username" required autocomplete="username">

          <label>Password</label>
          <input type="password"name="password" required autocomplete="current-password">

          <input type="submit" name="login" valu="Login" style="font-weight: bold";> 
        </form>
        <p>Don't have an account? <a href="register.php">Register here</a>.</p>
      </section>
    </main>
    <footer>
      <p>&copy; 2019 Kenshiro Fitness Gym. All Rights Reserved</p>
    </footer>
  </div>

  <script src="script.js"></script>
</body>
</html>

<?php

  if($_SERVER["REQUEST_METHOD"] =="POST") {

    $username = filter_input(INPUT_POST, "username", FILTER_SANITIZE_SPECIAL_CHARS);
    $email = filter_input(INPUT_POST, "email", FILTER_SANITIZE_SPECIAL_CHARS);
    $password = filter_input(INPUT_POST, "password", FILTER_SANITIZE_SPECIAL_CHARS);


    if(empty($username) || empty ($email) || empty($pasword)) {
      echo "Please fill in the required fields!";
    }
    else {
      
      header("Location: home.php");
    }

  }

  mysqli_close($conn);
?>