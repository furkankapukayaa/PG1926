<html lang="en">
<head>
    <title>Mükemmel Sayı</title>
</head>
<body>

<form method="post">
    <label for="num">Sayı Giriniz: </label>
    <input id="num" type="text" name="number"/>
    <button type="submit">Check</button>
</form>
</body>

</html>
<?php
if ($_POST) {
    $num = $_POST['number'];
    $i = 1;
    $sum = 0;
    while ($i < $num) {
        if ($num % $i == 0) {
            $sum = $sum + $i;
        }
        $i++;
    }
    if ($num == $sum) {
        echo " <span style = 'color:green'> Girdiğiniz Sayı Mükemmel Sayıdır!</span> ";
    } else {
        echo " <span style = 'color:red'> Girdiğiniz Sayı Mükemmel Sayı Değildir!</span> ";
    }
}
?>