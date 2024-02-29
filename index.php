<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="animation.css">
    <title>Tabuada</title>
</head>

<body>
    <section class="container">
        <div>
            <form id="form" method="post" action="">
                Insira um valor:<br />
                <input id="texto" placeholder="0" type="text" name="valor">
                <input id="enviar" type="submit" value="Enviar">
                <?php
                echo "<br>";
            if (!empty($_REQUEST["valor"])) {
                $n = $_REQUEST["valor"];
                echo "<br>";
                echo "O resultado da multiplicação é:";
                echo "<br>";
                echo "<br>";
                for ($i = 1; $i <= 10; $i++) {
                    $r = $n * $i;
                    echo "$n x $i = $r <br>";
                }
            }
            ?>
            </form>
        </div>
    </section>
</body>

</html>