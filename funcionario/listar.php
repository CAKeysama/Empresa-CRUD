<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Funcionários</title>
</head>
<body>
    <?php include '../menu.php'; ?>
    <?php if (isset($_GET["inserido"]) && $_GET["inserido"] === "1"): ?>
        <p>Funcionou! Funcionário cadastrado com sucesso.</p>
    <?php endif; ?>
</body>
</html>