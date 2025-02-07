<?php

  function getAboutMe() {
    $result = selectSQLUnique("SELECT * FROM about_me");
    return $result;
  }

?>
