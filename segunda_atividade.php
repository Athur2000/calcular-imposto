<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>PHP</title>
    </head>
        <body>
            <?php
                function impostoRenda($salario){
                    if ($salario <= 1903.98) {
                        $alicota = 0;
                    } elseif ($salario >= 1903.99 and $salario <= 2826.65) {
                        $alicota = 7.5;
                    } elseif ($salario >= 2826.66 and $salario <= 3751.05) {
                        $alicota = 15;
                    } elseif ($salario >= 3751.06 and $salario <= 4664.68) {
                        $alicota = 22.5;
                    } elseif ($salario >= 4664.68) {
                        $alicota = 27.5;
                    };
                    $imposto = $salario / 100 * $alicota;
                    return $imposto;
                };
                echo impostoRenda(3500);
            ?>
        </body>
</html>