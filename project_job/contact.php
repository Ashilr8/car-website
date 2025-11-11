<html>
<head>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f9f9f9;
        }

        .header {
            background-image: url('bg2.jpg');
            background-size: 1400px 230px; 
            background-color: #454545; /* Green background */
            color: white; /* White text */
            text-align: center;
            padding: 40px 20px;
        }

        .topnav {
            overflow: hidden;
            background-color: #333;
        }

        .topnav a {
            float: left;
            display: block;
            color: #f2f2f2;
            text-align: center;
            padding: 14px 16px;
            text-decoration: none;
        }

        .topnav a:hover {
            background-color: #ddd;
            color: black;
        }

        .container {
            padding: 20px; /* Padding around the container */
            max-width: 600px; /* Max width for the form */
            margin: auto; /* Center the form */
        }

        .form-group {
            margin-bottom: 15px; /* Space between form fields */
        }

        .form-group label {
            display: block; /* Block display for labels */
            margin-bottom: 5px; /* Space below labels */
        }

        .form-group input,
        .form-group textarea {
            width: 100%; /* Full width inputs */
            padding: 10px; /* Padding inside inputs */
            border-radius: 4px; /* Rounded corners */
            border: 1px solid #ccc; /* Light border */
        }

        .form-group textarea {
            resize: vertical; /* Allow vertical resizing only */
        }

        .submit-btn {
            background-color: #454545; /* Green button */
            color: white; /* White text */
            border: none; /* No border */
            padding: 10px 15px; /* Padding for button */
            border-radius: 4px; /* Rounded corners for button */
            cursor: pointer; /* Pointer cursor on hover */
        }

        .submit-btn:hover {
            background-color: #45a049; /* Darker green on hover */
        }

        .footer {
            background-color: #454545; 
            color: white; 
            text-align: center; 
            padding: 15px; 
            position: relative; 
            bottom: 0; 
            width: 100%; 
        }
    </style>
</head>
<body>
    <div class="header">
        <h1>Contact Us</h1>
        <p>We'd love to hear from you!</p>
    </div>

    <div class="topnav">
        <a href="html_proj.php">Home</a>
        <a href="models.php">Cars & Models</a>
        <a href="services.php">Services</a>
        <a href="contact.php">Contact</a>
        <a href="choice.php">Choose what car is right for you?</a>
        <a href="risk evaluation.php">Risk evaluation</a>
        <a href="finance.php">Finance</a>
    </div>

    <div class="container">
        <form action="submit_contact.php" method="post">
            
            <div class="form-group">
                <label for="name">Full Name:</label>
                <input type="text" id="name" name="name" required placeholder="Enter your full name">
            </div>

            <div class="form-group">
                <label for="email">Email Address:</label>
                <input type="email" id="email" name="email" required placeholder="Enter your email address">
            </div>

            <div class="form-group">
                <label for="phone">Phone Number:</label>
                <input type="tel" id="phone" name="phone" required placeholder="Enter your phone number">
            </div>

            <div class="form-group">
                <label for="message">Message:</label>
                <textarea id="message" name="message" rows="5" required placeholder="Write your message here..."></textarea>
            </div>

            <button type="submit" class="submit-btn">Send Message</button>
        </form>
    </div>

    <div class="footer">
         <p>Ashil's Automotive &copy; 2024</p>
    </div>

</body>
</html>