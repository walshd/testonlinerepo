<?php
  
  $add = function($a, $b) {
      return $a + $b;
  };
  
  $sub = function($a, $b) {
      return $a - $b;
  };
  
  function math($a, $op, $b) {
      return $op($a, $b);
  }
  
  print(math(4, $add, 12) . "\n");
  print(math(4, $sub, 12) . "\n");