document.addEventListener("DOMContentLoaded",function(){
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

    function sendHire(event){
        event.preventDefault(); 
        const contactFormValidation = document.getElementsByClassName("contact-form-validation");
        const employerName = document.getElementById("employer-name").value;
        const employerCompany = document.getElementById("company-name").value;
        const employerEmail = document.getElementById("employer-email").value;
        const employerPhonenumber = document.getElementById("employer-phonenumber").value;
        const employerMessage = document.getElementById("employer-message").value;
      
        if(!employerName || !employerCompany || !employerEmail || !employerPhonenumber || !employerMessage){
          contactFormValidation[0].innerHTML = "Please fill in all fields";
          return; 
        }
        emailjs.send("service_33soxng", "template_0ssbwep", {
            from_name: employerName,
            from_company: employerCompany,
            from_email: employerEmail,
            from_phonenumber: employerPhonenumber,
            message: employerMessage,
        
      
        })
        .then(function(response){
            alert("Your message is sent");
            document.getElementById("hire-form").reset();
        }, function(error){
          alert("Something went wrong")
        });
      }
    document.getElementById("ContactForm").addEventListener("submit", sendEmail);
    document.getElementById("hire-form").addEventListener("submit", sendHire);

});



document.addEventListener("DOMContentLoaded", function() {
    const contactFormValidation = document.getElementsByClassName("contact-form-validation");
    const guestNameID = document.getElementById("guest-name");
    const guestEmailID = document.getElementById("guest-email");
    const guestPhonenumberID = document.getElementById("guest-phonenumber");
    const guestMessageID = document.getElementById("guest-message");
    guestNameID.addEventListener("keyup", function() {
        if (!this.value) {
            contactFormValidation[0].innerHTML = "Please enter your name";
        } else {
            contactFormValidation[0].innerHTML = "";
        }
    });
    guestEmailID.addEventListener("keyup", function() {
        if (!this.value) {
            contactFormValidation[1].innerHTML = "Please enter your email";
        } else {
            contactFormValidation[1].innerHTML = "";
        }
    });
    guestPhonenumberID.addEventListener("keyup", function() {
        if (!this.value) {
            contactFormValidation[2].innerHTML = "Please enter your phone number";
        } else {
            contactFormValidation[2].innerHTML = "";
        }
    });
    guestMessageID.addEventListener("keyup", function() {
        if (!this.value) {
            contactFormValidation[3].innerHTML = "Please leave your message here";
        } else {
            contactFormValidation[3].innerHTML = "";
        }
    });

});

function validation(){

    const contactFormValidation = document.getElementsByClassName("contact-form-validation");
    const guestName = document.getElementById("guest-name").value;
    const guestEmail = document.getElementById("guest-email").value;
    const guestPhonenumber = document.getElementById("guest-phonenumber").value;
    const guestMessage = document.getElementById("guest-message").value;

    if(!guestName){
        contactFormValidation[0].innerHTML = "Please enter your name";
        return false;
    }
    
    else if(!guestEmail){
        contactFormValidation[1].innerHTML = "Please enter your email";
        return false;
    }
    else if (!guestPhonenumber){
        contactFormValidation[2].innerHTML = "Please enter your phone number ";
        return false;
    }
    else if(!guestMessage){
        contactFormValidation[3].innerHTML = "Please leave your message here";
        return false;
    }

}

window.addEventListener('scroll', function() {
    var sections = document.querySelectorAll('section');
    var navLinks = document.querySelectorAll('.navbar a');
  
    sections.forEach(function(section) {
      var sectionTop = section.offsetTop;
      var sectionHeight = section.offsetHeight;
      var windowTop = window.pageYOffset;
  
      if (windowTop >= sectionTop - 100 && windowTop < (sectionTop + sectionHeight)) {
        navLinks.forEach(function(link) {
          link.classList.remove('active');
          if (link.hash === '#' + section.id) {
            link.classList.add('active');
          }
        });
      }
    });
  });


function hideMenu(){
    const sidebar = document.querySelector('.sidebar')
    sidebar.style.display = 'none'
}
function hideHire(){
    const hirebox = document.querySelector('.hire-box')
    hirebox.style.display = 'none'
}
function showHire(){
    const hirebox = document.querySelector('.hire-box')
    hirebox.style.display='flex';
}

function showMenu(){
    const sidebar = document.querySelector('.sidebar')
    sidebar.style.display = 'flex'
}

function hireBtn(){
    
}