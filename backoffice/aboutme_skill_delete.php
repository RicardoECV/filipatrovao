<?php

  $header_footer = true;

  require_once("../requires.php");
  $pagina_backoffice = "aboutme";
  
  $user = checkLogin(); 
  
  if(!empty($_GET["id"])) {
    $id = $_GET["id"];
    $aboutmeSkill = getUniqueSkill($id);  
  }    
 
  require_once("components/header.php");
  require_once("views/aboutme_skill_delete_view.php");
  require_once("components/footer.php");

?>