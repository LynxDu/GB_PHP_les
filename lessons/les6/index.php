<form action="" method="post">
    <input type="number" name="number1" >
    <select class="operations" name="operation">
        <option value='plus'>+ </option>
        <option value='minus'>- </option>
        <option value="multiply">* </option>
        <option value="divide">/ </option>
    </select>
    <input type="number" name="number2" >

    <input type="submit" name="submit" value="=">
</form>

<?php
if(isset($_POST['submit'])) {

    $number1 = $_POST['number1'];
    $number2 = $_POST['number2'];
    $operation = $_POST['operation'];

    if (!$operation || (!$number1 && $number1 != '0') || (!$number2 && $number2 != '0')) {
        $error_result = 'Не все поля заполнены';
    } else {
        if (!is_numeric($number1) || !is_numeric($number2)) {
            $error_result = "Операнды должны быть числами";
        } else
            switch ($operation) {
                case 'plus':
                    $result = $number1 + $number2;
                    break;
                case 'minus':
                    $result = $number1 - $number2;
                    break;
                case 'multiply':
                    $result = $number1 * $number2;
                    break;
                case 'divide':
                    if ($number2 == '0')
                        $error_result = "На ноль делить нельзя!";
                    else
                        $result = $number1 / $number2;
                    break;
            }
    }
    if (isset($error_result)) {
        echo "Ошибка: $error_result";
    } else {
        echo "Ответ: $result";
    }
}

?>

<a href="https://localhost/gb_php_ls/lessons/les6/dir/"> Каталог </a>

