<?php

  $header_footer = false;

  require_once("../requires.php");
  $pagina_backoffice = "index";

  $form = !empty($_POST["login"]) && !empty($_POST["pw"]);

  if($form) {
    $user_login = htmlspecialchars($_POST["login"]);
    if(!empty(user_login($user_login, $_POST["pw"]))) {
      exit();
    }
  }

  require_once("components/header.php");
  require_once("views/index_view.php");
  require_once("components/footer.php");

?>