<form><a class="btn" href="/schisty/index.html">Back</a></form>
<?php 
$menuList=array();
$menuList['home']['ru']="Начальная";
$menuList['home']['et']="Pealeht";
$menuList['home']['en']="Home";

$menuList['about']['ru']="О нас";
$menuList['about']['et']="Meist";
$menuList['about']['en']="About";


$menuList['projects']['ru']="Проекты";
$menuList['projects']['et']="Projektid";
$menuList['projects']['en']="Projects";

$menuList['service']['ru']="Услуги";
$menuList['service']['et']="Teenused";
$menuList['service']['en']="Service";

$menuList['contacts']['ru']="Контакты";
$menuList['contacts']['et']="Kontaktid";
$menuList['contacts']['en']="Contacts";


?>

<a href="?ln=et&page=home">Eesti</a><br>
<a href="?ln=ru&page=home">Русский</a><br>
<a href="?ln=en&page=home">English</a><br>
<form action="" method="GET">
<input type="hidden" name="ln" value="<?php echo $_GET['ln']?>"/>
    <select name="page" onchange="submit()">
        <?php
    if(!isset($_GET['ln'])){$_GET['ln']="en"; $_GET['page']="home";}
    if(isset($_GET['ln'])){
        foreach($menuList as $sectionKey => $sectionInfo){
        echo '<option value="'.$sectionKey.'"'; if(isset($_GET['page'])){if($_GET['page']==$sectionKey){echo 'selected="selected"';}}
            echo '>'.$sectionInfo[$_GET['ln']].'</option>';
        }
    }
       
?>
        </select>
</form>
<?php
if(isset($_GET['page'])){
    include "pages/page_".$_GET['page']."_".$_GET['ln'].".php";}
        ?>