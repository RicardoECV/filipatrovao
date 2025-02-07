<?php

  $header_footer = true;

  require_once("../requires.php");
  $pagina_backoffice = "research";
  
  $user = checkLogin();  
  
  if(!empty($_GET["id"])) {
    $id = $_GET["id"];    
    $researchpublication = getUniquePublication($id);

    $form_2 = !empty($_GET["text"]) && !empty($_GET["link"]) && !empty($_GET["button_link"]); 
    
    if($form_2) {
      $text = $_GET["text"];     
      $link = $_GET["link"];         
      $button_link = $_GET["button_link"];         
      
      iduSQL("UPDATE publications SET text='$text', link='$link', button_link='$button_link', editor_id=$user[id] WHERE id=$id");
      $researchpublication = getUniquePublication($id);
    }    
  }
 
  require_once("components/header.php");
  require_once("views/research_publication_view.php");
  require_once("components/footer.php");

?>