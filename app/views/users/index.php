<?php include_once __DIR__ . '/../header.php'; ?>

    <div class="container">
        <div class="block">
            <div class="grid grid-cols-12 mt-10">
                <div class="col-span-12">
                    
                    <h1 class="mb-5 text-center text-3xl font-bold">Listagem</h1>
                    <a href="?action=create" class="bg-blue-700 text-white py-2 px-4 rounded float-right">Criar um novo usuário</a>

                    <?php if (isset($_SESSION['error'])): ?>
                        <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded relative mt-20" role="alert">
                            <span class="block sm:inline"><?= $_SESSION['error']; ?></span>
                        </div>
                        <?php unset($_SESSION['error']); ?>
                    <?php endif; ?>
                    
                </div>
            </div>
        </div>
        <div class="block mt-10">
            <div class="relative overflow-x-auto">
            <?php if (!empty($users)): ?>
                <table class="w-full text-sm text-left rtl:text-right text-gray-500">
                    <thead class="text-xs text-gray-700 uppercase bg-gray-50 ">
                        <tr>
                            <th scope="col" class="px-6 py-3">ID</th>
                            <th scope="col" class="px-6 py-3">Nome</th>
                            <th scope="col" class="px-6 py-3">CPF</th>
                            <th scope="col" class="px-6 py-3">Email</th>
                            <th scope="col" class="px-6 py-3">Telefone</th>
                            <th scope="col" class="px-6 py-3">Ações</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($users as $user): ?>
                            <tr class="bg-white border-b">
                                <td class="px-6 py-4 underline text-blue-600">
                                    <a href="?action=show&id=<?php echo $user['idUser']; ?>">
                                    <?php echo $user['idUser']; ?>
                                    </a>
                                </td>
                                <td class="px-6 py-4"><?php echo htmlspecialchars($user['name']); ?></td>
                                <td class="px-6 py-4"><?php echo $user['cpf']; ?></td>
                                <td class="px-6 py-4"><?php echo htmlspecialchars($user['email']); ?></td>
                                <td class="px-6 py-4"><?php echo $user['phone']; ?></td>
                                <td class="flex gap-2 py-3 items-center">
                                    <a href="?action=edit&id=<?php echo $user['idUser']; ?>" class="bg-blue-700 text-white py-2 px-4 rounded">Editar</a> |
                                    <a href="?action=delete&id=<?php echo $user['idUser']; ?>" class="bg-red-700 text-white py-2 px-4 rounded deleteUserButton">Excluir</a>
                                </td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
                <?php else: ?>
                    <h2 class="text-center text-red-500 font-bold">
                        Não foi encontrado nenhum usuario.
                    </h2>
                <?php endif; ?>
                </div>
            </div>
        </div>
    </div>

<?php include_once __DIR__ . '/../footer.php'; ?>