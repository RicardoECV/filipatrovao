// Click Contact From Other Page 
document.addEventListener("DOMContentLoaded", () => {  
  let contactId = window.location.hash.replace("#", "");  
  
  if (contactId == "contacts_title") { 
    setTimeout(() => {
      shakeContact();
    }, 500);    
  }  
});

