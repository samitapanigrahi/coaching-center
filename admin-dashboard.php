<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Admin Dashboard - Pati's Chemistry</title>
  <style>
    body {
      margin: 0;
      font-family: Arial, sans-serif;
      background-color: #f4f7f9;
    }

    /* Header */
    header {
      background-color: #003366;
      color: white;
      padding: 10px 0;
      text-align: center;
      position: relative;
    }

    header h1 {
      margin: 10px 0 5px;
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

    /* Sidebar */
    .sidebar {
      position: fixed;
      top: 0;
      left: 0;
      width: 200px;
      height: 100%;
      background-color: #002244;
      padding-top: 30px;
    }

    .sidebar a {
      display: block;
      color: white;
      padding: 12px 20px;
      text-decoration: none;
      transition: background 0.3s;
    }

    .sidebar a:hover {
      background-color: #004488;
    }

    /* Main content */
    .main-content {
      margin-left: 200px;
      padding: 40px;
    }

    .card {
      background-color: white;
      border-radius: 8px;
      box-shadow: 0 2px 4px rgba(0,0,0,0.1);
      padding: 20px;
      margin-bottom: 30px;
    }

    .card h3 {
      color: #003366;
      margin-bottom: 15px;
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
    <h1>Pati's Chemistry</h1>
    <p> Admin Panel</p>
  </header>

  
  
  <!-- Sidebar -->
  <?php
  include("./sidebar.php");
  ?>

  <!-- Main Content -->
  <div class="main-content">
    <div class="card">
      <h3>Overview</h3>
      <p>Quick stats or summary goes here.</p>
    </div>

    <div class="card">
      <h3>Recent Activity</h3>
      <p>Recent user logins, content uploads, or notifications.</p>
    </div>

    <div class="card">
      <h3>System Notices</h3>
      <p>System updates or admin messages will appear here.</p>
    </div>
  </div>

  <!-- Footer -->
  <?php
  include("./footer.php");
  ?>

</body>
</html>
