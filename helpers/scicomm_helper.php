<?php

  function getSciComm() {
    $result = selectSQLUnique("SELECT * FROM scicomm");
    return $result;
  }

?>
