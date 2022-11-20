<?php

/*Constants cannot be changed once it is declared.

Class constants can be useful if you need to define some constant data within a class.

*/

class Goodbye {
  const LEAVING_MESSAGE = "Thank you for visiting W3Schools.com!";
}

echo Goodbye::LEAVING_MESSAGE;
?>