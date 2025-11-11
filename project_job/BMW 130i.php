<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BMW 130I - Ashil's Automotive</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f9f9f9;
        }

        .header {
            background-image: url('bg2.jpg');
            background-size: cover; 
            background-color: #3934C0; /* Fallback color */
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
        }

        .specs {
            background-color: white; /* White background for specs */
            border-radius: 8px; /* Rounded corners */
            box-shadow: 0 2px 10px rgba(0,0,0,0.1); /* Subtle shadow for depth */
            padding: 20px; /* Padding inside specs */
            margin-bottom: 20px; /* Space below specs */
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
    <h1>BMW 130I</h1>
    <p>Your ultimate sports car experience!</p>
</div>

<div class="topnav">
    <a href="html_proj.php">Home</a>
    <a href="models.php">Cars & Models</a>
    <a href="services.php">Services</a>
    <a href="contact.php">Contact</a>
</div>

<div class="container">
    <!-- Displaying the image above specifications -->
    <img src="bmw 130i.jpg" alt="BMW 130i" style="width:100%; height:auto;"> 

    <div class="specs">
        <h2>BMW 130i (2008) Specifications</h2>
        <p><strong>Engine Type:</strong> Inline-6, Naturally Aspirated</p>
        <p><strong>Displacement:</strong> 3.0 L (2996 cc)</p>
        <p><strong>Power:</strong> 265 hp @ 6600 rpm</p>
        <p><strong>Torque:</strong> 310 Nm @ 2600 rpm</p>
        <p><strong>Transmission:</strong> 6-speed manual or automatic options available</p>
        <p><strong>Drive Type:</strong> Rear-wheel drive (RWD)</p>

        <h3>Dimensions</h3>
        <p><strong>Length:</strong> 4239 mm</p>
        <p><strong>Width:</strong> 1748 mm</p>
        <p><strong>Height:</strong> 1421 mm</p>
        <p><strong>Wheelbase:</strong> 2660 mm</p>

        <h3>Performance</h3>
        <p><strong>Top Speed:</strong> 250 km/h (155 mph)</p>
        <p><strong>Mileage City:</strong> ~9 km/L</p>
        <p><strong>Mileage Highway:</strong> ~12 km/L</p>

        <h3>Features</h3>
        <ul>
            <li>No. of Airbags: 6</li>
            <li>Anti-Lock Braking System (ABS)</li>
            <li>Dynamically Controlled Stability (DSC)</li>
            <li>Tire Pressure Monitoring System (TPMS)</li>
            <li>Cruise Control</li>
            <!-- Add more features as needed -->
        </ul>

    </div>

    <!-- Risk Evaluation Section -->
    <div class="risk-evaluation">
        <h2>Risk Evaluation</h2>
        <p>To assess the reliability and potential risks associated with these vehicles, we recommend consulting the following resources:</p>
        <ul>
            <li><a href="https://www.consumerreports.org/cars/" target="_blank">Consumer Reports</a> - Offers detailed reliability ratings based on extensive testing.</li>
            <li><a href="https://www.jdpower.com/cars/ratings" target="_blank">J.D. Power</a> - Provides consumer feedback on vehicle quality and dependability.</li>
            <li><a href="https://www.warrantywise.co.uk/reliability-index/" target="_blank">Warrantywise Reliability Index</a> - Rates vehicles based on repair frequency and average repair costs.</li>
            <li><a href="https://cariqreport.com" target="_blank">Car IQ Report</a> - Highlights warranty problems and owner complaints related to vehicle reliability.</li>
        </ul>
    </div>
    

<div class="footer">
     <p>Ashil's Automotive &copy; <?php echo date("Y"); ?></p>
</div>

</body>
</html>