<?php

  $header_footer = true;

  require_once("../requires.php");
  $pagina_backoffice = "research";
  
  $user = checkLogin(); 
  
  if(!empty($_GET["id"])) {
    $id = $_GET["id"];
    iduSQL("DELETE FROM expertise WHERE id=$id");    
  }    
 
  require_once("components/header.php");
  require_once("views/research_expertise_deleted_view.php");
  require_once("components/footer.php");

?>