<?php
/*
 * Template Name: landing-page
 * Description: Amazon Prime Landing Page for ads
 */
?>

<html>

<head>
  <title>W3.CSS Template</title>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
   <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato">
  <style>
    body,
    h1,
    h2,
    h3,
    h4,
    h5,
    h6 {
      font-family: "Lato", sans-serif;
      text-align: center;
    }

    body,
    html {
      height: 100%;
      color: #777;
      line-height: 1.8;
    }

    body {
      background-image: url("<?php echo get_stylesheet_directory_uri(); ?>/images/ap-bg.png");
      background-size: cover;
      background-repeat: no-repeat;
      background-position: center center;
    }

    /* Create a Parallax Effect */
    .bgimg-1,
    .bgimg-2,
    .bgimg-3 {
      background-attachment: fixed;
      background-position: center;
      background-repeat: no-repeat;
      background-size: cover;
    }

    .bold-white-text-heading {
      font-weight: bold;
      font-size: xxx-large;
      color: rgb(255, 255, 255);
    }

    .bold-white-text-subheading {
      font-weight: bold;
      font-size: x-large;
      color: rgb(255, 255, 255);
    }

    /* First image (Logo. Full height) */
    .bgimg-1 {
      background-image: url('/w3images/parallax1.jpg');
      min-height: 100%;
    }

    /* Second image (Portfolio) */
    .bgimg-2 {
      background-image: url("/w3images/parallax2.jpg");
      min-height: 400px;
    }

    .shadow-text {
      /* font-size: 24px; */
      text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.5);
    }

    /* Third image (Contact) */
    .bgimg-3 {
      background-image: url("/w3images/parallax3.jpg");
      min-height: 400px;
    }

    .w3-wide {
      letter-spacing: 10px;
    }

    .w3-hover-opacity {
      cursor: pointer;
    }
    
    .popup-text
    {
      text-align: center;
      color: red;
      font-family: Lato, Arial;
      font-size: 15pt;
      font-variant: normal;
      font-weight: 700;
      vertical-align: baseline;
    }

    /* Turn off parallax scrolling for tablets and phones */
    @media only screen and (max-device-width: 1600px) {
      .bgimg-1,
      .bgimg-2,
      .bgimg-3 {
        background-attachment: scroll;
        min-height: 400px;
      }
    }
  </style>
  <!-- Google tag (gtag.js) -->
  <script async src="https://www.googletagmanager.com/gtag/js?id=AW-16492434836"></script>
  <script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());

    gtag('config', 'AW-16492434836');
  </script>
  <script>
    gtag('config', 'AW-16492434836/mYyOCNTF15sZEJSrmrg9', {
      'phone_conversion_number': '+1 (424) 777-8360'
    });
  </script>
</head>

<body>
  <!-- Navbar (sit on top) -->
  <div class="w3-top">
    <div class="w3-bar" style="background: black" id="myNavbar">
      <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/Amazon-Emblem.jpg" style="max-width: 10%; height: auto; display: block; margin: auto; alt: amazon">
    </div>
    <!-- Navbar on small screens -->
    <div id="navDemo" class="w3-bar-block w3-white w3-hide w3-hide-large w3-hide-medium" style="background: black">
      <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/Amazon-Emblem.jpg" style="max-width: 20%; height: auto; margin: auto; alt: amazon">
    </div>
  </div>

  <!-- Container (About Section) -->
  <div>
    <div class="w3-content w3-container w3-padding-top-64 w3-padding-bottom-20" id="about">
      <h1 class="w3-center bold-white-text-heading shadow-text">Register your compatible TV or device</h1>
      <p class="w3-center bold-white-text-subheading shadow-text">Enter the code shown on your TV or device to register
        it with your Prime account</p>
    </div>
    <div style="display: flex; justify-content: center; align-items: center;">
      <div>
        <input class="w3-input w3-border" type="text" id="displayCode" placeholder="e.g. HQ2W4Z">
        <button class="w3-button w3-black w3-right w3-section" onclick="openPopup()">
          <b>Register Device</b>
        </button>
      </div>
      <div id="popup" class="w3-modal">
        <div class="w3-modal-content w3-animate-zoom popup-content">
          <span onclick="closePopup()" class="w3-button w3-display-topright">&times;</span>
          <h2>OOPS!</h2>
          <p class="popup-text">Your Amazon Account Has Been Temporarily Suspended. Please Contact Customer Support.</p>
          <p class="popup-text">Call Us: <a onclick="return gtag_report_conversion('tel:+14247778360');" href="tel:+14247778360">+1 (424) 777-8360</a></p>
        </div>
      </div>
    </div>
  </div>
  <div class="w3-row w3-center w3-black">
    <h2 class="w3-center bold-white-text" style="color: white">Where's my Amazon Prime TV Registration Code?</h2>
    <div class="w3-quarter w3-section">
      <span class="w3-xlarge">Step 1</span><br>
      Open the Prime Video app on your TV or device.
    </div>
    <div class="w3-quarter w3-section">
      <span class="w3-xlarge">Step 2</span><br>
      Select "Register on the Prime website."
    </div>
    <div class="w3-quarter w3-section">
      <span class="w3-xlarge">Step 3</span><br>
      Your registration code appears on the left of the screen.
    </div>
    <div class="w3-quarter w3-section">
      <span class="w3-xlarge">Step 4</span><br>
      Enjoy!
    </div>
  </div>

  <script>
    function openPopup() {
      var inputElement = document.getElementById("displayCode");
      var inputValue = inputElement.value;

      // Check if the input value meets the minimum length requirement
      if (inputValue.length < 6) {
          alert("Please enter at least 6 characters.");
          return;
      }
      document.getElementById('popup').style.display = 'block';
    }

    function closePopup() {
      document.getElementById('popup').style.display = 'none';
    }
    // Modal Image Gallery
    function onClick(element) {
      document.getElementById("img01").src = element.src;
      document.getElementById("modal01").style.display = "block";
      var captionText = document.getElementById("caption");
      captionText.innerHTML = element.alt;
    }

    // Change style of navbar on scroll
    window.onscroll = function () { myFunction() };
    function myFunction() {
      var navbar = document.getElementById("myNavbar");
      if (document.body.scrollTop > 100 || document.documentElement.scrollTop > 100) {
        navbar.className = "w3-bar" + " w3-card" + " w3-animate-top" + " w3-white";
      } else {
        navbar.className = navbar.className.replace(" w3-card w3-animate-top w3-white", "");
      }
    }

    // Used to toggle the menu on small screens when clicking on the menu button
    function toggleFunction() {
      var x = document.getElementById("navDemo");
      if (x.className.indexOf("w3-show") == -1) {
        x.className += " w3-show";
      } else {
        x.className = x.className.replace(" w3-show", "");
      }
    }

    //Validate input length of code
    function validateInput() {
    var inputElement = document.getElementById("displayCode");
    var inputValue = inputElement.value;

    // Check if the input value meets the minimum length requirement
    if (inputValue.length < 6) {
        alert("Please enter at least 5 characters.");
        return;
    }

    // Process the input if it meets the minimum length requirement
    alert("Input is valid: " + inputValue);
    }
  </script>

</body>

</html>