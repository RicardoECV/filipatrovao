<?php

  $header_footer = true;

  require_once("../requires.php");
  $pagina_backoffice = "research";
  
  $user = checkLogin();   
  $research_page_info = getResearch();

  $form = !empty($_GET["title"]) && !empty($_GET["sub_title_1"]) && !empty($_GET["sub_title_2"]); 
  
  if($form) {
    $title = $_GET["title"];
    $sub_title_1 = $_GET["sub_title_1"];
    $sub_title_2 = $_GET["sub_title_2"];   
 
    iduSQL("UPDATE research SET editor_id='$user[id]', title='$title', sub_title_1='$sub_title_1', sub_title_2='$sub_title_2'");
    $research_page_info = getResearch();
  }    

 
  require_once("components/header.php");
  require_once("views/research_principal_view.php");
  require_once("components/footer.php");

?>