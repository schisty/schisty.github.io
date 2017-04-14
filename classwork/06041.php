<a class="btn" href="/schisty/index.html">Back</a>
<form action="" method="POST" >
Имя файла:<input type="text" name="fileName" />
<input type="submit" value="Создать" />
</form>
<?php
if(isset($_POST['fileName'])){
	$resFileCreate=fopen('Files/'.$_POST['fileName'],'w+');
}

if(isset($_POST['textToSave']) && isset($_POST['fileToSave'])){
	if(empty($_POST['textToSave']) && !empty ($_POST['fileToSave'])){
		$fileR=fopen('Files/'.$_POST['fileToSave'],'r+');
		$fileText=fread($fileR, filesize('Files/'.$_POST['fileToSave']));
		fclose($fileR);
	}
}

?>
<form action="" method="POST">
<select name="fileToSave" onchange="submit()">
<?php
$dir=opendir("Files/");
while(false!==($oneFile=readdir($dir))){//Комманда readdir производит чтение имени одного файла в папке 
	if($oneFile!='.' && $oneFile!='..'){
	echo '<option ';
	if($oneFile==$_POST['fileToSave']){
        echo ' selected= "selected" ';
	   }
	echo 'value="'.$oneFile.'">'.$oneFile.'</option>';
	}
}
?>
</select>
<br>
<textarea name="textToSave" cols="80" rows="20" >
<?php if(!empty($fileText)){echo $fileText;}?> 
</textarea><br>
<input type="submit" value ="Сохранить текст" />
</form>