<?php
function dd($value) {
     echo "<pre>";
     var_dump($value);
     echo "</pre>";
}

function checkCurrent($url) {
  return $_SERVER["REQUEST_URI"] === $url ?  'bg-gray-900 text-white' : 'text-gray-300';
}
