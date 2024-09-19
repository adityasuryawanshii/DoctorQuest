<!DOCTYPE html>
<html>

<head>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <!-- Add this line to include Font Awesome -->

 

    <style>
          body {
            font-family: Arial, sans-serif;
        }
        .timestamp {
            font-size: 18px;
            color: #333;
        }
        h1 {
            color: #0074D9;
            text-align: center;
        }
        .card-header {
            text-align: center;
            margin: 20px;
            font-family: Arial, sans-serif;
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
            background-color: #c2edda;
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


table {
    width: 100%;
    border-collapse: collapse;
    border-radius: 20%;
    border: 2px solid #af28c4;
  }
  th, td {
    border: 1px solid #ddd;
    padding: 8px;
    text-align: left;
    border: 2px solid ;
  }
  th {
    background-color: #22d0f3;
    color: white;
    border-radius: 20%;
  }
  .active-dot {
    height: 15px;
    width: 15px;
    background-color: #22d0f3;
    border-radius: 50%;
    display: inline-block;
  }
  .Selector {
        position: relative;
        display: inline-block;
    }

    .Selector-content {
        display: none;
        position: absolute;
        background-color: #22d0f3;
        min-width: 160px;
        box-shadow: 0px 8px 16px 0px rgba(0, 0, 0, 0.2);
        padding: 12px 16px;
        z-index: 1;
    }

    .Selector:hover .Selector-content {
        display: block;
    }
    .dot-container {
            position: relative;
        }

        .dot {
            width: 10px;
            height: 10px;
            background-color: red;
            border-radius: 50%;
            position: relative;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            animation: blink 1s infinite alternate;
        }

        .label {
            text-align: left;
            font-weight: bold;
        }

        @keyframes blink {
            0% {
                opacity: 1;
            }
            100% {
                opacity: 0.5;
            }
        }
    </style>
</head>

<body>
   
    <div class="marquee">
        <marquee><span class="blink">•</span>Chhatrapati Sambhajinagar Doctors Are Live Now. You Can Book Your
            Appointments With DoctorQuest.
            <a href="#">Go</a>
        </marquee>
    </div>
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
                <li><a href="http://localhost/DoctorQuest_Frontend/book_appointment.php"><i class="fas fa-calendar-check"></i>Book
                        Appointment</a></li>
                <li><a href="login_page.html" class="nav-button"><i
                            class="fas fa-sign-in-alt"></i>
                        Login</a></li>
                <li><a href="registor.html" class="nav-button"><i class="fas fa-user-plus"></i>
                        Register</a></li>
            </ul>
        </nav>
    </div>
    <div class="content"><H2>Start finding your Doctor now!</H2>
    <div class="content-sub">    <div class="timestamp" id="timestamp"></div>

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
</script></div>
<form  action="http://localhost/DoctorQuest_Frontend/Finder.php" method="POST">
        <div class="card-header"><label for="disease">Disease:</label>
           
            <select name="disease" >
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

          
            <div class="card-header"><label for="Location">Location:</label>
         

            <select name="Location" >
               
                <option value="Garkheda,Chhatrapati Sambhajinagar">Garkheda,Chhatrapati Sambhajinagar</option>
                <option value="Kranti Chowk,Chhatrapati Sambhajinagar">Kranti Chowk,Chhatrapati Sambhajinagar</option>
                <option value="Chawni,Chhatrapati Sambhajinagar">Chawni,Chhatrapati Sambhajinagar</option>
                <option value="Bajajnagar,Chhatrapati Sambhajinagar">Bajajnagar,Chhatrapati Sambhajinagar</option>
                <option value="Cidco N1.Chhatrapati Sambhajinagar">Cidco N1.Chhatrapati Sambhajinagar</option>
                <option value="Waluj,Chhatrapati Sambhajinagar">Waluj,Chhatrapati Sambhajinagar</option>
                <option value="Harsul,Chhatrapati Sambhajinagar">Harsul,Chhatrapati Sambhajinagar</option>
                <option value="Kanchanwadi,Chhatrapati Sambhajinagar">Kanchanwadi,Chhatrapati Sambhajinagar</option>
                <option value="Chikalthana,Chhatrapati Sambhajinagar">Chikalthana,Chhatrapati Sambhajinagar</option>
                <option value="CIDCO N2-N5,Chhatrapati Sambhajinagar">CIDCO N2-N5,Chhatrapati Sambhajinagar</option>
          
           
        </select>


            <!--<input type="text" name="Disease">-->
            <br><br>
            <input type="submit" value="Search"  style="background-color: #4CAF50; color: white; border: none; padding: 10px; border-radius: 20px; border: 2px solid #af28c4;font-weight: bold;">
            
           </form>
    <div class="dot-container"><br>
        <div class="dot"></div>
        <label class="label">Fast bookings</>
    </div>
</div>
         
            
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
    //echo("Successfully Connected!<br>");
}
$out=$_POST["disease"];
$REN=$_POST["Location"];










$sql = "SELECT*FROM `doctor` WHERE disease='$out' AND Location='$REN'";
$result= mysqli_query($conn, $sql);


//find number of records return
$num=mysqli_num_rows($result);

echo "<br>";
//Display the row returned by the sql query
if($num>0){
    
    echo ("Total Doctors Found :");
}
else{
    echo  ("NO Records!"); 
    
}
?>


<?php
echo $num;

?>

        <table border="10">
            <tr>
                <th>DRID</th>
                <th>Doctor Name</th>
                <th>Degree</th>
                <th>Disease Specialist</th>
                <th>Location</th>
                <th>Booking</th>
                <th>Report</th>
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
                    <td><a href=http://localhost/DoctorQuest_Frontend/book_appointment.php type=button style="display: inline-block; padding: 10px 20px; background-color: #4CAF50; color: white; text-decoration: none; border-radius: 5px;">Book Appointment</a></td>
                    <td><a href=http://127.0.0.1:5500/Report.html type=button style="display: inline-block; padding: 10px 20px; background-color: #FF0000; color: white; text-decoration: none; border-radius: 5px;">Report</a></td>
                    </tr>
    
                <?php } ?>

            
                </table> 
        
  
             
                 
    
               
                
   



  
         
     
        
</body>

</html>