<form><a class="btn" href="/schisty/index.html">Back</a></form>
<?php

// Д/з - установить XAMPP/WAMPP 

$A="me";
$B="me";
$C=$A+$B;
echo $C;
echo '<br>';

$D=$A.$B;
echo $D;

$E=5; 
$F=10;
echo '<br>';

if($E/$F>1 && $E+$F<10){echo "bap";}

elseif($E/$F<1 && $E+$F<10){echo "bap";}


else{echo "boop";}
echo '<br>';
//10.2 x 15 x 1
//25.4 x 38.1 x 2.54 

/*
switch($G){
    case 0:
        //ayy
        break;
    case 4:
        //lmao
        break;
    default:
        //whoop whoop
        break; 
}*/

for($i=0;$i<12;$i++){
    echo $i.'<br>';
}
echo "When done: ".$i;
echo '<br>';

// preduslovie
while($i>0){
    $i-=2;
    echo $i.'<br>';}
    

// postuslovie
do{
    $i+=3;
    echo $i.'<br>' ;
}while($i<10);

/*
$lang = array("ru", "ee", "en", "fr", "sp");
// for processing arrays
foreach($lang as $arrKey => $arrValue){
    echo 'element number '.$arrKey.' has a value '.$arrValue.'<br>';
}*/

$lang = array();
$lang['et']='estonian';
$lang['ru']='russian';
$lang['en']='english';
$lang['fr']='french';
$lang['sp']='spanish';
/*
foreach($lang as $aKey => $aValue){
    echo 'element with key '.$aKey.' has a value '.$aValue.'<br>';
}*/
if(isset($_GET['ln'])){
echo $lang[$_GET['ln']];
}
else{
    echo $lang['et'];
}





?>

