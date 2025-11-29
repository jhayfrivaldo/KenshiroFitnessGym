<?php
    include("database.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kenshiro Fitness Registration</title>
    <link rel="stylesheet" href="style.css"/>
</head>
<body>
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
        
      <h2>Register for an Account</h2>
        
        <form action="<?php htmlspecialchars($_SERVER["PHP_SELF"]) ?>" method="post">
          
          <label>First Name</label>
          <input type="text" name="firstname" required>
          
          <label>Last Name</label>
          <input type="text" name="lastname" required>

          <label>Email</label>
          <input type="email" name="email" required>

          <label>Username</label>
          <input type="text" name="username" required>

          <label>Password</label>
          <input type="password" name="password" required>

          <input type= "submit" name ="submit" value="SUBMIT" style="font-weight: bold";>
        
        </form>
        
        <p>Already have an account? <a href="login.php">Login here</a>.</p>
      
      </section>
    
    </main>
    
    <footer>
      
      <p>&copy; 2019 Kenshiro Fitness Gym. All Rights Reserved</p>
    
    </footer>

  <script src="script.js"></script>
  </body>
</html>

<?php

    if($_SERVER["REQUEST_METHOD"] == "POST") {
      $firstname = filter_input(INPUT_POST, "firstname", FILTER_SANITIZE_SPECIAL_CHARS);
      $lastname = filter_input(INPUT_POST, "lastname", FILTER_SANITIZE_SPECIAL_CHARS);
      $email = filter_input(INPUT_POST, "email", FILTER_SANITIZE_SPECIAL_CHARS);
      $username = filter_input(INPUT_POST, "username", FILTER_SANITIZE_SPECIAL_CHARS);
      $password = filter_input(INPUT_POST, "password", FILTER_SANITIZE_SPECIAL_CHARS);
    
      if(empty($firstname) ||
         empty($lastname) ||
         empty($email) ||
         empty($username) ||
         empty($username) ||
         empty($password)) 
         {
          echo "All Fields are Required!";
         }
      else {

        $hash = password_hash($password, PASSWORD_DEFAULT);
        $sql = "INSERT INTO memtable (firstname, lastname, email, username, password)
                VALUES ('$firstname', '$lastname', '$email', '$username', '$hash')";

        try {
          mysqli_query($conn, $sql);
          echo "Registered Successfully!";
        
          header("Location: login.php");
        }
        catch (mysqli_sql_exception) {
          echo "That Username has been Taken";
        }

      }

    }

    mysqli_close($conn);
?>