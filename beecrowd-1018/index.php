<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php 
    $n = readline();
    echo("{$n}\n");
    
    echo("{{$n}/100} nota(s) de R$ 100,00\n");
    $n %= 100;
    echo("{{$n} /50} nota(s) de R$ 50,00\n");
    $n %= 50;
    echo("{{$n} /20} nota(s) de R$ 20,00\n");
    $n %= 20;
    echo("{{$n}/10} nota(s) de R$ 10,00\n");
    $n %= 10;
    echo("{{$n} /5} nota(s) de R$ 5,00\n");
    $n %= 5;
    echo("{{$n} /2} nota(s) de R$ 2,00\n");
    $n %= 2;
    echo("{{$n} nota(s) de R$ 1,00");
        
    ?>
</body>

</html>