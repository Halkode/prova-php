<?php include_once __DIR__ . '/../header.php'; ?>
    <div class="container mt-10">
        <div class="block">
            <h1 class="text-2xl font-bold mb-5 text-center">Edição de Usuários</h1>
            <div class="grid grid-cols-3">
                <form action="?action=update&id=<?php echo $user['idUser']; ?>" method="POST" class="col-start-2">
                    <label for="name">Nome:</label>
                    <input type="text" id="name" name="name" value="<?php echo $user['name']; ?>" class="w-full border-[#333] border rounded-md mt-2 py-2 px-4" required><br><br>

                    <label for="cpf">CPF:</label>
                    <input type="text" id="cpf" name="cpf" value="<?php echo $user['cpf']; ?>" class="w-full border-[#333] border rounded-md mt-2 py-2 px-4" required><br><br>

                    <label for="email">Email:</label>
                    <input type="email" id="email" name="email" value="<?php echo $user['email']; ?>" class="w-full border-[#333] border rounded-md mt-2 py-2 px-4" required><br><br>

                    <label for="phone">Telefone:</label>
                    <input type="text" id="phone" name="phone" value="<?php echo $user['phone']; ?>" class="w-full border-[#333] border rounded-md mt-2 py-2 px-4" required><br><br>

                    <label for="birth_date">Data de Nascimento:</label>
                    <input type="date" id="birth_date" name="birth_date" value="<?php echo $user['birth_date']; ?>" class="w-full border-[#333] border rounded-md mt-2 py-2 px-4" required><br><br>

                    <label for="password">Senha:</label>
                    <input type="password" id="password" name="password" placeholder="Deixe em branco para manter a senha atual" class="w-full border-[#333] border rounded-md mt-2 py-2 px-4"><br><br>

                    <button type="submit" class="bg-[#133eb4] text-white py-2 px-4 rounded float-right">Atualizar</button>
                </form>
            </div>
        </div>
    </div>
<?php include_once __DIR__ . '/../footer.php'; ?>
