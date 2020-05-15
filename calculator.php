<?php

@$number1 = $_GET["number1"];
@$number2 = $_GET["number2"];

$bothInputsHaveData = $number1 && $number2;

if($bothInputsHaveData){

    @$operation = $_GET["op"];

    switch($operation) {
        case "+":
            $result = $number1 + $number2;
            break;
        case "-":
            $result = $number1 - $number2;
            break;
        case "*":
            $result = $number1 * $number2;
            break;
        case "/":
            $result = $number1 / $number2;
            break;
    }
}
else {
    $result = "fill the inputs";
}
?>


<html>
<head></head>
<body>
<form method="get">

    <input type="text" name="number1"  placeholder="enter number 1" value=<?= @$number1 ?> > <br/>
    <input type="text" name="number2"  placeholder="enter number 2" value=<?= @$number2 ?> > <br/>

    <input type="submit" name="op" value="+" />
    <input type="submit" name="op" value="-" />
    <input type="submit" name="op" value="*" />
    <input type="submit" name="op" value="/" /> <br/>

    Result : <label> <?= @$result ?></label>

</form>
</body>
</html>
