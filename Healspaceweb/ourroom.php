<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HealSpace - Our Rooms</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <div class="logo">
            <img src="logo.jpeg" alt="Logo">
        </div>
        <div class="tabs">
            <a href="webhome.php" class="tab">Home</a>
            <a href="about.php" class="tab">About</a>
            <a href="ourroom.php" class="tab active">Our Rooms</a>
            <button class="appointment-button" onclick="bookAppointment()">Make an Appointment</button>
        </div>
    </header>

    <div id="ourroom">
        <h2>Our Rooms</h2>
        <p>Every detail is thought out for the overall experience of the client. Clients spend their precious time speaking out their thoughts and emotions, and they’re not easy at all.
            We’d like them to feel a bit more comfortable and safe while at the clinic. And now, we have two consultation rooms in order to accommodate more clients.
        </p>
    </div>

    <!-- New Rooms Section -->
    <div class="rooms-container">
        <div class="room">
            <img src="Sibol.jpeg" alt="Sibol Room">
            <p><b>Sibol</b> is a Tagalog word which means ‘start of growth’.</p>
        </div>
        <div class="room">
            <img src="Hilom.jpeg" alt="Hilom Room">
            <p><b>Hilom</b> is a Tagalog word which means ‘the process of healing’.</p>
        </div>
    </div>

    <footer>
        <p>&copy; 2024 HealSpace. All rights reserved.</p>
    </footer>
</body>
</html>
