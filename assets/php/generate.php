<?php

namespace authentification;


class Generate
{
  function random($var)
  {
    $string = "";
    $chaine = "a0b1c2d3e4f5g6h7i8j9klmnopqrstuvwxy123456789";
    srand((float)microtime() * 1000000);
    for ($i = 0; $i < $var; $i++) {
      $string .= $chaine[rand() % strlen($chaine)];
    }
    return $string;
  }
}
