<?php

namespace lessons\les2;

class les2
{
    function pochemuchka()
    {
////////////////////////////////////////////////////////////////////////////////
//Почемучка
        ?>
        <p>Объявить две целочисленные переменные $a и $b и задать им произвольные начальные<br>
    значения. Затем написать скрипт, который работает по следующему принципу:<br>
    a. Если $a и $b положительные, вывести их разность.<br>
    b. Если $а и $b отрицательные, вывести их произведение.<br>
    c. Если $а и $b разных знаков, вывести их сумму.</p>
<?php
        $a = rand(-9,9);
        $b = rand(-9,9);

        echo "a = " . $a . "; b = " . $b . "<br>";

        $sa = $a <=> 0; // gmp_sign(GMP|int/string $num) in PHP7:
        $sb = $b <=> 0;

        echo "sa = " . $sa . "; sb = " . $sb . "<br>";

        if ($sa == 0) $a = 1;
        if ($sb == 0) $b = 1;
        if ($sa == 1 & $sb == 1){
            $primer = $a - $b;
            echo "a и b положительные, разность = " . $primer . "<br>";
        } else if ($sa == -1 & $sb == -1) {
            $primer = $a * $b;
            echo "a и b отрицательные, произведение = " . $primer . "<br>";
        }else if ($sa != $sb) {
            $primer = $a + $b;
            echo "a и b разных знаков, суммa = " . $primer . "<br>";
        }
        ?>
        <hr>
        <p>Присвоить переменной $а значение в промежутке [0..15]. С помощью оператора <br>
            switch организовать вывод чисел от $a до 15.
        </p>

        <?php
        $a = rand(0, 15);
        echo "a = " . $a . "<br>";

        for ($i = $a; $i <= 15; $i++){
            $this->iSwitch($i);
        }
        ?>
        <?php
//        for ($i = $a; $i <= 15; $i++){    //Очень хочется,
//            switch ($i){                  //Что бы мне объяснили
//                case $i:                  //почему switch срабатывает
//                    echo $i . " - ";      //только 1 раз
//                //break;                  //когда итераций цикла много..
//            }
//        }
        ?>
        <hr>
        <p>Реализовать основные 4 арифметические операции в виде функций с двумя параметрами.<br>
            Обязательно использовать оператор return.</p>

        <?php
        $a = rand(-9.0,9.0);
        $b = rand(-9.0,9.0);

        echo "a = " . $a . "; b = " . $b . "<br>";

        echo "arifmetic = " . $this->arifmetic($a, $b) . "<br>";
        ?>

        <hr>
        <p>Реализовать функцию с тремя параметрами: function mathOperation($arg1, $arg2, $operation),<br>
            где $arg1, $arg2 – значения аргументов, $operation – строка с названием операции. В<br>
            зависимости от переданного значения операции выполнить одну из арифметических операций<br>
            (использовать функции из пункта 3) и вернуть полученное значение (использовать switch).</p>

        <?php
        $arg1 = rand(-9.0,9.0);
        $arg2 = rand(-9.0,9.0);
        $operation = ['Сложение', 'Вычитание','Умножение'];

        echo "arifmetic_v2 = " . $this->arifmetic_v2($arg1, $arg2, $operation[rand(0,2)]) . "<br>";
        ?>
        <hr>

        <hr>
        <p>
            *С помощью рекурсии организовать функцию возведения числа в степень. Формат: function<br>
            power($val, $pow), где $val – заданное число, $pow – степень
        </p>

        <?php
        $a = rand(1,4);
        $b = rand(1,4);

        echo "val = " . $a . "; pow = " . $b . "<br>";

        $this->power($a, $b);
        ?>
        <hr>
        <p>
            *Написать функцию, которая вычисляет текущее время и возвращает его в формате с<br>
            правильными склонениями, например: 22 часа 15 минут, 21 час 43 минуты.
        </p>
        <div id = "clock">
            <?= $this->dateTime(); ?>
        </div>

<?php
    }

    public function dateTime(){
        $h = date("H") + 1;
        $m = date("i") + 1;
        $s = date("s") + 1;
        $time = "";
        //var_dump($h);
        if ($h < 10) $h = 0 . $h;
        $time = $h;
        switch ($h){
            case (in_array($h, array('01', '21'))):
                $time .= " час ";
                break;
            case (in_array($h, array('02', '03', '04', '22', '23'))):
                $time .= " часа ";
                break;
            default:
                $time .= " часов ";
                break;

        }

        $time .= $m;
        switch ($m){
            case (in_array($m, array('01', '21', '31', '41', '51'))):
                $time .= " минута ";
                break;
            case (in_array($m, array('02', '03', '04','22', '23', '24','32', '33', '34','42', '43', '44','52', '53', '54',))):
                $time .= " минуты ";
                break;
            default:
                $time .= " минут ";
                break;

        }

        $time .= $s;
        switch ($s){
            case (in_array($s, array('01', '21', '31', '41', '51'))):
                $time .= " секунда ";
                break;
            case (in_array($s, array('02', '03', '04','22', '23', '24','32', '33', '34','42', '43', '44','52', '53', '54',))):
                $time .= " секунды ";
                break;
            default:
                $time .= " секунд ";
                break;

        }

    return $time;
    }


    public function power($val, $pow)
    {
        //echo "a = " . $val . "; b = " . $pow . "<br>";
        if ($pow == 1) {
            echo "val = " . $val . "<br>";
            return null;
        } else {
            $val *= $val;
            $pow--;
            $this->power($val, $pow);
        }
    }



    public function arifmetic($a,$b){
        $z = 1;
        $a += $b;
        $z = $a * ($b / 2);
        $b -= $z;
        $z = $a + abs($b);
        return $z;
    }

    public function arifmetic_v2($a,$b,$operation = ''){
        $z = 1;
        switch ($operation){
            case 'Сложение':
                $a += $b;
                return $a . " " . $operation;
            case 'Вычитание':
                $b -= $z;
                return $b . " " . $operation;
            case 'Умножение':
                $z = $a * ($b / 2);
                return $z . " " . $operation;
            default: return $operation;
        }


    }

    public function iSwitch($i){
        switch ($i){
            case $i:
                echo $i . " - ";
            //break;
        }
    }

}