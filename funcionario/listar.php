
<?php

require_once __DIR__ . '/../conexao.php';

// Consultar funcionários
$resultado = mysqli_query($conexao, "SELECT * FROM funcionario");

if (!$resultado) {
    die("Erro ao consultar funcionários: " . mysqli_error($conexao));
}

$funcionarios = mysqli_fetch_all($resultado, MYSQLI_ASSOC);

?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Funcionários</title>
</head>

<body style="margin: 0; background-color: #080a0c; color: #f5f5f5; font-family: Arial, sans-serif;">

    <?php include '../menu.php'; ?>

    <main style="width: 100%; min-height: calc(100vh - 60px); background-color: #080a0c; color: #f5f5f5;">

        <h1 style="margin: 0 0 6px; padding-top: 2px; font-size: 42px; font-weight: 700; color: #f5f5f5;">
            Funcionários
        </h1>

        <a
            href="adicionar.php"
            style="display: inline-block; padding: 6px 9px; background-color: #6c757d; color: white; border-radius: 3px; font-size: 16px; text-decoration: none;"
        >
            Adicionar Funcionário
        </a>

        <!-- Tabela -->
        <div style="width: 100%; margin-top: 16px; overflow-x: auto;">

            <table style="width: 100%; min-width: 850px; border-collapse: collapse; border: 1px solid #aeb4bb; color: #f5f5f5; background-color: #080a0c;">

                <thead>
                    <tr>
                        <th style="padding: 14px; text-align: left; color: #f5f5f5; border-bottom: 1px solid #aeb4bb;">Nome</th>
                        <th style="padding: 14px; text-align: left; color: #f5f5f5; border-bottom: 1px solid #aeb4bb;">Email</th>
                        <th style="padding: 14px; text-align: left; color: #f5f5f5; border-bottom: 1px solid #aeb4bb;">Cargo</th>
                        <th style="padding: 14px; text-align: left; color: #f5f5f5; border-bottom: 1px solid #aeb4bb;">Salário</th>
                        <th style="padding: 14px; text-align: left; color: #f5f5f5; border-bottom: 1px solid #aeb4bb;">Data de Admissão</th>
                        <th style="padding: 14px; text-align: left; color: #f5f5f5; border-bottom: 1px solid #aeb4bb;">Ativo</th>
                        <th style="padding: 14px; text-align: left; color: #f5f5f5; border-bottom: 1px solid #aeb4bb;">Ações</th>
                    </tr>
                </thead>

                <tbody>

                    <?php if (count($funcionarios) > 0): ?>

                        <?php foreach ($funcionarios as $funcionario): ?>

                            <tr style="height: 60px;">

                                <td style="padding: 17px 14px; font-size: 16px; color: #f5f5f5;">
                                    <?php echo htmlspecialchars($funcionario['NOME'], ENT_QUOTES, 'UTF-8'); ?>
                                </td>

                                <td style="padding: 17px 14px; font-size: 16px; color: #f5f5f5;">
                                    <?php echo htmlspecialchars($funcionario['EMAIL'], ENT_QUOTES, 'UTF-8'); ?>
                                </td>

                                <td style="padding: 17px 14px; font-size: 16px; color: #f5f5f5;">
                                    <?php echo htmlspecialchars($funcionario['CARGO'], ENT_QUOTES, 'UTF-8'); ?>
                                </td>

                                <td style="padding: 17px 14px; font-size: 16px; color: #f5f5f5;">
                                    <?php echo number_format((float) $funcionario['SALARIO'], 2, ',', '.'); ?>
                                </td>

                                <td style="padding: 17px 14px; font-size: 16px; color: #f5f5f5;">
                                    <?php
                                    echo !empty($funcionario['DATA_ADIMISSAO'])
                                        ? date('d/m/Y', strtotime($funcionario['DATA_ADIMISSAO']))
                                        : '-';
                                    ?>
                                </td>

                                <td style="padding: 17px 14px; font-size: 16px; color: #f5f5f5;">
                                    <?php echo !empty($funcionario['ATIVO']) ? '✅' : '❌'; ?>
                                </td>

                                <td style="padding: 17px 14px; white-space: nowrap;">

                                    <!-- Editar -->
                                    <a
                                        href="editar.php?id=<?php echo (int) $funcionario['ID']; ?>"
                                        style="display: inline-block; padding: 7px 9px; background-color: #000; color: #ffc107; border: 1px solid #ffc107; font-size: 16px; text-decoration: none;"
                                    >
                                        Editar
                                    </a>

                                    <!-- Abrir Dialog Bootstrap 6 -->
                                    <button
                                        type="button"
                                        data-bs-toggle="dialog"
                                        data-bs-target="#excluirDialog"
                                        data-id="<?php echo (int) $funcionario['ID']; ?>"
                                        data-nome="<?php echo htmlspecialchars($funcionario['NOME'], ENT_QUOTES, 'UTF-8'); ?>"
                                        style="display: inline-block; margin-left: 2px; padding: 7px 9px; background-color: #000; color: #dc3545; border: 1px solid #dc3545; font-size: 16px; cursor: pointer;"
                                    >
                                        Excluir
                                    </button>

                                </td>

                            </tr>

                        <?php endforeach; ?>

                    <?php else: ?>

                        <tr>
                            <td colspan="7" style="padding: 17px 14px; color: #f5f5f5;">
                                Nenhum funcionário cadastrado.
                            </td>
                        </tr>

                    <?php endif; ?>

                </tbody>

            </table>

        </div>

    </main>


    <!-- Dialog oficial do Bootstrap 6 -->
    <dialog
        class="dialog"
        id="excluirDialog"
        aria-labelledby="excluirDialogTitle"
        data-bs-theme="dark"
        style="background-color: #15191e; color: #f5f5f5; border: 1px solid #454b54; border-radius: 8px; padding: 0; width: 460px; max-width: calc(100% - 32px);"
    >

        <!-- Cabeçalho -->
        <div
            class="dialog-header"
            style="display: flex; justify-content: space-between; align-items: center; padding: 18px 20px; border-bottom: 1px solid #454b54;"
        >

            <h2
                class="dialog-title"
                id="excluirDialogTitle"
                style="margin: 0; color: #f5f5f5; font-size: 21px;"
            >
                Confirmar exclusão
            </h2>

            <button
                type="button"
                data-bs-dismiss="dialog"
                aria-label="Fechar"
                style="background: none; border: none; color: #aaa; font-size: 27px; cursor: pointer;"
            >
                &times;
            </button>

        </div>

        <!-- Corpo -->
        <div
            class="dialog-body"
            style="padding: 22px 20px; font-size: 16px; line-height: 1.6;"
        >

            <p>
                Tem certeza que deseja excluir o funcionário
                <strong id="nomeFuncionario" style="color: white;"></strong>?
            </p>

            <p style="margin-bottom: 0;">
                Essa ação não poderá ser desfeita.
            </p>

        </div>

        <!-- Rodapé -->
        <div
            class="dialog-footer"
            style="display: flex; justify-content: flex-end; align-items: center; gap: 10px; padding: 15px 20px; border-top: 1px solid #454b54;"
        >

            <button
                type="button"
                data-bs-dismiss="dialog"
                style="padding: 9px 14px; border-radius: 5px; font-size: 15px; cursor: pointer; background-color: #495057; color: white; border: 1px solid #495057;"
            >
                Cancelar
            </button>

            <!-- Formulário de exclusão -->
            <form action="remover.php" method="POST" style="margin: 0;">

                <input
                    type="hidden"
                    name="id"
                    id="idFuncionario"
                >

                <button
                    type="submit"
                    style="padding: 9px 14px; border-radius: 5px; font-size: 15px; cursor: pointer; background-color: #dc3545; color: white; border: 1px solid #dc3545;"
                >
                    Confirmar exclusão
                </button>

            </form>

        </div>

    </dialog>


    <!-- Preencher os dados do funcionário selecionado -->
    <script>

        const excluirDialog = document.getElementById('excluirDialog');

        excluirDialog.addEventListener('show.bs.dialog', function(event) {

            const botao = event.relatedTarget;

            if (!botao) {
                return;
            }

            const id = botao.getAttribute('data-id');
            const nome = botao.getAttribute('data-nome');

            document.getElementById('idFuncionario').value = id;

            document.getElementById('nomeFuncionario').textContent = nome;

        });

    </script>

</body>
</html>
