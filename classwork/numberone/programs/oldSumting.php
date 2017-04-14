<a class="btn" href="/schisty/index.html">Back</a>
<?php
// 1

// the first way of doing it


//mkdir("numberone");
//mkdir("numberone/sounds");
//mkdir("numberone/pictures");
//mkdir("numberone/documents");
//mkdir("numberone/programs");

// the other way of doing it

$dirs=Array("numberone", "numberone/programs", "numberone/documents", "numberone/pictures", "numberone/sounds");

foreach($dirs as $key => $path){
     mkdir($path);}

// 2

// normal way

//$myFile=fopen("numberone/index.txt","w+");
//fwrite($myFile, "numberone - the best folder in the world \r\n sounds - pretty self explanatory tbh \r\n pictures - are you getting the picture yet hahahaha \r\n documents - now this is a folder for something els- just kidding it's in the name \r\n programs - no i'm serious it's in the name");
//fclose($myFile);

// array trash

$comments=Array("the best folder in the world", "pretty self explanatory tbh", "now this is a folder for something els- just kidding it's in the name", "are you getting the picture yet hahahaha", "no i'm serious it's in the name");

foreach($dirs as $key => $value){
    $myFile=fopen("numberone/index.txt","a+");
    fwrite($myFile, $dirs[$key]." - ".$comments[$key]."\r\n");
}
fclose($myFile);

// 3

for($i = 1; $i <= 12; $i++){
    $newFileName=($i<10 ? "0" : "").$i.".txt";  // this is just a way to shorten the ifelse statement, everything before the question mark is a condition, after that is the action to be done if the statement is true, and after the colon is the action to do if it isn't, thus if(){}else{}
    $newFile=fopen("numberone/documents/".$newFileName, "w+");
    $newText=date("F", mktime(0,0,0,$i)); // mktime([hours],[minutes],[seconds],[months],[days],[years])
    fwrite($newFile, $newText);
    fclose($newFile);}

// 4

 rename("sumting.php", "numberone/programs/oldSumting.php")

// copy("sumting.php", "numberone/programs/oldSumting.php");
// unlink("sumting.php");

// require("delete.php"); // a separate file that moves the script, though it is cheating
?>

