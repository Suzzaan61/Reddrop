<?php
require "../components/Navbar.php"
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Red Drop</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;300;400;500;600;700;800;900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../styles/Home.css">

</head>

<body>
    <div class="slogan">
        <div class="gradient flex-item-center">
            <p>Uniting Hearts, Saving Lives<br> - Together, We Make a Lifesaving Difference!</p>
            <button class="button-main">Save A Life</button>
            <div class="arrow"><i class="fa-duotone fa-arrow-down first"></i><i class="fa-duotone fa-computer-mouse-scrollwheel second"></i></div>
        </div>
    </div>
    <div class="hero flex-item-center">
        <div class="action-cards flex-item-center">
            <div class="donate cards">
                <i class="fa-duotone fa-droplet"></i>
                <button class="button-main">Donate</button>
            </div>
            <div class="request cards">
                <i class="fa-duotone fa-truck-droplet"></i>
                <button class="button-main">Request</button>
            </div>
            <div class="compatibality-table cards">
                <i class="fa-duotone fa-table"></i>
                <button class="button-main">Compatibality</button>
            </div>
            <div class="records cards">
                <i class="fa-duotone fa-books"></i>
                <button class="button-main">Records</button>
            </div>
            <div class="events cards">
                <i class="fa-duotone fa-calendar-days"></i>
                <button class="button-main">Events</button>
            </div>
        </div>
    </div>
    <div class="why flex-item-between">
        <div class="left"><img src="../assets/Why.png" alt=""></div>
        <div class="right flex-item-center">
            <div class="title">
                <h1 class=" main-title">Why Donate Blood?</h1>
            </div>
            <div class="post">
                <p>Everyone has their own reasons for donating blood, but a few common ones include: <br>
                <ol>
                    <li>
                        <span>Your Heart Will Thank You</span>
                    </li>
                    <li>
                        <span>You May Skip the Gym</span>
                    </li>
                    <li>
                        <span>You Can Be Part of a Greater Community</span>
                    </li>
                    <li>
                        <span>You May Reduce Your Cancer Risk</span>
                    </li>
                    <li><span>Reduce harmful iron stores</span>
                </ol>

                </p>
                <div class="more flex-item-between"><button class="button-main">Learn More</button></div>
            </div>
        </div>

    </div>
    <div class="about-us flex-item-between">
        <div class="left">
            <div class="title">
                <h1 class=" main-title">Who we are?
                </h1>
            </div>
            <div class="post">The &quot;Red Drop&quot; project aims to develop a comprehensive Blood Donor Management System to
                streamline and enhance blood donation processes. This system, designed to facilitate the
                interaction between blood donors, blood banks, and healthcare institutions, will employ an
                incremental development model. This approach allows for the systematic delivery of key
                features, ensuring a responsive and evolving platform. Redrop is a web-based system that can
                assist in the information of blood donors, blood donation events &amp; campaigns, etc. If anyone
                wants to become a regular blood donor, they can create an account and book a blood donation
                appointment and donate blood. Also, if anyone needs blood, they can fill out the request form
                and submit it to get help from Redrop. From this system, several types of reports can be
                generated, such as blood stock reports, total numbers of donor reports, and the total number of
                blood donations according to months and years. The system can also provide information to the
                donor about blood donation history and compatibility.</div>
        </div>
        <div class="right">
            <img src="../assets/logo.png" alt="">
        </div>
    </div>
    <div class="events">
        <div class="container">
            <div class="title ">
                <h1 class=" main-title">Events</h1>
            </div>
            <div class="event-cards flex-item-center">
                <div class="cards">
                    <img src="../assets/event.png" alt="">
                    <div class="event-title">Blood donation Event</div>
                    <div class="event-date">2080/05/04</div>
                    <div class="learn-more flex-item-between"><button class="button-main">Learn More</button> <button class="button-main">Location</button></div>
                </div>
                <div class="cards"><img src="../assets/event.png" alt="">
                    <div class="event-title">Blood donation Event</div>
                    <div class="event-date">2080/05/04</div>
                    <div class="learn-more flex-item-between"><button class="button-main">Learn More</button> <button class="button-main">Location</button></div>
                </div>
                <div class="cards"><img src="../assets/event.png" alt="">
                    <div class="event-title">Blood donation Event</div>
                    <div class="event-date">2080/05/04</div>
                    <div class="learn-more flex-item-between"><button class="button-main">Learn More</button> <button class="button-main">Location</button></div>
                </div>
                <div class="cards"><img src="../assets/event.png" alt="">
                    <div class="event-title">Blood donation Event</div>
                    <div class="event-date">2080/05/04</div>
                    <div class="learn-more flex-item-between"><button class="button-main">Learn More</button> <button class="button-main">Location</button></div>
                </div>
                <div class="cards"><img src="../assets/event.png" alt="">
                    <div class="event-title">Blood donation Event</div>
                    <div class="event-date">2080/05/04</div>
                    <div class="learn-more flex-item-between"><button class="button-main">Learn More</button> <button class="button-main">Location</button></div>
                </div>
                <div class="cards"><img src="../assets/event.png" alt="">
                    <div class="event-title">Blood donation Event</div>
                    <div class="event-date">2080/05/04</div>
                    <div class="learn-more flex-item-between"><button class="button-main">Learn More</button> <button class="button-main">Location</button></div>
                </div>
            </div>
            <div class="more-event flex-item-center">
                <button class="button-main">More Events</button>
            </div>
        </div>
    </div>
    <hr><hr>
    <footer>
        <div class="any-query">
            <p class="query sec-title">Any Query?</p>
            <form action="#">
                <label for="Qname">Name:</label>
                <input type="text" id="Qname" name="Qname">
                <label for="Qemail">Email:</label>
                <input type="text" id="Qname" name="Qname">
                <label for="subject">Subject:</label>
                <input type="text" id="subject" name="subject">
                <label for="Query">Message:</label>
                <textarea name="Query" id="Query" cols="60" rows="10" placeholder="Message here...."></textarea>
                <button type="submit" class="button-main">Send <i class="fa-duotone fa-paper-plane-top"></i></button>
            </form>
        </div>
        <div class="contact-us flex-item-center">
           <div class="social-contact"><p class="social-media sec-title">Social Media</p></div> 
            <i class="fa-brands fa-facebook"></i>
            <i class="fa-brands fa-instagram"></i>
            <i class="fa-brands fa-dribbble"></i>
            <i class="fa-brands fa-linkedin-in"></i>
            <i class="fa-brands fa-tiktok"></i>
            <i class="fa-brands fa-twitter"></i>
            
        </div>

        <div class="navigating">
            <p class="sec-title">Navigation</p>
            <ul class="flex-item-center">
                <a href="#">
                    <li>Home</li>
                </a>
                <a href="#">
                    <li>Why donate blood?</li>
                </a>
                <a href="#">
                    <li>WHo we are?</li>
                </a>
                <a href="">
                    <li>Events</li>
                </a>
            </ul>
        </div>
    </footer>
    <div class="cp-section">
        <img src="../assets/logo.webp" alt="">
        <p>Copyright © 2024 Red Drop, Org.</p>
    </div>
</body>

</html>