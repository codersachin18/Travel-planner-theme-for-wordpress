<?php
if (isset($_POST['name'])){

$server = "enter your server";
$username = "enter username";
$password = "password";

$con = mysqli_connect($server, $username, $password);

if(!$con){
    die("connection to this database failed due to" . mysqli_connect_error());

}

$name = $_POST['name'];
$phone = $_POST['phone'];
$email = $_POST['email'];
$place = $_POST['place'];
$budget = $_POST['budget'];
$people = $_POST['people'];


$sql = "database name`.`folder name` (`SR.NO`, `NAME`, `PHONE`, `EMAIL`, `PLACE`, `BUDGET`, `PEOPLE`, `DATE`) 
VALUES (null, '$name', '$phone', '$email','$place','$budget','$people', current_timestamp())";

if ($con->query($sql) == true){

   echo "Successfully inserted";
  

} else {

    echo "ERROR: $sql <br> $con->error";
}

$con->close();

}

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Travel Planner</title>
    <link rel="stylesheet" href="style.css">

<style>








* {
  margin: 0;
  padding: 0;
  box-sizing: border-box;
}

.header {
  background-image: url('<?php echo get_template_directory_uri(); ?>/assets/bg6.jpg');
  background-position: center;
  background-repeat: no-repeat;
  height: 600px;
}

nav {
  width: 100%;
  display: flex;
}

.nav-links {
  display: flex;
  justify-content: end;
  align-items: center;
  gap: 50px;
  list-style: none;
  font-size: x-large;
  padding-right: 6px;
  width: 70%;
}

.nav-links a {
  text-decoration: none;
  color: rgb(240, 231, 231);
  font-weight: bold;
  font-family: "Courier New", Courier, monospace;
}

.logo {
  width: 30%;
  padding-left: 20px;
  padding-top: 10px;
}

.headline {
  width: 100%;
  display: flex;
  flex-wrap: wrap;
}

.hs {
  width: 60%;
  padding-left: 40px;
  padding-top: 140px;
  color: white;
  font-size: x-large;
  font-weight: bold;
  
}

.img3{
  overflow: hidden;
  padding-top: 123px;
}


.sp1 {
  color: rgb(250, 79, 27);
}



@media (min-width: 700px) {
  .off3 {
    display: none;
  }

  .close1{
    display: none;
  }
}

@media (max-width: 700px) {
  .off-mob {
    display: none;
  }

  .ad1 {
    display: none;
  }

  .img3{
    overflow: hidden;
    padding-top: 1px;
  }

  .hs {
    display: flex;
    width: 100%;
    justify-content: center;
    align-items: center;
    flex-direction: column;
    padding-top: 60px;
    padding-bottom: 129px;
  }

  .header{
    height: 100%;
  }

  .logo {
    width: 50%;
    display: flex;
  }
}

.ad3 {
  display: flex;
  justify-content: center;
  align-items: center;
  flex-direction: column;
  padding-top: 20px;
}

.mob-links{
  width: 100%;
  height: 100%;
  position: fixed;
  display: none;
  flex-direction: column;
  justify-content: center;
  align-items: center;
  font-size: 60px;
  background-color: rgb(0, 0, 0);
}

.mob-links a{
  text-decoration: none;
  color: white;
  font-weight: bold;
  font-family: "Courier New", Courier, monospace;
}

.close1{
  padding-top: 22px;
  padding-left:32px;
  cursor: pointer;
}

.close2{
  cursor: pointer;
}

.container h1 {
  text-align: center;
  color: #2c3e50;
}

.container{
  padding-top: 83px;
}

.form-container {
  max-width: 600px;
  margin: auto;
  padding: 20px;
  background-color: #ffffff;
  border-radius: 8px;
  box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
}

.form-group {
  margin-bottom: 15px;
}

label {
  display: block;
  margin-bottom: 5px;
  color: #34495e;
}

input[type="text"],
input[type="email"],
input[type="number"],
select {
  width: 100%;
  padding: 10px;
  border: 1px solid #bdc3c7;
  border-radius: 4px;
  box-sizing: border-box;
}

input[type="text"]:focus,
input[type="email"]:focus,
input[type="number"]:focus,
select:focus {
  border-color: #3498db;
  outline: none;
}

button {
  width: 100%;
  padding: 10px;
  background-color: #3498db;
  color: white;
  border: none;
  border-radius: 4px;
  cursor: pointer;
  font-size: 16px;
}

button:hover {
  background-color: #2980b9;
}


.popular-places {
  padding: 20px;
  background-color: #f8f8f8;
}

.popular-places h2 {
  text-align: center;
  color: #2c3e50;
  margin-bottom: 20px;
}

.cards {
  display: flex;
  flex-wrap: wrap;
  justify-content: center;
  gap: 20px;
}

.card {
  background-color: #ffffff;
  border-radius: 8px;
  box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
  overflow: hidden;
  width: 300px;
  text-align: center;
}

.card img {
  width: 100%;
  height: 200px;
  object-fit: cover;
}

.card-content {
  padding: 15px;
}

.card-content h3 {
  color: #2c3e50;
  margin-bottom: 10px;
}

.card-content p {
  color: #7f8c8d;
}

@media (max-width: 600px) {
  .form-container {
    padding: 15px;
  }

  button {
    font-size: 14px;
  }

  .cards {
    flex-direction: column;
    align-items: center;
  }

  .card {
    width: 100%;
  }
}

footer {
  background-color: #2c3e50;
  color: white;
  text-align: center;
  padding: 20px 0;
  position: relative;
  bottom: 0;
  width: 100%;
}

