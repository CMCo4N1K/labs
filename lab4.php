
<html>
<head>
    <title>Калькулятор</title>
</head>
<body>
<form action="" method="post" />
 <input type="text" name="x1" />
 <select name="operation">
        <option value="+">+</option>
        <option value="-">-</option>
        <option value="*">*</option>
        <option value="/">/</option>
    </select>
 <input type="text" name="x2" />
<input type="submit" name="submit" value="Решить" />
</form>
 
<?php
if (!empty($_POST['x1']) && !empty($_POST['x2'])) {

    $x1 = $_POST['x1'];             #первое слагаемое
    $x2 = $_POST['x2'];             #второе слагаемое
 
    switch ($_POST['operation']) {
        case '+':
            $result = $x1 + $x2;
            break;
        case '-':
            $result = $x1 - $x2;
            break;
        case '*':
            $result = $x1 * $x2;
            break; 
        case '/':
            $result = $x1 / $x2;
            break;  
    }
echo 'Результат: '. $result;
}
?>
</body>
</html>