<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ashil's Automotive - Our Services</title>
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
            padding: 20px; /* Padding around the container */
        }

        .service-card {
            background-color: white; /* White background for service cards */
            border-radius: 8px; /* Rounded corners */
            box-shadow: 0 2px 10px rgba(0,0,0,0.1); /* Subtle shadow for depth */
            padding: 20px; /* Padding inside service cards */
            margin-bottom: 20px; /* Space between cards */
            cursor: pointer; /* Pointer cursor on hover */
        }

        .service-card h3 {
            color: #454545; /* Heading color for services */
        }

        .service-card p {
            transition: color 0.3s ease, transform 0.3s ease; /* Transition for color and transform */
            margin: 10px 0; /* Margin for spacing */
        }

        .service-card:hover {
            background-color: #f1f1f1; /* Light gray background on hover */
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
        .chat-container {
            position: fixed;
            bottom: 20px;
            right: 20px;
            width: 300px;
            border-radius: 8px;
            box-shadow: 0 2px 10px rgba(0,0,0,0.2);
        }

        .chat-header {
            background-color: #333;
            color: white;
            padding: 10px;
            border-radius: 8px 8px 0 0;
            cursor: pointer;
        }

        .chat-body {
            background-color: white;
            max-height: 400px;
            overflow-y: auto; /* Scrollable */
        }

        .chat-message {
            padding: 10px;
            margin: 5px;
        }

        .user-message {
            background-color: #e1ffc7; /* Light green for user messages */
            text-align: right; /* Align user messages to the right */
        }

        .bot-message {
            background-color: #f1f1f1; /* Light gray for bot messages */
        }

        .input-container {
            display: flex;
            padding: 10px;
        }

        .input-container input {
            flex-grow: 1; /* Take available space */
            padding: 10px;
        }

        .input-container button {
            padding: 10px;
            background-color: #3934C0; /* Button color */
            color: white; /* Button text color */
        }
    </style>
</head>
<body>
    <div class="header">
        <h1>Our Services</h1>
        <p>Quality care for your vehicle, every time!</p>
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
        <div class="service-card" onclick="showPriceRange('Routine Maintenance')">
            <h3>Routine Maintenance</h3>
            <p>Keep your vehicle in top shape with our routine maintenance services, including oil changes, tire rotations, and fluid checks.</p>
        </div>

        <div class="service-card" onclick="showPriceRange('Engine Diagnostics')">
            <h3>Engine Diagnostics</h3>
            <p>Our advanced diagnostic tools can quickly identify engine issues.</p>
        </div>

        <div class="service-card" onclick="showPriceRange('Brake Services')">
            <h3>Brake Services</h3>
            <p>Your safety is our priority! We offer comprehensive brake services including inspections and replacements.</p>
        </div>

        <div class="service-card" onclick="showPriceRange('Tire Services')">
            <h3>Tire Services</h3>
            <p>From tire rotations to alignments and replacements, we have you covered.</p>
        </div>

        <div class="service-card" onclick="showPriceRange('Transmission Services')">
            <h3>Transmission Services</h3>
            <p>Keep your transmission running smoothly with our transmission fluid changes and repairs.</p>
        </div>

         <!-- Add more service cards as needed -->
    </div>

    <!-- Price Range Modal -->
    <div id="priceModal" style="display:none; position:absolute; top:50%; left:50%; transform:translate(-50%, -50%); padding:20px; background:white; border-radius:8px; box-shadow:0 4px 20px rgba(0,0,0,0.2); z-index:100;">
      <h2 id="modalTitle"></h2>
      <p id="modalContent"></p>
      <button onclick="closeModal()">Close</button>
    </div>

    <div class="footer">
         <p>Ashil's Automotive &copy; 2024</p>
    </div>

    <script>
      function showPriceRange(service) {
          let title = '';
          let content = '';

          switch(service) {
              case 'Routine Maintenance':
                  title = 'Routine Maintenance';
                  content = `
                      Price Range for Routine Maintenance:<br>
                      - Small Cars (e.g., hatchbacks): Starting at R500<br>
                      - Sedans/SUVs: Starting at R600<br>
                      - Luxury Vehicles: Starting at R800`;
                  break;
              case 'Engine Diagnostics':
                  title = 'Engine Diagnostics';
                  content = `
                      Price Range for Engine Diagnostics:<br>
                      - Small Cars (e.g., hatchbacks): R750<br>
                      - Sedans/SUVs: R850<br>
                      - Luxury Vehicles: R950`;
                  break;
              case 'Brake Services':
                  title = 'Brake Services';
                  content = `
                      Price Range for Brake Services:<br>
                      - Small Cars (e.g., hatchbacks): R1,200<br>
                      - Sedans/SUVs: R1,400<br>
                      - Luxury Vehicles: R1,600`;
                  break;
              case 'Tire Services':
                  title = 'Tire Services';
                  content = `
                      Price Range for Tire Services:<br>
                      - Small Cars (e.g., hatchbacks): Starting at R600<br>
                      - Sedans/SUVs: Starting at R700<br>
                      - Luxury Vehicles: Starting at R800`;
                  break;
              case 'Transmission Services':
                  title = 'Transmission Services';
                  content = `
                      Price Range for Transmission Services:<br>
                      - Small Cars (e.g., hatchbacks): R1,500<br>
                      - Sedans/SUVs: R1,800<br>
                      - Luxury Vehicles: R2,000`;
                  break;
              default:
                  title = 'Service Not Found';
                  content = 'Please select a valid service.';
          }

          document.getElementById('modalTitle').innerHTML = title;
          document.getElementById('modalContent').innerHTML = content;

          // Show modal
          document.getElementById('priceModal').style.display = 'block';
      }

      function closeModal() {
          document.getElementById('priceModal').style.display = 'none';
      }
    </script>
    <!-- Chatbot Container -->
<div class="chat-container" id="chatContainer">
    <div class="chat-header" onclick="toggleChat()">Chat with Us!</div>
    <div class="chat-body" id="chatBody">
        <!-- Messages will be displayed here -->
    </div>
    <div class="input-container">
        <input type="text" id="userInput" placeholder="Ask me anything...">
        <button onclick="sendMessage()">Send</button>
    </div>
</div>

<!-- Chatbot Toggle Button -->
<button style="position:absolute; bottom:20px; right:20px;" onclick="toggleChat()">Chat</button>

<script>
    const chatContainer = document.getElementById('chatContainer');
    const chatBody = document.getElementById('chatBody');
    const userInput = document.getElementById('userInput');

    function toggleChat() {
        if (chatContainer.style.display === 'none' || chatContainer.style.display === '') {
            chatContainer.style.display = 'block';
        } else {
            chatContainer.style.display = 'none';
        }
    }

    async function sendMessage() {
        const message = userInput.value.trim();
        
        if (message) {
            // Display user message
            addMessage(message, 'user');
            
            // Clear input
            userInput.value = '';

            // Fetch response from search.php
            const response = await fetch('services.php?q=' + encodeURIComponent(message));
            
            if (response.ok) {
                const data = await response.json();
                // Assuming the API returns an array of results
                if (data.error) {
                    addMessage(data.error, 'bot');
                } else if (data.results && data.results.length > 0) {
                    // Displaying results (assuming data is an array)
                    data.results.forEach(result => {
                        addMessage(result.title + ": " + result.link, 'bot'); // Adjust based on actual response structure
                    });
                } else {
                    addMessage("No results found.", 'bot');
                }
            } else {
                addMessage("Error fetching data.", 'bot');
            }
            
           // Scroll to the bottom
           chatBody.scrollTop = chatBody.scrollHeight; 
       }
   }

   function addMessage(message, type) {
       const messageDiv = document.createElement('div');
       messageDiv.className = 'chat-message ' + (type === 'user' ? 'user-message' : 'bot-message');
       messageDiv.textContent = message;
       chatBody.appendChild(messageDiv);
   }
</script>

<!-- PHP Script for API Request -->
<?php
if ($_SERVER['REQUEST_METHOD'] === 'GET' && isset($_GET['q'])) {
    header('Content-Type: application/json');

    $url = "https://www.searchapi.io/api/v1/search";
    $params = array(
      "engine" => "google",
      "q" => $_GET['q']
    );
    $queryString = http_build_query($params);

    $curl = curl_init();
    curl_setopt_array($curl, [
      CURLOPT_URL => $url . '?' . $queryString,
      CURLOPT_RETURNTRANSFER => true,
      CURLOPT_TIMEOUT => 60,
      CURLOPT_CUSTOMREQUEST => "GET",
      CURLOPT_HTTPHEADER => [
          "accept: application/json"
      ]
    ]);

    $response = curl_exec($curl);
    $error = curl_error($curl);

    curl_close($curl);

    if ($error) {
      echo json_encode(["error" => "cURL Error #: " . $error]);
    } else {
      echo $response; // Return the API response directly
    }
}
?>

</body>
</html>
