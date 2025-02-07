<?php

  $header_footer = true;

  require_once("../requires.php");
  $pagina_backoffice = "principal";
  
  $user = checkLogin();   
  $home_page_info = getHomePage();

  $form = !empty($_GET["title"]) && !empty($_GET["text"]) && !empty($_GET["img"]); 
  
  if($form) {
    $title = $_GET["title"];
    $text = $_GET["text"];
    $img = $_GET["img"];     
    
    iduSQL("UPDATE home_page SET editor_id='$user[id]', title='$title', text='$text', img='$img'");
    $home_page_info = getHomePage();
  }
   
  require_once("components/header.php");
  require_once("views/principal_edit_view.php");
  require_once("components/footer.php");

?>