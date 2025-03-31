<?php

  $header_footer = true;

  require_once("../requires.php");
  $pagina_backoffice = "research";
  
  $user = checkLogin();  
  
  if(!empty($_GET["id"])) {
    $id = $_GET["id"];    
    $aboutmeExpertise = getUniqueExpertise($id);

    $form_2 = !empty($_GET["title"]) && !empty($_GET["img"]) && !empty($_GET["text"]); 
    
    if($form_2) {
      $title = $_GET["title"];     
      $img = $_GET["img"];         
      $text = $_GET["text"];         
      
      iduSQL("UPDATE expertise SET title='$title', img='$img', text='$text', editor_id=$user[id] WHERE id=$id");
      $aboutmeExpertise = getUniqueExpertise($id);  
    }    
  }
 
  require_once("components/header.php");
  require_once("views/research_expertise_view.php");
  require_once("components/footer.php");

?>