<?php
?>


<!DOCTYPE html>
<html>
<head>
    <meta charset='UTF-8'/>
    <title>Привет редирект</title>
    <script src ></script>
</head>
<body>

<h1>Последовательности</h1>
<h4>выводим первые 28 чисел:&nbsp</h4><?php echo number(28);?>
<h4>выводим первые 120 чисел:&nbsp</h4><?php echo number(120);?>
<h4>выводим первые 500 чисел:&nbsp</h4><?php echo number(500);?>
</body>
</html>


<?php
function number ($j)
{$n=0;$c=0;
    if ($j >= 0) {
        for ($i = 1; $i >= 0; $i++) {
            //$k=(string)($i);
            $k=strlen((string)($i));
            if (($i%$k)==0)
            {
                $c=$c+1;
                //var_dump($k);
                $n.=' '.$i;
            }
            //echo $n;
            if ($c == $j) {
                break;
            }
        }
    }
    return  $n;
}

?>

<br><br>
<h1>Укорачиваем ссылки</h1>
<form name="newUrl" action="index4.php">
    <label>
        Введите обрабатываемую ссылку
    </label>
    <input type="text" name="refIn"/>

    <input type="submit" class="autoButton" value="поменять автоматически" /><br><br>
    <label>
        Введите вашу короткую ссылку &nbsp &nbsp
    </label>
    <input type="text" name="refMy"/>
    <input type="submit" class="myButton" value="поменять на мою ссылку" />
</form>

<br>


<?php
//var_dump($_GET);

$longRef=$_GET['refIn'];// в переменную получаем введенный длинный URL

if ($_GET['refMy']){
  $shortRef=$_GET['refMy'];//if (если передано значение собственной короткой ссылки - то присваиваем
    // его итоговой короткой ссылке
}
else{
    $partsRef=explode('/',$longRef);//разбиваем по слэшу в массив
//var_dump($partsRef);
    $shortRef=$partsRef[count($partsRef)-1];// берем из массива последнюю часть исходного адреса
// и используем в качестве новой - короткой ссылки
//var_dump($shortRef);
//var_dump($longRef);
}

?>


Ваша короткая ссылка &nbsp
<a href="<?php echo $longRef ?>"><?php echo $shortRef ?></a>
<br><br>
