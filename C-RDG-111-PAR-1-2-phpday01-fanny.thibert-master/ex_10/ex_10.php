<?php
function my_get_args(...$v)
{
 $input = array();
 foreach($v as $value)
   {
     array_push($input, $value);
   }
  return $input;
}
