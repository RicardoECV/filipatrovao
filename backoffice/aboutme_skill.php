<?php

  $header_footer = true;

  require_once("../requires.php");
  $pagina_backoffice = "aboutme";
  
  $user = checkLogin();  
  
  if(!empty($_GET["id"])) {
    $id = $_GET["id"];    
    $aboutmeSkill = getUniqueSkill($id);

    $form_2 = !empty($_GET["title"]) && !empty($_GET["img"]) && !empty($_GET["text"]); 
    
    if($form_2) {
      $title = $_GET["title"];     
      $img = $_GET["img"];         
      $text = $_GET["text"];         
      
      iduSQL("UPDATE skills SET title='$title', img='$img', text='$text', editor_id=$user[id] WHERE id=$id");
      $aboutmeSkill = getUniqueSkill($id);  
    }    
  }
 
  require_once("components/header.php");
  require_once("views/aboutme_skill_view.php");
  require_once("components/footer.php");

?>