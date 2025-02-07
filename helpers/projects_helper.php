<?php 

  function getProjects() {
    $result = selectSQL("SELECT * FROM projects");
    return $result;
  }

  function getUniqueProject($id) {
    $result = selectSQLUnique("SELECT * FROM projects WHERE id=$id");
    return $result;
  }

?>