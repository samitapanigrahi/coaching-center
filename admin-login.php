<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Admin Login - PAti's Chemistry</title>
    <link rel="stylesheet" href="./style.css">

</head>
<body>

  <?php
  include("./header.php");
  ?>

   <main class="page-content">
  <div class="login-container">
    <h2>Admin Panel Access</h2>
    <form id="adminLoginForm" action="admin-dashboard.php" method="POST" onsubmit="return validateEmail()">
      <label for="email">Admin Email</label>
      <input type="email" id="email" name="email" placeholder="admin@example.com" required />

      <label for="password">Password</label>
      <input type="password" id="password" name="password" placeholder="Enter password" required />

      <button type="submit">Login</button>
    </form>

    <p><a href="index.php">Back to Home</a></p>
  </div>
</main>

  <footer>
    <p>&copy; 2025 Pati's Chemistry | Contact: info@Pati's Chemistry.edu | +91 9437205377</p>
  </footer>

  <!-- JavaScript email validation -->
  <script>
    function validateEmail() {
      const emailField = document.getElementById('email');
      const email = emailField.value.trim();
      const regex = /^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-z]{2,}$/;

      if (!regex.test(email)) {
        alert("Please enter a valid email address.");
        emailField.focus();
        return false;
      }

      return true;
    }
  </script>

</body>
</html>
