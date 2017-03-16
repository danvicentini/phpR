<?php
// poorman.php

echo "<form action='r_exemple.php' method='get'>";
echo "Number values to generate: <input type='text' name='N' />";
echo "<input type='submit' />";
echo "</form>";

if(isset($_GET['N']))
{
  $N = $_GET['N'];

  // execute R script from shell Rscript C:/wamp/www/magicProj/script1.R $N
  // this will save a plot at temp.png to the filesystem
  #echo "Rscript C:/wamp/www/magicProj/script1.R $N";
  #var_dump(shell_exec(" Rscript C:/wamp/www/magicProj/script1.R $N "));
  #var_dump(exec(" rscript script1.R $N "));
  //$command = " rscript /wamp/www/magicProj/script1.R $N ";
  $command = " .\R\R-3.3.3\bin\Rscript script1.R $N ";
  exec(" $command ", $output);
  //var_dump($output);
  //error_reporting(E_ALL);

  /* Add redirection so we can get stderr. */
  /*$handle = popen( " $command ", 'r');
  echo "'$handle'; " . gettype($handle) . "\n";
  $read = fread($handle, 2096);
  echo $read;
  pclose($handle);
  var_dump($output);*/
  // return image tag
  $nocache = rand();
  echo("<img src='temp.png?$nocache' />");
}
?>