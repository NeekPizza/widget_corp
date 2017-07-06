<?php
session_start();

function message() {
  if(isset($_SESSION["message"])) {
    $output = "<div class=\"message\">";
    $output .= htmlentities($_SESSION["message"]);
    $output .= "</div>";
    return $output;
  }
}

function errors() {
  if(isset($_SESSION["errors"])) {
   $errors = $_SESSION["errors"];

    //clear message after use
    $_SESSION["errors"] = null;

    return $errors;
  }
}
