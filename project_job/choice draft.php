<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Car Choice Advisor</title>
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
            background-color: white; /* White background for contrast */
            border-radius: 8px; /* Rounded corners */
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1); /* Subtle shadow for depth */
            margin: 20px; /* Margin around container */
        }

        .question {
            margin-bottom: 15px;
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
    <h1>Find Your Perfect Car</h1>
    <p>Your one-stop destination for all your automotive needs!</p>
</div>

<div class="topnav">
    <a href="html_proj.php">Home</a>
    <a href="models.php">Cars & Models</a>
    <a href="services.php">Services</a>
    <a href="contact.php">Contact</a>
    <a href="choice.php">Choose what car is right for you?</a>
    <a href="risk_evaluation.php">Risk evaluation</a>
    <a href="finance.php">Finance</a>
</div>

<div class="container">
    <form id="carForm" method="post">
        <div class="question">
            <label>1. How many passengers do you usually carry?</label><br>
            <input type="number" id="passengers" name="passengers" required min="1">
        </div>

        <div class="question">
            <label>2. Do you need space for luggage or equipment? (yes/no)</label><br>
            <input type="text" id="luggageSpace" name="luggageSpace" required>
        </div>

        <div class="question">
            <label>3. What is your primary use for the car? (commuting, leisure, family trips)</label><br>
            <input type="text" id="primaryUse" name="primaryUse" required>
        </div>

        <div class="question">
            <label>4. Do you prefer fuel efficiency or power? (fuel/power)</label><br>
            <input type="text" id="preference" name="preference" required>
        </div>

        <div class="question">
    <label>5. What is your budget range? (in ZAR)</label><br>
    <!-- Price filter dropdown -->
    <select id="price-filter" name="price-filter">
        <option value="">Select price range</option>
        <option value="less-than-50000">Less than R50,000</option>
        <option value="less-than-100000">Less than R100,000</option>
        <option value="less-than-150000">Less than R150,000</option>
        <option value="less-than-200000">Less than R200,000</option>
        <option value="less-than-250000">Less than R250,000</option>
        <option value="less-than-300000">Less than R300,000</option>
        <option value="less-than-350000">Less than R350,000</option>
        <option value="less-than-400000">Less than R400,000</option>
        <option value="less-than-450000">Less than R450,000</option>
        <option value="less-than-500000">Less than R500,000</option>
        <option value="less-than-550000">Less than R550,000</option>
        <option value="less-than-600000">Less than R600,000</option>
        <option value="less-than-650000">Less than R650,000</option>
        <option value="less-than-700000">Less than R700,000</option>
        <option value="less-than-750000">Less than R750,000</option>
        <option value="less-than-800000">Less than R800,000</option>
        <option value="less-than-850000">Less than R850,000</option>
        <option value="less-than-900000">Less than R900,000</option>
        <option value="less-than-950000">Less than R950,000</option>
        <option value="less-than-1000000">Less than R1,000,000</option>
        <option value="less-than-1250000">More than R1,250,000</option>
        <option value="less-than-1500000">More than R1,500,000</option>
        <option value="less-than-1750000">More than R1,750,000</option>
        <option value="less-than-2000000">More than R2,000,000</option>
    </select>

    <!-- Button to apply filter -->
    <button type="button" id="apply-filter">Apply Filter</button>

    <!-- Hidden input to store the selected budget -->
    <input type="hidden" id="budget" name="budget">
</div>


      <div class="question">
          <label>6. Do you have kids? (yes/no)</label><br>
          <input type="text" id="kids" name="kids" required>
      </div>

      <div class="question">
          <label>7. Do you often drive in urban areas? (yes/no)</label><br>
          <input type="text" id="urbanDriving" name="urbanDriving" required>
      </div>

      <!-- Submit Button -->
      <input type="submit" value="Filter Results">
    </form>

    <!-- Result Display -->
    <div id="results"></div>

</div>

<div class="footer">
    &copy; Ashil's Automotive &nbsp; | &nbsp; All rights reserved.
</div>

<script>
// Get the price filter dropdown element
const priceFilter = document.getElementById('price-filter');

// Get the apply filter button element
const applyFilterButton = document.getElementById('apply-filter');

// Add an event listener to the apply filter button
applyFilterButton.addEventListener('click', (e) => {
  // Get the selected price filter value
  const selectedPriceFilter = priceFilter.value;

  // Log the selected price filter value to the console
  console.log(`Selected price filter value: ${selectedPriceFilter}`);

  // Construct the URL with the filtered price
  const url = `https://www.autotrader.co.za/cars-for-sale/sedan-bodytype?price=${encodeURIComponent(selectedPriceFilter)}&priceoption=RetailPrice`;

  // Log the constructed URL to the console
  console.log(`Constructed URL: ${url}`);

  // Redirect the user to the Autotrader website with the constructed URL
  try {
    window.location.href = url;
  } catch (error) {
    console.error(`Error redirecting to Autotrader website: ${error}`);
  }
});
</script>

<?php
// Any additional PHP logic can be added here if needed in the future.
?>

</body>
</html>














<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Car Choice Advisor</title>
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
            background-color: white; /* White background for contrast */
            border-radius: 8px; /* Rounded corners */
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1); /* Subtle shadow for depth */
            margin: 20px; /* Margin around container */
        }

        .question {
            margin-bottom: 15px;
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
    <h1>Find Your Perfect Car</h1>
    <p>Your one-stop destination for all your automotive needs!</p>
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
    <form id="carForm">
        <div class="question">
            <label>1. How many passengers do you usually carry?</label><br>
            <input type="number" id="passengers" required>
        </div>
        
        <div class="question">
            <label>2. Do you need space for luggage or equipment? (yes/no)</label><br>
            <input type="text" id="luggageSpace" required>
        </div>

        <div class="question">
            <label>3. What is your primary use for the car? (commuting, leisure, family trips)</label><br>
            <input type="text" id="primaryUse" required>
        </div>

        <div class="question">
            <label>4. Do you prefer fuel efficiency or power? (fuel/power)</label><br>
            <input type="text" id="preference" required>
        </div>

        <div class="question">
            <label>5. What is your budget range? (in ZAR)</label><br>
            <input type="number" id="budget" required>
        </div>

        <div class="question">
            <label>6. Do you have kids? (yes/no)</label><br>
            <input type="text" id="kids" required>
        </div>

        <div class="question">
            <label>7. Do you often drive in urban areas? (yes/no)</label><br>
            <input type="text" id="urbanDriving" required>
        </div>

        <div class="question">
            <label>8. Are you looking for a new or used car? (new/used)</label><br>
            <input type="text" id="carCondition" required>
        </div>

        <div class="question">
            <label>9. Do you prefer advanced technology features? (yes/no)</label><br>
            <input type="text" id="techFeatures" required>
        </div>

        <div class="question">
            <label>10. What is your preferred car color?</label><br>
            <input type="text" id="carColor" required>
        </div>

        <button type="button" onclick="recommendCar()">Get Recommendation</button>
    </form>

    <div class="result" id="result"></div>
</div>

<div class="footer">
    &copy; Ashil's Automotive &nbsp; | &nbsp; All rights reserved.
</div>

<script>
function recommendCar() {
    const passengers = parseInt(document.getElementById('passengers').value);
    const luggageSpace = document.getElementById('luggageSpace').value.toLowerCase();
    const primaryUse = document.getElementById('primaryUse').value.toLowerCase();
    const preference = document.getElementById('preference').value.toLowerCase();
    const budget = parseInt(document.getElementById('budget').value);
    const kids = document.getElementById('kids').value.toLowerCase();
    const urbanDriving = document.getElementById('urbanDriving').value.toLowerCase();
    const carCondition = document.getElementById('carCondition').value.toLowerCase();
    const techFeatures = document.getElementById('techFeatures').value.toLowerCase();

    let recommendedType = '';
    let explanation = '';

    // Logic to determine car body type
    if (kids === 'yes' || passengers > 5) {
        recommendedType = 'SUV';
        explanation = 'An SUV is perfect for families as it offers ample space for passengers and luggage.';
    } else if (primaryUse.includes('commuting') && urbanDriving === 'yes') {
        recommendedType = 'Hatchback';
        explanation = 'A hatchback is ideal for city driving due to its compact size and fuel efficiency.';
    } else if (primaryUse.includes('leisure') && preference === 'power') {
        recommendedType = 'Sports Car';
        explanation = 'A sports car will provide the thrill and power you desire for leisure drives.';
    } else {
        recommendedType = 'Sedan';
        explanation = 'A sedan offers a good balance of comfort and efficiency for daily use.';
    }

   // Construct URL based on recommended car type and budget
   let searchUrl;

   if (carCondition === 'new') {
       // Direct to new car specials page
       searchUrl = 'https://www.autotrader.co.za/new-car-specials';
   } else {
       // For used cars, construct a search URL based on body type and budget
       const baseUrl = 'https://www.autotrader.co.za/cars-for-sale';
       let autotraderBodyType;

       switch(recommendedType) {
           case 'SUV':
               autotraderBodyType = 'suv';
               break;
           case 'Hatchback':
               autotraderBodyType = 'hatchback';
               break;
           case 'Sports Car':
               autotraderBodyType = 'coupe'; // Assuming coupes are categorized under sports cars
               break;
           case 'Sedan':
               autotraderBodyType = 'sedan';
               break;
           default:
               autotraderBodyType = '';
               break;
       }
       
       searchUrl = `${baseUrl}?bodyType=${autotraderBodyType}&priceRange=${budget}`;
   }
   
   // Display the recommendation with a link to Autotrader
   document.getElementById('result').innerHTML =
     `<strong>Recommended Car Type:</strong> ${recommendedType}<br>` +
     `<strong>Why:</strong> ${explanation}<br>` +
     `<a href='${searchUrl}' target='_blank'>Find ${recommendedType}s on Autotrader South Africa!</a>`;
}
</script>

</body>
</html>





<!-- THIS IS THE MAIN FILTER CODE -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AutoTrader Car Search</title>
    <script>
        function redirectToAutoTrader() {
            var bodyType = document.getElementById("bodyType").value;
            var price = document.getElementById("price").value;
            var color = document.getElementById("color").value;
            var transmission = document.getElementById("transmission").value;
            var fuelType = document.getElementById("fuelType").value;

            var url = "https://www.autotrader.co.za/cars-for-sale/" + bodyType + "?price=" + price + "&colour=" + color + "&transmission=" + transmission + "&fueltype=" + fuelType + "&priceoption=RetailPrice";
            window.location.href = url;
        }
    </script>
</head>
<body>
    <h1>Car Search on AutoTrader</h1>
    <form onsubmit="event.preventDefault(); redirectToAutoTrader();">
        <label for="bodyType">Select Body Type:</label>
        <select id="bodyType">
        <option value="cabriolet-bodytype">Cabriolet</option>
            <option value="coupe-bodytype">Coupé</option>
            <option value="crew-bus-bodytype">Crew Bus</option>
            <option value="double-cab-bodytype">Double Cab</option>
            <option value="extended-cab-bodytype">Extended Cab</option>
            <option value="fastback-bodytype">Fastback</option>
            <option value="hatchback-bodytype">Hatchback</option>
            <option value="kingcab-bodytype">Kingcab</option>
            <option value="lcv-bodytype">LCV (Light Commercial Vehicle)</option>
            <option value="minibus-bodytype">Minibus</option>
            <option value="mpv-bodytype">MPV (Multi-Purpose Vehicle)</option>
            <option value="panel-van-bodytype">Panel Van</option>
            <option value="sedan-bodytype">Sedan</option>
            <option value="single-cab-bodytype">Single Cab</option>
            <option value="sportback-bodytype">Sportback</option>
            <option value="station-wagon-bodytype">Station Wagon</option>
            <option value="supercab-bodytype">Supercab</option>
            <option value="suv-bodytype">SUV</option>
            <!-- Add more body types as needed -->
        </select><br><br>

        <label for="price">Select Price Range:</label>
        <select id="price">
        <option value="">Select price range</option>
        <option value="less-than-50000">Less than R50,000</option>
        <option value="less-than-100000">Less than R100,000</option>
        <option value="less-than-150000">Less than R150,000</option>
        <option value="less-than-200000">Less than R200,000</option>
        <option value="less-than-250000">Less than R250,000</option>
        <option value="less-than-300000">Less than R300,000</option>
        <option value="less-than-350000">Less than R350,000</option>
        <option value="less-than-400000">Less than R400,000</option>
        <option value="less-than-450000">Less than R450,000</option>
        <option value="less-than-500000">Less than R500,000</option>
        <option value="less-than-550000">Less than R550,000</option>
        <option value="less-than-600000">Less than R600,000</option>
        <option value="less-than-650000">Less than R650,000</option>
        <option value="less-than-700000">Less than R700,000</option>
        <option value="less-than-750000">Less than R750,000</option>
        <option value="less-than-800000">Less than R800,000</option>
        <option value="less-than-850000">Less than R850,000</option>
        <option value="less-than-900000">Less than R900,000</option>
        <option value="less-than-950000">Less than R950,000</option>
        <option value="less-than-1000000">Less than R1,000,000</option>
        <option value="less-than-1250000">More than R1,250,000</option>
        <option value="less-than-1500000">More than R1,500,000</option>
        <option value="less-than-1750000">More than R1,750,000</option>
        <option value="less-than-2000000">More than R2,000,000</option>
        </select><br><br>

        <label for="color">Select Color:</label>
        <select id="color">
            <option value="Red">Red</option>
            <option value="Black">Black</option>
            <option value="White">White</option>
            <option value="Beige">Beige</option>
            <option value="Blue">Blue</option>
            <option value="Bronze">Bronze</option>
            <option value="Brown">Brown</option>
            <option value="Burgundy">Burgundy</option>
            <option value="Gold">Gold</option>
            <option value="Green">Green</option>
            <option value="Grey">Grey</option>
            <option value="Indigo">Indigo</option>
            <option value="Magenta">Magenta</option>
            <option value="Maroon">Maroon</option>
            <option value="Navy">Navy</option>
            <option value="Orange">Orange</option>
            <option value="Pink">Pink</option>
            <option value="Purple">Purple</option>
            <option value="Yellow">Yellow</option>
            <option value="Silver">silver</option>
            <option value="Turquoise">Turquoise</option>
            <!-- Add more colors as needed -->
        </select><br><br>

        <label for="transmission">Select Transmission:</label>
        <select id="transmission">
            <option value="Manual">Manual</option>
            <option value="Automatic">Automatic</option>
        </select><br><br>

        <label for="fuelType">Select Fuel Type:</label>
        <select id="fuelType">
            <option value="Petrol">Petrol</option>
            <option value="Diesel">Diesel</option>
        </select><br><br>

        <button type="submit">Search Cars</button>
    </form>
</body>
</html>








<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Car Search and Recommendation</title>
    <style>
        body {
            display: flex;
            justify-content: space-between;
            padding: 20px;
            font-family: Arial, sans-serif;
            background-color: #f7f7f7; /* Light gray background for the page */
        }
        .form-container {
            width: 45%;
            text-align: center; /* Center align text */
            padding: 15px;
            margin: 10px;
            background-color: white; /* White background for each member */
            border-radius: 8px; /* Rounded corners */
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1); /* Subtle shadow */
            transition: transform 0.3s ease; /* Transition effects */
        }
        .form-container:hover {
            transform: scale(1.02); /* Slightly enlarge on hover */
        }
        h1, h2 {
            color: #333;
        }
        label {
            display: block; /* Make labels block elements for better spacing */
            margin-bottom: 10px; /* Space between labels and inputs */
        }
        button {
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            background-color: #007BFF; /* Bootstrap primary color */
            color: white;
            cursor: pointer;
            transition: background-color 0.3s ease; /* Transition for button color */
        }
        button:hover {
            background-color: #0056b3; /* Darker shade on hover */
        }
    </style>
    <script>
