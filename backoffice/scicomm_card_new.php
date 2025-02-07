<?php

  $header_footer = true;

  require_once("../requires.php");
  $pagina_backoffice = "scicomm";
  
  $user = checkLogin(); 

  $form = !empty($_GET["title"]) && !empty($_GET["img"]); 
  
  if($form) {
    $title = $_GET["title"];
    $img = $_GET["img"];      
 
    iduSQL("INSERT INTO scicomm_cards (title,img,editor_id,creator_id) VALUES ('$title','$img','$user[id]','$user[id]')");
    header("Location: scicomm.php");    
  }    
 
  require_once("components/header.php");
  require_once("views/scicomm_card_new_view.php");
  require_once("components/footer.php");

?>