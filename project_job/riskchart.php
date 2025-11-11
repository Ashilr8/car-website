<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Car Reliability and Cost of Ownership</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 20px;
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

        h1 {
            text-align: center;
            margin-top: 20px; /* Margin for spacing */
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }

        th, td {
            padding: 10px;
            text-align: center;
            border: 1px solid #ddd;
        }

        .red {
            background-color: #ffcccc; /* Light red */
        }

        .orange {
            background-color: #ffe5cc; /* Light orange */
        }

        .green {
            background-color: #ccffcc; /* Light green */
        }

        .description {
            margin-top: 10px;
            font-size: 0.9em;
            color: #555;
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
    <h1>Car Reliability and Cost of Ownership Rankings</h1>
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

<table>
    <thead>
        <tr>
            <th>Car Model</th>
            <th>Reliability Score (out of 10)</th>
            <th>Cost of Ownership (Annual)</th>
            <th>Recommendation</th>
        </tr>
    </thead>
    <tbody id="carTable">
        <!-- Car data will be inserted here by JavaScript -->
    </tbody>
</table>

<div id="carDescriptions"></div>

<script>
// Conversion rate from USD to ZAR
const conversionRate = 18; // Example conversion rate

// Car data with reliability scores and cost of ownership in USD
const cars = [
    { model: "Nissan 350Z", reliabilityScore: 7, costOfOwnershipUSD: 1500, description: "Common issues include engine management warning light due to crankshaft position sensor failure, handbrake failure, and paintwork chipping." },
    { model: "Honda S2000", reliabilityScore: 9, costOfOwnershipUSD: 1200, description: "Generally reliable but may experience issues with the throttle body and uneven tire wear." },
    { model: "Mazda 3 MPS", reliabilityScore: 6, costOfOwnershipUSD: 1300, description: "Known for turbocharger issues and transmission problems; owners report higher maintenance costs." },
    { model: "Ford Focus ST", reliabilityScore: 8, costOfOwnershipUSD: 1100, description: "Some owners report issues with the turbo system and electrical faults but overall a solid choice." },
    { model: "BMW 130i", reliabilityScore: 5, costOfOwnershipUSD: 2000, description: "Common problems include oil leaks and electrical issues; high maintenance costs can deter buyers." },
    { model: "Volkswagen GTI", reliabilityScore: 6, costOfOwnershipUSD: 1400, description: "May face issues with the DSG transmission and carbon buildup in the engine." },
    { model: "Subaru WRX", reliabilityScore: 7, costOfOwnershipUSD: 1600, description: "Known for head gasket failures and turbocharger issues; regular maintenance is crucial." },
    { model: "Chevrolet Camaro", reliabilityScore: 6, costOfOwnershipUSD: 1700, description: "Potential problems include transmission issues and electrical system failures." }
];

// Function to determine the recommendation color based on the score
function getRecommendationClass(score) {
    if (score >= 8) return 'green';
    if (score >= 6) return 'orange';
    return 'red';
}

// Populate the table with car data
const carTable = document.getElementById('carTable');
cars.forEach(car => {
    const row = document.createElement('tr');
    
    // Convert USD to ZAR
    const costInZAR = (car.costOfOwnershipUSD * conversionRate).toFixed(2);
    
    row.innerHTML = `
        <td>${car.model}</td>
        <td>${car.reliabilityScore}</td>
        <td>R${costInZAR}</td> <!-- Display cost in Rands -->
        <td class="${getRecommendationClass(car.reliabilityScore)}">${car.reliabilityScore >= 8 ? 'Highly Recommended' : car.reliabilityScore >= 6 ? 'Moderately Recommended' : 'Not Recommended'}</td>
    `;
    
    carTable.appendChild(row);
});

// Display descriptions for each car
const carDescriptions = document.getElementById('carDescriptions');
cars.forEach(car => {
    const descDiv = document.createElement('div');
    descDiv.classList.add('description');
    descDiv.innerHTML = `<strong>${car.model}:</strong> ${car.description}`;
    
    carDescriptions.appendChild(descDiv);
});
</script>

<div class="footer">
   &copy; <?php echo date("Y"); ?> Ashil's Automotive
</div>

</body>
</html>
