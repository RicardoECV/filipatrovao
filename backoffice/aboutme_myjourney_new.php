<?php

  $header_footer = true;

  require_once("../requires.php");
  $pagina_backoffice = "aboutme";
  
  $user = checkLogin(); 

  $form = !empty($_GET["title"]) && !empty($_GET["text"]) && !empty($_GET["title_logo"]); 
  
  if($form) {
    $title = $_GET["title"];
    $img = $_GET["img"];
    $text = $_GET["text"];  
    $title_logo = $_GET["title_logo"];    
 
    iduSQL("INSERT INTO myjourney (title,title_logo,text,img,editor_id,creator_id) VALUES ('$title','$title_logo','$text','$img','$user[id]','$user[id]')");
    header("Location: aboutme.php");    
  }    
 
  require_once("components/header.php");
  require_once("views/aboutme_myjourney_new_view.php");
  require_once("components/footer.php");

?>