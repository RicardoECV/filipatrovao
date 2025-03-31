<?php

  require_once("requires.php");
  $actual_page = "aboutme";
  $home_page = getHomePage();

  $aboutme_page = getAboutMe();
  $skills = getSkills();
  $myjourneys = getMyJourneys();
  $personal = getPersonal();

  require_once("components/header.php");
  require_once("views/aboutme_view.php");
  require_once("components/footer.php");

?>