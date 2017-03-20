<?php
  class Translate {

    function translateE($input){

      $word_array = explode(' ',str_replace("'", '', $input));
      $input_array = str_split($input);
      $output_array = array ();

      foreach($word_array as $word){
        if (substr($word,0,1) != "s"){
          foreach ($input_array as $letter) {
            if (($letter == "e") || ($letter == "E")) {
              $letter = "3";
              array_push($output_array, $letter);
            } elseif (($letter == "o") || ($letter == "O")){
              $letter = "0";
              array_push($output_array, $letter);
            } elseif ($letter == "I") {
              $letter = "1";
              array_push($output_array, $letter);
            } elseif ($letter == "s") {
              $letter = "z";
              array_push($output_array, $letter);
            } else {
              array_push($output_array, $letter);
            }
          }
          return implode("", $output_array);
        }
      }
    }
  }
  ?>
