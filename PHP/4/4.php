<html lang="en">

<head>
    <title>Para Ayırma</title>
</head>

<body>

    <form action="ayirma2.php" method="post">
        <label for="para">Ayrılacak Miktar</label>
        <input type="text" name="para" id="para">
        <input name="gonder" type="submit" value="Parayı Ayrıştır" />
    </form>

    <?php
    $para = $_POST['para'] * 100;
    $tpara = $para;

    $a100 = 0;
    $a50 = 0;
    $a25 = 0;
    $a10 = 0;
    $a5 = 0;
    $a1 = 0;


    //1 Tl adedi
    if ($para >= 100) {
        $a100 = $para / 100;
        $tpara = $para % 100;
        $para = intval($tpara);
    }

    //50 Kuruş adedi
    if ($para >= 50) {
        $a50 = $para / 50;
        $tpara = $para % 50;
        $para = intval($tpara);
    }

    //25 Kuruş Adedi
    if ($para >= 25) {
        $a25 = $para / 25;
        $tpara = $para % 25;
        $para = intval($tpara);
    }

    //10 Kuruş Adedi
    if ($para >= 10) {
        $a10 = $para / 10;
        $tpara = $para % 10;
        $para = intval($tpara);
    }

    //5 Kuruş Adedi
    if ($para >= 5) {
        $a5 = $para / 5;
        $tpara = $para % 5;
        $para = intval($tpara);
    }

    //1 Kuruş Adedi
    if ($para >= 1) {
        $a1 = $para / 1;
        $tpara = $para % 1;
        $para = intval($tpara);
    }

    echo intval($a100) . " adet 1 TL <br>";     //1
    echo intval($a50) . " adet 50 Kuruş <br>";  //0,50
    echo intval($a25) . " adet 25 Kuruş <br>";  //0,25
    echo intval($a10) . " adet 10 Kuruş <br>";  //0,10
    echo intval($a5) . " adet 5 Kuruş <br>";    //0,05 
    echo intval($a1) . " adet 1 Kuruş <br>";    //0,01

    ?>


</body>

</html>