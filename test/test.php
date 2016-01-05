<?php
include '../src/Stringler.php';

$stringler = new Stringler("Iamamonkey");
if($stringler->endsWith("monkey")) {
  echo 'Yes I am!';
}
else {
  echo 'Why not? :(';
}

if($stringler->startsWith("Iam")) {
  echo 'Monkey!';
}
else {
  echo 'Wait what?';
}

if($stringler->contains("ama")) {
  echo 'Ask me anything!';
}
else {
  echo 'Or don\'t';
}

if($stringler->regex("/\w+/")) {
	echo 'It is a word!';
}
else {
	echo 'It is not a word!';
}
?>
