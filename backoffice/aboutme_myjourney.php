<?php

  $header_footer = true;

  require_once("../requires.php");
  $pagina_backoffice = "aboutme";
  
  $user = checkLogin();  
  
  if(!empty($_GET["id"])) {
    $id = $_GET["id"];    
    $myjourney = getUniqueJourney($id);

    $form_2 = !empty($_GET["title"]) && !empty($_GET["img"]) && !empty($_GET["text"]) && !empty($_GET["title_logo"]); 
    
    if($form_2) {
      $title = $_GET["title"];     
      $img = $_GET["img"];         
      $text = $_GET["text"];         
      $title_logo = $_GET["title_logo"];         
      
      iduSQL("UPDATE myjourney SET title='$title', img='$img', title_logo='$title_logo' , text='$text', editor_id=$user[id] WHERE id=$id");
      $myjourney = getUniqueJourney($id);  
    }    
  }
 
  require_once("components/header.php");
  require_once("views/aboutme_myjourney_view.php");
  require_once("components/footer.php");

?>