<?php 

  function getMultimediaContent() {
    $result = selectSQL("SELECT * FROM multimediacontent");
    return $result;
  }

  function getUniqueMultimedia($id) {
    $result = selectSQLUnique("SELECT * FROM multimediacontent WHERE id=$id");
    return $result;
  }

?>