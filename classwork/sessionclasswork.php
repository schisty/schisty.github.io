<?php
session_start();
?>
<html>
<meta charset="utf-8"/>

    
    <body>

        <form><a class="btn" href="/schisty/index.html">Back</a></form>
<form action="" method="GET">
GET    <input type="text" name="q"/>
    <input type="submit" value="submit" />
        </form>    
<?php // GET method
if(isset($_GET['q'])){
    if ($_GET['q'] == 'help'){
        echo "<p> You've searched for <i>".$_GET['q'].'.</i></p>';
        echo 'Nothing can help you now.';
        
    }
        if ($_GET['q'] == 'jeff'){
        echo "<p> You've searched for <i>".$_GET['q'].'.</i></p>';
        echo 'my name jeff.';
        
    }
    else{
    echo "<p> You've searched for <i>".$_GET['q'].'</i></p>';
    }
}        
?>
        
<form action="" method="POST">
POST    <input type="text" name="q"/>
    <input type="submit" value="submit" />
        </form>
<?php  // POST method 
if(isset($_POST['q'])){
    echo '<p>Stealthly sent out ';
    echo '<b><i>'.$_POST['q'].'</p></b></i>';
}
?>
        
<form method="POST" action="">
Session    <input type="text" name="frSession" />
    <input type="submit" value="Save to the session" />
    <input type="submit" value="clear session"/>
    <input type="hidden" name="delSession" value="1" />
        </form>

<?php // Session stuff: delete from and save to the session
if(isset($_POST['delSession'])){
    if($_POST['delSession']=="1"){
        unset($_SESSION['svoe']);
    }
        
}
if(isset($_POST['frSession'])){
    if($_POST['frSession']==""){
        unset($_SESSION['svoe']);}
    else{
        $_SESSION['svoe']=$_POST['frSession'];}
}        
if(isset($_SESSION['svoe'])){
    echo '<p>Stored in session: <i>'.$_SESSION['svoe'].'</i></p>';
}
?>

        
</body>

</html>