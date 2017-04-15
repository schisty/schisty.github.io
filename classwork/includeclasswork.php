<?php
session_start();
?>

<html>
<head>
<script></script>
    </head>

<body>
    <div><a class="btn-linkback" href="/schisty/index.html">Back</a></div>
<form method="GET" action="">
    <select name="page" onchange="submit()">
    <option value="start">Starter</option>
    <option value="projects" <?php if(isset($_GET['page'])){if($_GET['page']=="projects"){echo 'selected="selected"';}} ?>>Projects</option>
    <option value="contacts" <?php if(isset($_GET['page'])){if($_GET['page']=="contacts"){echo 'selected="selected"';}} ?>>Contacts</option>
        </select>
<input type="submit" value="=>"/>
    </form>
<?php 
if(isset($_GET['page'])){
    switch($_GET['page']){
        case 'start':
        include "home.php"; 
            break;
        case 'projects':
        include "testindex.html";
            break;
        case 'contacts':
        include "contacts.php";
            break;
        default:
        include "home.php";  
            break;
        
    }
}    
?>
    </body>
</html>
