
<?php

$number1 = isset($_GET["number1"]) ? $_GET["number1"] : null;
$number2 = isset($_GET["number2"]) ? $_GET["number2"] : null;


$bothInputsHaveData = $number1 && $number2;

if($bothInputsHaveData){

    if(isset($_GET["sum"])){
        $result = $number1+$number2;
    }
    elseif(isset($_GET["minus"])){
        $result = $number1-$number2;
    }
    elseif(isset($_GET["mult"])){
        $result = $number1*$number2;
    }
    elseif(isset($_GET["div"])){
        $result = $number1/$number2;
    }
}
else{
    $result = "fill the inputs ! ";
}


?>

<html>
<head></head>
<body>
<form method="get">

    <input type="text" name="number1"  placeholder="enter number 1" value=<?php echo isset($number1)?$number1:"" ?> > <br/>
    <input type="text" name="number2"  placeholder="enter number 2" value=<?php echo isset($number2)?$number2:"" ?> > <br/>

    <input type="submit" name="sum" value="+" />
    <input type="submit" name="minus" value="-" />
    <input type="submit" name="mult" value="*" />
    <input type="submit" name="div" value="/" /> <br/>

    Result : <label> <?php echo isset($result)? $result:"" ?></label>

</form>
</body>
</html>
