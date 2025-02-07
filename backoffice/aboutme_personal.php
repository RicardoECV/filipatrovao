<?php

  $header_footer = true;

  require_once("../requires.php");
  $pagina_backoffice = "aboutme";
  
  $user = checkLogin();  
  
  if(!empty($_GET["id"])) {
    $id = $_GET["id"];    
    $personal_info = getUniquePersonal($id);

    $form_2 = !empty($_GET["title"]) && !empty($_GET["img"]); 
    
    if($form_2) {
      $title = $_GET["title"];     
      $img = $_GET["img"];  
      
      iduSQL("UPDATE personal_interests SET title='$title', img='$img', editor_id=$user[id] WHERE id=$id");
      $personal_info = getUniquePersonal($id);  
    }    
  }
 
  require_once("components/header.php");
  require_once("views/aboutme_personal_view.php");
  require_once("components/footer.php");

?>