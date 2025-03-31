<?php

  $header_footer = true;

  require_once("../requires.php");
  $pagina_backoffice = "research";
  
  $user = checkLogin(); 

  $form = !empty($_GET["title"]) && !empty($_GET["img"]) && !empty($_GET["text"]); 
  
  if($form) {
    $title = $_GET["title"];
    $img = $_GET["img"];
    $text = $_GET["text"];    
 
    iduSQL("INSERT INTO expertise (title,text,img,editor_id,creator_id) VALUES ('$title','$text','$img','$user[id]','$user[id]')");
    header("Location: research.php");    
  }    
 
  require_once("components/header.php");
  require_once("views/research_expertise_new_view.php");
  require_once("components/footer.php");

?>