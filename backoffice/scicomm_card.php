<?php

  $header_footer = true;

  require_once("../requires.php");
  $pagina_backoffice = "scicomm";
  
  $user = checkLogin();  
  
  if(!empty($_GET["id"])) {
    $id = $_GET["id"];    
    $scicommcard = getUniqueSciCommCard($id); 

    $form_2 = !empty($_GET["title"]) && !empty($_GET["img"]); 
    
    if($form_2) {
      $title = $_GET["title"];     
      $img = $_GET["img"];  
      
      iduSQL("UPDATE scicomm_cards SET title='$title', img='$img', editor_id=$user[id] WHERE id=$id");
      $scicommcard = getUniqueSciCommCard($id); 
    }    
  }
 
  require_once("components/header.php");
  require_once("views/scicomm_card_view.php");
  require_once("components/footer.php");

?>