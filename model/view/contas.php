php
<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <title>Lista de Contas</title>
</head>

<body>

    <h1>Lista de Contas Bancárias</h1>

    <table border="1" cellpadding="10">
        <tr>
            <th>Titular</th>
            <th>Saldo</th>
        </tr>

        <?php foreach ($contas as $conta): ?>

            <tr>
                <td>
                    <?php echo $conta->getTitular(); ?>
                </td>

                <td>
                    R$
                    <?php
                    echo number_format(
                        $conta->consultarSaldo(),
                        2,
                        ',',
                        '.'
                    );
                    ?>
                </td>
            </tr>

        <?php endforeach; ?>

    </table>

</body>

</html>
