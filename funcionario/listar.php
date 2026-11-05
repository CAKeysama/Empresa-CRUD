<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Funcionários</title>
</head>
<body>
    <?php include '../menu.php'; ?>
    <h1>Funcionários</h1>
    <input type="button" value="Adicionar Funcionário" onclick="window.location.href='adicionar.php'">
    <table border="1" style="border-collapse: collapse; margin-top: 16px; width: 100%;">
        <thead>
            <tr>
                <th style="padding: 10px 14px; text-align: left;">Nome</th>
                <th style="padding: 10px 14px; text-align: left;">Email</th>
                <th style="padding: 10px 14px; text-align: left;">Cargo</th>
                <th style="padding: 10px 14px; text-align: left;">Salário</th>
                <th style="padding: 10px 14px; text-align: left;">Data de Admissão</th>
                <th style="padding: 10px 14px; text-align: left;">Ações</th>
            </tr>
        </thead>
        <tbody>
            <?php
            // Conexão com o banco de dados
            $conexao = new PDO("mysql:host=localhost;dbname=empresa", "root", "");

            // Consulta para obter todos os funcionários
            $stmt = $conexao->prepare("SELECT * FROM funcionario");
            $stmt->execute();
            $funcionarios = $stmt->fetchAll(PDO::FETCH_ASSOC);
            ?>
            <?php foreach ($funcionarios as $funcionario): ?>
                <tr>
                    <td style="padding: 10px 14px;"><?php echo $funcionario['NOME']; ?></td>
                    <td style="padding: 10px 14px;"><?php echo $funcionario['EMAIL']; ?></td>
                    <td style="padding: 10px 14px;"><?php echo $funcionario['CARGO']; ?></td>
                    <td style="padding: 10px 14px;"><?php echo number_format($funcionario['SALARIO'], 2, ',', '.'); ?></td>
                    <td style="padding: 10px 14px;"><?php echo date('d/m/Y', strtotime($funcionario['DATA_ADIMISSAO'])); ?></td>
                    <td style="padding: 10px 14px; white-space: nowrap;">
                        <a href="editar.php?id=<?php echo (int) $funcionario['ID']; ?>" style="background: #000; border: 1px solid #ffc107; color: #ffc107; padding: 5px 8px; text-decoration: none;">Editar</a>
                        <form action="remover.php" method="post" style="display: inline;" onsubmit="return confirm('Tem certeza que deseja excluir este funcionário?');">
                            <input type="hidden" name="id" value="<?php echo (int) $funcionario['ID']; ?>">
                            <button type="submit" style="background: #000; border: 1px solid #dc3545; color: #dc3545; cursor: pointer; margin-left: 4px; padding: 5px 8px;">Excluir</button>
                        </form>
                    </td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</body>
</html>