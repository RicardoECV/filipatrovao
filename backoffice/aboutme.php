<?php

  $header_footer = true;

  require_once("../requires.php");
  $pagina_backoffice = "aboutme"; 
    
  $user = checkLogin();  

  $aboutme_page_info = getAboutMe();
  $expertise_info = getExpertise();
  $myjourney_info = getMyJourneys();
  $personal_info = getPersonal();

  require_once("components/header.php");
  require_once("views/aboutme_view.php");
  require_once("components/footer.php");

?>