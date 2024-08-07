<!DOCTYPE html>
<html>
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Plan your desires</title>
        <link rel="stylesheet" href="style.css">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    </head>

    <body> 
        
        <section class="header">
            <nav>
                <div class="nav-links">
                    <ul>
                        <li><a href="index.html">Home</a> </li>
                        <li><a href="about.html">About Us</a> </li>
                        <li><a href="contact.html">Contact Us</a> </li>
                        
                        <?php 
                        session_start();
                        if (isset($_SESSION["email"])): ?>
                        <!-- If logged in, display user profile button -->
                        <li class="user-profile">
                            <a href="#" id="openProfileBtn">Profile</a>
                            <!-- <p>Email:>?php echo $_SESSION["email"]; ?></p>
                                <a href="logout.php">Logout</a> -->
                            <div class="profile-info">
                            </div>
                        </li>
                    <?php else: ?>
                        <!-- If not logged in, display login button -->
                        <li><a href="login.php">Log In</a></li>
                    <?php endif; ?>

                    </ul>
                </div>
            </nav>

            <div class="text-box">
                <h1>DestiNATION</h1>
                <p>Imagine - Innovate - Experience</p>
                <a href="selectdesire.html" class="hero-btn">Let's Get Started</a>
            </div>
        </section>

         <!-- Profile Popup -->
    <?php if (isset($_SESSION["email"])): ?>
        <div class="profile-popup" id="profilePopup">
            <div class="popup-content">
                <span class="close-btn" id="closeProfileBtn">&times;</span>
                <h2>User Profile</h2>
                <p>Name <?php echo $_SESSION["userName"]; ?></p>
                <p>Email: <?php echo $_SESSION["email"]; ?></p>
                <a href='logout.php'>Logout</a>
                <!-- Add more profile information as needed -->
            </div>
        </div>
    <?php endif; ?>

    <script>
        // JavaScript to handle the profile popup
        document.addEventListener('DOMContentLoaded', function() {
            var openBtn = document.getElementById('openProfileBtn');
            var closeBtn = document.getElementById('closeProfileBtn');
            var profilePopup = document.getElementById('profilePopup');

            openBtn.addEventListener('click', function() {
                profilePopup.style.display = 'block';
            });

            closeBtn.addEventListener('click', function() {
                profilePopup.style.display = 'none';
            });

            window.addEventListener('click', function(event) {
                if (event.target === profilePopup) {
                    profilePopup.style.display = 'none';
                }
            });
        });
    </script>

        <!------vision------>
        <section class="vision">
            <h2>Our Vision</h2>
            <p>We understand your imaginations and respect your dreams.<br>Hence, we take the initiative to convert your desires into reality.<br>So, why wait?<br>Close your eyes, think of your destination and let the reality engulf it.<br>Stop hesitating and get ready for a new transition, make the events memorable and trips adventurous with<br>PlanYourDesires by Dreamz Creations.</p>
            
            <div class="row">
                <div class="facility-col">
                    <h3>Plan Your Trip </h3>
                    <p>We provide you with:<br><li>Detailed plans for activities, accommodations, and transportation.</li><br><li>Research and recommendations for attractions and dining.</li><br><li>Flights, hotels, tours, and activities reservation sites.</li><br><li>Planning and tracking expenses.</li></p>
                </div>

                <div class="facility-col">
                    <h3>Plan Your Event</h3>
                    <p>We provide you with:<br><li>Finding suitable locations for events.</li><br><li>References for connecting with caterers, decorators, and other service providers.</li><br><li>Planning and tracking expenses.</li><br><li> Structuring schedules for the event.</li></p>
                </div>
            </div>
        </section>

        <!-------features-------->
        <section class="features">
            <h1>Our Key Features</h1>
            <p>We help you have a better experience with our exclusive features.</p>

            <div class="row">
                <div class="features-col">
                    <img src="C:\Users\Admin\Desktop\notes\EDI and DT\strong-visauls-min.jpg"> <!--user friendly interface-->
                    <div class="layer">
                        <h3>User Friendly Interface</h3>
                        <p>A user-friendly interface is designed to be easy to use, intuitive, and accessible, allowing you to interact with a system or device without difficulty.</p>
                    </div>
                </div>

                <div class="features-col">
                    <img src="C:\Users\Admin\Pictures\Capture.jpg"> <!--interactive maps-->
                    <div class="layer">
                        <h3>Interactive Maps</h3>
                        <p>You can interact with the map, explore details, get directions, and access additional information, enhancing your overall experience and understanding of geographic data of your destination.</p>
                    </div>
                </div>

                <div class="features-col">
                    <img src="C:\Users\Admin\Pictures\Some-Best-Calendar-Apps (1).jpg"> <!--calendar integration-->
                    <div class="layer">
                        <h3>Calendar Integration</h3>
                        <p>It enables syncing events, appointments, or schedules between various platforms, ensuring seamless access to and management of calendar-related data across different tools or devices.</p>
                    </div>
                </div>
            </div>
        </section>

        <!-------testimonials------->


        <!--------- footer---------->
        <section class="footer">
            <h4>More About Us</h4>
            <p>For more updates visit our social media handles.</p>
            <div class="icons">
                <i class="fa fa-facebook"></i>
                <i class="fa fa-twitter"></i>
                <i class="fa fa-instagram"></i>
                <i class="fa fa-linkedin"></i>
            </div>
            <script>
window.embeddedChatbotConfig = {
chatbotId: "MDTK7KvhdfMd-H8D57Dd_",
domain: "www.chatbase.co"
}
</script>
<script
src="https://www.chatbase.co/embed.min.js"
chatbotId="MDTK7KvhdfMd-H8D57Dd_"
domain="www.chatbase.co"
defer>
</script>
            <p>Made with <i class="fa fa-heart-o"></i> by M3 group Vishwakarma Institute of Technology.</p>
        </section>
    </body>
</html>

