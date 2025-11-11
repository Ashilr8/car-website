<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ford Focus ST - Ashil's Automotive</title>
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
    <h1>Ford Focus ST</h1>
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
    <img src="focus.jpeg" alt="Ford Focus ST" style="width:100%; height:auto;"> 

    <div class="specs">
        <h2>Ford Focus ST (2008) Specifications</h2>
        <p><strong>Engine Type:</strong> Inline-5 Turbocharged, Aluminum Block and Heads</p>
        <p><strong>Displacement:</strong> 2.5 L (2521 cc)</p>
        <p><strong>Power:</strong> 225 hp @ 6000 rpm</p>
        <p><strong>Torque:</strong> 236 lb-ft @ 1600-4000 rpm</p>
        <p><strong>Transmission:</strong> 6-speed manual</p>
        <p><strong>Drive Type:</strong> Front-wheel drive (FWD)</p>

        <h3>Dimensions</h3>
        <p><strong>Length:</strong> 4337 mm</p>
        <p><strong>Width:</strong> 1839 mm</p>
        <p><strong>Height:</strong> 1500 mm</p>
        <p><strong>Wheelbase:</strong> 2640 mm</p>

        <h3>Performance</h3>
        <p><strong>Top Speed:</strong> 241 km/h (150 mph)</p>
        <p><strong>Mileage City:</strong> ~8 km/L</p>
        <p><strong>Mileage Highway:</strong> ~12 km/L</p>

        <h3>Features</h3>
        <ul>
            <li>No. of Airbags: 5</li>
            <li>Anti-Lock Braking System (ABS)</li>
            <li>Dynamically Controlled Stability (DSC)</li>
            <li>Tire Pressure Monitoring System (TPMS)</li>
            <li>Cruise Control</li>
            <li>Sony Audio System with Bluetooth Connectivity</li>
            <!-- Add more features as needed -->
        </ul>

    </div>

    <!-- Additional images or sections can be added here -->
    

<div class="footer">
     <p>Ashil's Automotive &copy; <?php echo date("Y"); ?></p>
</div>

</body>
</html>