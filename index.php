
<?php

$file = "100k.txt";

// open file in read mode
$handle = fopen($file, 'r');

// read the first 1000 bytes
echo fread($handle, 1000);

//read a single line 
//echo fgets(handle);
//echo fgets(handle);

//read a single character
echo fgetc($handle);

// write to start of file and replace first line of existing content r+
// a+ places pointer at the end of file
//fwrite($handle, "\nI just wrote this line");


//close file
fclose($handle);

//delete a file
unlink($file);















/*
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
mkdir("new directory");*/




?>