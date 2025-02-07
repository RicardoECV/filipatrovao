<?php

  $header_footer = true;

  require_once("../requires.php");
  $pagina_backoffice = "aboutme";
  
  $user = checkLogin(); 
  
  if(!empty($_GET["id"])) {
    $id = $_GET["id"];
    iduSQL("DELETE FROM personal_interests WHERE id=$id");    
  }    
 
  require_once("components/header.php");
  require_once("views/aboutme_personal_deleted_view.php");
  require_once("components/footer.php");

?>