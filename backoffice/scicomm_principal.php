<?php

  $header_footer = true;

  require_once("../requires.php");
  $pagina_backoffice = "scicomm";
  
  $user = checkLogin();   
  $scicomm_page_info = getSciComm();

  $form = !empty($_GET["title"]) && !empty($_GET["sub_title_1"]) && !empty($_GET["sub_title_2"]); 
  
  if($form) {
    $title = $_GET["title"];
    $sub_title_1 = $_GET["sub_title_1"];
    $sub_title_2 = $_GET["sub_title_2"];   
 
    iduSQL("UPDATE scicomm SET editor_id='$user[id]', title='$title', sub_title_1='$sub_title_1', sub_title_2='$sub_title_2'");
    $scicomm_page_info = getSciComm();
  }    

 
  require_once("components/header.php");
  require_once("views/scicomm_principal_view.php");
  require_once("components/footer.php");

?>