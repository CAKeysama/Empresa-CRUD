    <!DOCTYPE html>
    <html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Adicionar Funcionário</title>
    </head>
    <body>
        <?php include '../menu.php'; ?>
        <h1 style="margin-bottom: 16px;">Adicionar Funcionário</h1>
        <form action="inserir.php" method="post" style="width: 100%;">
            <label for="nome" style="display: inline-block; margin-bottom: 6px;">Nome:</label><br>
            <input type="text" id="nome" name="nome" required style="box-sizing: border-box; margin-bottom: 14px; padding: 10px 14px; width: 100%;"><br>

            <label for="email" style="display: inline-block; margin-bottom: 6px;">Email:</label><br>
            <input type="email" id="email" name="email" required style="box-sizing: border-box; margin-bottom: 14px; padding: 10px 14px; width: 100%;"><br>

            <label for="cargo" style="display: inline-block; margin-bottom: 6px;">Cargo:</label><br>
            <input type="text" id="cargo" name="cargo" required style="box-sizing: border-box; margin-bottom: 14px; padding: 10px 14px; width: 100%;"><br>

            <label for="salario" style="display: inline-block; margin-bottom: 6px;">Salário:</label><br>
            <input type="number" id="salario" name="salario" step="0.01" required style="box-sizing: border-box; margin-bottom: 14px; padding: 10px 14px; width: 100%;"><br>

            <label for="data_adimissao" style="display: inline-block; margin-bottom: 6px;">Data de Admissão:</label><br>
            <input type="date" id="data_adimissao" name="data_adimissao" required style="box-sizing: border-box; margin-bottom: 14px; padding: 10px 14px; width: 100%;"><br>

            <input type="submit" value="Adicionar Funcionário" style="margin-right: 8px; padding: 10px 14px;">
            <input type="reset" value="Limpar Campos" style="padding: 10px 14px;">
        </form>
    </body>
    </html>