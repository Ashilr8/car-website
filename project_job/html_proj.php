<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ashil's Automotive</title>
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

        /* Navbar links */
        .topnav a {
            float: left;
            display: block;
            color: #f2f2f2;
            text-align: center;
            padding: 14px 16px;
            text-decoration: none;
        }

        /* Links - change color on hover */
        .topnav a:hover {
            background-color: #ddd;
            color: black;
        }

        .row {
            display: flex; /* Flexbox for responsive layout */
            flex-wrap: wrap; /* Allow wrapping */
            margin: 20px; /* Margin around the row */
        }

        .column {
            flex: 1; /* Flex-grow to fill space */
            padding: 20px; /* Padding inside columns */
            box-shadow: 0 2px 10px rgba(0,0,0,0.1); /* Subtle shadow for depth */
            background-color: white; /* White background for columns */
            margin: 10px; /* Margin between columns */
        }

        h2 {
            color: #454545; 
        }

        h1.staff-heading {
            text-align: center; /* Center align the heading */
            color: #454545; /* Dark color for the heading */
            margin-bottom: 20px; /* Space below the heading */
        }
        
        h4 {
            color: rgb(218, 218, 218);
        }

        img {
            max-width: 100%; /* Responsive images */
            height: auto; /* Maintain aspect ratio */
            border-radius: 8px; /* Rounded corners for images */
        }

        .footer {
            background-color: #454545; 
            color: white; 
            text-align: center; 
            padding: 5px; 
            position: static; 
            bottom: 0; 
            width: 100%; 
        }

        @media screen and (max-width: 600px) {
          .column {
              flex-basis: 100%; /* Stack columns on smaller screens */
          }
        }

        .staff-row {
            background-color: #e9ecef; /* Light grey background */
            padding: 20px;
            border-radius: 8px; /* Rounded corners for the row */
            text-align: center; /* Center align text in the staff row */
        }

        .staff-member {
            text-align: center; /* Center align text */
            padding: 15px;
            margin: 10px;
            background-color: white; /* White background for each member */
            border-radius: 8px; /* Rounded corners */
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1); /* Subtle shadow */
            transition: transform 0.3s ease; /* Transition effects */
        }

        .staff-member:hover {
            transform: scale(1.05); /* Scale effect on hover */
        }

        .staff-member img {
            border-radius: 50%; /* Circular images for staff members */
            width: 150px; /* Fixed width for images */
            height: 150px; /* Fixed height for images */
        }

        .staff-member h3 {
            color: #454545; /* Dark color for names */
        }

        .staff-member p {
            color: #666; /* Grey color for descriptions */
        }
    </style>
</head>
<body>
    <div class="header">
        <h1>Welcome to Ashil's Automotive</h1>
        <p>Your one-stop destination for all your exotic rides!</p>
    </div>

    <div class="topnav">
        <a href="html_proj.php">Home</a>
        <a href="models.php">Cars & Models</a>
        <a href="services.php">Services</a>
        <a href="contact.php">Contact</a>
        <a href="choice.php">Choose what car is right for you?</a>
        <a href="risk evaluation.php">Risk evaluation</a>
        <a href="riskchart.php">Risk chart</a>
        <a href="finance.php">Finance</a>
        
    </div>

    <div class="row">
        <div class="column">
           <h2>Drive Your Dreams:</h2>
           <h3>Your Ultimate Car Destination</h3>
           <p>Welcome to Drive Your Dreams, the premier online destination for car enthusiasts and everyday drivers alike! Whether you’re searching for the latest models, expert reviews, or essential maintenance tips, we’ve got you covered. Our comprehensive platform features an extensive range of vehicles, from eco-friendly hybrids to powerful SUVs, ensuring you find the perfect match for your lifestyle.</p>

           <!-- Space to add an image -->
           <img src="1hh.jpg" alt="1hh.jpg" style="margin-bottom:20px;" height="100px", width="1920px"> <!-- Replace with your image URL -->

           <p>Explore our in-depth articles on automotive trends, technology innovations, and buying guides tailored to help you make informed decisions. Join our vibrant community of car lovers where you can share experiences, ask questions, and connect with fellow enthusiasts.</p>

           <p>At Drive Your Dreams, we believe that every journey begins with the right vehicle. Let us help you navigate the road ahead with confidence and style!</p>

           <h2>Custom Modifications to Make Your Ride Unique:</h2>

           <!-- Space to add another image -->
           <img src="2h.jpeg" alt="2h.jpeg" style="margin-bottom:20px;"> <!-- Replace with your second image URL -->

           <p>At Ashil's Automotive, we understand that every car enthusiast has a vision for their vehicle. That's why we offer personalized modifications tailored to your preferences, including high-performance exhaust systems, upgraded air filters, premium sound systems, and stylish rims. Our expert team is dedicated to transforming your car into a unique expression of your style and performance needs, ensuring you stand out on the road. Experience the difference with our custom modifications that enhance both aesthetics and functionality!</p>
           <br>
           <h2>Meet our staff:</h2>
       </div>

       <!-- Staff Section -->
       <div class="row staff-row">
           <div class="column staff-member">
               <img src="nosiah1.jpeg" alt="Nosiah Jaidoo">
               <h3>Nosiah</h3>
               <p>Sales Manager</p>
               <p>With over 10 years of experience in the automotive industry, Nosiah is dedicated to helping customers find their dream cars.</p>
           </div>

           <div class="column staff-member">
               <img src="koven.jpeg" alt="Poven Puddlepop">
               <h3>Koven</h3>
               <p>Service Technician</p>
               <p>Poven is an expert technician who ensures every vehicle is in peak condition with his meticulous attention to detail.</p>
           </div>

           <div class="column staff-member">
               <img src="passeen.jpg" alt="Passeen Yaruk">
               <h3>Passeen</h3>
               <p>Marketing Specialist</p>
               <p>Passeen brings creativity and passion to our marketing efforts, connecting customers with our exceptional vehicles.</p>
           </div>

           <div class="column staff-member">
               <img src="ash.jpg" alt="Rashil Fishsticks">
               <h3>Ash</h3>
               <p>Finance Advisor</p>
               <p>ash helps customers navigate financing options, ensuring they get the best deals tailored to their needs.</p>
           </div>

           <div class="column staff-member">
              <img src="kyle.jpg" alt="Kyle">
              <h3>Kyle</h3>
              <p>Customer Service Representative</p>
              <p>Kyle is here to assist you with any inquiries and ensure your experience with us is seamless and enjoyable.</p>
          </div>
       </div>

       <!-- End Staff Section -->


       <!-- Footer -->
       <div class="footer">
          <p>Ashil's Automotive &copy; <?php echo date("Y"); ?></p><!-- Dynamic year -->
          <h4>Contact Us:</h4>
           <p>Phone: 067 870 2032</p>
           <p>Email:<a href="mailto:info@ashilsautomotive.co.za"> info@ashilsautomotive.co.za</a></p>
           <p>Address:1, 2nd Avenue,<br>Randburg,<br>Johannesburg,<br>South Africa</p>
       </div>

</body>
</html>
