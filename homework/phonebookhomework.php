    <div><a class="btn-linkback" href="/schisty/index.html">Back</a></div>

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
$ljudi[0] ['ringtone']='TaaaaaShaaaa.mp3';
$ljudi[0] ['workplace']='TPT';
$ljudi[0] ['callfrom']='6:00';
$ljudi[0] ['callto']='18:00';
$ljudi[0] ['address']='Pushkina 3, 12';
$ljudi[0] ['city']='Londongrad';
$ljudi[0] ['favoritefood']='shaurma';
$ljudi[0] ['rajon']='Lasnamae';
$ljudi[0] ['sport']='Gym';
$ljudi[0] ['favouritedrink']='vodka';
$ljudi[0] ['project']='sportivnij gorod';



$ljudi[1] ['number']='+372 322 337 1';
$ljudi[1] ['name']='Petr Vasechin';
$ljudi[1] ['birthday']='1977-02-23';
$ljudi[1] ['photo']='mosjka.png';
$ljudi[1] ['ringtone']='bombom.mp3';
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
$ljudi[2] ['photo']='sas.png';
$ljudi[2] ['ringtone']='reklaaaama.mp3';
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
$ljudi[3] ['ringtone']='drift.mp3';
$ljudi[3] ['workplace']='BMW';
$ljudi[3] ['callfrom']='8:00';
$ljudi[3] ['callto']='20:00';
$ljudi[3] ['address']='Dont know';
$ljudi[3] ['city']='Lasnagorsk';
$ljudi[3] ['favoritefood']='frenchfries';
$ljudi[3] ['rajon']='Best';
$ljudi[3] ['sport']='no';
$ljudi[3] ['favouritedrink']='whisky';
$ljudi[3] ['project']='clean city';

echo 'ID / Имя, Фамилия / Номер телефона / Дата рождения <br>';
foreach($ljudi as $porjadok => $zapis){ 
echo ($porjadok+1)." | ".$zapis['name']." | ".$zapis['number']." | ".$zapis['birthday'].'<br>';
}


?>
