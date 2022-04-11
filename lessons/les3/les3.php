<?php

namespace lessons\les3;

class les3
{
    function pochemuchka()
    {
        ?>
        <p>С помощью цикла while вывести все числа в промежутке от 0 до 100, которые делятся на 3 без<br>
            остатка.
        </p>

        <?php
        $i = 0;
        while(100!=$i++){
            if ($i % 3 == 0) echo $i . " ";
        }
        ?>
        <hr>
        <P>
            С помощью цикла do…while написать функцию для вывода чисел от 0 до 10, чтобы результат<br>
            выглядел так:<br>
            0 – это ноль.<br>
            1 – нечётное число.<br>
            2 – чётное число.<br>
            3 – нечётное число.<br>
            …<br>
            10 – чётное число.<br>
        </P>
        <?php
        $i = 0;
        do {
            ($i) ?  $i++ : print( $i++ . " - это ноль, ");
            switch ($i % 2) {
                case 0:
                    echo $i . " - чётное число, ";
                    break;
                case 1:
                    echo $i . " - нечётное число, ";
                    break;
            }

        } while ($i != 10)
        ?>
        <hr>
        <p>Объявить массив, в котором в качестве ключей будут использоваться названия областей, а в<br>
            качестве значений – массивы с названиями городов из соответствующей области.<br>
            Вывести в цикле значения массива, чтобы результат был таким:<br>
            Московская область:<br>
            Москва, Зеленоград, Клин.<br>
            Ленинградская область:<br>
            Санкт-Петербург, Всеволожск, Павловск, Кронштадт.<br>
            Рязанская область…(названия городов можно найти на maps.yandex.ru)</p>

        <?php

        $arr1 = [
            'Московская область' => ['Москва', 'Зеленоград', 'Клин'],
            'Ленинградская область' => ['Санкт-Петербург', 'Всеволожск', 'Павловск', 'Кронштадт'],
            'Рязанская область' => ['Касимов', 'Кораблино', 'Новомичуринск', 'Рязань'],
            'Ярославская область' => ['Гаврилов-Ям', 'Данилов', 'Рыбинск', 'Ярославль']
        ];
        foreach ($arr1 as $key => $value) {
            echo $key . ":<br>";
            foreach ($value as $city) {
                echo $city . ", ";
            }
            echo "<br>";
        }
        ?>
        <hr>
        <p><?php $str = "Объявить массив, индексами которого являются буквы русского языка, а значениями –
            соответствующие латинские буквосочетания";
            echo $str;?> (‘а’=> ’a’, ‘б’ => ‘b’, ‘в’ => ‘v’, ‘г’ => ‘g’, …, ‘э’ => ‘e’,<br>
            ‘ю’ => ‘yu’, ‘я’ => ‘ya’).</p>
        <?php

        $this->trans($str,0);

        ?>

        <hr>
        <p><?=$str="Написать функцию, которая заменяет в строке пробелы на подчеркивания и возвращает видоизмененную строчку"?></p>
        <?php
/////////////////
        echo "<br>foreach<br>";
        $sr = preg_split("//u", $str, -1, PREG_SPLIT_NO_EMPTY);

        $str1 = '';
        foreach ($sr as $value){
            if ($value != ' '){
                $str1 .= $value;
            }else{
                $str1 .= '_';
            }
        }
        echo $str1 ."<br>";



/////////////////////
        echo "<br>do while<br>";

        echo $this->podcherk($str);

        ?>

        <hr>
        тут 6
        <hr>
        <p>*Вывести с помощью цикла for числа от 0 до 9, НЕ используя тело цикла.</p>
        <?php
        for ($i = 0; $i <= 9; print($i++))
            ?>
            <hr>
            <p>*Повторить третье задание, но вывести на экран только города, начинающиеся с буквы «К».</p>
            <?php

        foreach ($arr1 as $key => $value) {
            //echo $key . ":<br>";
            foreach ($value as $city) {
                $sr =  preg_split("//u", $city, -1, PREG_SPLIT_NO_EMPTY);
                if($sr[0] == 'К')
                    echo $city . ", ";
            }
            echo "<br>";
        }
        ?>
        <hr>
        <p>*Объединить две ранее написанные функции в одну, которая получает строку на русском
            языке, производит транслитерацию и замену пробелов на подчеркивания (аналогичная задача
            решается при конструировании url-адресов на основе названия статьи в блогах).
        </p>

        <?php

        echo $this->podcherk($str,1);

        ?>







        <?php
    }

    public function trans($str , $z = 0){

        $arr = [
            'A' => ['А', 'а'],
            'B' => ['Б', 'б'],
            'V' => ['В', 'в'],
            'G' => ['Г', 'г'],
            'D' => ['Д', 'д'],
            'E' => ['Е', 'е'],
            'YO' => ['Ё', 'ё'],
            'ZH' => ['Ж', 'ж'],
            'Z' => ['З', 'з'],
            'I' => ['И', 'и'],
            'J' => ['Й', 'й'],
            'K' => ['К', 'к'],
            'L' => ['Л', 'л'],
            'M' => ['М', 'м'],
            'N' => ['Н', 'н'],
            'O' => ['О', 'о'],
            'P' => ['П', 'п'],
            'R' => ['Р', 'р'],
            'S' => ['С', 'с'],
            'T' => ['Т', 'т'],
            'U' => ['У', 'у'],
            'F' => ['Ф', 'ф'],
            'KH' => ['Х', 'х'],
            'CZ' => ['Ц', 'ц'],
            'CH' => ['Ч', 'ч'],
            'SH' => ['Ш', 'ш'],
            'SHH' => ['Щ', 'щ'],
            '``' => ['Ъ', 'ъ'],
            'Y' => ['Ы', 'ы'],
            '`' => ['Ь', 'ь'],
            'E`' => ['Э', 'э'],
            'YU' => ['Ю', 'ю'],
            'YA' => ['Я', 'я'],
            ' ' => [' ', ' '],
            '–' => ['–', ''],
            '_' => ['_','']

        ];



        $str = preg_split("//u", $str, -1, PREG_SPLIT_NO_EMPTY);
        $str1 = '';

        for ($i = 0; $i <= (count($str) - 1); $i++) {  //мне так легче
            foreach ($arr as $key => $value) {
                if ($str[$i] == $value[0]) {
                    $str1 .= $key;
                } else if ($str[$i] == $value[1]) {
                    $str1 .= mb_strtolower($key);
                }
            }

        }
        echo $str1 . "<br>";
    }

    public function podcherk($str, $z = 0){

        $s = explode(" ", $str);
        $s1 = '';
        $i = -1;
        do{$i++;

            $s1 .= $s[$i];
            $s1 .= "_";

        }while($i < (count($s)-2));
        $s1 .= $s[++$i];





        if ($z == 0) {
            return $s1 . "<br>";
        }else{
            //echo $s1 . "<br>";
            $this->trans($s1);

        }
    }

}