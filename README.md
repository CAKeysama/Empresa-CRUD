# Empresa-CRUD

Projeto PHP para testar um cadastro de funcionários usando MySQL/MariaDB no XAMPP.

## Como executar

1. Inicie **Apache** e **MySQL** no painel do XAMPP.
2. Acesse <http://localhost/Empresa-CRUD/>.
3. Use a navbar para abrir **Início**, **Funcionários** ou **Adicionar Funcionário**.

## Funcionalidades disponíveis

- **Início:** página inicial do projeto.
- **Funcionários:** tabela de funcionários com ações para editar e excluir; confirma cadastro, atualização e exclusão.
- **Adicionar Funcionário:** formulário para informar nome, e-mail, cargo, salário e data de admissão.
- **Cadastro:** grava os dados na tabela `funcionario` do banco `empresa` e redireciona para a página de funcionários.
- **Edição e exclusão:** permitem atualizar ou remover um funcionário diretamente pela tabela.

## Estrutura

```text
Empresa-CRUD/
├── index.php                 # página inicial
├── menu.php                  # navegação principal
├── conexao.php               # conexão MySQLi com o banco empresa
└── funcionario/
    ├── adicionar.php         # formulário de cadastro
    ├── inserir.php           # grava o cadastro no banco
    ├── listar.php            # listagem e confirmação de cadastro
    ├── editar.php             # página de edição
    ├── atualizar.php          # atualização de cadastro
    └── remover.php            # remoção de cadastro
```
