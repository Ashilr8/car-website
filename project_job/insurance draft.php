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
            background-color: #454545; /* Dark background */
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

        .result {
            margin-top: 20px; 
            padding: 10px; 
            border-radius: 8px; 
            background-color: #e9ecef; /* Light grey background for results */
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
    <a href="insurance.php">Insurance</a> <!-- Link to Insurance Page -->
</div>

<div class="container">
    <h2>Get Insurance Quotes</h2>
    <form id="insuranceForm">
        <label for="carName">Car Name:</label><br>
        <input type="text" id="carName" name="carName" required><br><br>

        <label for="carModel">Car Model:</label><br>
        <input type="text" id="carModel" name="carModel" required><br><br>

        <input type="submit" value="Get Quotes">
    </form>

    <div id="results" class="result" style="display:none;"></div> <!-- Hidden results div -->
</div>

<script>
document.getElementById('insuranceForm').addEventListener('submit', function(event) {
    event.preventDefault(); // Prevent form submission

    const carName = document.getElementById('carName').value;
    const carModel = document.getElementById('carModel').value;

    // Example API call (replace with actual API endpoint)
    fetch(`https://api.insuranceprovider.com/v1/quotes?carName=${carName}&carModel=${carModel}&apiKey=YOUR_API_KEY`)
        .then(response => response.json())
        .then(data => {
            // Process and display results
            let output = '<h3>Insurance Quotes:</h3>';
            
            if (data.quotes && data.quotes.length > 0) {
                data.quotes.forEach(quote => {
                    output += `<p>${quote.provider}: $${quote.price} (${quote.coverage})</p>`;
                });
                output += '<p><strong>Best Deal:</strong> ' + data.bestDeal.provider + ': $' + data.bestDeal.price + ' (' + data.bestDeal.coverage + ')</p>';
            } else {
                output += '<p>No quotes found.</p>';
            }

            document.getElementById('results').innerHTML = output;
            document.getElementById('results').style.display = 'block'; // Show results
        })
        .catch(error => {
            console.error('Error fetching insurance quotes:', error);
        });
});
</script>

<div class="footer">
    <p>Ashil's Automotive &copy; <?php echo date("Y"); ?></p><!-- Dynamic year -->
</div>

</body>
</html>
