<html>
<head>
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
            background-color: #3934C0; /* background */
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

        .filter {
            margin-bottom: 20px; /* Space below the filter */
        }

        .filter select {
            padding: 10px; /* Padding for select box */
            font-size: 16px; /* Font size for select box */
        }

        .grid {
            display: grid; /* Use CSS Grid for layout */
            grid-template-columns: repeat(auto-fill, minmax(250px, 1fr)); /* Responsive columns */
            gap: 20px; /* Space between grid items */
        }

        .card {
            background-color: white; /* White background for cards */
            border-radius: 8px; /* Rounded corners */
            box-shadow: 0 2px 10px rgba(0,0,0,0.1); /* Subtle shadow for depth */
            overflow: hidden; /* Hide overflow */
            transition: transform 0.3s; /* Smooth transition for hover effect */
        }

        .card:hover {
            transform: scale(1.05); /* Scale effect on hover */
        }

        .card img {
            width: 100%; /* Responsive image */
            height: auto; /* Maintain aspect ratio */
        }

        .card h3 {
            margin: 10px; /* Margin around the title */
        }

        .card p {
            margin: 10px; /* Margin around the description */
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
        h4{
            color: #454545;
            text-align: right;
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
        <div class="filter"><h3>Our catalogue:</h3>
            <label for="modelSelect">Choose a model:</label>
            <select id="modelSelect" onchange="filterModels()">
                <option value="all">All Models</option>
                <option value="nissan">Nissan</option>
                <option value="honda">Honda</option>
                <option value="mazda">Mazda</option>
                <option value="ford">Ford</option>
                <option value="bmw">BMW</option>
                <!-- Add more options as needed -->
            </select>
            <p>View more cars on <a href="https://www.autotrader.co.za" target="_blank">AutoTrader</a></p><h4><a href="riskchart.php">Need some advice on reliability and cost of ownership of these vehicles?</a></h4>
        </div>

        <div class="grid" id="carGrid">
    <!-- Nissan 350z Card -->
    <div class="card" data-brand="nissan">
        <img src="nissan 350z.jpeg" alt="Nissan 350z"> <!-- Updated path -->
        <h3><a href="nissan 350z.php">Nissan 350z</a></h3>
        <p>A classic sports car known for its performance and style.</p>
    </div>

    <!-- Honda S2000 Card -->
    <div class="card" data-brand="honda">
        <img src="honda s2000.jpeg" alt="Honda S2000"> <!-- Updated path -->
        <h3><a href="Honda S2000.php">Honda S2000</a></h3>
        <p>A high-revving sports car that delivers an exhilarating driving experience.</p>
    </div>

    <!-- Mazda 3 MPS Card -->
    <div class="card" data-brand="mazda">
        <img src="mazda 3.jpeg" alt="Mazda 3 MPS"> <!-- Updated path -->
        <h3><a href="Mazda 3 MPS.php">Mazda 3 MPS</a></h3>
        <p>A sporty hatchback with impressive handling and performance.</p>
    </div>

    <!-- Ford Focus ST Card -->
    <div class="card" data-brand="ford">
        <img src="focus.jpeg" alt="Ford Focus ST"> <!-- Updated path -->
        <h3><a href="Ford Focus ST.php">Ford Focus ST</a></h3>
        <p>A powerful hatchback that combines practicality with performance.</p>
    </div>
    <!-- BMW 130i Card -->
    <div class="card" data-brand="bmw">
        <img src="bmw 130i.jpg" alt="BMW 130i"> <!-- Updated path -->
        <h3><a href="BMW 130i.php">BMW 130i</a></h3>
        <p>A sporty hatchback with an inline-six engine, offering agile handling and a premium interior for dynamic everyday driving.</p>
    </div>
</div>


             <!-- Add more car cards as needed -->
         </div>
     </div>

     <div class="footer">
         <p>Ashil's Automotive &copy; 2024</p>
     </div>

     <!-- JavaScript for filtering models -->
     <script>
         function filterModels() {
             const select = document.getElementById('modelSelect');
             const selectedValue = select.value;
             const cards = document.querySelectorAll('.card');

             cards.forEach(card => {
                 if (selectedValue === 'all' || card.getAttribute('data-brand') === selectedValue) {
                     card.style.display = 'block'; // Show card
                 } else {
                     card.style.display = 'none'; // Hide card
                 }
             });
         }
     </script>

</body>
</html>