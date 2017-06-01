<html>
<head>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <meta charset="utf-8">
<script>  // скрипт для вывода сообщения
$(document).ready(function(){
    $("#regOK").click(function(){
        $("#container").hide();
    });
    $("#regSubmit").click(function(){
        $("#container").show();
    });
});
</script>
    
    
<!--    стили для не относящейся к заданию кнопке-->
<style> 
    a.btn-link {
    display:block;
/*    font-family: serif;*/
    background-color: black;
/*    border-radius: 5px; */
/*    box-shadow: 4px 4px 6px #2c2a2a;*/
    position: absolute;
    width: 180px;
    text-align: left;
    line-height: 54px;
    text-decoration: none;
    padding-left: 15px;
    font-size: 125%;
    right: 1px;
}

/* unvisited link */
a.btn-link:link, a.btn-link:visited {
    color: white;
    background-color: #2c2a2a;
    text-decoration: none;
} 

/* mouse over link */
a.btn-link:hover {
    color: white;
    background-color: #383535;
    text-decoration: none;
}
    </style>
    
    
    
</head>
<body>
    
    
    
<?php 
//print_r($_POST);
    if(!empty($_POST)){ // Различные проверки, вывод сообщения на экран
        echo '<a id="container" style="width:250px;height:75px;position:absolute;border:solid 1px;background-color:white;bottom:50%;right:39%;">
        <center id="container-text" style="text-align:center;padding:15px;">'; // сразу же создаётся поле для вывода сообщения
        
        
        if(!empty($_POST["newPass1"]) && !empty($_POST["newPass2"]) && $_POST["newPass1"]!==$_POST["newPass2"]){ // проверка, одинаковые-ли пароли
            echo "Passwords do not match!";
            echo '<p><input type="button" id="regOK" value="OK"></p>';

        }        
        elseif(empty($_POST["newPass1"]) && empty($_POST["newPass2"])){ // проверка, был ли введён пароль
            echo "No password entered!";
            echo '<p><input type="button" id="regOK" value="OK"></p>';

        }
        elseif(empty($_POST["newPass1"])){ // проверка, был ли введён пароль 
            echo "No password entered!";
            echo '<p><input type="button" id="regOK" value="OK"></p>';

        }
        elseif(empty($_POST["newPass2"])){ // проверка, был ли введён подтверждение пароля
            echo "No confirmation entered!";
            echo '<p><input type="button" id="regOK" value="OK"></p>';

        }elseif(empty($_POST["newName"])){ // проверка, было ли введено имя пользователя
            echo "No username entered!";
            echo '<p><input type="button" id="regOK" value="OK"></p>';

        }

        else{ // если все критерии подходят, записать в файл имя пользователя и md5 пароля, и вывести сообщение на экран
            $userFile = fopen("users.txt", "a+");
            fwrite($userFile, "\r\n".$_POST["newName"].":".md5($_POST["newPass1"])); 
            echo "Successfully registered";
            echo '<p><input type="button" id="regOK" value="OK"></p>';

        }
        echo '</center></a>';
    }
?>
        
    
    <!-- не относящаеся к заданию кнопка -->
    
    <center><a class="btn-link" href="/index.html">Back</a></center>

    <!-- форма для ввода данных -->
    
    <form name="addNew" action="" method="post">
    <table>
        <tr>
            <td>Username</td>
            <td><input type="text" name="newName"/></td>
        </tr>
        <tr>
            <td>Password</td>
            <td><input type="password" name="newPass1"/></td>
        </tr>
        <tr>
            <td>Repeat Password</td>
            <td><input type="password" name="newPass2"/></td>
        </tr>
        <tr>
            <td><td><input type="submit" value="Register" style="width:100%" id="regSubmit" action="popUp()"/></td></td>
        </tr>
        
        </table>
        
    </form>






    <!-- LOGIN -->

<?php    
//<form name="addNew" action="" method="post">
//    <table>
//        <tr>
//            <td>User Name</td>
//            <td><input type="text" name="userName"/></td>
//        </tr>
//        <tr>
//            <td>Password</td>
//            <td><input type="password" name="userPass"/></td>
//        </tr>
//        <tr>
//            <td><td><input type="submit" value="Login" style="width:100%"/></td></td>
//        </tr>
//        
//        </table>
//    </form>
?>
</body>
</html>