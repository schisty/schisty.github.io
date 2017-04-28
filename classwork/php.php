<!--

PHP version






8.  Дана длина ребра куба. Найти площадь грани, площадь полной поверхности и объем этого куба.
28. Составить программу вычисления объема цилиндра и конуса, которые имеют одинаковую высоту Н и одинаковый радиус основания R.

8. 
Ребро = а
а^2 = грань
грань*6 = полная поверхность
ребро^3 = объём

28.
Конус: 1/3 * Pi * R^2 * H
Цилиндр: Pi * R^2 * H
-->

<head>
<meta charset="Unicode">
</head>

<body>
    <form name="ex8F">
    <h3>8. Дана длина ребра куба. Найти площадь грани, площадь полной поверхности и объем этого куба.</h2>
        Длинна ребра (в cm): <input type="entry" name="ex8E" style="width:45px;"><input type="submit" value="Расчитать"><br>
        <p id="ex8ERA"/>
        <?php
        if(isset($_GET["ex8E"])){
        $a = $_GET["ex8E"];
        $A = pow($a, 2);
        $S = $A * 6;
        $V = pow($a, 3);
        echo "Площадь грани: ".$A."cm^2<br>";
        echo "Полная площадь: ".$S."cm^2<br>";
        echo "Объём: ".$V."cm^3<br>";}
        ?></p>
    </form>


    <form name="ex28F">
    <h3>28. Составить программу вычисления объема цилиндра и конуса, которые имеют одинаковую высоту Н и одинаковый радиус основания R.</h3>
    Высота (в cm): <input type="entry" name="ex28E1" style="width:45px;"><br>
    Радиус основания (в cm): <input type="entry" name="ex28E2" style="width:45px;"><input type="submit" value="Расчитать"/><br>

        <p id="ex28ER1"><?php
            if(isset($_GET["ex28E1"])&& isset($_GET["ex28E2"])){
            $H = $_GET["ex28E1"];
            $R = $_GET["ex28E2"];
            $ConeR = 1/3 * M_PI * pow($R,2) * $H;
            $CilR = M_PI * pow($R,2) * $H;

            echo "Объём цилиндра: ".$CilR."cm^3<br>";
            echo "Объём конуса: ".$ConeR."cm^3";}
            ?>
        </p>
    </form>
</body>