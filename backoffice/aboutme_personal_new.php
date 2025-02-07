<?php

  $header_footer = true;

  require_once("../requires.php");
  $pagina_backoffice = "aboutme";
  
  $user = checkLogin(); 

  $form = !empty($_GET["title"]) && !empty($_GET["img"]); 
  
  if($form) {
    $title = $_GET["title"];
    $img = $_GET["img"];     
 
    iduSQL("INSERT INTO personal_interests (title,img,editor_id,creator_id) VALUES ('$title','$img','$user[id]','$user[id]')");
    header("Location: aboutme.php");    
  }    
 
  require_once("components/header.php");
  require_once("views/aboutme_personal_new_view.php");
  require_once("components/footer.php");

?>