function redirectToAutoTrader() {
    var vehicleType = document.getElementById("vehicleType").value;
    var bodyType = document.getElementById("bodyType").value;
    var price = document.getElementById("price").value;
    var color = document.getElementById("color").value;
    var transmission = document.getElementById("transmission").value;
    var fuelType = document.getElementById("fuelType").value;

    // Correctly concatenate vehicleType and bodyType with a slash
    var url = "https://www.autotrader.co.za/" + vehicleType + "/" + bodyType + "?price=" + price + "&colour=" + color + "&transmission=" + transmission + "&fueltype=" + fuelType + "&priceoption=RetailPrice";
    
    window.location.href = url;
}

        function recommendCar() {
            // Gather user responses
            var familySize = document.querySelector('input[name="familySize"]:checked').value;
            var distance = document.querySelector('input[name="distance"]:checked').value;
            var ageGroup = document.querySelector('input[name="ageGroup"]:checked').value;
            var fuelPreference = document.querySelector('input[name="fuelPreference"]:checked').value;

            // Logic for recommendations
            var recommendation = "";

            if (familySize === "large") {
                recommendation += "We recommend an SUV or MPV for your family needs. ";
            } else if (familySize === "small") {
                recommendation += "A Sedan or Hatchback would be suitable for your small family. ";
            } else {
                recommendation += "A Coupe or Cabriolet could be a great fit for you! ";
            }

            if (distance === "long") {
                recommendation += "Since you drive longer distances, we suggest a Diesel vehicle for better fuel efficiency. ";
            } else {
                recommendation += "A Petrol vehicle would be more suitable for shorter distances. ";
            }

            if (ageGroup === "young") {
                recommendation += "You might enjoy a sporty model like a Coupe or Sportback. ";
            } else if (ageGroup === "middle-aged") {
                recommendation += "Consider a comfortable Sedan or SUV for practicality. ";
            } else {
                recommendation += "A reliable vehicle like a Station Wagon or MPV would suit your needs well. ";
            }

            // Display the recommendation
            document.getElementById("recommendation").innerText = recommendation;
        }
    </script>
