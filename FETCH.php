<!DOCTYPE html>
<html lang="en">
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>IMFETCHER.com</title>
    <style>
        body {
            font-family: Arial, sans-serif;
        }
        h1 {
            color: #0074D9;
            text-align: center;
        }
        .card-header {
            text-align: center;
            margin: 20px;
        }
        select {
            padding: 10px;
            font-size: 16px;
        }
        button {
            background-color: #FF67;
            color: white;
            border: none;
            padding: 10px 20px;
            font-size: 16px;
            cursor: pointer;
        }
        table {
            width: 80%;
            margin: 20px auto;
            border-collapse: collapse;
        }
        th, td {
            border: 1px solid #ddd;
            padding: 10px;
            text-align: center;
        }
        th {
            background-color: #f2f2f2;
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

        .footer {
            position: relative;
            left: 0;
            bottom: 0;
            height: 5%;
            width: 95%;
            background-color: #22d0f3;
            color: white;
            text-align: center;
            padding: 10px;
            border-radius: 30px;
            border: 2px solid #af28c4;
        }

        .blink {
            animation: blinker 1s linear infinite;
            color: lime;
            font-size: 30px;
        }

        @keyframes blinker {
            50% {
                opacity: 0;
            }
        }



        @keyframes colorchange {
            0% {
                color: #4CAF50;
                /* green */
                background-color: #f3f3f3;
                /* light grey */
            }

            25% {
                color: #2196F3;
                /* blue */
                background-color: #f3f3f3;
                /* light grey */
            }

            50% {
                color: #f44336;
                /* red */
                background-color: #f3f3f3;
                /* light grey */
            }

            75% {
                color: #FFEB3B;
                /* yellow */
                background-color: #f3f3f3;
                /* light grey */
            }

            100% {
                color: #9C27B0;
                /* purple */
                background-color: #f3f3f3;
                /* light grey */
            }
        }

        .marquee {
            font-size: 24px;
            text-align: center;
            padding: 10px;
            font-weight: bold;
            border-radius: 10px;
            animation: colorchange 5s infinite;
        }


        .content {
            padding: 20px;
            text-align: justify;
            font-size: 18px;
            margin-bottom: 60px;
        }

        .content img {
            width: 100%;
            height: auto;
            max-width: 250px;
            margin-top: 20px;
            border-radius: 20px;
            border: 5px solid #6495ed;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.5);
        }

        /* Add this CSS for the professional look */
        .content {
            background-color: white;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            margin: 20px auto;
            max-width: 800px;
            padding: 20px;
        }

        .content p {
            line-height: 1.6;
        }

        .content img {
            margin-bottom: 20px;
        }

        .nav-button {
            background-color: #6464ed;
            color: white;
            padding: 5px 10px;
            border-radius: 5px;
            transition: background-color 0.2s;
        }

        .nav-button:hover {
            color: black;
        }

        .section {
            padding: 20px;
            background-color: white;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            margin: 20px auto;
            max-width: 800px;
            display: flex;
            flex-direction: column;
            align-items: center;
        }

        .section .image-container {
            display: flex;
            justify-content: space-around;
            width: 100%;
        }

        .section .facility-container {
            display: flex;
            justify-content: space-around;
            width: 100%;
        }

        .section .patient-testimonial {
            display: flex;
            justify-content: space-around;
            width: 100%;
        }


        .section h2 {
            text-align: center;
            margin-bottom: 20px;

        }

        .section img {
            width: 200px;
            height: 200px;
            max-width: 250px;
            margin: 20px auto;
            display: block;
            border-radius: 20px;
            border: 5px solid #6464ed;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.5);
        }

        .section p {
            line-height: 1.7;
        }

        .video-container {
            display: flex;
            justify-content: space-between;
            /*position: fixed;*/
            top: 50%;
            width: 100%;
            transform: translateY(-50%);
        }

        .video-container iframe {
            height: 200px;
            /* Adjust this value to change the size of the videos */
            width: 350px;
            /* Adjust this value to change the size of the videos */
            border: 5px solid #6495ed;
            /* Add a border to the videos */
            border-radius: 10px;
            /* Add rounded corners to the videos */
        }

        .gif-container {
            position: absolute;
            top: 50%;
            transform: translateY(-50%);
        }

        .gif-container img {
            height: 200px; /* Adjust this value to change the size of the GIFs */
        }

        .left-gif {
            position: fixed;
            left: 12px;
        }

        .right-gif {
            position: fixed;
            right: 12px;
        }
        table {
            width: 80%;
            margin: 20px auto;
            border-collapse: collapse;
        }
        th, td {
            border: 1px solid #ddd;
            padding: 10px;
            text-align: center;
        }
        th {
            background-color: #f2f2f2;
        }
    </style>
</head>
<body>
    <div class="marquee">
        <marquee><span class="blink">•</span> Chhatrapati Sambhajinagar Doctors Are Live Now. You Can Book Your
            Appointments With DoctorQuest.
            <a href="#">Go</a>
        </marquee>
    </div>
    <div class="header">
        <h1>DoctorQuest|</h1>
        <nav>
            <ul>
                <li><a href="http://127.0.0.1:3000/Home.html"><i class="fas fa-home"></i> Home</a></li>
                <li><a href="http://127.0.0.1:3000/doctors.html"><i class="fas fa-user-md"></i>Doctors</a></li>
                <li><a href="http://127.0.0.1:3000/health_feeds.html"><i class="fas fa-notes-medical"></i>Health
                        Feeds</a></li>
                <li><a href="http://127.0.0.1:3000/features.html"><i class="fas fa-cogs"></i>Features</a></li>
                <li><a href="http://127.0.0.1:3000/FAQs.html"><i class="fas fa-question-circle"></i>FAQs</a></li>
                <li><a href="http://127.0.0.1:3000/About_US.HTML"><i class="fas fa-info-circle"></i>About Us</a></li>
                <li><a href="http://127.0.0.1:3000/Book_Appointment.HTML"><i class="fas fa-calendar-check"></i>Book
                        Appointment</a></li>
                <li><a href="http://127.0.0.1:3000/login_page.html" class="nav-button"><i
                            class="fas fa-sign-in-alt"></i>
                        Login</a></li>
                <li><a href="http://127.0.0.1:3000/registor.html" class="nav-button"><i class="fas fa-user-plus"></i>
                        Register</a></li>
            </ul>
        </nav>
    </div>
    <div class="animated-box"><H2>Start finding your Doctor now!</H2>
        <div class="card-header"><label for="Disease">Doctor Required for Disease:</label>
           <form  action="http://127.0.0.1:5500/FETCH.html" method="GET" >
            <select name="Disease">
                <option value="Hypertension">Hypertension</option>
                <option value="Diabetes">Diabetes</option>
                <option value="Asthma">Asthma</option>
                <option value="Depression">Depression</option>
                <option value="Osteoarthritis">Osteoarthritis</option>
                <option value="Gastroenteritis">Gastroenteritis</option>
                <option value="Migraine">Migraine</option>
                <option value="Bronchitis">Bronchitis</option>
                <option value="Dentist for Teeth">Dentist for Teeth</option>
                <option value="Dermatologist">Dermatologist</option>
            </select>
            <!--<input type="text" name="Disease">-->
            <input type="submit" value="Submit">
    </form>
            

           
            </div>
</div>

    <?php
//connecting to the database
$servername= "localhost";
$username= "root";
$password="";
$database="drdb";

//create a connection
$conn= mysqli_connect($servername,$username,$password,$database);
//Die if connection was not successful
if (!$conn){
    die("Unable connect with Database: ". mysqli_connect_error());
}
else{
    echo("Successfully Connected!<br>");
}
$out=$_GET["Disease"];
$sql = "SELECT*FROM `doctor` WHERE disease='$out'";
$result= mysqli_query($conn, $sql);


//find number of records return
$num=mysqli_num_rows($result);

echo "<br>";
//Display the row returned by the sql query
if($num>0){
    echo ($num."Found");
}
else{
    echo  ("NO Records!");
}
?>

 

    <?php
    echo $num;

    ?>

        <table border="2">
            <tr>
                <th>DRID</th>
                <th>Doctor Name</th>
                <th>Degree</th>
                <th>Disease Specialist</th>
                <th>Location</th>
            </tr>
            
           
                <?php

                while($row = mysqli_fetch_assoc($result)){
                ?>
                    <tr>
                    <td><?php echo $row['DRID'];?></td>
                    <td><?php echo $row['DRNAME']; ?></td>
                    <td><?php echo $row['Degree']; ?></td>
                    <td><?php echo $row['disease']; ?></td>
                    <td><?php echo $row['LOCATION']; ?></td>
                    </tr>
    
                <?php } ?>

            
                </table> 
        

 <!--<div class="gif-container left-gif">
        <img src="d1.jpeg" alt="Left GIF">
    </div>
    <div class="gif-container right-gif">
        <img src="d2.jpeg" alt="Right GIF">
    </div>-->

    
    <div class="content">
        <p>DoctorQuest is a revolutionary healthcare platform that brings patients and doctors together in a seamless,
            easy-to-use interface. Our mission is to make healthcare accessible and convenient for everyone. With
            DoctorQuest, you can book appointments with your preferred doctors at the click of a button. Our platform
            also provides health feeds where you can get the latest health tips and advice from trusted medical
            professionals. Join us on our journey to make healthcare better, one appointment at a time.</p>
        <img src="d1.jpeg" alt="Doctor booking image">
        <img src="d2.jpeg" alt="Healthcare image">
        <img src="d3.jpeg" alt="Healthcare image">



        <div class="section">
            <h2>Our Doctors</h2>

            <div class="image-container">
                <img src="d4.jpeg" alt="Our doctors">
                <img src="d5.jpeg" alt="Our doctors">
                <img src="d6.jpeg" alt="Our doctors">
            </div>
            <p>Our team of doctors are highly qualified and experienced in their respective fields. They are dedicated
                to providing the best healthcare services to our patients.</p>
        </div>

        <div class="section">
            <h2>Our Facilities</h2>
            <div class="facility-container">
                <img src="facility1.jpeg" alt="Our facilities">
                <img src="facility2.jpeg" alt="Our facilities">
                <img src="facility3.jpeg" alt="Our facilities">
            </div>
            <p>We offer state-of-the-art facilities to ensure that our patients receive the highest quality of care. Our
                facilities include modern consultation rooms, well-equipped operation theatres, and comfortable patient
                rooms.</p>

        </div>

        <div class="section">
            <h2>Patient Testimonials</h2>
            <div class="patient-testimonial">
                <img src="pt1.jpeg" alt="Patient testimonials">
                <img src="pt2.jpeg" alt="Patient testimonials">
                <img src="pt3.jpeg" alt="Patient testimonials">
            </div>

            <p>Don't just take our word for it. Hear what our patients have to say about their experiences with us. We
                are proud to have helped thousands of patients achieve better health.</p>
        </div>
    </div>

    </div>

    <div class="video-container">
        <iframe width="560" height="315" src="https://www.youtube.com/embed/Bv-J4XSRLx4?si=nPxakp2_qr0ks-bz"
            title="YouTube video player" frameborder="0"
            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
            referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
        <iframe width="560" height="315" src="https://www.youtube.com/embed/jh5U5BnpGN8?si=919BKAwOam9vQIqA"
            title="YouTube video player" frameborder="0"
            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
            referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>

    </div>


    <div class="footer">
        <p>© 2024 DoctorQuest. All rights reserved. | Privacy Policy | Terms of Service</p>
    </div>
 </body>
</html>