<?php  include("config.php") ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Subscribe</title>
    <style>
    body {
        font-family: Arial, sans-serif;
        margin: 0;
        padding: 0;
        display: flex;
        justify-content: center;
        align-items: center;
        height: 100vh;
        background-color: #f4f4f4;
      }
    .subscribe-form {
    max-width: 500px;
    margin: 0 auto;
    font-family: 'Arial', sans-serif;
    padding: 80px;
    background-color: #f9f9f9;
    border-radius: 15px;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
  }
  
  /* Heading style */
  h2 {
    margin-bottom: 15px;
    text-align: center;
    color: #333;
  }
  
  /* Input and button container style */
  .input-container {
    display: flex;
    align-items: center;
  }
  
  /* Email input style */
  input[type="email"] {
    flex: 1;
    padding: 10px;
    border: 1px solid #ddd;
    border-radius: 4px;
    margin-right: 10px;
  }
  
  /* Subscribe button style */
  button[type="submit"] {
    padding: 10px 20px;
    border: none;
    background-color: #007bff;
    color: #fff;
    border-radius: 4px;
    cursor: pointer;
    transition: background-color 0.3s ease;
  }
  
  button[type="submit"]:hover {
    background-color: #0056b3;
  }
  
  /* Success message style */
  .success-message {
    text-align: center;
    margin-top: 15px;
    color: green;
    display: none;
  }
  
    </style>
</head>

<body>
    <div class="subscribe-form">
        <form id="subscribeForm">
          <h2>Subscribe</h2>
          <div class="input-container">
            <input type="email" id="email" name="email" placeholder="Enter your email" required>
            <button type="submit">Subscribe</button>
          </div>
          <p id="successMessage" class="success-message"></p>
        </form>
      </div>
      
  
    <script>
      document.getElementById('subscribeForm').addEventListener('submit', function(event) {
        event.preventDefault();
        var email = document.getElementById('email').value;
      
        if (validateEmail(email)) {
          document.getElementById('successMessage').style.display = 'block';
          document.getElementById('successMessage').textContent = 'Subscription successful for ' + email;
          console.log('Subscribed with email:', email);
        } else {
          alert('Please enter a valid email address.');
        }
      });
      
      function validateEmail(email) {
        var regex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
        return regex.test(email);
      }
      
          
    </script>
</body>
</html>
