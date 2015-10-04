<?


   $string = "apikey|keeey||test|testtt";
   $xfields = array();
   $array2 = explode('||', $string);
   foreach($array2 as $str) {
       list($key, $value) = explode('|', $str);
       $xfields[$key] = $value;
   }


?>
