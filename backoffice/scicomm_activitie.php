<?php

  $header_footer = true;

  require_once("../requires.php");
  $pagina_backoffice = "scicomm";
  
  $user = checkLogin();  
  
  if(!empty($_GET["id"])) {
    $id = $_GET["id"];    
    $scicommactivitie = getUniqueActivitie($id); 

    $form_2 = !empty($_GET["text"]); 
    
    if($form_2) {
      $text = $_GET["text"];  
      
      iduSQL("UPDATE activities SET text='$text', editor_id=$user[id] WHERE id=$id");
      $scicommactivitie = getUniqueActivitie($id); 
    }    
  }
 
  require_once("components/header.php");
  require_once("views/scicomm_activitie_view.php");
  require_once("components/footer.php");

?>