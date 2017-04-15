<div><a class="btn" href="https://www.schisty.github.io/">Back</a></div> 

<?php
$ljudi=array(); //Создали общий массив
$ljudi[0]=array(); //создаём запись для первого человека
$ljudi[1]=array(); //создаём запись для второго человека
$ljudi[2]=array(); //создаём запись для третьего человека
$ljudi[3]=array(); //создаём запись для четвёртого человека

$ljudi[0] ['number']='+372 228 148 8';
$ljudi[0] ['name']='Kama Bullet';
$ljudi[0] ['birthday']='1980-01-01';
$ljudi[0] ['photo']='Shpagat.png';
$ljudi[0] ['ringtone']='cantsee.mp3';
$ljudi[0] ['workplace']='TPT';
$ljudi[0] ['callfrom']='6:00';
$ljudi[0] ['callto']='18:00';
$ljudi[0] ['address']='Pushkina 3, 12';
$ljudi[0] ['city']='Londongrad';
$ljudi[0] ['favoritefood']='leftovers';
$ljudi[0] ['rajon']='Lasnamae';
$ljudi[0] ['sport']='Gym';
$ljudi[0] ['favouritedrink']='vodka';
$ljudi[0] ['project']='sportivnij gorod';



$ljudi[1] ['number']='+372 322 337 1';
$ljudi[1] ['name']='Petr Vasechin';
$ljudi[1] ['birthday']='1977-02-23';
$ljudi[1] ['photo']='mosjka.png';
$ljudi[1] ['ringtone']='hisnameis.mp3';
$ljudi[1] ['workplace']='TPT';
$ljudi[1] ['callfrom']='9:00';
$ljudi[1] ['callto']='18:00';
$ljudi[1] ['address']='Kolotuskina 3, 12';
$ljudi[1] ['city']='Lasnagorsk';
$ljudi[1] ['favoritefood']='shampinjoni pizza';
$ljudi[1] ['rajon']='Mustamae';
$ljudi[1] ['sport']='Borjba';
$ljudi[1] ['favouritedrink']='whisky';
$ljudi[1] ['project']='clean city';



$ljudi[2] ['number']='+8 800 555 35 35';
$ljudi[2] ['name']='Anna Fro';
$ljudi[2] ['birthday']='1980-08-22';
$ljudi[2] ['photo']='ayy.png';
$ljudi[2] ['ringtone']='jeff.mp3';
$ljudi[2] ['workplace']='Swedbank';
$ljudi[2] ['callfrom']='12:00';
$ljudi[2] ['callto']='19:00';
$ljudi[2] ['address']='Loitsu 1, 127';
$ljudi[2] ['city']='Petrograd';
$ljudi[2] ['favoritefood']='pizza';
$ljudi[2] ['rajon']='Starij';
$ljudi[2] ['sport']='Basejumping';
$ljudi[2] ['favouritedrink']='whisky';
$ljudi[2] ['project']='best robot';



$ljudi[3] ['number']='+372 325 357 1';
$ljudi[3] ['name']='Vasya Pupkin';
$ljudi[3] ['birthday']='1999-09-29';
$ljudi[3] ['photo']='car.png';
$ljudi[3] ['ringtone']='realgoodboyhours.mp3';
$ljudi[3] ['workplace']='BMW Factory-type place';
$ljudi[3] ['callfrom']='8:00';
$ljudi[3] ['callto']='20:00';
$ljudi[3] ['address']='Dont know';
$ljudi[3] ['city']='Lasnagorsk';
$ljudi[3] ['favoritefood']='frenchfries';
$ljudi[3] ['rajon']='Best';
$ljudi[3] ['sport']='no';
$ljudi[3] ['favouritedrink']='whisky';
$ljudi[3] ['project']='clean city';

$ljudi[4] ['number']='+372 968 845 25';
$ljudi[4] ['name']='Jeff Kaplan';
$ljudi[4] ['birthday']='19XX-04-11';
$ljudi[4] ['photo']='mynamejeff.png';
$ljudi[4] ['ringtone']='MIAMOJEFF.mp3';
$ljudi[4] ['workplace']='Blizzard HQ';
$ljudi[4] ['callfrom']='8:00';
$ljudi[4] ['callto']='20:00';
$ljudi[4] ['address']='is a secret';
$ljudi[4] ['city']='CA, Los Angeles';
$ljudi[4] ['favoritefood']='memes';
$ljudi[4] ['rajon']='THEBESTTHEBESTTHEBE';
$ljudi[4] ['sport']='Hey guys its jeff from the overwatch team';
$ljudi[4] ['favouritedrink']='mccree main tears';
$ljudi[4] ['project']='Overwatch';

echo 'ID | Имя, Фамилия | Номер телефона | Дата рождения <br>';
foreach($ljudi as $porjadok => $zapis){ 
echo ($porjadok+1).' | '.'<a href="?persona='.$porjadok.'">'.$zapis['name']."</a> | ".$zapis['number']." | ".$zapis['birthday'].'<br>';}

if(isset($_GET['persona']) && !empty($ljudi[$_GET['persona']])){
    echo '<h2>'.$ljudi[$_GET['persona']]['name'].'</h2>';
    echo '<b>Phone number: </b><i>'.$ljudi[$_GET['persona']]['number'].'</i><br>';
    echo '<b>Birthdate: </b><i>'.$ljudi[$_GET['persona']]['birthday'].'</i><br>';
    echo '<b>Photo: </b><i>'.$ljudi[$_GET['persona']]['photo'].'</i><br>';
    echo '<b>Ringtone: </b><i>'.$ljudi[$_GET['persona']]['ringtone'].'</i><br>';
    echo '<b>Workplace: </b><i>'.$ljudi[$_GET['persona']]['workplace'].'</i><br>';
    echo '<b>Available from: </b><i>'.$ljudi[$_GET['persona']]['callfrom'].'</i><br>';
    echo '<b>Available to: </b><i>'.$ljudi[$_GET['persona']]['callto'].'</i><br>';
    echo '<b>Current Project: </b><i>'.$ljudi[$_GET['persona']]['project'].'</i><br>';
    echo '<b>City: </b><i>'.$ljudi[$_GET['persona']]['city'].'</i><br>';
    
}

/* Google these later
<table></table>
<tr></tr>
<td></td> */


?>

