<?php include_once __DIR__ . '/../header.php'; ?>

    <div class="container">
        <div class="block">
            <div class="grid grid-cols-12 mt-10">
                <div class="col-span-12">
                    <h2 class="text-2xl font-bold mb-5 text-center">Informações do Usuário</h2>

                    <a href="?action=edit&id=<?php echo $user['idUser']; ?>" class="bg-[#133eb4] text-white py-2 px-4 rounded float-right">Editar</a>
                    <a href="?action=index" class="bg-[#133eb4] text-white py-2 px-4 rounded float-right mr-2">Voltar</a>
                </div>
                
                <div class="col-span-12 mt-10">
                    <!-- card -->
                    <div class="card shadow-xl p-4 rounded-lg">
                        <div class="card-body">
                            <div class="grid grid-cols-3">
                                <div class="col-span-1">
                                    <p class="font-bold">Nome:</p>
                                </div>
                                <div class="col-span-2">
                                    <p><?php echo $user['name']; ?></p>
                                </div>
                            </div>

                            <div class="grid grid-cols-3">
                                <div class="col-span-1">
                                    <p class="font-bold">CPF:</p>
                                </div>
                                <div class="col-span-2">
                                    <p><?php echo $user['cpf']; ?></p>
                                </div>
                            </div>

                            <div class="grid grid-cols-3">
                                <div class="col-span-1">
                                    <p class="font-bold">Email:</p>
                                </div>
                                <div class="col-span-2">
                                    <p><?php echo $user['email']; ?></p>
                                </div>
                            </div>

                            <div class="grid grid-cols-3">
                                <div class="col-span-1">
                                    <p class="font-bold">Telefone:</p>
                                </div>
                                <div class="col-span-2">
                                    <p><?php echo $user['phone']; ?></p>
                                </div>
                            </div>

                            <div class="grid grid-cols-3">
                                <div class="col-span-1">
                                    <p class="font-bold">Data de Nascimento:</p>
                                </div>
                                <div class="col-span-2">
                                    <p><?php echo  date('d/m/Y', strtotime($user['birth_date'])) ?: $user['birth_date']; ?></p>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

<?php include_once __DIR__ . '/../footer.php'; ?>