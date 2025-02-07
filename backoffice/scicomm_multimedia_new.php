<?php

  $header_footer = true;

  require_once("../requires.php");
  $pagina_backoffice = "scicomm";
  
  $user = checkLogin(); 

  $form = !empty($_GET["title"]) && !empty($_GET["img"]) && !empty($_GET["link"]); 
  
  if($form) {
    $title = $_GET["title"];
    $img = $_GET["img"];
    $link = $_GET["link"];    
 
    iduSQL("INSERT INTO multimediacontent (title,link,img,editor_id,creator_id) VALUES ('$title','$link','$img','$user[id]','$user[id]')");
    header("Location: scicomm.php");    
  }    
 
  require_once("components/header.php");
  require_once("views/scicomm_multimedia_new_view.php");
  require_once("components/footer.php");

?>