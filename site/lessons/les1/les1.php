<?php

namespace gb_php_ls\site\lessons\les1;

class les1
{
    function pochemuchka()
    {
////////////////////////////////////////////////////////////////////////////////
//Почемучка
        $a = 5;
        $b = '05';
        var_dump($a == $b); echo "Почему true?<br>";
        echo "потому что если операнды имеют разные типы данных, PHP попытается преобразовать их перед сравнением к одному типу";
        echo '<br>';
        echo "(int)\$a = ".(int)$a;
        echo '<br>';
        echo "(int)\$b = ".(int)$b;
        echo '<br>';
        var_dump((int)'012345'); echo ' Почему 12345?<br>';
        echo ' - в числовом варианте впереди не может быть нуля..<br>';
        var_dump((float)123.0 === (int)123.0); echo " Почему false?<br>" ;
        echo ' - идет сравнение по типам данных и по значениям, в данном случае типы данных не совпадают<br>';
        var_dump((int)0 === (int)'hello, world'); echo " Почему true?<br>";
        echo '<br>PHP не может преобразовать «первый» или «последний» в число, поэтому он просто преобразует его в ноль <br>';
////////////////////////////////////////////////////////////////////////////////
//Размышлялка
        echo '<h4>небольшая размышлялка</h4> <br>';
        echo  'Массив (в некоторых языках программирования также таблица, ряд, матрица, вектор) — структура данных, хранящая набор значений (элементов массива), идентифицируемых по индексу или набору индексов, принимающих целые (или приводимые к целым) значения из некоторого заданного непрерывного диапазона.<br>';
        echo 'Следовательно, раз мы к переменной типа String можем обратиться с индексом (возможно не так выразился, я про это: str[0]), значит, опираясь на определение массива, мы можем назвать строку массивом :)<br>';
        echo 'если рассуждать, если строка это массив символов.. то... <br>';
        $a = ['a','b','c'];
        $b = 'abc';
        echo "
        \$a = ['a','b','c'];<br>
        \$b = 'abc';<br>
    ";
        echo "(int)\$a = ".(int)$a . ' А раз это массив, то я могу обратиться к элементу массива $a[1] = '.$a[1] . ' = \'b\' ';                                                                                             echo '<br>';
        echo "(int)\$b = ".(int)$b . ' и тут я могу обратиться к элементу массива $b[1] = '.$b[1] . ' = \'b\' ';                                      echo '<br>';
        var_dump($a == $b); echo ' \$a == \$b HO <br> $a[i] == $b[i] ';
        echo ' i=0 a = ';var_dump($a[0] == $b[0]);
        echo ' i=1 b = ';var_dump($a[1] == $b[1]);
        echo ' i=2 c = ';var_dump($a[2] == $b[2]);
        echo '<br>';
////////////////////////////////////////////////////////////////////////////////
// Смена местами значений
        echo "<h4>Смена местами значений</h4>";
        $a = 1;
        $b = 2;
        echo '<br>>------------------------------<<br>';
        echo "\$a = ".$a;
        echo '<br>';
        echo "\$b = ".$b;
        echo '<br>';
        echo '<br>';
        echo '<br>';

        $b -= $a = ($b = $a + $b) - $a;
        /*
        $b = $a + $b;
        $a = $b - $a;
        $b = $b - $a;
        */
        echo "\$a = ".$a;
        echo '<br>';
        echo "\$b = ".$b;
        echo '<br>';
        echo '>------------------------------<';
        echo '<br>';


        $g = [123,'qwe'];
        print_r($g);
        echo gettype($g[0]);
        echo "<br>";
        echo gettype($g[1]);
        echo "<br>";


        $h="";
        if ($h) {echo "true";}else{echo "false";}

    }

}