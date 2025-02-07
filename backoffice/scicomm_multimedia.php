<?php

  $header_footer = true;

  require_once("../requires.php");
  $pagina_backoffice = "scicomm";
  
  $user = checkLogin();  
  
  if(!empty($_GET["id"])) {
    $id = $_GET["id"];    
    $scicommmultimedia = getUniqueMultimedia($id);

    $form_2 = !empty($_GET["title"]) && !empty($_GET["img"]) && !empty($_GET["link"]); 
    
    if($form_2) {
      $title = $_GET["title"];     
      $img = $_GET["img"];         
      $link = $_GET["link"];         
      
      iduSQL("UPDATE multimediacontent SET title='$title', img='$img', link='$link', editor_id=$user[id] WHERE id=$id");
      $scicommmultimedia = getUniqueMultimedia($id);  
    }    
  }
 
  require_once("components/header.php");
  require_once("views/scicomm_multimedia_view.php");
  require_once("components/footer.php");

?>