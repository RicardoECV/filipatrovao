<?php

  require_once("requires.php");
  $actual_page = "home";  
  $home_page = getHomePage();
  
  $contacts = getContacts();

  require_once("components/header.php");
  require_once("views/index_view.php");
  require_once("components/footer.php");

?>