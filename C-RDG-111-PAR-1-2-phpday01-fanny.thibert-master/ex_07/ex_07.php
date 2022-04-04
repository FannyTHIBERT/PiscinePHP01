<?php
function get_angry_dog($nbr)
{
  $str = "";
  for ($i=0 ; $i<$nbr; $i++)
   {
     $str = $str . "woof";
   }
  return $str . PHP_EOL;
}
