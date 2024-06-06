<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="style.css" />
  <script src="./index.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css"
    integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link href="https://fonts.googleapis.com/css2?family=Poetsen+One&display=swap" rel="stylesheet" />
  <script src="https://kit.fontawesome.com/826a95a370.js" crossorigin="anonymous"></script>
  <meta property="og:image" content="./pic/preview.png" />
  <title>Document</title>
</head>

<body>

    <header class="header">
      
      <a href="#home" class="logo">Monivoth Site</a>
      <nav class="navbar">
        <!-- <a href="#home" class="active">Home</a> -->
        <a href="./index.php" class="active">Home</a>

        <a href="#background">Background</a>
        <a href="./project.html">Project</a>
        <a href="#contact">Contact</a>
      </nav>
      <i class="fa-solid fa-bars" onclick="showMenu()" style="font-size: 2rem;"></i>
      <nav class="sidebar">
        <i class="fa-solid fa-xmark" style="font-size: 2rem;" onclick="hideMenu()"></i>  
        <a href="#home" class="active">Home</a>
        <a href="#background">Background</a>
        <a href="./project.html">Project</a>
        <a href="#contact">Contact</a>
      </nav>
    </header>
    <section class="home" id="home">
      <div class="home-content">
        <h3>Greeting! I'm</h3>
        <h1>Monivoth</h1>
        <h2 class="position-animation">I'm a <span></span></h2>
        <p>
          There must be a solution for every problem. Keep learning from every failure. Your passion will pay off.        
        </p>
        <div class="social-icon">
          <a href="https://www.linkedin.com/in/monivothkul/"> <i class="fa-brands fa-linkedin"></i></a>
          <a href="https://github.com/monivothkol"><i class="fa-brands fa-github"></i></a>
        </div>
        <div class="btn-employment">
          <a href="#" class="btn">Hire</a>
          <a href="#" class="btn">Contact</a>
        </div>
      </div>
      <div class="home-img">
        <img src="./pic/profile.jpg" alt="" />
      </div>
    </section>
    <section class="background" id="background">
      <h2 class="section-header">Work Experience</h2>
      <div class="timeline">
        <div class="timeline-item">
          <div class="timeline-bullet"></div>
          <div class="timeline-date">02/2022 - 12/2022</div>
          <div class="timeline-content">
            <h3>Digital Touchpoint Officer, Smart Axiata</h3>
            <ul>
              <li>Maintain and enhance existing features• Maintain and enhance existing features</li>
              <li>Design user experience journey flows</li>
              <li>Prepare required documentation</li>
              <li>Coordinate with vendors/developers and other departments to update new requirements or products</li>
              <li>Engage with related stakeholders to perform UAT and evaluates testing result</li>
              <li>Create a monthly report document from analytic system</li>
              <li>Collaborate with internal teams to produce high quality work</li>
              <li>Complete other assigned tasks</li>
            </ul>
          </div>
        </div>
  
        <div class="timeline-item">
          <div class="timeline-bullet"></div>
          <div class="timeline-date">11/2020 - 02-2022</div>
          <div class="timeline-content">
            <h3>Contact Center Support , Smart Axiata</h3>
            <ul>
              <li>Resolve complaint as well as escalate technical issue to relevant department and communicate to get
                feedback</li>
              <li>Contact customer to provide feedback as well as follow up complaint</li>
              <li>Support agent and handle strong complaint from customer</li>
              <li>Support in technical issue when there is error occurred with equipment</li>
              <li>Check and train agent(s) who still in progress of learning </li>
              <li>Report abnormal procedure or system behavior to superior team</li>
              <li>Make decision in absence of Team Leader or Supervisor</li>
            </ul>
          </div>
        </div>
  
        <div class="timeline-item">
          <div class="timeline-bullet"></div>
          <div class="timeline-date">01/2020 - 11/2020</div>
          <div class="timeline-content">
            <h3>Senior Contact Center Agent , Smart Axiata</h3>
            <ul>
              <li>Provide information in response to inquiries of products and services via social media, email channel
                and LiveChat</li>
              <li>Handle complaint from customer and forward technical issue to support team</li>
              <li>Make report to supervisor and participate in new product(s) training</li>
            </ul>
          </div>
        </div>
  
        <div class="timeline-item">
          <div class="timeline-bullet"></div>
          <div class="timeline-date">01/2020 - 03/2020</div>
          <div class="timeline-content">
            <h3>Barista Trainee, Brown Coffee and Bakery</h3>
            <ul>
              <li>Provide good product and service for customer</li>
              <li>Maintains safe and healthy work environment by following organization standards</li>
              <li>Participate in educational opportunities provided by company</li>
            </ul>
          </div>
        </div>
  
  
      </div>
    </section>
  
    <section class="contact" id="contact">
      <h3 class="section-header contact-header">Contact me</h3>
      <form id="ContactForm" name="ContactForm" action="#" class="contact-box" onsubmit="return validation()" method="POST">
        <!-- <div class="inputbox">
                <input type="text" placeholder="Full Name" class="text-field" id="name" >
              </div>          
              <div class="inputbox">
                <input type="text" placeholder="Full Name" class="text-field" id="name" >
              </div>  
              <div class="inputbox">
                <input type="text" placeholder="Full Name" class="text-field" id="name" >
              </div>  
              <div class="text-area-field">
                <textarea name="message" id="message" cols="30" rows="10"></textarea>
              </div>
              <div class="inputbox">
                
              </div> -->
        <p class="contact-form-validation"></p>
        <input type="text" placeholder="Full Name" class="text-field" id="guest-name">
        <p class="contact-form-validation"></p>
        <input type="email" placeholder="Email address" class="text-field" id="guest-email">
        <p class="contact-form-validation"></p>
        <input type="tel" placeholder="Phone number" class="text-field" id="guest-phonenumber">
        <p class="contact-form-validation"></p>
        <textarea class="text-field text-area-field" name="guestMessage" id="guest-message" cols="30" rows="10"
          placeholder="Your message"></textarea>
        <input type="submit" class="btn-send-message" value="Send Message"></input>
      </form>
  
    </section>
  
  <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/@emailjs/browser@4/dist/email.min.js">
  </script>
  <script>
      emailjs.init("ZroANVEBAtw4BdW7-");
      function sendEmail(event){
        event.preventDefault(); 
        const contactFormValidation = document.getElementsByClassName("contact-form-validation");
        const guestName = document.getElementById("guest-name").value;
        const guestEmail = document.getElementById("guest-email").value;
        const guestPhonenumber = document.getElementById("guest-phonenumber").value;
        const guestMessage = document.getElementById("guest-message").value;

        if(!guestName || !guestEmail || !guestPhonenumber || !guestMessage){
          contactFormValidation[0].innerHTML = "Please fill in all fields";
          return; 
        }
        emailjs.send("service_ialf89c", "template_y1zn9od", {
            from_name: guestName,
            from_email: guestEmail,
            from_phonenumber: guestPhonenumber,
            message: guestMessage

        })
        .then(function(response){
            alert("Your message is sent");
            document.getElementById("ContactForm").reset();
        }, function(error){
          alert("Something went wrong")
        });
      }
      document.getElementById("ContactForm").addEventListener("submit", sendEmail)


  </script>

</body>

</html>