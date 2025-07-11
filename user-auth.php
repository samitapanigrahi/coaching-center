<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>User Login - Pati's Chemistry</title>
  <style>
    body {
      font-family: Arial, sans-serif;
      background: #f4f7f9;
      margin: 0;
      padding: 0;
    }

    /* Header */
    header {
      background-color: #003366;
      color: white;
      padding: 10px 0;
      text-align: center;
      position: relative;
    }

    header .logo h2 {
      margin: 10px 0 5px;
       font-size: 30px;
    }

    header p {
      margin: 0 0 10px;
    }

    /* Navigation Bar */
    nav {
      background-color: #002244;
      display: flex;
      justify-content: center;
      padding: 10px 0;
    }

    nav ul {
      list-style-type: none;
      display: flex;
      gap: 30px;
      padding: 0;
      margin: 0;
    }

    nav li {
      display: inline;
    }

    nav a {
      color: white;
      text-decoration: none;
      font-weight: bold;
      transition: color 0.3s;
    }

    nav a:hover {
      color: #00ccff;
    }
    .page-content {
    flex: 1;
    display: flex;
    justify-content: center;
    align-items: center;
    padding: 2rem;
    }

    .container {
      max-width: 450px;
      margin: 60px auto;
      background-color: white;
      padding: 30px;
      border-radius: 10px;
      box-shadow: 0 4px 6px rgba(0,0,0,0.1);
    }

    h2 {
      text-align: center;
      margin-bottom: 25px;
      color: #003366;
    }

    label {
      display: block;
      margin-bottom: 6px;
      font-weight: bold;
    }

    input[type="email"],
    input[type="text"],
    input[type="password"] {
      width: 100%;
      padding: 10px;
      margin-bottom: 15px;
      border-radius: 5px;
      border: 1px solid #ccc;
    }

    button {
      width: 100%;
      background-color: #003366;
      color: white;
      padding: 12px;
      border: none;
      border-radius: 5px;
      font-size: 16px;
      cursor: pointer;
    }

    button:hover {
      background-color: #0055aa;
    }

    .toggle-link,
    .forgot-link {
      display: block;
      text-align: center;
      margin-top: 15px;
      color: #003366;
      cursor: pointer;
      text-decoration: underline;
    }

    .toggle-link:hover,
    .forgot-link:hover {
      color: #00ccff;
    }

    footer {
      background-color: #003366;
      color: white;
      text-align: center;
      padding: 15px 0;
      position: fixed;
      bottom: 0;
      width: 100%;
    }
  </style>
</head>
<body>

  <!-- Header -->
  <header>
    <div class="logo">
    
    <h2><a href="index.html" style="color: white; text-decoration: none;">Pati's Chemistry</a></h2>
    </div>
  </header>

  
   <main class="page-content">
  <div class="container">

    <!-- Login Form -->
    <div id="loginForm">
      <h2>User Login</h2>
      <form action="user-dashboard.html" method="POST">
        <label for="loginEmail">Email</label>
        <input type="email" id="loginEmail" name="email" placeholder="Enter your email" required />

        <label for="loginPassword">Password</label>
        <input type="password" id="loginPassword" name="password" placeholder="Enter your password" required />

        <button type="submit">Login</button>
        <span class="forgot-link" onclick="forgotPassword()">Forgot Password?</span>
        <span class="toggle-link" onclick="toggleForm()">New User? Register Here</span>
      </form>
      <p style="text-align: center;"><a href="index.html">Back to Home</a></p>
    </div>

    <!-- Registration Form -->
    <div id="registerForm" style="display: none;">
      <h2>User Registration</h2>
      <form action="register-user.php" method="POST">
        <label for="regName">Full Name</label>
        <input type="text" id="regName" name="name" placeholder="Your full name" required />

        <label for="regEmail">Email</label>
        <input type="email" id="regEmail" name="email" placeholder="Your email" required />

        <label for="regPassword">Password</label>
        <input type="password" id="regPassword" name="password" placeholder="Create a password" required />

        <button type="submit">Register</button>
        <span class="toggle-link" onclick="toggleForm()">Already have an account? Login</span>
      </form>
    </div>

  </div>

  <!-- Footer -->
  <footer>
    <p>&copy; 2025 Pati's Chemistry | Contact: info@Pati's Chemistry.edu | +91 9437205377</p>
  </footer>

  <!-- JavaScript -->
  <script>
    function toggleForm() {
      const login = document.getElementById('loginForm');
      const register = document.getElementById('registerForm');
      login.style.display = login.style.display === 'none' ? 'block' : 'none';
      register.style.display = register.style.display === 'none' ? 'block' : 'none';
    }

    function forgotPassword() {
      const email = prompt("Enter your registered email to reset your password:");
      if (email && /^[^\\s@]+@[^\\s@]+\\.[^\\s@]+$/.test(email)) {
        alert("A password reset link has been sent to " + email);
      } else if (email) {
        alert("Invalid email format.");
      }
    }
  </script>

</body>
</html>
