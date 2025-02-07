<?php

  $header_footer = true;

  require_once("../requires.php");
  $pagina_backoffice = "aboutme";
  
  $user = checkLogin();   
  $aboutmeFields = getAboutMe();

  $form = !empty($_GET["title"]) && !empty($_GET["sub_title_1"]) && !empty($_GET["sub_title_2"]) && !empty($_GET["sub_title_3"]); 
  
  if($form) {
    $title = $_GET["title"];
    $sub_title_1 = $_GET["sub_title_1"];
    $sub_title_2 = $_GET["sub_title_2"];
    $sub_title_3 = $_GET["sub_title_3"];
 
    iduSQL("UPDATE about_me SET editor_id='$user[id]', title='$title', sub_title_1='$sub_title_1', sub_title_2='$sub_title_2', sub_title_3='$sub_title_3'");
    $aboutmeFields = getAboutMe();
  }    

 
  require_once("components/header.php");
  require_once("views/aboutme_principal_view.php");
  require_once("components/footer.php");

?>