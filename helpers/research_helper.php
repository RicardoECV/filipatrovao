<?php

  function getResearch() {
    $result = selectSQLUnique("SELECT * FROM research");
    return $result;
  }

?>
