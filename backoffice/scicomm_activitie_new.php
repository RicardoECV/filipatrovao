<?php

  $header_footer = true;

  require_once("../requires.php");
  $pagina_backoffice = "scicomm";
  
  $user = checkLogin(); 

  $form = !empty($_GET["text"]); 
  
  if($form) {
    $text = $_GET["text"];
 
    iduSQL("INSERT INTO activities (text,editor_id,creator_id) VALUES ('$text','$user[id]','$user[id]')");
    header("Location: scicomm.php");    
  }    
 
  require_once("components/header.php");
  require_once("views/scicomm_activitie_new_view.php");
  require_once("components/footer.php");

?>