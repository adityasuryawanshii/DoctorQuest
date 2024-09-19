<!DOCTYPE html>
<html>
<head>
    <title>Book an Appointment</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f0f0f0;
        }
        body {
            background-color: #f0f8ff;
            font-family: Arial, sans-serif;
            position: relative;
        }

        .header {
            display: flex;
            flex-direction: row;
            justify-content: space-between;
            align-items: center;
            font-family: 'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;
            padding: 10px 50px;
            background-color: #22d0f3;
            border-radius: 30px;
            height: 60px;
            box-shadow: #4CAF50;
            border: 2px solid #af28c4;
            
        }

        h1 {
            color: white;
            font-family: Verdana, Geneva, Tahoma, sans-serif;
        }

        nav a:hover {
            color: black;
        }

        nav ul {
            list-style-type: none;
            margin: 0;
            padding: 0;
            display: flex;
            margin-right: auto;
        }

        nav li {
            margin-right: 30px;
        }

        nav a {
            color: white;
            text-decoration: none;
        }

        .container {
            width: 1200px;
            padding: 16px;
            background-color: white;
            margin: 0 auto;
            margin-top: 100px;
            border: 1px solid black;
            border-radius: 4px;
        }
        .container h2 {
            text-align: center;
        }
        .container form {
            display: flex;
            flex-direction: column;
        }
        .container form input, .container form select {
            margin-bottom: 10px;
            padding: 10px;
            border-radius: 4px;
            border: 1px solid #ccc;
        }
        .container form button {
            padding: 10px;
            background-color: #22d0f3;
            color: white;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            border: 2px solid #af28c4;
        }
        .container form button:hover {
            background-color:red;
        }
        .content-sub {
            background-color: #22d0f3 ;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            margin: 20px auto;
            max-width: 800px;
            padding: 20px;
            border: 2px solid #af28c4;
            font-style: Copperplate;
            text-align: center;
            button
            
}


/* The alert message box */
.alert {
            padding: 20px;
            background-color: #f44336; /* Red */
            color: white;
            margin-bottom: 15px;
        }

        /* The close button */
        .closebtn {
            margin-left: 15px;
            color: white;
            font-weight: bold;
            float: right;
            font-size: 22px;
            line-height: 20px;
            cursor: pointer;
            transition: 0.3s;
        }

        /* When moving the mouse over the close button */
        .closebtn:hover {
            color: black;
        }
           /* Style the label for the checkbox */
           label {
            font-weight: bold;
        }

        /* Style the submit button */
        #submitButton {
            background-color: red; /* Initial color when disabled */
            color: white;
            border: none;
            padding: 10px 20px;
            cursor: not-allowed;
        }

        #submitButton.enabled {
            background-color: green; /* Color when enabled */
            cursor: pointer;
        }
    </style>
</head>
<body>
<div class="header">
        <h1>DoctorQuest|</h1>
        <nav>
            <ul>
                <li><a href="Home.html"><i class="fas fa-home"></i> Home</a></li>
                <li><a href="doctors.html"><i class="fas fa-user-md"></i>Doctors</a></li>
                <li><a href="health_feeds.html"><i class="fas fa-notes-medical"></i>Health
                        Feeds</a></li>
                <li><a href="features.html"><i class="fas fa-cogs"></i>Features</a></li>
                <li><a href="FAQs.html"><i class="fas fa-question-circle"></i>FAQs</a></li>
                <li><a href="About_US.HTML"><i class="fas fa-info-circle"></i>About Us</a></li>

                <li><a href="http://127.0.0.1:3000/login_page.html" class="nav-button"><i
                            class="fas fa-sign-in-alt"></i>
                        Login</a></li>
                <li><a href="http://127.0.0.1:3000/registor.html" class="nav-button"><i class="fas fa-user-plus"></i>
                        Register</a></li>
            </ul>
        </nav>
    </div>
    <center> <div class="content-sub"><div class="timestamp" id="timestamp">

<script>
    function updateTimestamp() {
        const now = new Date();
        const date = now.toLocaleDateString();
        const day = now.toLocaleDateString('en-US', { weekday: 'long' });
        const time = now.toLocaleTimeString();
        const seconds = now.getSeconds();

        document.getElementById('timestamp').textContent = `Today is ${day}, ${date}. The current time is ${time} (seconds: ${seconds}).`;
    }

    // Update timestamp every second
    setInterval(updateTimestamp, 1000);
</script></div></div></center>
    <div class="container">
        <h2>Book an Appointment</h2>
        <form id="appointmentForm">
        <div class="alert">
    <span class="closebtn" onclick="this.parentElement.style.display='none';">&times;</span>
    12/40 Bookings Completed! Hurry Up!! 
</div>
            <label></label><br><br>
            <label>Patient's Full Name:</label>
            <input type="text" id="name" placeholder="Enter your name" required>
            <label>Patient's Email ID:</label>
            <input type="email" id="email" placeholder="Enter your email" required>
            <label>Patient's Contact Number:</label>
            <input type="tel" id="phone" placeholder="Enter your phone number" required>
            <label>Enter your Doctor's ID number (e.g. 12):</label>
            <label style="color: red;">[PLEASE CHECK DOCTOR'S ID NUMBER BEFORE FILLING THIS FORM]</label>
            <select id="doctor" required>
                <?php
                for ($i = 1; $i <= 200; $i++) {
                    echo "<option value=\"$i\">$i</option>";
                }
                ?>
                <!-- Add more doctors as needed -->
            </select>
            <label>Please select the Date of Appointment(DOA):</label>
            <input type="date" id="date" required>
            <label>Please select the Time of Appointment:</label>
            <label style="color: red;">[IN CASE UNAVAILABILITY OF DOCTOR SMALL CHANGE IN TIME WILL BE THERE AS PER FLEXIBILITY]</label>
            <input type="time" id="time" required>
            <form>
        <label>
            <input type="checkbox" id="agreeCheckbox">
            I have read and agree to the <a href="http://127.0.0.1:5500/TERMSNCONDI.html">Terms and Conditions</a>.
        </label>
        <br>
        <input type="submit" value="Submit" id="submitButton" disabled>
    </form>

        </form>
    </div>

    <script>
        document.getElementById('appointmentForm').addEventListener('submit', function(event) {
            event.preventDefault();
            // Get form values
            var name = document.getElementById('name').value;
            var email = document.getElementById('email').value;
            var phone = document.getElementById('phone').value;
            var doctor = document.getElementById('doctor').value;
            var date = document.getElementById('date').value;
            var time = document.getElementById('time').value;

            // TODO: Send form values to server

            alert('Your appointment has been booked.');
        });
         // Enable the submit button when the checkbox is checked
         const agreeCheckbox = document.getElementById('agreeCheckbox');
        const submitButton = document.getElementById('submitButton');

        agreeCheckbox.addEventListener('change', function () {
            submitButton.classList.toggle('enabled', agreeCheckbox.checked);
            submitButton.disabled = !agreeCheckbox.checked;
        });
    </script>
   
</body>
</html>
