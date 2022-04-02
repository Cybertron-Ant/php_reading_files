
<?php

$file = "100k.txt";

if (file_exists($file)) {
  
  //read file
  echo readfile($file) . "<br />";
  
  //copy file
  copy($file, "clone.txt");
  
  //absolute path of file
  echo realpath($file) . "<br />";
  
  //get size of file
  echo filesize($file) . "<br />";
  
  //rename a file to second argument
  //rename($file, "renamed.txt");
  
} else {
  
  echo "File does not exist";
  
}

//make a new folder
mkdir("new directory");




?>