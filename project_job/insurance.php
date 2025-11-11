<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Insurance - Ashil's Automotive</title>
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
            background-color: #454545; /* Fallback color */
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
            max-width: 800px; 
            margin: 20px auto; /* Center the container */
            padding: 20px; 
            background-color: white; /* White background for the form */
            border-radius: 8px; /* Rounded corners */
            box-shadow: 0 2px 10px rgba(0,0,0,0.1); /* Subtle shadow */
        }

        h2 {
            color: #454545; 
        }

        .result, .inventory {
            margin-top: 20px; 
            padding: 10px; 
            border-radius: 8px; 
        }

        .result {
            background-color: #e9ecef; /* Light grey background for results */
        }

        .inventory {
            background-color: #f1f1f1; /* Light grey for inventory */
        }

        .footer {
            text-align: center;
            padding: 20px;
            background-color: #454545; /* Same as header */
            color: white; /* White text */
            position: relative;
            bottom: 0;
            width: 100%;
        }
    </style>
</head>
<body>

<div class="header">
    <h1>Ashil's Automotive - Insurance</h1>
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
    <h2>Get Insurance Quotes</h2>
    <form id="insuranceForm">
        <label for="carName">Enter your Car MAKE - MODEL - YEAR (e.g. Nissan 370z 2018):</label><br>
        <input type="text" id="carName" name="carName" required><br><br>

        <input type="submit" value="Get Quotes">
    </form>

    <div id="results" class="result" style="display:none;"></div> <!-- Hidden results div -->
    
    <!-- Current Inventory Section -->
    <div class="inventory">
        <h3>Our Current Inventory:</h3>
        <ul id="carInventory">
          <li>Nissan 350z</li>
          <li>Honda S2000</li>
          <li>Mazda 3 MPS</li>
          <li>Ford Focus ST</li>
          <li>BMW 130i</li>
        </ul>
        <p>If you can't find your vehicle here, why not try <a href="https://get-insured.co.za/CarInsurance?id=12200&subid=absa&utm_source=Bing&utm_medium=cpc&utm_campaign=competitors_search&cn=&msclkid=eb4ebf2d0db817126350d8a0ff35759c">Get Insured</a></p>
    </div>
</div>

<script>
// Event listener for form submission
document.getElementById('insuranceForm').addEventListener('submit', function(event) {
    event.preventDefault(); // Prevent form submission

    const carName = document.getElementById('carName').value;

    // Simulated insurance quotes (replace with actual API call if needed)
    const quotes = [
        { provider: "Discovery", price: Math.floor(Math.random() * 1000) + 500 },
        { provider: "OUTsurance", price: Math.floor(Math.random() * 1000) + 500 },
        { provider: "King Price", price: Math.floor(Math.random() * 1000) + 500 },
        { provider: "Momentum", price: Math.floor(Math.random() * 1000) + 500 },
        { provider: "MiWay", price: Math.floor(Math.random() * 1000) + 500 }
    ];

    // Find the best deal
    const bestDeal = quotes.reduce((prev, current) => (prev.price < current.price) ? prev : current);

    // Display results
    let output = `<h3>Insurance Quotes for ${carName}:</h3>`;
    
    quotes.forEach(quote => {
        output += `<p>${quote.provider}: R${quote.price}</p>`;
    });
    
    output += `<p><strong>Best Deal:</strong> ${bestDeal.provider}: $${bestDeal.price}</p>`;
    
    document.getElementById('results').innerHTML = output;
    document.getElementById('results').style.display = 'block'; // Show results
});
</script>

<div class="footer">
    <p>Ashil's Automotive &copy; <?php echo date("Y"); ?></p><!-- Dynamic year -->
</div>

</body>
</html>
