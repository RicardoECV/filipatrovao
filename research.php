<?php

  require_once("requires.php"); 
  $actual_page = "research";
  $home_page = getHomePage();

  $research_page = getResearch();
  $expertise = getExpertise();
  $publications = getPublications();
  $projects = getProjects();

  require_once("components/header.php");
  require_once("views/research_view.php");
  require_once("components/footer.php");

?>