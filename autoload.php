<?php

spl_autoload_register(function($classes){
  $class = explode('\\',$classes);
  require end($class).".php";
});