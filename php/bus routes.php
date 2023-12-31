<?php
    session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/styles.css">
    <link rel="stylesheet" href="../css/busRoutes-styles.css">
    <link rel="icon" type="image/x-icon" href="../images/bookmybus__1__AMO_icon.ico">
    <title>BookMyBus</title>
</head>
<body>

    <nav>
        <div class="logo">
            <img src="../images/logo_max.ico" alt="company logo">
        </div>
        <ul class="nav-bar">
            <li>
                <a href="home.php">Home</a>
            </li>
            <li>
                <a href="bus routes.php">Bus Routes</a>
            </li>
            <li>
                <a href="offers.php">Offers</a>
            </li>
            <li>
                <a href="mybookings.php">My Bookings</a>
            </li>
            <li>
                <a href="covid-19.php">Covid-19</a>
            </li>
            <li>
                <a href="faq.php">FAQ</a>
            </li>
            <li>
                <a href="AboutUs.php">About Us</a>
            </li>
            <li>
                <a href="ContactUs.php">Contact us</a>
            </li>
             <li>
                <?php
                    if(isset($_SESSION['userid']))
                    {
                        echo '<a href="logout.php">Log out</a>'; 
                    }
                    if(empty($_SESSION['userid']))
                    {
                        echo '<a href="login.php">Log in</a>';
                    }
                ?>
            </li>
            <li>
                <?php
                    if(isset($_SESSION['userid']))
                    {
                        echo '<a class="reg" href="myprofile.php">My Profile</a>';
                    }
                    if(empty($_SESSION['userid']))
                    {
                        echo '<a class="reg" href="register.php">Register</a>';
                    }
                ?>
            </li> 
        </ul>
        <div class="dropdown">
            <div class="line_1"></div> 
            <div class="line_2"></div>
            <div class="line_3"></div>
        </div>
    </nav>


    <h1>View bus route maps</h1>
    <h1>Plan your journey by selecting your routes</h1>


    <table border="2px">
        <tr>
            <td>
                <div class="container">
                    <img class="img" src="../images/bus routes/Akkaraipattu - Colombo.jpg" alt="Akkaraipattu - Colombo">
                    <div class="overlay"><button onclick="book()">Book</button></div>
                </div>
                Akkaraipattu - Colombo
            </td>
            <td>
                <div class="container">
                    <img class="img" src="../images/bus routes/Ampara - Colombo.jpg" alt="Ampara - Colombo">
                    <div class="overlay"><button onclick="book()">Book</button></div>
                </div>
                Ampara - Colombo
            </td>
            <td>
                <div class="container">
                    <img class="img" src="../images/bus routes/Anuradhapura - Colombo.jpg" alt="Anuradhapura - Colombo">
                    <div class="overlay"><button onclick="book()">Book</button></div>
                </div>
                Anuradhapura - Colombo
            </td>
            <td>
                <div class="container">
                    <img class="img" src="../images/bus routes/Avissawella - Colombo.jpg" alt="Avissawella - Colombo">
                    <div class="overlay"><button onclick="book()">Book</button></div>
                </div>
                Avissawella - Colombo
            </td>
        </tr>
        <tr>
            <td>
                <div class="container">
                    <img class="img" src="../images/bus routes/Galle - Colombo.jpg" alt="Galle - Colombo">
                    <div class="overlay"><button onclick="book()">Book</button></div>
                </div>
                Galle - Colombo
            </td>
            <td>
                <div class="container">
                    <img class="img" src="../images/bus routes/Hatton - Colombo.jpg" alt="Hatton - Colombo">
                    <div class="overlay"><button onclick="book()">Book</button></div>
                </div>
                Hatton - Colombo
            </td>
            <td>
                <div class="container">
                    <img class="img" src="../images/bus routes/Homagama - Colombo.jpg" alt="Homagama - Colombo">
                    <div class="overlay"><button onclick="book()">Book</button></div>
                </div>
                Homagama - Colombo
            </td>
            <td>
                <div class="container">
                    <img class="img" src="../images/bus routes/Ja-Ela - Colombo.jpg" alt="Ja-Ela - Colombo">
                    <div class="overlay"><button onclick="book()">Book</button></div>
                </div>
                Ja-Ela - Colombo
            </td>
        </tr>
        <tr>
            <td>
                <div class="container">
                    <img class="img" src="../images/bus routes/Jaffna - Colombo.jpg" alt="Jaffna - Colombo">
                    <div class="overlay"><button onclick="book()">Book</button></div>
                </div>
                Jaffna - Colombo
            </td>
            <td>
                <div class="container">
                    <img class="img" src="../images/bus routes/Kadawatha - Colombo.jpg" alt="Kadawatha - Colombo">
                    <div class="overlay"><button onclick="book()">Book</button></div>
                </div>
                Kadawatha - Colombo
            </td>
            <td>
                <div class="container">
                    <img class="img" src="../images/bus routes/Kalmunai - Colombo.jpg" alt="Kalmunai - Colombo">
                    <div class="overlay"><button onclick="book()">Book</button></div>
                </div>
                Kalmunai - Colombo
            </td>
            <td>
                <div class="container">
                    <img class="img" src="../images/bus routes/Kalutara - Colombo.jpg" alt="Kalutara - Colombo">
                    <div class="overlay"><button onclick="book()">Book</button></div>
                </div>
                Kalutara - Colombo
            </td>
        </tr>
        <tr class="more-routes">
            <td>
                <div class="container">
                    <img class="img" src="../images/bus routes/Kandy - Colombo.jpg" alt="Kandy - Colombo">
                    <div class="overlay"><button onclick="book()">Book</button></div>
                </div>
                Kandy - Colombo
            </td>
            <td>
                <div class="container">
                    <img class="img" src="../images/bus routes/Kataragama - Colombo.jpg" alt="Kataragama - Colombo">
                    <div class="overlay"><button onclick="book()">Book</button></div>
                </div>
                Kataragama - Colombo
            </td>
            <td>
                <div class="container">
                    <img class="img" src="../images/bus routes/Kurunegala - Colombo.jpg" alt="Kurunegala - Colombo">
                    <div class="overlay"><button onclick="book()">Book</button></div>
                </div>
                Kurunegala - Colombo
            </td>
            <td>
                <div class="container">
                    <img class="img" src="../images/bus routes/Matara - Colombo.jpg" alt="Matara - Colombo">
                    <div class="overlay"><button onclick="book()">Book</button></div>
                </div>
                Matara - Colombo
            </td>
        </tr>
        <tr class="more-routes">
            <td>
                <div class="container">
                    <img class="img" src="../images/bus routes/Moratuwa - Colombo.jpg" alt="Moratuwa - Colombo">
                    <div class="overlay"><button onclick="book()">Book</button></div>
                </div>
                Moratuwa - Colombo
            </td>
            <td>
                <div class="container">
                    <img class="img" src="../images/bus routes/Negombo - Colombo.jpg" alt="Negombo - Colombo">
                    <div class="overlay"><button onclick="book()">Book</button></div>
                </div>
                Negombo - Colombo
            </td>
            <td>
                <div class="container">
                    <img class="img" src="../images/bus routes/Nuwara Eliya - Colombo.jpg" alt="Nuwara Eliya - Colombo">
                    <div class="overlay"><button onclick="book()">Book</button></div>
                </div>
                Nuwara Eliya - Colombo
            </td>
            <td>
                <div class="container">
                    <img class="img" src="../images/bus routes/Padukka - Colombo.jpg" alt="Padukka - Colombo">
                    <div class="overlay"><button onclick="book()">Book</button></div>
                </div>
                Padukka - Colombo
            </td>
        </tr>
        <tr class="more-routes">
            <td>
                <div class="container">
                    <img class="img" src="../images/bus routes/Panadura - Colombo.jpg" alt="Panadura - Colombo">
                    <div class="overlay"><button onclick="book()">Book</button></div>
                </div>
                Panadura - Colombo
            </td>
            <td>
                <div class="container">
                    <img class="img" src="../images/bus routes/Piliyandala - Colombo.jpg" alt="Piliyandala - Colombo">
                    <div class="overlay"><button onclick="book()">Book</button></div>
                </div>
                Piliyandala - Colombo
            </td>
            <td>
                <div class="container">
                    <img class="img" src="../images/bus routes/Polonnaruwa - Colombo.jpg" alt="Polonnaruwa - Colombo">
                    <div class="overlay"><button onclick="book()">Book</button></div>
                </div>
                Polonnaruwa - Colombo
            </td>
            <td>
                <div class="container">
                    <img class="img" src="../images/bus routes/Trincomalee - Colombo.jpg" alt="Trincomalee - Colombo">
                    <div class="overlay"><button onclick="book()">Book</button></div>
                </div>
                Trincomalee - Colombo
            </td>
        </tr>
    </table>

    <button id="more-btn" onclick="display()">View More</button>


    <!-- The Modal -->
    <div id="imgModal" class="modal">
      <span class="close">&times;</span>
      <img class="modal-content" id="modal-img">
      <div id="modal-caption"></div>
    </div>


    <script>

        // Get the modal
        var modal = document.getElementById("imgModal");

        // Get the image and insert it inside the modal - use its "alt" text as a caption
        var images = document.getElementsByClassName("img");
        var modalImg = document.getElementById("modal-img");
        var captionText = document.getElementById("modal-caption");

        for (var i = 0; i < images.length; i++)
        {
            images[i].addEventListener("click", function(){

            modal.style.display = "block";
            modalImg.src = this.src;
            captionText.innerHTML = this.alt;

            });
        }

        // Get the <span> element that closes the modal
        var closeBtn = document.getElementsByClassName("close");

        // When the user clicks on <span> (x), close the modal
        closeBtn[0].onclick = function() { 
          modal.style.display = "none";
        }


        function display(){

            var rows = document.getElementsByClassName("more-routes");

            for(var i = 0; i < rows.length; i++)
            {
                rows[i].style.display = "table-row";
            }

            document.getElementById("more-btn").style.display = "none";
        }


        function book(){

            window.location.href = "home.php";
        }

    </script>
    

      <footer class="footer-container">

        <div class="left_footer">
            <a href="home.php"><img src="../images/logo_max.ico" alt="company logo"></a>

            <p class="footer_links">
                <a href="home.php">Home</a>
                |
                <a href="AboutUs.php">About</a>
                |
                <a href="ContactUs.php">Contact</a>
            </p>

            <p class="copyrights">Copyright © 2022 <strong>BookMyBus</strong> All rights reserved</p>
        </div>

        <div class="center_footer">
            <div>
                <a href="#"><img src="../images/home contact/location.png" class="location"></img></a>
                <p><span>Colombo</span>
                    Sri Lanka</p>
            </div>

            <div>
                <a href="#"><img src="../images/home contact/tel.png" class="tel"></img></a>
                <p>+94 76 125 8734</p>
            </div>
            <div>
                <a href="#"><img src="../images/home contact/mail.png" class="mail"></img></a>
                <p><a href="mailto:bookmybus@gmail.com">bookmybus@gmail.com</a></p>
            </div>
        </div>
        <div class="right_footer">
            <p class="about_company">
                <span>About the company</span>
                <strong>BookMyBus</strong> is an Online Bus Ticket Booking Service.
                It provides a fully-fledged online bus booking platform. Passengers
                can purchase bus tickets online and in return to confirm the seat
                reservation, a text message with the details of travel will be sent.
                <br>
            </p>
            <div class="footer-icons">
                <a href="https://www.facebook.com/"><img src="../images/social media icons/fb.png" class="facebook"></img></a>
                <a href="https://web.whatsapp.com/"><img src="../images/social media icons/whatsapp.png" class="whatsapp"></img></a>
                <a href="https://www.linkedin.com/"><img src="../images/social media icons/linkedin.png" class="linkedin"></img></a>
                <a href="https://twitter.com/?lang=en"><img src="../images/social media icons/twitter.png" class="twitter"></img></a>
                <a href="https://web.telegram.org/"><img src="../images/social media icons/telegram.png" class="telegram"></iimg></a>
            </div>
        </div>
    </footer>


    <script src="../js/home.js"></script>

</body>
</html>