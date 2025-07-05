<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Pati's Chemistry - contact</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
  <style>
    body {
      font-family: Arial, sans-serif;
      background: #f4f7f9;
      margin: 0;
      padding: 0;
    }

   /* Header */
    /* Header */
    header {
      background-color: #003366;
      color: white;
      padding: 10px 0;
      text-align: center;
      position: relative;
    }

    

    header .logo h2 {
      
      font-size: 30px;
    }
     .content {
      padding: 40px;
    }
    .hero {
            text-align: center;
            padding: 50px 20px;
            background-color: #e9f5f2;
        }
        .hero h1 {
            font-size: 2.5em;
            margin-bottom: 10px;
        }
        .hero p {
            font-size: 1.2em;
            color: #555;
        }
    form {
      max-width: 500px;
      margin: auto;
      background: white;
      padding: 20px;
      border-radius: 8px;
      box-shadow: 0 0 10px rgba(0,0,0,0.1);
    }
    input, textarea {
      width: 100%;
      padding: 10px;
      margin: 10px 0;
      border: 1px solid #ccc;
      border-radius: 4px;
    }
    button {
      background-color: #2a9d8f;
      color: white;
      padding: 10px 20px;
      border: none;
      border-radius: 5px;
      cursor: pointer;
    }
    button:hover {
      background-color: #21867a;
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
  <header>
    <div class="logo">
    
    <h2><a href="index.html" style="color: white; text-decoration: none;">Pati's Chemistry</a></h2>
    </div>
  </header>
    <section id="contact" class="hero">
      <h2>Contact Us</h2>
    <p>We're here to help! Reach out with any questions.</p>
    <p>Email: support@patischemistry.com | Phone: +91 9437205377</p>
</section>

  <div class="content">
    <form action="thankyou.html" method="post">
      <label for="name">Your Name</label>
      <input type="text" id="name" name="name" required>

      <label for="email">Your Email</label>
      <input type="email" id="email" name="email" required>

      <label for="message">Message</label>
      <textarea id="message" name="message" rows="5" required></textarea>

      <button type="submit">Send Message</button>
    </form>
  </div>
  <footer>
    <p>&copy; 2025 Pati's Chemistry | Contact: info@Pati's Chemistry.edu | +91 9437205377</p>
  </footer>

</body>
</html>