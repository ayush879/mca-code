<?php
$myfile = fopen("newfile.txt", "w") or die("Unable to open file!");
$txt = "PES Institute of Technology ";
fwrite($myfile, $txt);
$txt = "is now PES University.";
fwrite($myfile, $txt);
print "First File Written Successfully";
print "<br>";
fclose($myfile);
?> 

<?php
//Read a File
$my_file = 'file.txt';
$handle = fopen($my_file, 'a+');
$txt = "Hello !!! Welcome From files of PHP....";
//fwrite($handle,$txt);
$data = fread($handle,filesize($my_file));
print $data."<br>";
$txt = "Do you want to explore ?\n";
$data = fwrite($handle,$txt);
fclose($handle);
print "Second File Written Successfully";

?> 