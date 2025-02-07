<?php

  $header_footer = true;

  require_once("../requires.php");
  $pagina_backoffice = "scicomm";
  
  $user = checkLogin(); 
  
  if(!empty($_GET["id"])) {
    $id = $_GET["id"];
    $scicommcard = getUniqueSciCommCard($id);  
  }    
 
  require_once("components/header.php");
  require_once("views/scicomm_card_delete_view.php");
  require_once("components/footer.php");

?>