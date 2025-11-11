<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Car Search and Recommendation</title>
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
            background-color: #454545;
            /* Fallback color */
            color: white;
            /* White text */
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
            display: flex;
            justify-content: space-between;
            padding: 20px;
            min-width: 600px;
            /* Minimum width */
            max-width: 1200px;
            /* Maximum width */
            margin: auto;
            /* Center container */
            background-color: white;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
        }

        .form-container {
            width: 45%;
            /* Set width for each form */
            text-align: left;
            /* Align text to left */
            padding: 15px;
            margin: 10px;
            /* Margin between forms */
            background-color: white;
            /* White background for each member */
            border-radius: 8px;
            /* Rounded corners */
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
            /* Subtle shadow */
            transition: transform 0.3s ease;
            /* Transition effects */
        }

        .form-container:hover {
            transform: scale(1.02);
            /* Slightly enlarge on hover */
        }

        h1,
        h2 {
            color: #333;
        }

        label {
            display: block;
            /* Make labels block elements for better spacing */
            margin-bottom: 10px;
            /* Space between labels and inputs */
        }

        button {
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            background-color: #007BFF;
            /* Bootstrap primary color */
            color: white;
            cursor: pointer;
            transition: background-color 0.3s ease;
            /* Transition for button color */
        }

        button:hover {
            background-color: #0056b3;
            /* Darker shade on hover */
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

        .footer {
            background-color: rgb(79, 79, 79);
            color: white;
            text-align: center;
            padding: 15px;
            position: relative;
            bottom: 0;
            width: 100%;
        }

        .item {
            flex-grow: 1;
            /* Allow items to grow */
            margin: 10px;
            padding: 20px;
            background-color: lightblue;
            text-align: center;
        }

        @media (max-width: 768px) {
            .container {
                flex-direction: column;
                /* Stack items on small screens */
                min-width: auto;
                /* Remove min-width on small screens */
            }

            .form-container {
                width: 90%;
                /* Adjust width for smaller screens */
            }
        }

        /* Recommendation Quiz Styles */
        .recommendation-quiz {
            text-align: left;
            padding: 20px;
        }

        .recommendation-quiz h2 {
            margin-top: 20px;
            color: #555;
        }

        .recommendation-quiz label {
            margin: 5px 0;
            display: block;
        }

        .recommendation-quiz input[type="radio"] {
            margin-right: 5px;
        }

        /* Insurance Form Styles */
        .insurance-form {
            text-align: left;
            padding: 20px;
        }
    </style>
    <script>
        function redirectToAutoTrader() {
            var vehicleType = document.getElementById("vehicleType").value;
            var bodyType = document.getElementById("bodyType").value;
            var price = document.getElementById("price").value;

            // Get selected color
            var colorOptions = document.getElementsByName("color");
            var color = "";
            for (var i = 0; i < colorOptions.length; i++) {
                if (colorOptions[i].checked) {
                    color = colorOptions[i].value;
                    break;
                }
            }

            var transmission = document.getElementById("transmission").value;
            var fuelType = document.getElementById("fuelType").value;

            var url = "https://www.autotrader.co.za/" + vehicleType + "/" + bodyType + "?price=" + price + "&colour=" + color + "&transmission=" + transmission + "&fueltype=" + fuelType + "&priceoption=RetailPrice";

            window.location.href = url;
        }

        function recommendCar() {
            // Gather user responses based on IDs
            var primaryUse = document.querySelector('input[name="primaryUse"]:checked')?.value;
            var passengerCount = document.querySelector('input[name="passengerCount"]:checked')?.value;
            var cargoImportance = document.querySelector('input[name="cargoImportance"]:checked')?.value;
            var drivingConditions = document.querySelector('input[name="drivingConditions"]:checked')?.value;
            var budgetRange = document.querySelector('input[name="budgetRange"]:checked')?.value;

            // Recommendation logic based on quiz answers
            var recommendations = [];

            if (primaryUse === "commuting") {
                recommendations.push("Sedan", "Hatchback");
            } else if (primaryUse === "family") {
                recommendations.push("SUV", "MPV");
            } else if (primaryUse === "adventure") {
                recommendations.push("Pickup Truck", "SUV");
            } else if (primaryUse === "luxury") {
                recommendations.push("Coupe", "Convertible");
            }

            if (passengerCount === "1-2") {
                recommendations.push("Coupe", "Convertible");
            } else if (passengerCount === "3-4") {
                recommendations.push("Sedan", "Hatchback");
            } else if (passengerCount === "5+") {
                recommendations.push("MPV", "SUV");
            }

            if (cargoImportance === "notImportant") {
                recommendations.push("Coupe", "Convertible");
            } else if (cargoImportance === "moderate") {
                recommendations.push("Hatchback", "SUV");
            } else if (cargoImportance === "veryImportant") {
                recommendations.push("Station Wagon", "Pickup Truck");
            }

            if (drivingConditions === "city") {
                recommendations.push("Hatchback", "Sedan");
            } else if (drivingConditions === "rural") {
                recommendations.push("SUV", "Pickup Truck");
            } else if (drivingConditions === "highway") {
                recommendations.push("Sedan", "Convertible");
            }

            if (budgetRange === "economy") {
                recommendations.push("Hatchback", "Sedan");
            } else if (budgetRange === "midRange") {
                recommendations.push("SUV", "Station Wagon");
            } else if (budgetRange === "premium") {
                recommendations.push("Coupe", "Convertible");
            }

            // Remove duplicates from recommendations array
            var uniqueRecommendations = [...new Set(recommendations)];

            // Display the recommendation
            document.getElementById("recommendation").innerText = "Based on your answers, we recommend: " + uniqueRecommendations.join(", ");
        }

        function getInsuranceQuote() {
            var carMake = document.getElementById("carMake").value;
            var carModel = document.getElementById("carModel").value;
            var carYear = document.getElementById("carYear").value;

            // Basic validation
            if (!carMake || !carModel || !carYear) {
                alert("Please fill in all car details.");
                return;
            }

            // Mock insurance rates based on car details
            var baseRate = 500; // Base insurance rate

            // Adjust rate based on car year (newer cars might be more expensive to insure)
            var yearFactor = (new Date().getFullYear() - carYear) * -5; // Newer cars get a positive adjustment
            baseRate += yearFactor;

            // Adjust rate based on car make and model (you can customize this)
            if (carMake.toLowerCase().includes("bmw") || carMake.toLowerCase().includes("audi")) {
                baseRate += 200; // Premium makes are more expensive
            }
            if (carModel.toLowerCase().includes("sport") || carModel.toLowerCase().includes("m3")) {
                baseRate += 150; // Sporty models are more expensive
            }

            // Ensure the rate is not negative
            baseRate = Math.max(baseRate, 300);

            // Display the estimated insurance rate
            document.getElementById("insuranceEstimate").innerText = "Estimated Insurance: R" + baseRate + " per month";
        }
    </script>
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
        <!-- Car Search Form -->
        <div class="form-container">
            <h1>Car Search on AutoTrader</h1>
            <form onsubmit="event.preventDefault(); redirectToAutoTrader();">

                <label for="vehicleType">What type of vehicle are you searching for?</label>
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

                <!-- Color Options -->
                <label>Select Color:</label><br />
                <!-- Color options with swatches -->
                <?php
                $colors = [
                    "Red", "Black", "White", "Beige", "Blue", "Bronze",
                    "Brown", "Burgundy", "Gold", "Green", "Grey",
                    "Indigo", "Magenta", "Maroon", "Navy", "Orange",
                    "Pink", "Purple", "Yellow", "Silver", "Turquoise"
                ];
                foreach ($colors as $color) {
                    echo "<div class='color-option'>
                                <span class='color-swatch' style='background-color:" . strtolower($color) . "'></span> 
                                <input type='radio' name='color' id='" . strtolower($color) . "' value='" . $color . "'> $color
                              </div>";
                }
                ?>

                <!-- Transmission Selection -->
                <label for="transmission">Select Transmission:</label>
                <select id="transmission">
                    <option value="Manual">Manual</option>
                    <option value="Automatic">Automatic</option>
                </select><br><br>

                <!-- Fuel Type Selection -->
                <label for="fuelType">Select Fuel Type:</label>
                <select id="fuelType">
                    <option value="Petrol">Petrol</option>
                    <option value="Diesel">Diesel</option>
                </select><br><br>

                <!-- Search Cars Button -->
                <button type="submit">Search Cars</button>
            </form>

        </div>

        <!-- Recommendation Quiz -->
        <div class="form-container recommendation-quiz">
            <h1>Car Recommendation Quiz</h1>
            <form onsubmit="event.preventDefault(); recommendCar();">
                <h2>1. What is your primary use for the vehicle?</h2>
                <label><input type="radio" name="primaryUse" value="commuting" required> Daily commuting</label>
                <label><input type="radio" name="primaryUse" value="family"> Family transportation</label>
                <label><input type="radio" name="primaryUse" value="adventure"> Outdoor adventures</label>
                <label><input type="radio" name="primaryUse" value="luxury"> Luxury/sporty driving</label>

                <h2>2. How many passengers do you typically transport?</h2>
                <label><input type="radio" name="passengerCount" value="1-2" required> 1-2</label>
                <label><input type="radio" name="passengerCount" value="3-4"> 3-4</label>
                <label><input type="radio" name="passengerCount" value="5+"> 5+</label>

                <h2>3. How important is cargo space?</h2>
                <label><input type="radio" name="cargoImportance" value="notImportant" required> Not important</label>
                <label><input type="radio" name="cargoImportance" value="moderate"> Moderately important</label>
                <label><input type="radio" name="cargoImportance" value="veryImportant"> Very important</label>

                <h2>4. What type of driving conditions do you face?</h2>
                <label><input type="radio" name="drivingConditions" value="city" required> City roads</label>
                <label><input type="radio" name="drivingConditions" value="rural"> Rural/uneven roads</label>
                <label><input type="radio" name="drivingConditions" value="highway"> Highway cruising</label>

                <h2>5. What's your budget range?</h2>
                <label><input type="radio" name="budgetRange" value="economy" required> Economy</label>
                <label><input type="radio" name="budgetRange" value="midRange"> Mid-range</label>
                <label><input type="radio" name="budgetRange" value="premium"> Premium</label><br>

                <button type="submit">Get Car Recommendation</button>
            </form>
            <p id="recommendation"></p>
        </div>

        <!-- Insurance Quote Form -->
        <div class="form-container insurance-form">
            <h1>Get an Insurance Quote</h1>
            <form onsubmit="event.preventDefault(); getInsuranceQuote();">
                <label for="carMake">Car Make:</label>
                <input type="text" id="carMake" name="carMake" required><br><br>

                <label for="carModel">Car Model:</label>
                <input type="text" id="carModel" name="carModel" required><br><br>

                <label for="carYear">Car Year:</label>
                <input type="number" id="carYear" name="carYear" required><br><br>

                <button type="submit">Get Insurance Quote</button>
            </form>
            <p id="insuranceEstimate"></p>
        </div>
    </div>

    <div class="footer">
        <p>&copy; 2023 Ashil's Automotive</p>
    </div>

</body>

</html>
