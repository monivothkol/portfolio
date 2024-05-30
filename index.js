

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