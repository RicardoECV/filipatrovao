<?php

  function getSciCommCards() {
    $result = selectSQL("SELECT * FROM scicomm_cards");
    return $result;
  }
  
  function getUniqueSciCommCard($id) {
    $result = selectSQLUnique("SELECT * FROM scicomm_cards WHERE id=$id");
    return $result;
  }

?>
