<?php

  $header_footer = true;

  require_once("../requires.php");
  $pagina_backoffice = "contacts";
  
  $user = checkLogin();   
  $contacts = getContacts();

  $form = !empty($_GET["logo_email"]) && !empty($_GET["email"]) && !empty($_GET["logo_linkdin"]); 
  $form = $form && !empty($_GET["linkdin"]) && !empty($_GET["logo_twiter"]) && !empty($_GET["twiter"]);
  
  if($form) {
    $logo_email = $_GET["logo_email"];
    $email = $_GET["email"];
    $logo_linkdin = $_GET["logo_linkdin"]; 
    $linkdin = $_GET["linkdin"];     
    $logo_twiter = $_GET["logo_twiter"];     
    $twiter = $_GET["twiter"];     
    
    iduSQL("UPDATE contacts SET editor_id='$user[id]', logo_email='$logo_email', linkdin='$linkdin', email='$email', logo_linkdin='$logo_linkdin', twiter='$twiter', logo_twiter='$logo_twiter'");
    $contacts = getContacts();
  }
   
  require_once("components/header.php");
  require_once("views/contacts_edit_view.php");
  require_once("components/footer.php");

?>