// Click Contact From Same Page
document.addEventListener("DOMContentLoaded", () => {
  let contactLinkEles = document.querySelectorAll(".navbar-nav .nav-link.contact-link");
  for (let element of contactLinkEles) {
    element.addEventListener("click", () => {
      setTimeout(() => {
        shakeContact();
      }, 500);    
    });
  }
});

// Toggle Mobile
function toggleIcon() {
  const logoClose = document.querySelector(".logo_mobile");
  const logo = document.querySelector(".navbar-toggler-icon");
  logo.classList.toggle("d-none");
  logoClose.classList.toggle("d-none");
}

// Expertise Click
function clickCard(num) {
  const arrowDown = document.querySelector(".expertise_arrow_" + num);
  arrowDown.classList.toggle("expertise_arrow_down");
}  

// Shake Contacts
function shakeContact() {
  const contacts = document.querySelectorAll(".home_icon");
  for (let icon of contacts) {
    icon.classList.add("home_icon_animation");
  } 
  setTimeout (() => {
    for (let icon of contacts) {
      icon.classList.remove("home_icon_animation");
    } 
  }, 500);     
}
