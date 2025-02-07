<?php 

  function getPersonal() {
    $result = selectSQL("SELECT * FROM personal_interests");
    return $result;
  }

  function getUniquePersonal($id) {
    $result = selectSQLUnique("SELECT * FROM personal_interests WHERE id=$id");
    return $result;
  }

?>