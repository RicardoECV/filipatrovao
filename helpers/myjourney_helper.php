<?php

  function getMyJourneys() {
    $result = selectSQL("SELECT * FROM myjourney");
    return $result;
  }

  function getUniqueJourney($id) {
    $result = selectSQLUnique("SELECT * FROM myjourney WHERE id=$id");
    return $result;
  }


?>
