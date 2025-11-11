<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Honda S2000 - Ashil's Automotive</title>
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
    <h1>Honda S2000</h1>
    <p>A high-revving sports car that delivers an exhilarating driving experience.</p>
</div>

<div class="topnav">
    <a href="html_proj.php">Home</a>
    <a href="models.php">Cars & Models</a>
    <a href="services.php">Services</a>
    <a href="contact.php">Contact</a>
</div>

<div class="container">
    <!-- Displaying the image above specifications -->
    <img src="honda s2000.jpeg" alt="Honda S2000" style="width:100%; height:auto;"> 

    <div class="specs">
        <h2>Specifications</h2>
        <p><strong>Engine Type:</strong> DOHC I4, Aluminum Block and Heads</p>
        <p><strong>Displacement:</strong> 2.0 L (1997 cc) or 2.2 L (2157 cc) depending on the model year</p>
        <p><strong>Power:</strong> 240 hp @ 8300 rpm (2.0 L)
                                   237 hp @ 7800 rpm (2.2 L)</p>
        <p><strong>Torque:</strong> 153 lb-ft @ 7500 rpm (2.0 L)
                                    162 lb-ft @ 6500 rpm (2.2 L)</p>
        <p><strong>Transmission:</strong> 6-speed manual</p>
        <p><strong>Drive Type:</strong> Rear-wheel drive (RWD)</p>
        
        <h3>Dimensions</h3>
        <p><strong>Length:</strong> 4130 mm</p>
        <p><strong>Width:</strong> 1750 mm</p>
        <p><strong>Height:</strong> 1240 mm</p>
        <p><strong>Wheelbase:</strong> 2400 mm</p>

        <h3>Performance</h3>
        <p><strong>Top Speed:</strong> Approximately 240 km/h (149 mph)</p>
        <p><strong>Mileage City:</strong> ~10 km/L</p>
        <p><strong>Mileage Highway:</strong> ~14 km/L</p>

        <h3>Features</h3>
        <ul>
        <li>No. of Airbags: 2</li>
        <li>Anti-Lock Braking System (ABS)</li>
        <li>Limited-Slip Differential</li>
        <li>Cruise Control</li>
        <li>Power Windows and Locks</li>
        <li>Leather Upholstery</li>
        </ul>

    </div>

    <!-- Additional images or sections can be added here -->
    
</div>

<div class="footer">
     <p>Ashil's Automotive &copy; <?php echo date("Y"); ?></p>
</div>

</body>
</html>
