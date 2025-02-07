<?php 

  function getActivities() {
    $result = selectSQL("SELECT * FROM activities");
    return $result;
  }

  function getUniqueActivitie($id) {
    $result = selectSQLUnique("SELECT * FROM activities WHERE id=$id");
    return $result;
  }

?>