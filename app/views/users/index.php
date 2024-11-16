<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../../assets/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>
    <title>Listagem de Usuários</title>
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h1 class="mb-5">Listagem</h1>
                <a href="./app/views/users/create.php" class="btn btn-primary mb-5">Criar um novo usuário</a>
            </div>
        </div>
        <div class="row">
            <div class="col-12 mb-5">
                <?php if (!empty($users)): ?>
                    <table>
                        <tr>
                            <th>ID</th>
                            <th>Nome</th>
                            <th>CPF</th>
                            <th>Email</th>
                            <th>Telefone</th>
                            <th>Ações</th>
                        </tr>

                        <?php foreach ($users as $user): ?>
                            <tr>
                                <td><?php echo $user['id']; ?></td> <!-- Corrigido para exibir o ID -->
                                <td><?php echo htmlspecialchars($user['name']); ?></td> <!-- Corrigido para exibir o nome -->
                                <td><?php echo $user['cpf']; ?></td> <!-- Corrigido para exibir o CPF -->
                                <td><?php echo htmlspecialchars($user['email']); ?></td> <!-- Corrigido para exibir o email -->
                                <td><?php echo $user['phone']; ?></td> <!-- Corrigido para exibir o telefone -->
                                <td>
                                    <a href="/user/edit/<?php echo $user['id']; ?>">Editar</a> |
                                    <a href="/user/delete/<?php echo $user['id']; ?>">Excluir</a>
                                </td>
                            </tr>
                        <?php endforeach; ?>
                    </table>
                <?php else: ?>
                    <h2>
                        Não foi encontrado nenhum usuario
                    </h2>

                <?php endif; ?>
            </div>
        </div>
    </div>
</body>

</html>