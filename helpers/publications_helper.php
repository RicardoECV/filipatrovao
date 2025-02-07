<?php 

  function getPublications() {
    $result = selectSQL("SELECT * FROM publications");
    return $result;
  }

  function getUniquePublication($id) {
    $result = selectSQLUnique("SELECT * FROM publications WHERE id=$id");
    return $result;
  }


?>