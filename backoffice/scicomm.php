<?php

  $header_footer = true;

  require_once("../requires.php");
  $pagina_backoffice = "scicomm"; 
    
  $user = checkLogin();  

  $scicomm_page_info = getSciComm();
  $scicommcards_info = getSciCommCards();
  $activities_info = getActivities();
  $multimediacontent_info = getMultimediaContent();

  require_once("components/header.php");
  require_once("views/scicomm_view.php");
  require_once("components/footer.php");

?>