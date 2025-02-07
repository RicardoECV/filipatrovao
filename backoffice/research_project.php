<?php

  $header_footer = true;

  require_once("../requires.php");
  $pagina_backoffice = "research";
  
  $user = checkLogin();  
  
  if(!empty($_GET["id"])) {
    $id = $_GET["id"];    
    $project = getUniqueProject($id);

    $form_2 = !empty($_GET["title"]) && !empty($_GET["title_logo"]); 
    
    if($form_2) {
      $title = $_GET["title"];     
      $img = $_GET["img"];         
      $text = $_GET["text"];         
      $title_logo = $_GET["title_logo"];         
      
      iduSQL("UPDATE projects SET title='$title', img='$img', title_logo='$title_logo' , text='$text', editor_id=$user[id] WHERE id=$id");
      $project = getUniqueProject($id);
    }    
  }
 
  require_once("components/header.php");
  require_once("views/research_project_view.php");
  require_once("components/footer.php");

?>