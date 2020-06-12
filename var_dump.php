<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

    <?php

    use Alura\Leilao\Model\Leilao;
    use Alura\Leilao\Model\Usuario;
    require __DIR__ . '/vendor/autoload.php';
    $usuario = new Usuario("Carlos Ruesta");
    $leilao = new Leilao("Modelo XYZ");

        var_dump('<pre>', $usuario, $leilao, '<pre>');

    ?>

</body>
</html>
