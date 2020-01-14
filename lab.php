<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<p> Количество посещений страницы -
<?php
    $filename = "result.txt";
    $file = fopen($filename, "r");
    if ($file) {
        $counter = fgets($file, 100);
        fclose($file);
    } else {
        $counter = 0;
    }
    $counter++;
    $fo = fopen($filename, "w");
    if($fo) {
        fputs($fo, $counter);
        fclose($fo);
    }
    echo $counter;
?>
</p>
<p>Результаты так же в файле result.txt</p>
</body>
</html>