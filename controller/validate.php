<?php
function check_empty($value)
{
   if (empty(trim($value)))  return 1;
   else return 0;
}
