<?php
  require_once("../building_webpages/included_functions.php");
?>

<!DOCTYPE html>
<head>
  <meta charset="utf-8">
  <title>Validation Errors</title>
</head>
<body>
  <?php

    $errors = array();

    // * presence
    $value = trim("");
    if (!isset($value) || $value === "") {
      $errors['value'] = "Value can't be blank";
    }

    // * string length
    // minimum length
    $value = "abcde";
    $min = 3;
    if (strlen($value) < $min) {
      echo "Validation failed. Too short.<br />";
    }

    // max length

    $max = 6;
    if (strlen($value) > $max) {
      echo "Validation failed. Too long.<br />";
    }

    // * type

    $value = "1";
    if (!is_string($value)) {
      echo "Validation failed. Must be string.<br />";
    }

    // * includion in a set

    $value = "3";
    $set = array("1","2","3","4");
    if (!in_array($value, $set)) {
      echo "Validation failed. Must be in set.<br />";
    }

    // * uniqueness
    // database driven


    // * format
    // use a regex on a string using preg_match($regex, $subject)

    // if (preg_match("/PHP/", "PHP is fun.")) {
    //   echo "A match was found.";
    // } else {
    //   echo "A match was not found.";
    // }

    $value = "alex@email.com";
    if (!preg_match("/@/", "$value")) {
      echo "Validation failed. Must contain an @.<br />";
    }

    // OR, for faster result, use strpos to see if string contains an @
    // (will return an int if found in string which is a truthy object.
    // Using === ensures that a 0 int (interpreted as false by PHP) will
    // not be evaluated as false, must exactly match)
    if (strpos($value, "@") === false) {
      echo "Validation failed. Must contain an @.<br />";
    }

    // print_r($errors);
  ?>

  <?php echo form_errors($errors); ?>
  <?php
    if(array_key_exists("name", $errors)) {
      echo "<span class=\"error-field\">&lt;&lt;</span>";
    };
  ?>
</body>
