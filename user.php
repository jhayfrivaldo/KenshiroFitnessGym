<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kenshiro User</title>
    <link rel="stylesheet" href="style.css"/>
</head>
<body>
    <header>
      <h1>Kenshiro Fitness Gym</h1>
      <nav>
        <ul>
          <a href="index.html">HOME</a>
          <a href="login.html">LOGIN</a>
          <a href="register.html">REGISTER</a>
           <button id="theme-toggle">
             <span id="theme-icon">🌙</span>
          </button>
        </ul>
      </nav>
    </header>

    <div class="container">
      <div class="profile-section">
        <img src="profile.jpg" class="profile-pic">
        <h3 id="userName">Jaworski</h3>
        <p id="userEmail">jaworski@email.com</p>
        <p id="mobile">09123456789</p>  
    </div>

    <div class="membership-section">
        <h2>Membership Details</h2>
        <p>Became a member: <span id="dateJoined">January 5, 2025</span></p>
        <p>Status: <span id="paymentStatus" class="paid">Paid</span></p>
        <p>Membership expires in: <span id="expiryDate">30 days</span></p>
    </div>

    <div class="action-section">
      <details>
        <summary>Payment Methods</summary>
        <p>Gcash QR:</p>
        <img src="gcash-qr.png" alt="Gcash QR Code" class="qr-code">
        <p>Pay in cash at the front desk.</p>
      </details>

      <details>
        <summary>Update Profile</summary>
        <form action="#" method="post" class="update-form">
          <label for="updateName">Name:</label>
          <input type="text" id="updateName" name="updateName" required>

          <label for="updateEmail">Email:</label>
          <input type="email" id="updateEmail" name="updateEmail" required>

          <label for="updateMobile">Mobile Number:</label>
          <input type="text" id="updateMobile" name="updateMobile" required>

          <input type="submit" value="Update Profile" style="font-weight: bold;">
        </form>
      </details>

      <details>
        <summary>Extend Membership</summary>
        <button class="button-user">1 Month</button>
        <button class="button-user">3 Months</button>
        <button class="button-user">6 Months</button>
      </details>

      <details>
        <summary>Cancel Membership</summary>
        <p>To cancel, submit a request below.</p>
        <button class= "cancel-btn" style="color: red;">Request Cancellation</button>
      </details>
    </div>
    <footer>
      <p>&copy; 2019 Kenshiro Fitness Gym. All Rights Reserved</p>
    </footer>

    <script src="script.js"></script>
</body>
</html>