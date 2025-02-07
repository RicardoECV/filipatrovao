<?php

  $header_footer = true;

  require_once("../requires.php");
  $pagina_backoffice = "research";
  
  $user = checkLogin(); 

  $form = !empty($_GET["text"]) && !empty($_GET["link"]) && !empty($_GET["button_link"]); 
  
  if($form) {
    $text = $_GET["text"];     
    $link = $_GET["link"];         
    $button_link = $_GET["button_link"]; 
 
    iduSQL("INSERT INTO publications (text,link,button_link,editor_id,creator_id) VALUES ('$text','$link','$button_link','$user[id]','$user[id]')");
    header("Location: research.php");    
  }    
 
  require_once("components/header.php");
  require_once("views/research_publication_new_view.php");
  require_once("components/footer.php");

?>