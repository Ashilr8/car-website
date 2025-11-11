<?php
// Set the default timezone to Central Africa Time (CAT)
date_default_timezone_set('Africa/Johannesburg');

// Set the current date
$currentDate = date("l, F j, Y, g:i A T");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Choosing the Right Car</title>
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

        img {
            max-width: 100%; /* Responsive images */
            height: auto; /* Maintain aspect ratio */
            border-radius: 8px; /* Rounded corners for images */
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

        .contact {
            background-color: #f1f1f1; 
            padding: 20px; 
            text-align: center; 
            margin-top: 20px; 
        }

        @media screen and (max-width: 600px) {
          .column {
              flex-basis: 100%; /* Stack columns on smaller screens */
          }
        }
        .column {
    padding: 20px;
    background-color: white; /* Background color for contrast */
    border-radius: 8px; /* Rounded corners */
    box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1); /* Subtle shadow */
    transition: transform 0.3s ease, box-shadow 0.3s ease; /* Transition effects */
    opacity: 0; /* Start hidden */
    animation: fadeIn 1s forwards; /* Fade-in animation */
}

.column:hover {
    transform: scale(1.05); /* Slight zoom on hover */
    box-shadow: 0 4px 20px rgba(0, 0, 0, 0.2); /* Enhanced shadow on hover */
}

/* Fade-in keyframes */
@keyframes fadeIn {
    from {
        opacity: 0; /* Start fully transparent */
        transform: translateY(20px); /* Start slightly below */
    }
    to {
        opacity: 1; /* End fully opaque */
        transform: translateY(0); /* End at normal position */
    }
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
        <a href="finance.php">Finance</a>
    </div>
</head>
<body>

<h1>Choosing the Right Car</h1>
<p>Date: <?php echo $currentDate; ?></p>

<h2>Importance of Choosing the Right Car</h2>
<p>Choosing the right car is a significant decision that can impact your finances, safety, and overall satisfaction. Here are some key reasons why it's essential:</p>
<ul>
    <li><strong>Financial Investment:</strong> A car is often one of the largest purchases you will make. Selecting a reliable model can save you money on repairs and maintenance.</li>
    <li><strong>Safety:</strong> The right car should meet your safety needs. Features such as airbags, anti-lock brakes, and stability control can protect you and your passengers.</li>
    <li><strong>Fuel Efficiency:</strong> Consideration of fuel economy can lead to savings at the pump and reduce your environmental impact.</li>
    <li><strong>Resale Value:</strong> Some cars depreciate faster than others. Choosing a model with a good resale value can benefit you in the long run.</li>
</ul>

<h2>Risks Associated with Car Buying</h2>
<p>While shopping for a car can be exciting, it also comes with risks:</p>
<ul>
    <li><strong>Hidden Issues:</strong> Used cars may have hidden mechanical problems that could lead to costly repairs.</li>
    <li><strong>Overpaying:</strong> Without proper research, you might pay more than necessary for a vehicle.</li>
    <li><strong>Lack of Information:</strong> Insufficient knowledge about a car's reliability can lead to poor choices.</li>
</ul>
<h2>Understanding Potential Issues with New Vehicles</h2>
<p>Even brand new cars can experience issues and recalls, which can vary significantly depending on the brand you choose. While many manufacturers strive for quality and reliability, some may have a history of more frequent recalls or quality control problems. It's essential for consumers to research and consider the reputation of the brand before making a purchase, as this can impact not only the initial ownership experience but also long-term satisfaction with the vehicle.</p>
<h2>Importance of Choosing Reputable Car Brands</h2>
    <ul>
        <li><strong>Quality Assurance:</strong> Reputable brands are known for their commitment to quality, ensuring that vehicles are built to last.</li>
        <li><strong>Fewer Maintenance Issues:</strong> Cars manufactured with high-quality materials and processes typically require less maintenance over time, saving owners both time and money.</li>
        <li><strong>Reliability:</strong> Established brands often have a proven track record of reliability, leading to greater customer satisfaction and trust.</li>
        <li><strong>Resale Value:</strong> Vehicles from reputable manufacturers tend to retain their value better than those from lesser-known brands, making them a smarter investment.</li>
        <li><strong>Customer Support:</strong> Well-known brands usually offer better customer service and support, including warranty options and recall information, enhancing the overall ownership experience.</li>
        <li><strong>conclusion: </strong></li><p>Choosing a reputable car brand is crucial for ensuring a positive ownership experience. These brands are built on a foundation of quality and reliability, which not only minimizes maintenance issues but also provides peace of mind for consumers. Investing in a vehicle from a trusted manufacturer can lead to long-term satisfaction and value.</p>
    </ul>
<h2>Here are some of the most reliable car brands with the least issues based on insurance reports:</h2>
<ul>
    <li><strong>1. </strong>LEXUS</li>
    <li><strong>2. </strong>TOYOTA</li>
    <li><strong>3. </strong>MINI</li>
    <li><strong>4. </strong>ACURA</li>
    <li><strong>5. </strong>HONDA</li>
</ul>

<div class="car-reports">
    <h2>Check Reliability Reports</h2>
    <p>To assess the reliability of the selected cars, please visit Consumer Reports:</p>
    <ul>
        <li><a href="https://www.consumerreports.org/cars/" target="_blank">Consumer Reports - Cars</a></li>
    </ul>
    <p>Follow these steps:</p>
    <ol>
        <li>Click on the link above to go to the Consumer Reports car section.</li>
        <li>Use the search bar to enter the name of your car (e.g., Nissan 350Z).</li>
        <li>Review the reliability ratings and additional information provided.</li>
        <li>Explore comparisons and expert reviews for a comprehensive understanding.</li>
    </ol>
</div>

<h2>Additional Resources</h2>
<p>The following links provide valuable insights into car reliability and safety:</p>
<ul>
    <li><a href="https://www.consumerreports.org/cars/" target="_blank">Consumer Reports - Comprehensive Car Ratings</a>: Offers unbiased ratings and reviews based on extensive testing.</li>
    <li><a href="https://www.jdpower.com/cars/ratings" target="_blank">J.D. Power - Vehicle Quality Ratings</a>: Provides consumer feedback on vehicle quality and dependability.</li>
    <li><a href="https://www.warrantywise.co.uk/reliability-index/" target="_blank">Warrantywise Reliability Index</a>: Rates vehicles based on repair frequency and average repair costs.</li>
</ul>

</body>
</html>
