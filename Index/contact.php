<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8" />
   <meta name="viewport" content="width=device-width, initial-scale=1.0" />
   <!-- Browser Logo -->

   <!-- Browser Logo -->
   <link rel="icon" href="../Assets/Icons/Logo.svg" />

   <!-- Components -->
   <link rel="stylesheet" href="../Style/Components/header.css" />
   <link rel="stylesheet" href="../Style/Components/support.css" />
   <link rel="stylesheet" href="../Style/Components/blog.css" />
   <link rel="stylesheet" href="../Style/Components/footer.css" />

   <!-- Base Config -->
   <link rel="stylesheet" href="../Style/base_font.css" />
   <link rel="stylesheet" href="../Style/base_config.css" />
   <link rel="stylesheet" href="../Style/base_root.css" />
   <link rel="stylesheet" href="../Style/base_component.css" />

   <!-- Initial -->
   <link rel="stylesheet" href="../Style/contact_page.css" />
   <link rel="stylesheet" href="../Style/contact_responsive.css" />

   <!-- Responsive -->
   <link rel="stylesheet" href="" />


   <!-- Google Font -->
   <link rel="preconnect" href="https://fonts.googleapis.com" />
   <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
   <link href="https://fonts.googleapis.com/css2?family=Inter:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet" />

   <title>Get Started</title>
</head>

<body>
   <!-- COMPONENT / Header -->
   <header>
      <!-- HEADER / Navigation -->
      <nav>
         <!-- NAV-Logo -->
         <div class="nav-logo">
            <a href="../index.html">
               <img src="../Assets/Icons/Logo Typeface.svg" alt="" />
            </a>
         </div>

         <!-- NAV-Items -->
         <ul class="nav-list">
            <li class="nav-item"><a href="../Index/vaccine.html">Vaccine</a></li>
            <li class="nav-item"><a href="../Index/blog.html">Blog</a></li>
            <li class="nav-item"><a href="../Index/about.html">About</a></li>
            <li class="nav-item"><a href="../Index/contact.html">Contact</a></li>
            <a href="../Index/started.html">
               <button class="button-nav">Get started</button>
            </a>
         </ul>

         <!-- NAV-Toggle | Pending -->
         <div class="menu-toggle">
            <input type="checkbox" />
            <span></span>
            <span></span>
         </div>
      </nav>
   </header>

   <div class="vaccine-form container-enable">
      <div class="vaccine-form-content">
         <img src="../Assets/Images/Content/Badge Data.svg" alt="" />
         <h3>Let's chat. <br> Tell us about your problem</h3>
         <p>Holaa! Feel free to use the contact form to the right to reach out to us </p>
      </div>

      <form class="component-form" method="POST" action="/lifecare-site-main/process/create_contact.php" target="hidden_iframe">
         <div class="from-wrap">
            <h4>Send us a message 🚀</h4>
         </div>
         <div class="form-wrap">
            <input type="text" id="fullName" name="fullName" placeholder="Enter your Full Name." required />
         </div>
         <div class="form-wrap">
            <input type="email" id="email" name="email" placeholder="Enter your Email" required />
         </div>
         <div class="form-wrap">
            <input type="text" id="subject" name="subject" placeholder="Enter Subject" required />
         </div>
         <div class="form-wrap">
            <label for="message">Tell us about your problem!</label>
            <textarea id="message" name="problem" cols="30" rows="10" required></textarea>
         </div>
         <button id="buttonAlert" class="button-primary" disabled>Send</button>
      </form>
   </div>
   <iframe name="hidden_iframe" id="hidden_iframe" style="display:none;"></iframe>
   <!-- CONTENT => Modal Pop-Up -->
   <div id="myModal" class="modal">
      <div class="modal-content">
         <span class="close">&times;</span>
         <div id="contact_name"></div>
         <p>Thank you for your message. Our team is working to address your concern and will respond shortly. We appreciate your patience.</p>
         <div id="contact_issue"></div>
         <button id="buttonAlertModal" class="button-primary"><a href="/lifecare-site-main/index.html">Gotcha!</a> </button>
      </div>
   </div>

   <!-- CONTENT => Footer -->
   <div class="footer-foot">
      <div class="footer-foot-session container-enable">
         <div class="footer-foot-content">
            <div class="content-left">
               <img src="../Assets/Icons/Logo New.svg" alt="Logo" />
               <p>Lifecare, is a non-profit company that provides you tons of features around health and pandemic. Let’s build a better life, together.</p>
               <button class="button-third"><a href="#">Make a donation</a></button>
               <div class="social">
                  <img src="../Assets/Icons/Social Media/Facebook.svg" alt="Facebook" />
                  <img src="../Assets/Icons/Social Media/Instagram.svg" alt="Instagram" />
                  <img src="../Assets/Icons/Social Media/Discord.svg" alt="Discord" />
                  <img src="../Assets/Icons/Social Media/Reddit.svg" alt="Reddit" />
                  <img src="../Assets/Icons/Social Media/YouTube.svg" alt="YouTube" />
               </div>
            </div>
            <div class="content-right">
               <div class="list list-01">
                  <h4>Explore</h4>
                  <ul>
                     <li><a href="../Index/vaccine.html">Vaccine</a></li>
                     <li><a href="../Index/blog.html">Blog</a></li>
                     <li><a href="../Index/about.html">About</a></li>
                     <li><a href="../Index/contact.html">Contact</a></li>
                  </ul>
               </div>
               <div class="list list-02">
                  <h4>Resource</h4>
                  <ul>
                     <li><a href="#">FAQs</a></li>
                     <li><a href="#">Stories</a></li>
                  </ul>
               </div>
               <div class="list list-03">
                  <h4>Company</h4>
                  <ul>
                     <li><a href="#">Licence</a></li>
                     <li><a href="#">Terms of Use</a></li>
                     <li><a href="#">Privacy Policy</a></li>
                     <li><a href="#">Contact</a></li>
                     <li><a href="#">Career</a></li>
                  </ul>
               </div>
            </div>
         </div>
         <div class="footer-foot-copyright">
            <p>© 2022 Lifecare Inc. All rights reserved. Powered by Ministry of Health Indonesia</p>
            <p>English · Indonesia</p>
         </div>
      </div>
   </div>
   </footer>


   <!-- JavaScript -->
   <script src="../JavaScript/alert.js"></script>
</body>

</html>