</head>
<body>
    <div class="form-container">
        <h1>Car Search on AutoTrader</h1>
        <form onsubmit="event.preventDefault(); redirectToAutoTrader();">
            <label for ="vehicleType">What type of vehicle are you searching for?</label>
            <select id="vehicleType">
                <option value="cars-for-sale">Cars</option>
                <option value="bikes-for-sale">Bikes</option>
                <option value="boats-for-sale">Boats</option>
                <option value="trucks-for-sale">Commercial</option>

            </select>
            <label for="bodyType">Select Body Type:</label>
            <select id="bodyType">
                <option value="cabriolet-bodytype">Cabriolet</option>
                <option value="coupe-bodytype">Coupé</option>
                <option value="crew-bus-bodytype">Crew Bus</option>
                <option value="double-cab-bodytype">Double Cab</option>
                <option value="extended-cab-bodytype">Extended Cab</option>
                <option value="fastback-bodytype">Fastback</option>
                <option value="hatchback-bodytype">Hatchback</option>
                <option value="kingcab-bodytype">Kingcab</option>
                <option value="lcv-bodytype">LCV (Light Commercial Vehicle)</option>
                <option value="minibus-bodytype">Minibus</option>
                <option value="mpv-bodytype">MPV (Multi-Purpose Vehicle)</option>
                <option value="panel-van-bodytype">Panel Van</option>
                <option value="sedan-bodytype">Sedan</option>
                <option value="single-cab-bodytype">Single Cab</option>
                <option value="sportback-bodytype">Sportback</option>
                <option value="station-wagon-bodytype">Station Wagon</option>
                <option value="supercab-bodytype">Supercab</option>
                <option value="suv-bodytype">SUV</option>
            </select><br><br>

            <label for="price">Select Price Range:</label>
            <select id="price">
            <option value="">Select price range</option>
        <option value="less-than-50000">Less than R50,000</option>
        <option value="less-than-100000">Less than R100,000</option>
        <option value="less-than-150000">Less than R150,000</option>
        <option value="less-than-200000">Less than R200,000</option>
        <option value="less-than-250000">Less than R250,000</option>
        <option value="less-than-300000">Less than R300,000</option>
        <option value="less-than-350000">Less than R350,000</option>
        <option value="less-than-400000">Less than R400,000</option>
        <option value="less-than-450000">Less than R450,000</option>
        <option value="less-than-500000">Less than R500,000</option>
        <option value="less-than-550000">Less than R550,000</option>
        <option value="less-than-600000">Less than R600,000</option>
        <option value="less-than-650000">Less than R650,000</option>
        <option value="less-than-700000">Less than R700,000</option>
        <option value="less-than-750000">Less than R750,000</option>
        <option value="less-than-800000">Less than R800,000</option>
        <option value="less-than-850000">Less than R850,000</option>
        <option value="less-than-900000">Less than R900,000</option>
        <option value="less-than-950000">Less than R950,000</option>
        <option value="less-than-1000000">Less than R1,000,000</option>
        <option value="less-than-1250000">More than R1,250,000</option>
        <option value="less-than-1500000">More than R1,500,000</option>
        <option value="less-than-1750000">More than R1,750,000</option>
        <option value="less-than-2000000">More than R2,000,000</option>
            </select><br><br>

            <label for="color">Select Color:</label>
            <select id="color">
            <option value="Red">Red</option>
            <option value="Black">Black</option>
            <option value="White">White</option>
            <option value="Beige">Beige</option>
            <option value="Blue">Blue</option>
            <option value="Bronze">Bronze</option>
            <option value="Brown">Brown</option>
            <option value="Burgundy">Burgundy</option>
            <option value="Gold">Gold</option>
            <option value="Green">Green</option>
            <option value="Grey">Grey</option>
            <option value="Indigo">Indigo</option>
            <option value="Magenta">Magenta</option>
            <option value="Maroon">Maroon</option>
            <option value="Navy">Navy</option>
            <option value="Orange">Orange</option>
            <option value="Pink">Pink</option>
            <option value="Purple">Purple</option>
            <option value="Yellow">Yellow</option>
            <option value="Silver">silver</option>
            <option value="Turquoise">Turquoise</option>
            </select><br><br>

            <label for="transmission">Select Transmission:</label>
            <select id="transmission">
                <option value="Manual">Manual</option>
                <option value="Automatic">Automatic</option>
            </select><br><br>

            <label for="fuelType">Select Fuel Type:</label>
            <select id="fuelType">
                <option value="Petrol">Petrol</option>
                <option value="Diesel">Diesel</option>
            </select><br><br>

            <button type="submit">Search Cars</button>
        </form>
    </div>

    <div class="form-container">
        <h1>Car Recommendation Quiz</h1>
        <form onsubmit="event.preventDefault(); recommendCar();">
            <h2>1. How large is your family?</h2>
            <label><input type="radio" name="familySize" value="large" required> Large (4+ members)</label><br>
            <label><input type="radio" name="familySize" value="small"> Small (2-3 members)</label><br>
            <label><input type="radio" name="familySize" value="single"> Single</label><br>

            <h2>2. How often do you drive long distances?</h2>
            <label><input type="radio" name="distance" value="long" required> Yes, frequently</label><br>
            <label><input type="radio" name="distance" value="short"> No, mostly short trips</label><br>

            <h2>3. What is your age group?</h2>
            <label><input type="radio" name="ageGroup" value="young" required> Under 30</label><br>
            <label><input type="radio" name="ageGroup" value="middle-aged"> 30-50</label><br>
            <label><input type="radio" name="ageGroup" value="senior"> 50+</label><br>

            <h2>4. What is your fuel preference?</h2>
             <label><input type='radio' name='fuelPreference' value='diesel' required> Diesel </label><br> 
             <label><input type='radio' name='fuelPreference' value='petrol'> Petrol </label><br> 

             <button type='submit'>Get Recommendation </button> 
          </form> 

         <h2>Your Recommendation:</h2> 
         <p id='recommendation'></p> 
      </div>  

 </body>  
 </html>
 <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Car Search and Recommendation</title>
    <style>
        body {
            display: flex;
            justify-content: space-between;
            padding: 20px;
            font-family: Arial, sans-serif;
            background-color: #f7f7f7; /* Light gray background for the page */
        }
        .form-container {
            width: 45%;
            text-align: center; /* Center align text */
            padding: 15px;
            margin: 10px;
            background-color: white; /* White background for each member */
            border-radius: 8px; /* Rounded corners */
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1); /* Subtle shadow */
            transition: transform 0.3s ease; /* Transition effects */
        }
        .form-container:hover {
            transform: scale(1.02); /* Slightly enlarge on hover */
        }
        h1, h2 {
            color: #333;
        }
        label {
            display: block; /* Make labels block elements for better spacing */
            margin-bottom: 10px; /* Space between labels and inputs */
        }
        button {
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            background-color: #007BFF; /* Bootstrap primary color */
            color: white;
            cursor: pointer;
            transition: background-color 0.3s ease; /* Transition for button color */
        }
        button:hover {
            background-color: #0056b3; /* Darker shade on hover */
        }
        .color-option {
            display: flex;
            align-items: center;
        }
        .color-swatch {
            width: 20px; 
            height: 20px; 
            margin-right: 10px; 
            border-radius: 4px; 
        }
    </style>

 <label for="color">Select Color:</label>
             <select id="color">
                 <div class='color-option'>
                     <span class='color-swatch' style='background-color:red'></span> Red
                 </div>

                 <div class='color-option'>
                     <span class='color-swatch' style='background-color:black'></span> Black
                 </div>

                 <div class='color-option'>
                     <span class='color-swatch' style='background-color:white'></span> White
                 </div>




