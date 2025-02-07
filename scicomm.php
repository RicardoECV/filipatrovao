<?php

  require_once("requires.php");
  $actual_page = "scicomm";
  $home_page = getHomePage();

  $scicomm_page = getSciComm();
  $scicommcards = getSciCommCards();
  $activities = getActivities();
  $multimediacontent = getMultimediaContent();

  require_once("components/header.php");
  require_once("views/scicomm_view.php");
  require_once("components/footer.php");

?>