<?php 

  function getSkills() {
    $result = selectSQL("SELECT * FROM skills");
    return $result;
  }

  function getUniqueSkill($id) {
    $result = selectSQLUnique("SELECT * FROM skills WHERE id=$id");
    return $result;
  }

?>