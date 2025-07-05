<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Pati's Chemistry - Home</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
  <style>
    body {
      font-family: Arial, sans-serif;
      margin: 0;
      padding: 0;
      background: #f4f7f9;
    }

    /* Header */
    header {
      background-color: #003366;
      color: white;
      padding: 10px 0;
      justify-content: space-between;
      text-align: center;
      align-items: center;
      display: flex;
    }
    

    header .logo h2 {
      margin: 10px 0 5px;
       font-size: 30px;
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

    .btn {
  background-color: #2e7d32;
  color: white;
  padding: 0.7em 1.5em;
  text-decoration: none;
  border-radius: 5px;
  display: inline-block;
  margin-top: 1em;
}

.highlight {
  padding: 2em;
  text-align: center;
}

.course-list {
  display: flex;
  justify-content: center;
  flex-wrap: wrap;
  gap: 1em;
  margin-top: 1em;
}
.course-card {
  background-color: #e8f5e9;
  padding: 1em 2em;
  border-radius: 8px;
  box-shadow: 0 0 5px rgba(0,0,0,0.1);
}
.about-preview {
  background-color: #c8e6c9;
  padding: 2em;
  text-align: center;
}
h2{
    font-size: 25px;
}

 /* Dropdown container */
    .dropdown {
      float: left;
      overflow: hidden;
    }

    /* Dropdown button */
    .dropdown .dropbtn {
      font-size: 16px;
      border: none;
      outline: none;
      color: white;
      padding: 14px 16px;
      background-color: inherit;
      font-family: inherit;
      margin: 0;
    }

    /* Dropdown content (hidden by default) */
    .dropdown-content {
      display: none;
      position: absolute;
      background-color: #f9f9f9;
      min-width: 160px;
      box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
      z-index: 1;
    }

    /* Dropdown links */
    .dropdown-content a {
      float: none;
      color: black;
      padding: 12px 16px;
      text-decoration: none;
      display: block;
      text-align: left;
    }

    /* Show the dropdown menu on hover */
    .dropdown:hover .dropdown-content {
      display: block;
    }

    /* Change color on hover */
    .nav a:hover, .dropdown:hover .dropbtn {
      background-color: #575757;
    }

    .dropdown-content a:hover {
      background-color: #ddd;
    }

.main-content {
    background-color: lightblue;
    color: black;
    text-align: center;
    padding: 50px 20px;
    height: auto;
}

.main-content .hero {
    max-width: 600px;
    margin: 0 auto;
}

.main-content h2 {
    font-size: 35px;
    margin-bottom: 20px;
}
.image container{
    display: flex;
    overflow: auto;
    white-space: nowrap;
    gap: 15px;
}

.image container img{
    width: 100px;
    height: auto;
    margin-bottom: 50%;
}

.main-content p {
    font-size: 20px;
    margin-bottom: 30px;
}

.cta-button {
    background-color: green;
    color: black;
    padding: 15px 30px;
    text-decoration: none;
    font-size: 18px;
    border-radius: 5px;
    transition: background-color 0.3s;
}

.cta-button:hover {
    background-color: #f4a261;
}

    /* Footer */
    footer {
      background-color: #003366;
      color: white;
      text-align: center;
      padding: 15px 0;
      position: relative;
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
          <nav style="background-color: #003366;" >
            <a href="admin-login.html" title="Admin Login" style="color: white; margin-right: 15px;">
                <i class="fas fa-user-shield fa-lg"></i>
            </a>
            <a href="user-auth.html" title="User Login" style="color: white; margin-right: 15px; ">
                <i class="fas fa-user fa-lg"></i>
            </a>
          </nav>
      
  </header>

  <!-- Navigation Bar -->
  <nav>
    <ul>
      <li><a href="index.html">Home</a></li>
      <li><a href="/About">About</a></li>
      <div class="dropdown">      
      <li><a href="/Courses">Courses</a></li>
      <div class="dropdown-content">
                    <a href="Class IX">Class IX </a>
                    <a href="Class X">Class X </a>
                    <a href="Class XI">Class XI</a>
                    <a href="Class XII">Class XII</a>
                </div>
              </div>
      <li><a href="/Contact">Contact</a></li>
      <li><a href="/Gallery">Gallery</a></li>
    </ul>
  </nav>
    <section class="main-content">
        
        <div class="hero">
            <h2>Welcome to Pati's Chemistry!</h2>
            <p>Learning Chemistry with Fun.</p>
            <a href="Courses" class="cta-button">Explore Courses</a>
        </div>
      
    </section>
    <section class="highlight">
        <h2>Courses</h2>
        <div class="course-list">

            <div><a href="Class IX" class="cta-button">Class IX</a></div>
            <div ><a href="Class X" class="cta-button">Class X</a></div>
            <div ><a href="Class XI" class="cta-button">Class XI</a></div>
            <div ><a href="Class XII" class="cta-button">Class XII</a></div>
    </section>
    <section class="about-preview">
        <h2>About Pati's Chemistry</h2>
        <p>Located in Sailashree Vihar, Bhubaneswar. Pati's Chemistry offers class IXth,Xth,XIth and XIIth chemistry with detail explained key notes based on CBSE syllabus.</p>
    <a href="about.html" class="btn">Learn More</a>
  </section>
    </section>
  <!-- Footer -->
  <footer>
    <p>&copy; 2025 Pati's Chemistry | Contact: info@Pati's Chemistry.edu | +91 9437205377</p>
  </footer>

</body>
</html>
