<?php

  $header_footer = true;

  require_once("../requires.php");
  $pagina_backoffice = "scicomm";
  
  $user = checkLogin(); 
  
  if(!empty($_GET["id"])) {
    $id = $_GET["id"];
    $scicommmultimedia = getUniqueMultimedia($id);
  }    
 
  require_once("components/header.php");
  require_once("views/scicomm_multimedia_delete_view.php");
  require_once("components/footer.php");

?>