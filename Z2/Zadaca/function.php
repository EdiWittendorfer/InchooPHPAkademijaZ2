<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Zdadaca 2</title>
</head>
<body>
<?php
$br = $_POST['numbers'];
$space = explode(',', $br);
foreach($space as $x){
    if ($x % 2 == 0){
        $even[] = $x;

    }
}
sort($even);
$amid = array_sum($space) / count($space);
foreach($even as $bold){
    if ($bold > $amid) {
        break;
    }
}
$max = max($space);

sort($even);

$arrlength = count($even);
echo  'Svi parni brojevi od najmanjeg prema najvecem: ';
for($x = 0; $x < $arrlength; $x++) {
    echo $even[$x], ' ';
}
echo '<hr />';

echo 'Aritmeticka sredina upisanih brojeva: ';
echo $amid;
echo '<hr />';

echo 'Podebljano prvi veći parni broj od aritmetičke sredine: ';
echo '<b>', $bold, '</b>';
echo '<hr />';

echo 'Najveci primljeni broj: ';
echo  $max;
echo '<hr />';


//?>
</body>
</html>