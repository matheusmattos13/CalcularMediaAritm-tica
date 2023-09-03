<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculadora de média aritmética</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <!-- Variáveis -->
    <?php
    $v1 = $_POST['v1'] ?? 1;
    $v2 = $_POST['v2'] ?? 1;
    $peso1 = $_POST['peso1'] ?? 1;
    $peso2 = $_POST['peso2'] ?? 1;
    ?>

    <main>
        <h1>Médias aritméticas</h1>
        <form action="<?= $_SERVER['PHP_SELF'] ?>" method="post" id="Form">
            <label for="v1">1º Valor</label>
            <input type="number" name="v1" id="v1" value="<?= $v1 ?>">
            <label for="peso1">1º Peso</label>
            <input type="number" name="peso1" id="peso1" value="<?= $peso1 ?>">
            <label for="v2">2º Valor</label>
            <input type="number" name="v2" id="v2" value="<?= $v2 ?>">
            <label for="peso2">2º Peso</label>
            <input type="number" name="peso2" id="peso2" value="<?= $peso2 ?>">
            <input type="submit" id="end" value="Calcular Médias">
        </form>
    </main>
    <section>
        <!-- Cálculo -->
        <?php
        $media_simples = $v1 + $v2 + $peso1 + $peso2;
        $valor_ponderada = ($v1 + $peso1) + $v2 + $peso2;
        $peso_ponderada = $peso1 + $peso2;

        // Resultado
        $resul_simples = $media_simples / 4;
        $resul_ponderada = $valor_ponderada / $peso_ponderada;

        echo "<h1> Cálculo das Médias </h1>";
        echo "<p> Analisando os valores $v1 e $v2: </p>";
        echo "<p><li> A <b>Média Aritmética Simples</b> entre os valores é igual a $resul_simples. </p>";
        echo "<p><li> A <b> Média Aritmética Ponderada </b> com pesos $peso1 e $peso2 é igual a $resul_ponderada </p>";
        ?>
    </section>

    <script>
        // Evento do click
        document.getElementById('Form').addEventListener('submit', function(e) {
            e.preventDefault(); // Impedir que o formulário seja enviado 

            // Mover o usuario para o final da página
            window.scrollTo(0, document.body.scrollHeight);
        });
    </script>

</body>

</html>