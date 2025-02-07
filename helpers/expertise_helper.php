<?php 

  function getExpertise() {
    $result = selectSQL("SELECT * FROM expertise");
    return $result;
  }

  function getUniqueExpertise($id) {
    $result = selectSQLUnique("SELECT * FROM expertise WHERE id=$id");
    return $result;
  }

?>