.footer-content {
  display: flex;
  justify-content: space-between;
  align-items: flex-start;
  flex-wrap: wrap;
  padding: 20px;
}

.footer-section {
  flex: 1;
  padding: 10px;
  min-width: 200px;
}

.footer-section h3 {
  margin-bottom: 10px;
  font-size: 24px;
}

.footer-section p {
  margin: 5px 0;
  font-size: 14px;
}

.footer-bottom {
  margin-top: 10px;
  font-size: 12px;
  text-align: center;
}

@media (max-width: 600px) {
  .footer-content {
    flex-direction: column;
    align-items: center;
  }

  .footer-section {
    text-align: center;
  }

  .footer-section h3 {
    font-size: 20px;
  }

  .footer-section p {
    font-size: 12px;
  }

  .footer-bottom {
    font-size: 10px;
  }
}





</style>


    
</head>
<body>

    <ul class="mob-links">
        <img onclick="closenav()" class="close2" src="<?php echo get_template_directory_uri(); ?>/assets/close_24dp_E8EAED_FILL0_wght400_GRAD0_opsz24.svg" width="70px" alt="Sample Image">
        <li><a href="index.html">Home</a></li>
        <li><a href="about.html">About</a></li>
        <li><a href="contact.html">Contact</a></li>
        <li><a href="login.html">blogs</a></li>
        <li><a href="register.html">Register</a></li>
    </ul>  
    <head>
         
        <div class="header">
       
        <nav>
        <img src="<?php echo get_template_directory_uri(); ?>/assets/travel-logo.png" width="270px" alt="Sample Image">
            <ul class="nav-links">
                <li class="off-mob"><a href="index.html">Home</a></li>
                <li class="off-mob"><a href="about.html">About</a></li>
                <li class="off-mob"><a href="contact.html">Contact</a></li>
                <li class="off-mob"><a href="login.html">blogs</a></li>
                <li class="off-mob"><a href="register.html">Register</a></li>
               <li> <img onclick="opennav()" class="close1" src="<?php echo get_template_directory_uri(); ?>/assets/menu_24dp_E8EAED_FILL0_wght400_GRAD0_opsz24.svg" width="80px" alt="Sample Image"> </li>

            </ul>
        </nav>

        <div class="headline">
            <div class="hs">
                <h1>Adventure Awaits <span class="sp1">Start</span> Your Trip Now!</h1>
                <h1> <span class="sp1">"Explore</span> the World with Us!</h1>
              
            </div>
             <div class="img3"> 
            
            <img src="<?php echo get_template_directory_uri(); ?>/assets/holiday-thumb-271124.webp" width="600px" alt="Sample Image">
        </div>
        </div>

        
    </div>
    </head>

    <main>
        <div class="container">
            <h1>Travel Inquiry Form</h1>
            <form method="post" action="index.php" class="responsive-form">
                <label for="name">Name:</label>
                <input type="text" id="name" name="name" required>
    
                <label for="phone">Phone:</label>
                <input type="tel" id="phone" name="phone" required>
    
                <label for="email">Email:</label>
                <input type="email" id="email" name="email" required>
    
                <label for="place">Select Place:</label>
                <select id="place" name="place" required>
                    <option value="" disabled selected>Select your destination</option>
                    <option value="USA">USA</option>
                    <option value="Switzerland">Switzerland</option>
                    <option value="New Zealand">New Zealand</option>
                    <option value="Australia">Australia</option>
                    <option value="Japan">Japan</option>
                    <option value="South Korea">South Korea</option>
                    <option value="Brazil">Brazil</option>
                    <option value="India">India</option>
                    <option value="Thailand">Thailand</option>
                </select>
    
                <label for="budget">Budget:</label>
                <input type="number" id="budget" name="budget" required>
    
                <label for="people">Number of People:</label>
                <input type="number" id="people" name="people" required>
    
                <button type="submit">Submit</button>
            </form>
        </div>

        <div class="popular-places">
            <h2>Popular Places</h2>
            <div class="cards">
                <div class="card">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/us.jpg" alt="Sample Image">
                    <div class="card-content">
                        <h3>USA</h3>
                        <p>Explore the diverse landscapes and vibrant cities of the United States.</p>
                    </div>
                </div>
                <div class="card">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/sw.jpg" alt="Sample Image">

                    <div class="card-content">
                        <h3>Switzerland</h3>
                        <p>Experience the stunning Alps and charming villages of Switzerland.</p>
                    </div>
                </div>
                <div class="card">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/nz.jpg" alt="Sample Image">
                    <div class="card-content">
                        <h3>New Zealand</h3>
                        <p>Discover the breathtaking landscapes and adventure activities in New Zealand.</p>
                    </div>
                </div>
            </div>
        </div>
    </main>

    <footer>
        <div class="footer-content">
            <div class="footer-section about">
                <h3>Travel Planner</h3>
                <p>Located in MG Road, Pune, Maharashtra, India</p>
            </div>
            <div class="footer-section services">
                <h3>Our Services</h3>
                <p>We provide packages for trips and help you plan your travel.</p>
            </div>
            <div class="footer-section contact">
                <h3>Contact Us</h3>
                <p>Email: sachinraj18sj@gmail.com</p>
                <p>Phone: +91 7387574762</p>
            </div>
        </div>
        <div class="footer-bottom">
            <p>&copy; 2025 Travel Planner. All rights reserved.</p>
            <p>Developed and Designed by Sachin Jagtap</p>
        </div>
    </footer>


 <script>
 
 
 function opennav(){
    document.querySelector('.mob-links').style.display = 'flex';
}

function closenav(){
    document.querySelector('.mob-links').style.display = 'none';
}

</script>
 
   
</body>
</html>
