<?php

  $header_footer = true;

  require_once("../requires.php");
  $pagina_backoffice = "research"; 
    
  $user = checkLogin();  

  $research_page_info = getResearch();
  $publications_info = getPublications();
  $projects_info = getProjects();
  

  require_once("components/header.php");
  require_once("views/research_view.php");
  require_once("components/footer.php");

?>