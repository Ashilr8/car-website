<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Car Finance Calculator</title>
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
            background-color: #454545; /* Dark background */
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

        .container {
            padding: 20px; /* Padding inside container */
        }

        .result {
            margin-top: 20px;
            font-weight: bold;
        }

        h2 {
            color: #454545; 
        }

        @media screen and (max-width: 600px) {
          .column {
              flex-basis: 100%; /* Stack columns on smaller screens */
          }
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

<div class="container">
    <h2>Car Finance Calculator</h2>

    <h3>New Vehicle Financing</h3>
    <label for="vehiclePrice">Vehicle Price (ZAR):</label>
    <input type="number" id="vehiclePrice" value="200000" step="1000" required><br><br>

    <label for="tradeInValue">Trade-In Value (ZAR):</label>
    <input type="number" id="tradeInValue" value="0" step="1000"><br><br>

    <label for="deposit">Deposit (ZAR):</label>
    <input type="number" id="deposit" value="20000" step="1000" required><br><br>

    <label for="interestRate">Interest Rate (%):</label>
    <input type="range" id="interestRate" min="0" max="20" value="10" step="0.1">
    <span id="interestRateValue">10%</span><br><br>

    <label for="loanTerm">Loan Term (months):</label>
    <input type="number" id="loanTerm" value="60" min="1" required><br><br>

    <h3>Refinancing</h3>
    <label for="remainingBalance">Remaining Balance of Current Loan (ZAR):</label>
    <input type="number" id="remainingBalance" value="" step="1000"><br><br>

    <label for="newLoanTerm">New Loan Term for Refinancing (months):</label>
    <input type="number" id="newLoanTerm" value="" min="1"><br><br>

    <button onclick="calculateFinance()">Calculate Monthly Payment</button>

    <div class="result" id="result"></div>
</div>

<div class="contact">
    <h2>Contact Us:</h2>
    <p>Phone: 067 870 2032</p>
    <p>Email: <a href="mailto:info@ashilsautomotive.co.za">info@ashilsautomotive.co.za</a></p>
    <p>Address: 1, 2nd Avenue, Randburg, Johannesburg, 2194</p>
</div>

<div class="footer">
    &copy; Ashil's Automotive &nbsp; | &nbsp; All rights reserved.
</div>

<script>
// JavaScript code to handle finance calculations
const interestRateInput = document.getElementById('interestRate');
const interestRateValue = document.getElementById('interestRateValue');

// Update interest rate display
interestRateInput.oninput = function() {
    interestRateValue.textContent = this.value + '%';
};

function calculateFinance() {
    const vehiclePrice = parseFloat(document.getElementById('vehiclePrice').value);
    const tradeInValue = parseFloat(document.getElementById('tradeInValue').value);
    const deposit = parseFloat(document.getElementById('deposit').value);
    const interestRate = parseFloat(interestRateInput.value) / 100 / 12; // Monthly interest
    const loanTerm = parseFloat(document.getElementById('loanTerm').value); // Total months

    // Calculate loan amount for new vehicle
    const newLoanAmount = vehiclePrice - tradeInValue - deposit;

    // Validate loan amount
    if (newLoanAmount <= 0) {
        document.getElementById('result').textContent = 'The deposit and trade-in value cannot exceed the vehicle price.';
        return;
    }

    // Calculate monthly payment for new vehicle financing
    const monthlyPaymentNewVehicle = (newLoanAmount * interestRate) / (1 - Math.pow(1 + interestRate, -loanTerm));
    
    // Calculate total payment and total interest for new vehicle
    const totalPaymentNewVehicle = monthlyPaymentNewVehicle * loanTerm;
    const totalInterestNewVehicle = totalPaymentNewVehicle - newLoanAmount;

    // Calculate total amount of the loan with interest added
    const totalLoanWithInterestNewVehicle = newLoanAmount + totalInterestNewVehicle;

   // Display results for new vehicle financing
   let resultHtml = `
       <strong>New Vehicle Financing:</strong><br>
       Monthly Payment: ZAR ${monthlyPaymentNewVehicle.toFixed(2)}<br>
       Total Payment (Principal + Interest): ZAR ${totalPaymentNewVehicle.toFixed(2)}<br>
       Total Interest Paid: ZAR ${totalInterestNewVehicle.toFixed(2)}<br>
       Total Amount of Loan with Interest Added: ZAR ${totalLoanWithInterestNewVehicle.toFixed(2)}<br><br>
   `;

   // Refinancing calculations
   const remainingBalance = parseFloat(document.getElementById('remainingBalance').value);
   const newLoanTerm = parseFloat(document.getElementById('newLoanTerm').value);

   if (!isNaN(remainingBalance) && remainingBalance > 0 && !isNaN(newLoanTerm) && newLoanTerm > 0) {
         // Calculate total loan amount including refinancing
         const totalLoanAmountWithRefinance = newLoanAmount + remainingBalance;

         // Calculate monthly payment for refinancing
         const monthlyPaymentRefinance = (totalLoanAmountWithRefinance * interestRate) / (1 - Math.pow(1 + interestRate, -newLoanTerm));

         // Calculate total payment and total interest for refinancing
         const totalPaymentRefinance = monthlyPaymentRefinance * newLoanTerm;
         const totalInterestRefinance = totalPaymentRefinance - totalLoanAmountWithRefinance;

         // Calculate total amount of the loan with interest added for refinancing
         const totalLoanWithInterestRefinance = totalLoanAmountWithRefinance + totalInterestRefinance;

         resultHtml += `
             <strong>Refinancing:</strong><br>
             Monthly Payment: ZAR ${monthlyPaymentRefinance.toFixed(2)}<br>
             Total Payment (Principal + Interest): ZAR ${totalPaymentRefinance.toFixed(2)}<br>
             Total Interest Paid: ZAR ${totalInterestRefinance.toFixed(2)}<br>
             Total Amount of Loan with Interest Added: ZAR ${totalLoanWithInterestRefinance.toFixed(2)}<br>`;
     }

     document.getElementById('result').innerHTML = resultHtml;
}
</script>

</body>
</html>
