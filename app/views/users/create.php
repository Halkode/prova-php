<?php
session_start();
?>
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
    <title>Criar Usuário</title>
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col-6 align-items-center">
                <form action="/user/create" method="POST">
                    <label for="name">Nome:</label>
                    <input type="text" id="name" name="name" required><br><br>

                    <label for="cpf">CPF:</label>
                    <input type="text" id="cpf" name="cpf" required><br><br>

                    <label for="email">Email:</label>
                    <input type="email" id="email" name="email" required><br><br>

                    <label for="phone">Telefone:</label>
                    <input type="text" id="phone" name="phone" required><br><br>

                    <label for="birth_date">Data de Nascimento:</label>
                    <input type="date" id="birth_date" name="birth_date" required><br><br>

                    <label for="password">Senha:</label>
                    <input type="password" id="password" name="password" required><br><br>

                    <button type="submit">Criar</button>
                </form>
            </div>
        </div>
    </div>


</body>

</html>